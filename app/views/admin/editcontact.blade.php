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
                <li><a href="#" class="active">Edit Contact</a>
                </li>
            </ul>
            <!-- END BREADCRUMB -->
            <div class="row">
                <div class="col-lg-12 col-md-12 ">
                    <!-- START PANEL -->
                    <div class="panel panel-transparent">
                        <div class="panel-body">
                            {{ Form::open(['route' => ['administrator.contact.update', $contact->id],'method' => 'put', 'role' => 'form', 'autocomplete' => 'off']) }}
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group form-group-default required">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="user_name" value="{{{ $contact->user_name }}}" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="user_email" value="{{{ $contact->user_email }}}" required>
                                    </div>
                                </div>
                            </div>                                                               
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group form-group-default">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" name="user_phone" placeholder="" value="{{{ $contact->user_phone }}}">
                                    </div>
                                </div>                              
                            </div>                                                                
                            <div class="row">
                                <h5>Text Message</h5>
                                <div class="wysiwyg5-wrapper b-a b-grey">
                                    <textarea name="user_text" id="wysiwyg5" class="wysiwyg demo-form-wysiwyg" >{{{ $contact->user_text }}}</textarea>
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