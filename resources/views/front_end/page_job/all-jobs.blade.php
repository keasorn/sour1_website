@extends('layouts.app-template')
@section('content')
    <div class="container">
        <form class="search-form">
                <div class="col-md-4 col-sm-4 no-pad">
                    <input type="text" class="form-control border-right radius-left-10"
                           placeholder="eg. WEB DESIGNER"/>
                </div>
                <div class="col-md-3 col-sm-3 no-pad">
                    <select class="form-control"data-show-icon="true">
                        <option>ALL CATEGORY</option>
                        <option>0 Year</option>
                        <option>1 Year</option>
                        <option>2 Year</option>
                        <option>3 Year</option>
                        <option>4 Year</option>
                        <option>5 Year</option>
                        <option>6 Year</option>
                        <option>7 Year</option>
                        <option>8 Year</option>
                        <option>9 Year</option>
                        <option>10 Year</option>
                    </select>

                </div>
                <div class="col-md-3 col-sm-3 no-pad">
                    <select class="form-control">
                        <option>ANYWHERE</option>
                        <option>Accounf & Finance</option>
                        <option>Information & Technology</option>
                        <option>Marketing</option>
                        <option>Food & Restaurent</option>
                    </select>
                </div>
                <div class="col-md-2 col-sm-2 no-pad">
                    <input type="submit" class="btn form-control  radius-right-10 grad4" value="SEARCH JOB"/>
                </div>
        </form>
    </div>
    <section class="membercard dark">

        <div class="container">
             {{--<div class="row">--}}

            {{--<h3 class="text-center">RECENTLY POSTED <b> JOBS</b></h3>--}}
            {{--</div>--}}

            {{--<div class="row">--}}
            {{--<div class="col-md-12 col-sm-12">--}}
            {{--<div class="left-widget-sidebar">--}}
            {{--<div class="card-widget bg-white user-card">--}}
            {{--<div class="col-md-2 col-sm-2 text-left"--}}
            {{--">--}}
            {{--<label for="sdf">JOB TYPE</label>--}}
            {{--<select class="form-control" data-show-icon="true" style="border: none;">--}}
            {{--<option>ALL CATEGORY</option>--}}
            {{--<option>0 Year</option>--}}
            {{--<option>1 Year</option>--}}
            {{--<option>2 Year</option>--}}
            {{--<option>3 Year</option>--}}
            {{--<option>4 Year</option>--}}
            {{--<option>5 Year</option>--}}
            {{--<option>6 Year</option>--}}
            {{--<option>7 Year</option>--}}
            {{--<option>8 Year</option>--}}
            {{--<option>9 Year</option>--}}
            {{--<option>10 Year</option>--}}
            {{--</select></div>--}}
            {{--<div class="col-md-2 col-sm-2 text-left" style="padding: 0px;--}}
            {{--border-left: #cacaca 1px solid;--}}
            {{--border-right: #cacaca 1px solid;">--}}

            {{--<label for="sdf">SORT BY</label>--}}
            {{--<select class="form-control" data-show-icon="true" style="border: none;">--}}
            {{--<option>ALL CATEGORY</option>--}}
            {{--<option>0 Year</option>--}}
            {{--<option>1 Year</option>--}}
            {{--<option>2 Year</option>--}}
            {{--<option>3 Year</option>--}}
            {{--<option>4 Year</option>--}}
            {{--<option>5 Year</option>--}}
            {{--<option>6 Year</option>--}}
            {{--<option>7 Year</option>--}}
            {{--<option>8 Year</option>--}}
            {{--<option>9 Year</option>--}}
            {{--<option>10 Year</option>--}}
            {{--</select></div>--}}
            {{--<div class="col-md-8 col-sm-8 text-right"><span aria-hidden="true" class="icon-refresh" style="    font-size: 25px;--}}
            {{--margin: 20px;"></span>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            @foreach($jobs as $row)
                <div class="col-md-4 col-sm-4 h-400">
                    <div class="left-widget-sidebar">
                        <div class="card-widget bg-white user-card">
                            <div class="u-img-jobs img-cover"
                                 style="background-image: url(img/bg-1.jpg);background-size:cover;"></div>
                            <div class="u-content">
                                <div class="avatar box-80">
                                    <img class="img-responsive  img-70 shadow-white" src="/assets/img/{{\App\Http\Controllers\MyUtility::getLogo($row->logo,"icons/company.png")}}"
                                         alt="">
                                </div>
                                <p class="text-pink">{{\App\Http\Controllers\MyUtility::dateTimeCount($row->created_at)}}
                                    Ago</p>
                                <h5 class="clear-def h-70">{{$row->title}}</h5>
                                <p class="text-muted">{{$row->company_name}}</p>
                                <div class="text-center">
                                    <a href="/job/{{\App\Http\Controllers\MyUtility::my_encrypt($row->id,true)}}">
                                        <button type="button" class="bntId-apply">

                                            <span class="detail">Detial</span>
                                            <span class="apply">Apply</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <div class="user-social-profile">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6"><span aria-hidden="true"
                                                                                  class="icon-map-pin icon-grid-jobs"></span>
                                        <p class="text-grid-jobs text-left">{{trim($row->work_places_title)}}</p></div>
                                    <div class="col-md-6 col-sm-6 col-xs-6"><span aria-hidden="true"
                                                                                  class="icon-clock icon-grid-jobs"></span>
                                        <p class="text-grid-jobs">{{$row->job_type_title}}</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="col-md-12 col-lg-12 text-center">
           {{$jobs->links()}}
        </div>

    </section>

@endsection

@section("css")
    <style type="text/css">
        .content-wrapper {
            min-height: 1225px !important;
        }

    </style>
@endsection
@section("js")
    <script>


    </script>
@endsection
