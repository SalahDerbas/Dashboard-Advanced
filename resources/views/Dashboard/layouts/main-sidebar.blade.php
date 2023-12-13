<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg" style="overflow: scroll">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li>
                        <a href="{{ url('/dashboard') }}">
                            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">{{trans('main_trans.Dashboard')}}</span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">{{trans('main_trans.Programname')}} </li>

                    <!-- Students -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Students-menu">
                            <div class="pull-left"><i class="fas fa-school"></i><span class="right-nav-text">{{trans('main_trans.Students')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Students-menu" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('Students.index')}}">{{trans('main_trans.Students_list')}}</a></li>

                        </ul>
                    </li>
                    <!-- Teachers-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Teachers-menu">
                            <div class="pull-left"><i class="fa fa-building"></i><span class="right-nav-text">{{trans('main_trans.Teachers')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Teachers-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="calendar-list.html">{{ trans('main_trans.Teachers_list')}}</a> </li>
                        </ul>
                    </li>


                    <!-- Courses-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Courses-menu">
                            <div class="pull-left"><i class="fas fa-chalkboard"></i></i><span class="right-nav-text">{{trans('main_trans.Courses')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Courses-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="calendar-list.html">{{ trans('main_trans.Courses_list')}}</a> </li>
                        </ul>
                    </li>


                    <!-- Categories -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Categories-menu">
                            <div class="pull-left"><i class="fas fa-user-graduate"></i></i></i><span class="right-nav-text">{{trans('main_trans.Categories')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Categories-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="calendar-list.html">{{ trans('main_trans.Categories_list')}}</a> </li>
                        </ul>
                    </li>



                    <!-- Attendance-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Attendance-menu">
                            <div class="pull-left"><i class="fas fa-chalkboard-teacher"></i></i><span class="right-nav-text">{{trans('main_trans.Attendance')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Attendance-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="calendar-list.html">{{ trans('main_trans.Attendance_list')}}</a> </li>
                        </ul>
                    </li>


                    <!-- Quizes-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Quizes-menu">
                            <div class="pull-left"><i class="fas fa-user-tie"></i><span class="right-nav-text">{{trans('main_trans.Quizes')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Quizes-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="calendar-list.html">{{ trans('main_trans.Quizes_list')}}</a> </li>
                        </ul>
                    </li>

                    <!-- Libraries-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Libraries-menu">
                            <div class="pull-left"><i class="fas fa-money-bill-wave-alt"></i><span class="right-nav-text">{{trans('main_trans.Libraries')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Libraries-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="calendar-list.html">{{ trans('main_trans.Libraries_list')}}</a> </li>
                        </ul>
                    </li>

                    <!-- ZoomMeetings-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#ZoomMeetings-icon">
                            <div class="pull-left"><i class="fas fa-calendar-alt"></i><span class="right-nav-text">{{trans('main_trans.ZoomMeetings')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="ZoomMeetings-icon" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="fontawesome-icon.html">{{ trans('main_trans.ZoomMeetings_list')}}</a> </li>
                        </ul>
                    </li>

                    <!-- Settings-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Settings-icon">
                            <div class="pull-left"><i class="fas fa-book"></i><span class="right-nav-text">{{trans('main_trans.Settings')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Settings-icon" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="weather-icon.html">{{ trans('main_trans.Settings')}}</a> </li>
                        </ul>
                    </li>


                    <!-- Reports -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Reports-icon">
                            <div class="pull-left"><i class="fas fa-video"></i><span class="right-nav-text">{{trans('main_trans.Reports')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Reports-icon" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="fontawesome-icon.html">{{ trans('main_trans.Reports')}}</a> </li>
                        </ul>
                    </li>




                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
