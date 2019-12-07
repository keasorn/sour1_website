<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Faker\Provider\DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use File;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MyUtility
 *
 * @author Sreyhuy Leng
 */
class MyUtility extends Controller
{

    //put your code here

    const METHOD = 'aes-256-ctr';


    /**
     * Encrypts (but does not authenticate) a message
     *
     * @param string $message - plaintext message
     * @param string $key - encryption key (raw binary expected)
     * @param boolean $encode - set to TRUE to return a base64-encoded
     * @return string (raw binary)
     */

    public static function dateTimeCount($db_date)
    {

        $mytime = Carbon::now();
        $startTimeStamp = strtotime($db_date);
        $endTimeStamp = strtotime($mytime->toDateTimeString());

        $timeDiff = abs($endTimeStamp - $startTimeStamp);

        if ($timeDiff > 0 && $timeDiff < 60) {
            $numberDays = $timeDiff . " Second";
            $numberDays = $numberDays > 1 ? $numberDays . "s" : $numberDays;
        } elseif ($timeDiff > 60 && $timeDiff < (60 * 60)) {
            $numberDays = intval($timeDiff / 60) . " Minute";

            $numberDays = $numberDays > 1 ? $numberDays . "s" : $numberDays;

        } elseif ($timeDiff > (60 * 60) && $timeDiff < (60 * 60 * 24)) {
            $numberDays = intval($timeDiff / (60 * 60)) . " Hour";

            $numberDays = $numberDays > 1 ? $numberDays . "s" : $numberDays;

        } elseif ($timeDiff < 60 * 60 * 24 * 7 && $timeDiff > 60 * 60 * 24) {
            $numberDays = intval($timeDiff / (60 * 60 * 24)) . " Day";
            $numberDays = $numberDays > 1 ? $numberDays . "s" : $numberDays;

        } elseif ($timeDiff < 60 * 60 * 24 * 7 * 4 && $timeDiff > 60 * 60 * 24 * 7) {
            $numberDays = intval($timeDiff / (60 * 60 * 24 * 7)) . " Week";
            $numberDays = $numberDays > 1 ? $numberDays . "s" : $numberDays;

        } elseif ($timeDiff < 60 * 60 * 24 * 7 * 4 * 12 && $timeDiff > 60 * 60 * 24 * 7 * 4) {
            $numberDays = intval($timeDiff / (60 * 60 * 24 * 7 * 4)) . " Month";
            $numberDays = $numberDays > 1 ? $numberDays . "s" : $numberDays;

        } elseif ($timeDiff > 60 * 60 * 24 * 7 * 4 * 12 && $timeDiff < 60 * 60 * 24 * 7 * 4 * 12 + 1) {
            $numberDays = intval($timeDiff / (60 * 60 * 24 * 7 * 4 * 12)) . " Year";
            $numberDays = $numberDays > 1 ? $numberDays . "s" : $numberDays;

        } else {
            $numberDays = $timeDiff;
        }
//
        return $numberDays;

    }

    public static function dayCount($db_date)
    {

        $mytime = Carbon::now();
        $startTimeStamp = strtotime($db_date);
        $endTimeStamp = strtotime($mytime->toDateTimeString());

        $timeDiff = abs($endTimeStamp - $startTimeStamp);

        return intval($timeDiff / (60 * 60 * 24));

    }

    public static function my_encrypt($message, $encode = false)
    {
        $key = "abcdef";
        $nonceSize = openssl_cipher_iv_length(self::METHOD);
        $nonce = openssl_random_pseudo_bytes($nonceSize);

        $ciphertext = openssl_encrypt(
            $message,
            self::METHOD,
            $key,
            OPENSSL_RAW_DATA,
            $nonce
        );

        // Now let's pack the IV and the ciphertext together
        // Naively, we can just concatenate
        if ($encode) {
            return str_replace("/", "[@]", base64_encode($nonce . $ciphertext));
        }
        return str_replace("/", "[@]", $nonce . $ciphertext) . "AAAAAAAAAA";
    }

