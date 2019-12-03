<!-- Navigation Start  -->
<nav class="navbar navbar-default navbar-sticky bootsnav">

    <div class="container">
        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="/"><img src="/assets/img/logo.png" class="logo" alt=""></a>
        </div>
        <!-- End Header Navigation -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                <li><a href="/so-manage">DASHBOARD</a></li>
                <li><a href="#none">COMPANIES</a></li>
                <li><a href="#none">POST</a></li>
                <li><a href="#none">USER</a></li>
                <li><button type="button" class="myButton"><a href="/so-manage/job">POST A JOB</a></button></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">SETTING</a>
                    <ul class="dropdown-menu animated fadeOutUp" style="display: none; opacity: 1;">
                        <li><a href="/so-manage/user-type">USER TYPE</a></li>
                        <li><a href="/so-manage/job-type">JOB TYPE</a></li>
                        {{--<li><a href="/so-manage/position">POSITION</a></li>--}}
                        <li><a href="/so-manage/address">ADDRESS</a></li>
                        <li><a href="/so-manage/job-level">JOB LEVEL</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">MY ACCOUNT</a>
                    <ul class="dropdown-menu animated fadeOutUp" style="display: none; opacity: 1;">
                        <li><a href="/so-manage/my-account/{!! \App\Http\Controllers\MyUtility::my_encrypt(session("user")->company,true) !!}/edit">My Profile</a></li>

                        <li><a href="/logout"><button type="button" class="myButtonLogIn">LOG OUT</button></a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>
<!-- Navigation End  -->
