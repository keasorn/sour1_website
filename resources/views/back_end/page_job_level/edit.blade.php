

@extends('layouts.admin-template')
@section('content')
    <!-- Main content -->
    <div class="container">
        <div class="col-md-6 col-sm-12 margin-25-0">
            <h4 class="clear-lnsp">Edit Form</h4>
            <div class="row">
                <form action="{{ route('job-level.update', ['id' => $jobLevel->id]) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <label for="title_en">jobLevel English</label>
                        <input type="text" class="form-control border-right radius-right-10" required value="{{$jobLevel->title_en}}" name="title_en" id="title_en" placeholder="eg. Admin">
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <label for="title_jp">jobLevel Japan</label>
                        <input type="text" class="form-control border-right radius-right-10" required value="{{$jobLevel->title_jp}}" name="title_jp" id="title_jp" placeholder="eg. Admin">
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <label for="title_ch">jobLevel Chinese</label>
                        <input type="text" class="form-control border-right radius-right-10" required value="{{$jobLevel->title_ch}}" name="title_ch" id="title_ch" placeholder="eg. Admin">
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <button type="submit" class="myButton">Update</button>
                    </div>
                </form>

            </div>
        </div>
        <div class="col-md-6 col-sm-12 margin-25-0">
            @include('back_end.page_job_level.base')
        </div>
        {{-- @include('layouts.admin-main-banner')--}}
    </div>
@endsection

@section("css")
    <style type="text/css">
        .content-wrapper {
            min-height: 1225px !important;
        }

    </style>
@endsection

@section("js")
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>

        $(document).ready(function () {
            $(".tbtn").click(function () {
                $(this).parents(".custom-table-m").find(".toggler1").removeClass("toggler1");
                $(this).parents("tbody").find(".toggler").addClass("toggler1");
                $(this).parents(".custom-table").find(".fa-minus-circle").removeClass("fa-minus-circle");
                $(this).parents("tbody").find(".fa-plus-circle").addClass("fa-minus-circle");
            });
        });
    </script>
    <script>
        function submitDel(id) {
            $("#del-form-"+id).submit();
        }
    </script>
@endsection
