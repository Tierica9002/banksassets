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
                <li><a href="#" class="active">Add User</a>
                </li>
            </ul>
            <!-- END BREADCRUMB -->
            <div class="row">
                <div class="col-lg-12 col-md-12 ">
                    <!-- START PANEL -->
                    <div class="panel panel-transparent">
                        <div class="panel-body">
                            {{ Form::open(['route' => 'administrator.user.store','method' => 'post', 'role' => 'form', 'autocomplete' => 'off']) }}
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group form-group-default required">
                                        {{ Form::label('first_name', 'First name') }}
                                        {{ Form::text('first_name', null,  array('class' => 'form-control', 'required' => '')) }}                                        
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-group-default">
                                        {{ Form::label('last_name', 'Last name') }}
                                        {{ Form::text('last_name', null,  array('class' => 'form-control', 'required' => '')) }}    
                                    </div>
                                </div>
                            </div>                                                               
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group form-group-default">
                                        {{ Form::label('email', 'Email') }}
                                        {{ Form::email('email', null,  array('class' => 'form-control', 'required' => '')) }}    
                                    </div>
                                </div>
                            </div>    
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group form-group-default">
                                       {{ Form::label('password', 'Password') }}
                                       {{ Form::text('password', null,  array('class' => 'form-control', 'required' => '')) }}    
                                    </div>
                                </div>
                            </div>   
                            <div class="clearfix"></div>
                            <button class="btn btn-primary" type="submit">Create user</button>
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