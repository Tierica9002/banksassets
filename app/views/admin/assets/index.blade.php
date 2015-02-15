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
                            <p>Assets</p>
                        </li>
                        <li><a href="#" class="active">List Assets</a>
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
                    <a href="{{ URL::route('administrator.asset.create') }}" class="btn btn-default btn-cons m-b-10"><i class="fa fa-plus-circle"></i> Add Asset</a>                    
                    @if (Session::has('message'))
                    <div style="font-size:20px; color: green;" class="alert-box success">
                        {{{ Session::get('message') }}}
                    </div>
                    @endif
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>                                
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($assets as $asset )
                            <tr>
                                <td>
                                    {{$asset->id}}
                                </td>                                
                                <td class="v-align-middle">
                                    {{$asset->title}}
                                </td>                                
                                <td class="v-align-middle text-center">
                                    {{ Form::open(array('route' => array('administrator.asset.destroy', $asset->id), 'method' => 'delete')) }}
                                    <div class="btn-group btn-group-xs">
                                        <a href="{{ URL::route('administrator.asset.edit', ['id'=> $asset->id]) }}" type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Edit</a>                                        
                                        <button type="submit" class="btn btn-default"><i class="fa fa-remove"></i> Delete</button>                                        
                                    </div>
                                     {{ Form::close() }}                                                                        
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
    @stop