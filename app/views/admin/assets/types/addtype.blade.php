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
                    <p>Types</p>
                </li>
                <li><a href="#" class="active">Add Type</a>
                </li>
            </ul>
            <!-- END BREADCRUMB -->
            <div class="row">
                <div class="col-lg-12 col-md-12 ">
                    <!-- START PANEL -->
                    <div class="panel panel-transparent">
                        <div class="panel-body">
                            {{ Form::open(['route' => ['administrator.type.store'],'method' => 'post', 'role' => 'form', 'autocomplete' => 'off']) }}
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group form-group-default required">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="type_name" required>
                                    </div>
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