    /**
     * Decrypts (but does not verify) a message
     *
     * @param string $message - ciphertext message
     * @param string $key - encryption key (raw binary expected)
     * @param boolean $encoded - are we expecting an encoded string?
     * @return string
     */
    public static function my_decrypt($message, $encoded = false)
    {
        $key = "abcdef";
        if ($encoded) {
            $message = base64_decode(str_replace("[@]", "/", $message), true);
            if ($message === false) {
                throw new Exception('Encryption failure');
            }
        }

        $nonceSize = openssl_cipher_iv_length(self::METHOD);
        $nonce = mb_substr($message, 0, $nonceSize, '8bit');
        $ciphertext = mb_substr($message, $nonceSize, null, '8bit');

        $plaintext = openssl_decrypt(
            $ciphertext,
            self::METHOD,
            $key,
            OPENSSL_RAW_DATA,
            $nonce
        );

        return $plaintext;
    }

    // dd-mm-yyyy --> y-m-d
    public static function toMySqlDate($strDate)
    {
        $mytime = Carbon::now();
        $mySqlDate = MyUtility::n2e($strDate);

        if ($mySqlDate == "") return $mytime->toDateTimeString();
        if (strstr($mySqlDate, '-')) {

            if ($strDate == "00-00-0000") {
                return "";
            } else {
                $date = explode("-", $strDate);

                $day = $date[0];
                $month = $date[1];
                $year = $date[2];

                if (!is_numeric($month)) {

                    $month3 = array(
                        'dec' => 12, 'nov' => 11, 'oct' => 10, 'sep' => 9, 'aug' => 8, 'jul' => 7,
                        'jun' => 6, 'may' => 5, 'apr' => 4, 'mar' => 3, 'feb' => 2, 'jan' => 1
                    );
                    $month = $month3[strtolower($month)];
                }
                return $year . "-" . $month . "-" . $day;
            }
        }

    }

    // dd-mm-yyyy --> y-m-d
    public static function toMySqlDateHtml($strDate)
    {
        $mytime = Carbon::now();
        $mySqlDate = MyUtility::n2e($strDate);

        if ($mySqlDate == "") return $mytime->toDateTimeString();
        if (strstr($mySqlDate, '-')) {

            if ($strDate == "00-00-0000") {
                return "";
            } else {
                $date = explode("-", $strDate);

                $month = $date[0];
                $day = $date[1];
                $year = $date[2];

                if (!is_numeric($month)) {

                    $month3 = array(
                        'dec' => 12, 'nov' => 11, 'oct' => 10, 'sep' => 9, 'aug' => 8, 'jul' => 7,
                        'jun' => 6, 'may' => 5, 'apr' => 4, 'mar' => 3, 'feb' => 2, 'jan' => 1
                    );
                    $month = $month3[strtolower($month)];
                }
                return $month . "-" . $day . "-" . $year;
            }
        }

    }

    // $mySqlDate = Y-m-d --> dd-mm-yyyy
    public static function toKhDate($mySqlDate)
    {


        $mySqlDate = MyUtility::n2e($mySqlDate);
        if ($mySqlDate == "") return "";

        //  echo $mySqlDate;

        $t = ($mySqlDate == "0000-00-00 00:00:00");
        $t |= ($mySqlDate == "00-00-0000 00:00:00");
        $t |= ($mySqlDate == "00-00-0000");
        $t |= ($mySqlDate == "0000-00-00");

        if ($t) {
            return "";
        } else {
            $date = explode(" ", $mySqlDate);
            $date = explode("-", $date[0]);
            return $date[2] . "-" . $date[1] . "-" . $date[0];
        }
    }

    public static function ifVoted($str)
    {
        if ($str == "1") {
            return "បាន";
        } else {
            return "មិនបាន";
        }
    }

    public static function e2z($str)
    {
        if ($str == "") {
            return 0;
        } elseif ($str == "0.00") {
            return 0;
        } else {
            return $str;
        }
    }

