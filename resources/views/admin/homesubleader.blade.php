@extends('layouts.admin_dashboard')
@section('css')
    
@endsection
@section('sidebar')

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        
        
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li>
            <a class="bg-red" href="{{route('crequest_subleader')}}">
                <i class="fa fa-pencil-square-o"></i>
                <span>THÊM YÊU CẦU</span>
            </a>
        </li>
            
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-th-large"></i>
                    <span>Công việc tôi yêu cầu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('show_indi_subleader')}}"><i class="fa fa-tasks"></i> All</a></li>
                    <li><a href="{{route('show_indi_subleader_new')}}"><i class="fa fa-envelope-o"></i> New</a></li>
                    <li><a href="{{route('show_indi_subleader_inprogress')}}"><i class="fa fa-ellipsis-h"></i> Inrogress</a></li>
                    <li><a href="{{route('show_indi_subleader_resolved')}}"><i class="fa fa-check-circle-o"></i> Resolved</a></li>
                    <li><a href="{{route('show_indi_subleader_outofdate')}}"><i class="fa fa-calendar-times-o"></i> Out of Date</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-th-large"></i>
                    <span>Công việc liên quan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('sublead_show_rale_all')}}"><i class="fa fa-tasks"></i> All</a></li>
                    <li><a href="{{route('sublead_show_rale_new')}}"><i class="fa fa-envelope-o"></i> New</a></li>
                    <li><a href="{{route('sublead_show_rele_inprogress')}}"><i class="fa fa-ellipsis-h"></i>Inprogress</a></li>
                    <li><a href="{{route('sublead_show_rele_resolved')}}"><i class="fa fa-check-circle-o"></i> Resolved</a></li>
                    <li><a href="{{route('sublead_show_rele_outofdate')}}"><i class="fa fa-calendar-times-o"></i> Out of Date</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-th-large"></i>
                    <span>Công việc tôi được giao</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('sublead_show_assign')}}"><i class="fa fa-tasks"></i> All</a></li>
                    <li><a href="{{route('sublead_show_assign_new')}}"><i class="fa fa-envelope-o"></i> New</a></li>
                    <li><a href="{{route('sublead_show_assign_inprogress')}}"><i class="fa fa-ellipsis-h"></i> Inprogress</a></li>
                    <li><a href="{{route('sublead_show_assign_feedback')}}"><i class="fa fa-check-circle-o"></i> Resolved</a></li>
                    <li><a href="{{route('sublead_show_assign_outofdate')}}"><i class="fa fa-calendar-times-o"></i> Out of Date</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-th-large"></i>
                    <span>Công việc của team</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('sublead_show_team')}}"><i class="fa fa-tasks"></i> All</a></li>
                    <li><a href="{{route('sublead_show_team_new')}}"><i class="fa fa-envelope-o"></i> New</a>
                    </li>
                    <li><a href="{{route('sublead_show_team_inprogress')}}"><i class="fa fa-ellipsis-h"></i> Inprogress</a></li>
                    <li><a href="{{route('sublead_show_team_feedback')}}"><i class="fa fa-check-circle-o"></i> Resolved</a></li>
                    <li><a href="{{route('sublead_show_team_outofdate')}}"><i class="fa fa-calendar-times-o"></i> Out of Date</a></li>
                    <li><a href="{{route('sublead_show_team_close')}}"><i class="fa fa-times"></i>Close</a></li>
                </ul>
            </li>
           
            
            
            
            
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
@endsection

@section('js')
    //extend custome link js here
@endsection