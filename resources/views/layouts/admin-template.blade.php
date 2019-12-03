<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Jober Desk | Responsive Job Portal Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- All Plugin Css -->
    <link rel="stylesheet" href="/assets/css/plugins.css">

    <!-- Style & Common Css -->
    <link rel="stylesheet" href="/assets/css/common.css">
    <link rel="stylesheet" href="/assets/css/main.css">

    <![endif]-->

  @yield('css_link')
    <link href="/assets/css/my_style.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/ksopheak.css" rel="stylesheet" type="text/css" />
  </head>
  @yield('css')
  <style>

  </style>
  <!--
    BODY TAG OPTIONS:
    =================
    Apply one or more of the following classes to get the
    desired effect
    |---------------------------------------------------------|
    | SKINS         | skin-blue                               |
    |               | skin-black                              |
    |               | skin-purple                             |
    |               | skin-yellow                             |
    |               | skin-red                                |
    |               | skin-green                              |
    |---------------------------------------------------------|
    |LAYOUT OPTIONS | fixed                                   |
    |               | layout-boxed                            |
    |               | layout-top-nav                          |
    |               | sidebar-collapse                        |
    |               | sidebar-mini                            |
    |---------------------------------------------------------|
    -->
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
    <!-- Main Header -->
    @include('layouts.admin-header')
    <!-- Sidebar -->
    {{--@include('layouts.sidebar')--}}
    @yield('content')
    <!-- /.content-wrapper -->
    <!-- Footer -->
    @include('layouts.footer')
    <!-- ./wrapper -->
    <!-- REQUIRED JS SCRIPTS -->

      <script type="text/javascript" src="/assets/js/jquery.min.js"></script>
      <script src="/assets/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="/assets/js/owl.carousel.min.js"></script>
      <script src="/assets/js/bootsnav.js"></script>
      <script src="/assets/js/main.js"></script>
      <script src="/assets/js/site.js"></script>
      <script src="/assets/js/ajax.js"></script>
      @yield('js')
  </body>
</html>