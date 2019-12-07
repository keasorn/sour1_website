<?php

namespace App\Http\Controllers;

use App\User;
use App\UserType;
use Illuminate\Http\Request;
use DB;

class UserTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $userTypes = UserType::paginate(6);
        $users = User::join("jobs", "jobs.user", "users.id")
            ->join("companies", "companies.id", "users.company")
            ->select("companies.com_name as company", "users.id", "users.first_name", "users.last_name", DB::raw("count(jobs.id) as jobs_count"))->groupBy("users.id", "users.first_name", "users.last_name", "companies.com_name");
        $data = array(
            "userTypes" => $userTypes,
            "users" => $users,
        );
        return view('back_end.page_user_type.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        // $this->validateInput($request);

        $data = $this->fillColumn($request);
        UserType::create($data);

        return redirect()->intended('/so-manage/user-type');
    }

    public function fillColumn(Request $request)
    {
        $data = array(
            'title_en' => $request['title_en'],
            'title_jp' => $request['title_jp'],
            'title_ch' => $request['title_ch'],

        );
        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserType $userType
     * @return \Illuminate\Http\Response
     */
    public function show(UserType $userType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserType $userType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = MyUtility::my_decrypt($id, true);

        $userType = UserType::find($id);
        $userTypes = UserType::paginate(6);
        $users = User::join("jobs", "jobs.user", "users.id")
            ->join("companies", "companies.id", "users.company")
            ->select("companies.com_name as company", "users.id", "users.first_name", "users.last_name", DB::raw("count(jobs.id) as jobs_count"))->groupBy("users.id", "users.first_name", "users.last_name", "companies.com_name");;
        $data = array(
            "userTypes" => $userTypes,
            "userType" => $userType,
            "users" => $users,
        );
        return view('back_end.page_user_type.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\UserType $userType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $ut = UserType::findOrFail($id);
        $data = $this->fillColumn($request);
        if (count($ut) > 0) {

            UserType::where('id', $id)
                ->update($data);
        }
        return redirect()->intended('/so-manage/user-type');
    }

    public function destroy($id)
    {
        UserType::where('id', "=", $id)->delete();
        return redirect()->intended('/so-manage/user-type');
    }
}
