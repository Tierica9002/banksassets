@extends('admin.layouts.main')
@section('content')
<!-- START PAGE CONTENT WRAPPER -->
<div class="page-content-wrapper">
    <!-- MODAL STICK UP  -->
    <div class="modal fade stick-up" id="addNewAppModal" tabindex="-1" role="dialog" aria-labelledby="addNewAppModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header clearfix ">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
                    </button>
                    <h4 class="p-b-5"><span class="semi-bold">New</span> App</h4>
                </div>
                <div class="modal-body">
                    <p class="small-text">Create a new app using this form, make sure you fill them all</p>
                    <form role="form">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                    <label>name</label>
                                    <input id="appName" type="text" class="form-control" placeholder="Name of your app">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                    <label>Description</label>
                                    <input id="appDescription" type="text" class="form-control" placeholder="Tell us more about it">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group form-group-default">
                                    <label>Price</label>
                                    <input id="appPrice" type="text" class="form-control" placeholder="your price">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-group-default">
                                    <label>Notes</label>
                                    <input id="appNotes" type="text" class="form-control" placeholder="a note">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button id="add-app" type="button" class="btn btn-primary  btn-cons">Add</button>
                    <button type="button" class="btn btn-cons">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- END MODAL STICK UP  -->
    <!-- START PAGE CONTENT -->
    <div class="content">
        <!-- START JUMBOTRON -->
        <div class="jumbotron" data-pages="parallax">
            <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
                <div class="inner">
                    <!-- START BREADCRUMB -->
                    <ul class="breadcrumb">
                        <li>
                            <p>Users</p>
                        </li>
                        <li><a href="#" class="active">List Users</a>
                        </li>
                    </ul>
                    <!-- END BREADCRUMB -->                
                </div>
            </div>
        </div>
        <!-- END JUMBOTRON -->
        <!-- START CONTAINER FLUID -->
        <div class="container-fluid container-fixed-lg bg-white">
            <!-- START PANEL -->
            <div class="panel panel-transparent">
                <div class="panel-heading">                
                    <div class="pull-right">
<!--                        <div class="col-xs-12">
                            <input type="text" id="search-table" class="form-control pull-right" placeholder="Search">
                        </div>-->
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <a href="{{ URL::route('administrator.user.create') }}">Add User</a>
                    @if (Session::has('message'))
                    <div style="font-size:20px; color: green;" class="alert-box success">
                        {{{ Session::get('message') }}}
                    </div>
                    @endif
                    <table class="table table-hover demo-table-search" id="tableWithSearch">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Last Login</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td class="v-align-middle semi-bold">
                                    <p>{{{ $user->id }}}</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>{{{ $user->email }}}</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>{{{ $user->first_name }}}</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>{{{ $user->last_name }}}</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>{{{ $user->last_login }}}</p>
                                </td>
                                <td class="v-align-middle">
                                    <p><a href="{{ URL::route('administrator.user.edit', ['id'=> $user->id]) }}">Edit</a> ||  
                                    {{ Form::open(array('route' => array('administrator.user.destroy', $user->id  ), 'method' => 'delete')) }}
                                        <button type="submit" class="btn btn-danger btn-mini">Delete</button>
                                    {{ Form::close() }}</p>
                                </td>
                            </tr>  
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END PANEL -->
        </div>          
    </div>
    <!-- END PAGE CONTENT -->
    <!-- START COPYRIGHT -->
    <!-- START CONTAINER FLUID -->
    <div class="container-fluid container-fixed-lg footer">
        <div class="copyright sm-text-center">
            <p class="small no-margin pull-left sm-pull-reset">
                <span class="hint-text">Copyright © 2014 </span>
                <span class="font-montserrat">REVOX</span>.
                <span class="hint-text">All rights reserved. </span>
                <span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> | <a href="#" class="m-l-10">Privacy Policy</a></span>
            </p>
            <p class="small no-margin pull-right sm-pull-reset">
                <a href="#">Hand-crafted</a> <span class="hint-text">&amp; Made with Love ®</span>
            </p>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- END COPYRIGHT -->
</div>
<!-- END PAGE CONTENT WRAPPER -->    
</div>
@stop