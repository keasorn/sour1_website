@extends('layouts.admin-template')
@section('content')
    <!-- Main content -->
    <section class="companys">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="cycle-150-border">
                        <img class="img-cycle" src="/assets/img/{{$rst->logo}}" alt="">
                    </div>
                </div>
                <h4 class="clear-def text-pink">{{$rst->company_name}}</h4>
                <hr>
                <p>{{$rst->company_description}}</p>
                <h4 class="clear-def text-pink">{{$rst->title}} ({{$rst->number_vacancies}})</h4>
                <hr>
                <div class="company-content">
                    <p><span class="company-name"><i class="fa fa-briefcase"></i>{{$rst->company_type_title}}</span></p>

                    <p><span class="package"><i class="fa fa-money"></i>${{$rst->salary}}</span></p>

                    <p><span class="package"><i class="fa fa-calendar"></i>{{$rst->closing_date}}</span></p>
                    <p>
                        <span class="company-location"><i class="fa fa-map-marker"></i> {{$rst->work_places_title}}</span>
                    </p>
                </div>
                <div class="company-content">
                    <h5 class="clear-def">Duties</h5>
                        {!!$rst->duties!!}
                </div>
                <div class="company-content">
                    <h5 class="clear-def">Requirement</h5>
                        {!!$rst->requirement!!}
                </div>

            </div>
            <a class="col-md-1 btn myButton text-center-im" href="{{ route('my-account.edit', ['id' => \App\Http\Controllers\MyUtility::my_encrypt($rst->id,true)]) }}">Edit</a><a class="col-md-2 btn myButton text-center text-center-im" href="/so-manage/company/4mIq2alRkVUkC2eYfJTjIhw=">View User Applied</a>
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

@endsection
