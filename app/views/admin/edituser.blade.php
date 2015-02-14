@extends('admin.layouts.main')
@section('content')
<div class="page-content-wrapper">
    <!-- START PAGE CONTENT -->
    <div class="content">
        <!-- START CONTAINER FLUID -->
        <div class="container-fluid container-fixed-lg">
            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li>
                    <p>Users</p>
                </li>
                <li><a href="#" class="active">Edit User</a>
                </li>
            </ul>
            <!-- END BREADCRUMB -->
            <div class="row">
                <div class="col-lg-12 col-md-12 ">
                    <!-- START PANEL -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">Edit User Form</div>
                        </div>
                        <div class="panel-body">
                            {{ Form::open(['route' => ['administrator.user.update', $user->id],'method' => 'put', 'role' => 'form', 'autocomplete' => 'off']) }}
                                <div class="row clearfix">
                                    <div class="col-sm-3 col-sm-offset-3">
                                        <div class="form-group form-group-default required">
                                            <label>First name</label>
                                            <input type="text" class="form-control" name="first_name" value="{{{ $user->first_name }}}" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group form-group-default required">
                                            <label>Last name</label>
                                            <input type="text" class="form-control" name="last_name" value="{{{ $user->last_name }}}" required="">
                                        </div>
                                    </div>
                                </div>                                                               
                                <div class="row">
                                    <div class="col-sm-6 col-sm-offset-3">
                                        <div class="form-group form-group-default required">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email" placeholder="" value="{{{ $user->email }}}" required="">
                                        </div>
                                    </div>
                                </div>                                                                
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-sm-6 col-sm-offset-3">
                                        <button class="btn btn-success" type="submit">Save</button>
                                        <span>or </span><a href="{{ URL::route('administrator.user.index') }}">Cancel</a>
                                    </div>
                                </div>                                
                                {{ $errors->first() }}
                            {{Form::close()}}
                        </div>
                    </div>
                    <!-- END PANEL -->
                </div>              
            </div>
        </div>        
    </div>
</div>
<!-- END PAGE CONTENT WRAPPER -->
</div>
@stop