    public static function z2n($str)
    {
        if ($str == "") {
            return null;
        } elseif ($str == "0.00") {
            return null;
        } elseif ($str == "0") {
            return null;
        } else {
            return $str;
        }
    }

    public static function e2date($str)
    {
        if ($str == "") {
            return "01-01-2019";
        } else {
            return $str;
        }
    }

    public static function n2z($str)
    {
        if ($str == null) {
            return 0;
        } else {
            return $str;
        }
    }

    public static function n2e($str)
    {
        if ($str == null) {
            return "";
        } else {
            return $str;
        }
    }


    public static function n2v($str, $val)
    {
        if ($str == null) {
            return $val;
        } else {
            return $str;
        }
    }

    public static function formatThousand($val, $decimals = 0)
    {
        if (($val == 0) or ($val == "0")) {
            return "";
        } else {
//            echo "value=". $val;
//            exit();
            $val = number_format($val, $decimals);
            return ($val == "0" ? "" : $val);
        }
    }


    public static function getProjectStatusName($status)
    {
        switch ($status) {
            case 1:
                return "On-going";
            case 2:
                return "Completed";
            case 3:
                return "Suspended";
            case 4:
                return "Pipleline";
            default:
                return "";

        }
    }


    public static function getRadio($val1, $val2)
    {
        if ($val1 == $val2) {
            $result = "radio_checked.gif";
        } else {
            $result = "radio_unchecked.gif";
        }

        return $result;
    }

    public static function getRadioImage($val1, $val2)
    {
        if ($val1 == $val2) {
            $result = "<img src='/images/radio_checked.gif'>";
        } else {
            $result = "<img src='/images/radio_unchecked.gif'>";
        }

        return $result;
    }

    public static function getImplementingAgencyName($id)
    {
        if ($id == 1) return "Royal Government of Cambodia (RGC)";
        elseif ($id == 2) return "Development Partner";
        elseif ($id == 3) return "NGO/CSO";
        elseif ($id == 4) return "Private Sector";
        elseif ($id == 5) return "Other";
    }


    public static function getEdeu($id)
    {
        if ($id == 1) return "កម្រិតវប្បធម៌1";
        elseif ($id == 2) return "កម្រិតវប្បធម៌2";
        elseif ($id == 3) return "កម្រិតវប្បធម៌3";
        elseif ($id == 4) return "កម្រិតវប្បធម៌4";
        elseif ($id == 5) return "កម្រិតវប្បធម៌5";
    }

    public static function setSortIcon($column, $sortColumn, $sortDirection)
    {
        $result = "";
        if ($column == $sortColumn) {
            if ($sortDirection == "asc") {
                $result = "&nbsp;<img src='/images/sort-up.png' height='11'>";
            } else {
                $result = "&nbsp;<img src='/images/sort-down.png' height='11'>";
            }
        }
        return $result;
    }


    public static function removeRightComma($str)
    {
        $str = trim($str);

        $len = strlen($str);
        $rChar = substr($str, $len - 1);
        if ($rChar == ",") {
            $str = substr($str, 0, $len - 1);
        }
        return $str;
    }


    public static function getColumnNames($dataSet)
    {
        foreach ($dataSet->first() as $key => $value) {

        }
    }

    public static function getTermOA($termOACode)
    {
        if ($termOACode == "GR") {
            return "Grant";
        } else {
            return "Loan";
        }
    }

    public static function getLongTermOA($termOACode)
    {
        if ($termOACode == "GR") {
            return "Grant";
        } else if ($termOACode == "LN") {
            return "Concessional Loan";
        } else if ($termOACode == "NC") {
            return "Non-Concessional Loan";
        }
    }

    public static function getYesNo($value1, $value2)
    {
        if ($value1 == $value2) {
            return "Yes";
        } else {
            return "No";
        }
    }


    public static function formatKhDate($date)
    {
        $date = date_create($date);
        $date = date_format($date, "d-M-Y");
        return $date;
    }

