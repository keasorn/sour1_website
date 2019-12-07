<?php

namespace App\Http\Controllers;

use App\Company;
use App\CompanyType;
use App\Gender;
use App\WorkPlace;
use Illuminate\Http\Request;
use App\Http\Controllers\MyUtility;
use DB;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {

        $this->middleware('checkLogin');

    }

    /**
     * Display a sing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companyTypes = CompanyType::all();
//        $pows = WorkPlace::all();
        $myUt = new MyUtility();
//        $id = session("user")->company;
//        $id = $myUt::my_decrypt($id, true);

        $rst = Company::where("id","=",session("user")->company)->first();
        return $rst;

        $data = array(
            "companyTypes" => $companyTypes,
            "pows" => $pows,
            "company" => $rst,
        );
        return view('back_end.page_company.edit');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('back_end.page_company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $this->fillColumn($request);

        Company::create($data);

        return redirect()->intended('/so-manage');
    }

    function fillColumn(Request $request)
    {

        $myUt = new MyUtility();
        $data = array(
            "cp_first_name"=> $request['cp_first_name'],
            "cp_last_name"=> $request['cp_last_name'],
            "cp_position"=> $request['cp_position'],
            "cp_phone"=> $request['cp_phone'],
            "cp_email"=> $request['cp_email'],
            "cp_nation"=> $request['cp_nation'],
            "cp_address"=> $request['cp_address'],
            "cp_gender"=> $request['cp_gender'],
            "com_name"=> $request['com_name'],
            "com_type"=> $request['com_type'],
            "com_address"=> $request['com_address'],
            "com_tel"=> $request['com_tel'],
            "com_phone"=> $request['com_phone'],
            "com_email"=> $request['com_email'],
            "com_web"=> $request['com_web'],
            "com_description" => $request['com_description']
        );
        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    function uploadImg(Request $request, $file_name, $path)
    {
        $name = "";
        if ($request->hasFile($file_name)) {
            $image = $request->file($file_name);
            $name = uniqid() . File::extension($image->getClientOriginalName()) . "." . $image->getClientOriginalExtension();
            $destinationPath = public_path($path);
            $imagePath = $destinationPath . "/" . $name;
            $image->move($destinationPath, $name);;
        }
        return $name;

    }

    public function show($id)
    {
        //
        $myUt = new MyUtility();
        $id = $myUt::my_decrypt($id, true);

        $rst = Company::join("users", "users.id", "=", "companys.user")
            ->join("companies", "companies.id", "=", "users.company")
            ->join("company_levels", "company_levels.id", "=", "companys.company_level")
            ->join("company_types", "company_types.id", "=", "companys.company_type")
            ->join("work_places", "work_places.id", "=", "companys.pow")
            ->select("companys.*", "company_levels.title_en as company_level_title", "company_types.title_en as company_type_title", "work_places.title_en as work_places_title", "users.last_name", "companies.com_name as company_name", "companies.com_description as company_description", "companies.logo as logo")->where("companys.id", "=", $id)->first();
//        return $rst;

        $data = array(
            "rst" => $rst,
        );
        return view('back_end.page_company.preview')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companyTypes = CompanyType::all();
        $pows = WorkPlace::all();
        $genders = Gender::all();
        $myUt = new MyUtility();
//        $id = session("user")->company;
//        $id = $myUt::my_decrypt($id, true);

        $rst = Company::where("id","=",session("user")->company)->first();


        $data = array(
            "companyTypes" => $companyTypes,
            "pows" => $pows,
            "company" => $rst,
            "genders" => $genders,
        );
        return view('back_end.page_company.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);
        $data = $this->fillColumn($request);
        Company::where('id', $id)
            ->update($data);
        return redirect()->intended('/so-manage/company');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Company::where('id', $id)->delete();
        return redirect()->intended('/so-manage/company');
    }

    /**
     * Search User from database base on some specific constraints
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $constraints = [
            'name' => $request['name']
        ];

        $User = $this->doSearchingQuery($constraints);
        return view('users-mgmt/index', ['users' => $User, 'searchingVals' => $constraints]);
    }

    private function doSearchingQuery($constraints)
    {
        $query = User::query();
        $fields = array_keys($constraints);
        $index = 0;
        foreach ($constraints as $constraint) {
            if ($constraint != null) {
                $query = $query->where($fields[$index], 'like', '%' . $constraint . '%');
            }

            $index++;
        }
        return $query->paginate(5);
    }

    private function validateInput($request)
    {
        $this->validate($request, [
            'email' => 'required|max:60|unique:users',
        ]);
    }
}