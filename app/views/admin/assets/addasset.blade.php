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
                    <p>Assets</p>
                </li>
                <li><a href="#" class="active">Add Asset</a>
                </li>
            </ul>
            <!-- END BREADCRUMB -->
            <div class="row">
                <div class="col-lg-12 col-md-12 ">
                    <!-- START PANEL -->
                    <div class="panel panel-transparent">
                        <div class="panel-body">
                            {{ Form::open(['route' => ['administrator.asset.store'],'method' => 'post', 'role' => 'form', 'autocomplete' => 'off']) }}
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group form-group-default required">
                                        <label>Title</label>
                                        <input type="text" class="form-control" name="title" required>
                                    </div>
                                </div>                            
                            </div>
                            <h5>Description</h5>
                            <div class="wysiwyg5-wrapper b-a b-grey">
                                <textarea id="wysiwyg5" name="description" class="wysiwyg demo-form-wysiwyg" placeholder="Enter text ..."></textarea>
                            </div>                          
                            <h5>Address</h5>
                            <div class="wysiwyg5-wrapper b-a b-grey">
                                <textarea id="wysiwyg5-2" name="address" class="wysiwyg demo-form-wysiwyg" placeholder="Enter text ..."></textarea>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Add Type</button>
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