    public static function getDictData($key, $dict)
    {
        if ($dict != null) {
            if (isset($dict[$key])) {
                return $dict[$key];
            } else {
                return null;
            }
        } else {
            return null;
        }
    }


    public static function getRecord_IDs($tmpDs)
    {
        $tmpDs = clone $tmpDs;
        $tmpDs = $tmpDs->groupBy("Record_ID");
        $record_ids = array();
        foreach ($tmpDs->get() as $row) {
            $record_ids[$row->Record_ID] = $row->Record_ID;
        }
        return $record_ids;
    }


    public static function selectLeftMenu($id1, $id2)
    {
        if ($id1 == $id2) {
            return "class='LeftMenuActive'";
        } else {
            return "";
        }
    }

    public static function selectActive($id1, $id2)
    {
        if ($id1 == $id2) {
            return "class=active";
        } else {
            return "";
        }
    }

    public static function selectTopMenu($id1, $id2)
    {

        if ($id1 == $id2) {
            return "class='ODASelectedMenu'";
        } else {
            return "class='ODANormalMenu'";
        }
    }

    public static function selectOption($id1, $id2)
    {

        if ($id1 == $id2) {
            return "selected";
        } else {
            return "'";
        }
    }


    public static function getAlterBackground($id)
    {
        if ($id % 2 == 0) {
            return "background-color: #F2F4FF;";
        } else {
            return "background-color: white;";

        }
    }


    public static function toExcel($toExcel, $file_name)
    {
        if ($toExcel == true) {
            header("Content-Type: application/xls");
            header("Content-Disposition: attachment; filename=" . $file_name);
            header("Pragma: no-cache");
            header("Expires: 0");
        }
    }

    function Dlookup($myfield, $mytable, $fCriteria, $vCriteria, $Cnt)
    {
        $result = 0;
        if ($Cnt != "") {
            $model = DB::connection($Cnt)->table($mytable);
        } else {
            $model = DB::table($mytable);
        }

        if ($fCriteria != "" || $vCriteria != "") {
            $model = $model->where($fCriteria, $vCriteria);
        }

        $model = $model->sum($myfield);

        if (count($model) > 0) {
            $result = $model;
        }
        return $result;
    }


    public static function n2all($str)
    {
        if ($str == null) {
            return "ទាំងអស់";
        } else {
            return $str;
        }
    }

    public static function getUserTypeName($status)
    {
        switch ($status) {
            case 1:
                return "Super Admin";
            case 2:
                return "Admin";
            case 3:
                return "Data Entry";
            case 4:
                return "Verification";
            case 5:
                return "User";
            default:
                return "";

        }
    }

    public static function getGender($status)
    {
        switch ($status) {
            case 0:
                return "ប្រុស";
            case 1:
                return "ស្រី";
            default:
                return "";

        }
    }

    public static function isDateNull($data)
    {
        switch ($data) {
            case "01-01-2019":
                return "";
            default:
                return $data;

        }
    }

    public static function isTmp($data)
    {
        switch ($data) {
            case "tmp":
                return "គ្មាន";
            default:
                return $data;

        }
    }

    public static function getLogo($name, $def)
    {
        if ($name) {
            return $name;
        } else {
            return $def;
        }
    }

    public static function createQueryInput($keys, $request)
    {
        $queryInput = [];
        for ($i = 0; $i < sizeof($keys); $i++) {
            $key = $keys[$i];
            $queryInput[$key] = $request[$key];
        }

        return $queryInput;
    }

    function uploadImg(Request $request, $file_name, $path)
    {
        $name = "";
        if ($request->hasFile($file_name)) {
            $image = $request->file($file_name);
            $name = uniqid() . File::extension($image->getClientOriginalName()) . "." . $image->getClientOriginalExtension();
            $destinationPath = public_path($path);
            $imagePath = $destinationPath . "/" . $name;
            $image->move($destinationPath, $name);
        }
        return $name;

    }
}
