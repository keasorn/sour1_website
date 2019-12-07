@extends('layouts.admin-template')
@section('content')
    <!-- Main content -->
    <div class="container">
        <div class="col-md-6 col-sm-12 margin-25-0">
            @include('back_end.page_address.create')
        </div>
        <div class="col-md-6 col-sm-12 margin-25-0">
            @include('back_end.page_address.base')
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
                $(this).parents(".custom-table-m").find(".fa-minus-circle").removeClass("fa-minus-circle");
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
