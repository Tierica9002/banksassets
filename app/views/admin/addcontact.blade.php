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
                    <p>Contacts</p>
                </li>
                <li><a href="#" class="active">Add Contact</a>
                </li>
            </ul>
            <!-- END BREADCRUMB -->
            <div class="row">
                <div class="col-lg-12 col-md-12 ">
                    <!-- START PANEL -->
                    <div class="panel panel-transparent">
                        <div class="panel-body">
                            {{ Form::open(['route' => ['administrator.contact.store'],'method' => 'post', 'role' => 'form', 'autocomplete' => 'off']) }}
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group form-group-default required">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="user_name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="user_email"  required>
                                    </div>
                                </div>
                            </div>                                                               
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group form-group-default">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" name="user_phone" placeholder="">
                                    </div>
                                </div>                              
                            </div>                                                                
                            <div class="row">
                                <h5>Text Message</h5>
                                <div class="wysiwyg5-wrapper b-a b-grey">
                                    <textarea name="user_text" id="wysiwyg5" class="wysiwyg demo-form-wysiwyg" ></textarea>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <button class="btn btn-primary" type="submit">Add User</button>
                            {{ $errors->first() }}
                            <input type="hidden" name="is-admin" value="true" />
                            <input type="hidden" name="source" value="Added from admin" />
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