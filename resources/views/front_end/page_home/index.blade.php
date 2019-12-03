@extends('layouts.app-template')
@section('content')
    <!-- Main content -->

    @include('layouts.main-banner')
    {{--@include('layouts.jobs')--}}
    {{--@include('layouts.counter')--}}
    {{--@include('layouts.jobs-category')--}}
    @include('layouts.recent_jobs_post')
    {{--@include('layouts.features')--}}
    {{--@include('layouts.our-partners')--}}
    {{--@include('layouts.testimonials')--}}

    @include('layouts.jobs-category')


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
