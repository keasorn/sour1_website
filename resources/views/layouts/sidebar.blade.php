<?php
use App\Http\Controllers\MyUtility;

$active = session()->get("active");
$user =  session()->get("user");
$locale =  session()->get("locale");
App::setLocale($locale);


?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/dist/img/user1-128x128.jpg" class="img-circle"
                     alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name}}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <!-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="@lang('messages.search')...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form> -->
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <!-- Optionally, you can add icons to the links -->
            <li {{\App\Http\Controllers\MyUtility::selectActive($active,"dashboard")}}><a href="/"><i
                            class="fa fa-dashboard"></i><span>@lang('messages.dashboard')</span></a></li>
            <!-- Optionally, you can add icons to the links -->
            
            <li {{$active=="employee-management"||"position"||$active=="employees-setting"?"class=active menu-open":""}}>
                <a href="#"><i class="fa  fa-group"></i>
                    <span>@lang('messages.teacher_management')</span> </span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li {{MyUtility::selectActive($active,"employee-management")}}><a
                                href="{{ url('employee-management') }}"><i
                                    class="fa  fa-user"></i><span> @lang('messages.teacher')</span></a></li>
                                    
                    <li><a
                                href="{{ url('system-management/position') }}"><i class="fa fa-life-ring"></i><span>@lang('messages.position')</span></a>
                    </li>
                    <li {{MyUtility::selectActive($active,"employees-setting")}}><a
                                href="#none"><i
                                    class="fa  fa-user"></i><span>@lang('messages.setting')@lang('messages.role')@lang('messages.teacher')</span></a></li>
                </ul>
            </li>
             
            <li {{$active=="student-management"?"class=active menu-open":""}}>
                <a href="#"><i class="fa fa-cog"></i> <span>@lang('messages.information')@lang('messages.student')</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li {{MyUtility::selectActive($active,"student-management")}}><a
                                href="{{ url('student-management') }}"><i class="fa fa-home"></i><span>ចុះ@lang('messages.name')@lang('messages.student')</span></a>
                    </li>
                    <li {{MyUtility::selectActive($active,"office")}}><a href="#none"><i
                                    class="fa fa-home"></i><span>វត្តមាន@lang('messages.student')</span></a></li>
                    </li>
                    <li {{MyUtility::selectActive($active,"office")}}><a href="#none"><i
                                    class="fa fa-home"></i><span>លទ្ធផលមធ្យមសិក្សាទុតិយភូមិ</span></a></li>
                    <li {{MyUtility::selectActive($active,"part")}}><a href="#none"><i
                                    class="fa fa-star"></i><span>ពិន្ទុ</span></a></li>

                     
                </ul>
            </li>

            <li {{$active == "classroom" || "classroom-level" || "classroom-teacher" ? "class= active menu-open":""}}>
                <a href="#"><i class="fa fa-cog"></i> <span>@lang('messages.information')@lang('messages.class')</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">

                    <li {{MyUtility::selectActive($active,"academic")}}><a href="{{ url('system-management/academic') }}"><i
                                    class="fa fa-home"></i><span>@lang('messages.academic')</span></a></li>
                <li {{MyUtility::selectActive($active,"include-student")}}><a
                                href="{{ url('system-management/include-student') }}"><i class="fa fa-home"></i><span>@lang('messages.include')@lang('messages.student')</span></a>
                    </li>
                    <li {{MyUtility::selectActive($active,"classroom")}}><a
                                href="{{ url('system-management/classroom') }}"><i class="fa fa-home"></i><span>@lang('messages.level')@lang('messages.class')</span></a>
                    </li>
                    <li {{MyUtility::selectActive($active,"classroom-level")}}><a
                                href="{{ url('system-management/classroom-level') }}"><i class="fa fa-home"></i><span>@lang('messages.class')</span></a>
                    </li>
                    <li {{MyUtility::selectActive($active,"classroom-teacher")}}><a
                                href="{{ url('system-management/classroom-teacher') }}"><i class="fa fa-home"></i><span>@lang('messages.teacher')@lang('messages.class')</span></a>
                    </li>
                </ul>
            </li>
            <li {{$active=="subject" ||"course" || "topic" ||"topic-report" ?"class=active menu-open":""}}>
                <a href="#"><i class="fa fa-cog"></i> <span>@lang('messages.information')@lang('messages.education_program')</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">

                    <li {{MyUtility::selectActive($active,"subject")}}><a href="{{ url('system-management/subject') }}"><i
                                    class="fa fa-home"></i><span>@lang('messages.subject')</span></a></li>
                   
                    <li {{MyUtility::selectActive($active,"course")}}><a href="{{ url('system-management/course') }}"><i
                                    class="fa fa-home"></i><span>@lang('messages.course')</span></a></li>
                    <li {{MyUtility::selectActive($active,"topic")}}><a href="{{ url('system-management/topic') }}"><i
                                    class="fa fa-home"></i><span>@lang('messages.topic')</span></a></li>
                    <li {{MyUtility::selectActive($active,"part")}}><a href="#none"><i
                                    class="fa fa-star"></i><span>@lang('messages.exam')</span></a></li>

                    <li {{MyUtility::selectActive($active,"topic-report")}}><a href="#none"><i
                                    class="fa fa-star"></i><span>@lang('messages.report')</span></a></li>

                </ul>
            </li>
        
            <li {{MyUtility::selectActive($active,"user")}}><a href="{{ route('user-management.index') }}"><i
                            class="fa fa-user-secret"></i>
                    <span>@lang('messages.management') USER</span></a></li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>