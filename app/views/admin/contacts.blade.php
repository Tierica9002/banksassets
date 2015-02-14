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
                            <p>Contacts</p>
                        </li>
                        <li><a href="#" class="active">List Contacts</a>
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
                    {{ Form::open(['route' => ['administrator.createxls'],'method' => 'post', 'class' => 'form-inline', 'role' => 'form', 'autocomplete' => 'off']) }}
                    <a class="btn btn-default btn-cons m-b-10" href="{{ URL::route('administrator.contact.create') }}"><i class="fa fa-plus-circle"></i> Add Contact</a>
                    <input type="hidden" id="contact-ids" name="contact-ids" value="" />
                    <button id="create-xls" class="btn btn-default btn-cons m-b-10"><i class="fa fa-plus-circle"></i> Create Excel File</button>
                    {{Form::close()}}
                    @if (Session::has('message'))
                    <div style="font-size:20px; color: green;" class="alert-box success">
                        {{{ Session::get('message') }}}
                    </div>
                    @endif
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th> <input type="checkbox" id="check-all" /> </th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Source</th>
                                <th>Sent At</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)                             
                            <tr>
                                <td>
                                    <input class="contact-cb" type="checkbox" value="{{{ $contact->id }}}" />
                                </td>
                                <td class="v-align-middle semi-bold">
                                    <p>{{{ $contact->id }}}</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>{{{ $contact->user_name }}}</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>{{{ $contact->user_email }}}</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>{{{ $contact->user_phone }}}</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>{{{ $contact->source }}}</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>{{{ (string) $contact->created_at }}}</p>
                                </td>
                                <td class="v-align-middle text-center">
                                    {{ Form::open(array('route' => array('administrator.contact.destroy', $contact->id), 'method' => 'delete')) }}
                                    <div class="btn-group btn-group-xs">
                                        <a href="{{ URL::route('administrator.contact.edit', ['id'=> $contact->id]) }}" type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Edit</a>                                        
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