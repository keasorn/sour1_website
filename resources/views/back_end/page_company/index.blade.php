@extends('layouts.admin-template')
@section('content')
    <!-- Main content -->

    @include('back_end.page_my-account.create')
    @include('back_end.page_my-account.base')
@endsection

@section("css")
    <style type="text/css">
        .content-wrapper {
            min-height: 1225px !important;
        }

    </style>
@endsection
