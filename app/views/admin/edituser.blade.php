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
                    <div class="panel panel-transparent">
                        <div class="panel-body">
                            {{ Form::open(['route' => ['administrator.user.update', $user->id],'method' => 'put', 'role' => 'form', 'autocomplete' => 'off']) }}
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group form-group-default required">
                                            <label>First name</label>
                                            <input type="text" class="form-control" name="first_name" value="{{{ $user->first_name }}}" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-group-default">
                                            <label>Last name</label>
                                            <input type="text" class="form-control" name="last_name" value="{{{ $user->last_name }}}" required>
                                        </div>
                                    </div>
                                </div>                                                               
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email" placeholder="" value="{{{ $user->email }}}" required>
                                        </div>
                                    </div>
                                </div>                                                                
                                <div class="clearfix"></div>
                                <button class="btn btn-primary" type="submit">Edit user</button>
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