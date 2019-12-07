<?php

namespace App\Http\Controllers\Auth;

use App\Company;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Controllers\MyUtility;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $data)
    {
        $companys = new Company();
        $company =  $companys::create([
            "cp_first_name"=> "",
            "cp_last_name"=> "",
            "cp_position"=> "",
            "cp_phone"=> "",
            "cp_email"=> "",
            "cp_nation"=> "",
            "cp_address"=> "",
            "cp_gender"=> 1,
            "com_name"=> $data['com_name'],
            "com_type"=> 1,
            "com_address"=> "",
            "com_tel"=> "",
            "com_phone"=> "",
            "com_email"=> "",
            "com_web"=> "",
            "com_description" => ""
        ]);
        $user = User::create([
            'user_name' => $data['name'],
            'email' => $data['email'],
            'gender' => 1,
            'company' => $company->id,
            'status' => 1,
            'user_type' => 1,
            'password' => Hash::make($data['password']),
        ]);
//        session()->put("user",$user);
//        $myUt = new MyUtility();
//        $id = $myUt::my_decrypt($company->id, true);
        return redirect("/so-manage/my-account/".MyUtility::my_encrypt($company->id,true)."/edit");
    }
}
