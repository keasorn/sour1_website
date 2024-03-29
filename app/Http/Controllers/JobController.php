<?php

namespace App\Http\Controllers;

use App\Job;
use App\JobLevel;
use App\JobType;
use App\WorkPlace;
use Illuminate\Http\Request;
use App\Http\Controllers\MyUtility;
use DB;

class JobController extends Controller
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

//        session()->forget('active');
//        session()->put('active', 'user');
//        $User = DB::table("v_users_listing")
//            ->paginate(5);
        $jobLevels = JobLevel::all();
        $jobTypes = JobType::all();
        $pows = WorkPlace::all();
        $jobs = Job::where("user","=",session()->get("user")->id)
//                ->where("publication","=",1)
                ->paginate(6);

        $data = array(
            "jobLevels" => $jobLevels,
            "jobTypes" => $jobTypes,
            "pows" => $pows,
            "jobs" => $jobs,
        );
        return view('back_end.page_job.index')->with($data);
    }

    public function allJob()
    {

//        session()->forget('active');
//        session()->put('active', 'user');
//        $User = DB::table("v_users_listing")
//            ->paginate(5);
        $jobLevels = JobLevel::all();
        $jobTypes = JobType::all();
        $pows = WorkPlace::all();
        $jobs = Job::where("user","=",session()->get("user")->id)
//                ->where("publication","=",1)
                ->paginate(12);

        $data = array(
            "jobLevels" => $jobLevels,
            "jobTypes" => $jobTypes,
            "pows" => $pows,
            "jobs" => $jobs,
        );
        return view('front_end.page_job.all-jobs')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('back_end.page_job.create');
//        $employees = Employee::select("id", "firstname_en", "lastname_en")
//            ->where("school_id", session::get("user")->school_id)
//            ->get();
//        $userType = DB::table("user_type")->get();
//
//        return view('users-mgmt/create', ['userType' => $userType, 'employees' => $employees]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $datas = $this->fillColumn($request);
//        return $datas;
        foreach ($datas as $data){
//
        Job::create($data);
        }
//
        return redirect()->intended('/so-manage/job');
    }
    function fillColumn(Request $request)
    {




        $myUt = new MyUtility();
        $i = 0;
        $data = array();

        foreach ($request->title as $key => $value) {
            $myArr = array(
                'title' => $request['title'][$i],
                'number_vacancies' => $request['number_vacancies'][$i],
                'job_type' => $request['job_type'][$i],
                'job_level' => $request['job_level'][$i],
                'pow' => $request['pow'][$i],
                'salary' => $request['salary'][$i],
                'closing_date' => $myUt::toMySqlDateHtml($request['closing_date'][$i]),
                'publication' => 1,
                'duties' => $request['duties'][$i],
                'note' => "",
                'requirement' => $request['requirement'][$i],
                'status' => 0,
                'user' => session()->get("user")->id,
            );
            $data[$i] = $myArr;
            $i++;
        }

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

        $rst = Job::join("users", "users.id", "=", "jobs.user")
            ->join("companies", "companies.id", "=", "users.company")
            ->join("job_levels", "job_levels.id", "=", "jobs.job_level")
            ->join("job_types", "job_types.id", "=", "jobs.job_type")
            ->join("work_places", "work_places.id", "=", "jobs.pow")
            ->select("jobs.*", "job_levels.title_en as job_level_title", "job_types.title_en as job_type_title", "work_places.title_en as work_places_title", "users.last_name", "companies.com_name as company_name", "companies.com_description as company_description", "companies.logo as logo")->where("jobs.id", "=", $id)->first();
//        return $rst;

        $data = array(
            "rst" => $rst,
        );
        return view('back_end.page_job.preview')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

//        session()->forget('active');
//        session()->put('active', 'user');
//        $User = DB::table("v_users_listing")
//            ->paginate(5);
        $jobLevels = JobLevel::all();
        $jobTypes = JobType::all();
        $pows = WorkPlace::all();
        $myUt = new MyUtility();
        $id = $myUt::my_decrypt($id, true);

        $rst = Job::join("users", "users.id", "=", "jobs.user")
            ->join("companies", "companies.id", "=", "users.company")
            ->join("job_levels", "job_levels.id", "=", "jobs.job_level")
            ->join("job_types", "job_types.id", "=", "jobs.job_type")
            ->join("work_places", "work_places.id", "=", "jobs.pow")
            ->select("jobs.*", "job_levels.title_en as job_level_title", "job_types.title_en as job_type_title", "work_places.title_en as work_places_title", "users.last_name", "companies.com_name as company_name", "companies.com_description as company_description", "companies.logo as logo")->where("jobs.id", "=", $id)->first();
//        return $rst;

        $data = array(
            "jobLevels" => $jobLevels,
            "jobTypes" => $jobTypes,
            "pows" => $pows,
            "job" => $rst,
        );
        return view('back_end.page_job.edit')->with($data);
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
        $job = Job::findOrFail($id);
        $data = $this->fillColumn($request);
        Job::where('id', $id)
            ->update($data);
        return redirect()->intended('/so-manage/job');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Job::where('id', $id)->delete();
        return redirect()->intended('/so-manage/job');
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