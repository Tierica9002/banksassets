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
                    <p>Offices</p>
                </li>
                <li><a href="#" class="active">Add Residential Complex</a>
                </li>
            </ul>
            <!-- END BREADCRUMB -->
            <div class="row">
                <div class="col-lg-12 col-md-12 ">
                    <!-- START PANEL -->

                    <div class="panel panel-transparent">
                        <div class="panel-body">
                            {{ Form::open(['route' => ['administrator.residentialcomplex.store'],'method' => 'post', 'role' => 'form', 'autocomplete' => 'off', 'id' => 'add-residential']) }}
                            <div class="clearfix"></div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">Caracteristici Generale</div>
                                </div>                                
                                <div class="panel-body">
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Pret</label>
                                            {{Form::text('pret', null, ['class' => 'form-control'])}}
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" name="premium_property" value="1" id="checkbox1">
                                            <label for="checkbox1">Proprietate Premium</label>
                                        </div>
                                    </div>                                
                                </div>                             
                            </div>
                            <div class="clearfix"></div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">Descriere</div>
                                </div>                                
                                <div class="panel-body">
                                    <div class="wysiwyg5-wrapper b-a b-grey">
                                        {{Form::textarea('descriere', null, ['id' => 'wysiwyg5', 'class' => 'wysiwyg demo-form-wysiwyg'])}}
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">Caracteristici Ansamblu</div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Tip Imobil</label>
                                            {{Form::text('tip_imobil', null, ['class' => 'form-control'])}}
                                        </div>
                                    </div>     
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Stare Imobil</label>
                                            {{Form::text('stare_imobil', null, ['class' => 'form-control'])}}
                                        </div>
                                    </div>                                    
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Suprafata Teren</label>
                                            {{Form::text('suprafata_teren', null, ['class' => 'form-control'])}}
                                        </div>
                                    </div>                                    
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Nr. Imobile</label>
                                            {{Form::text('nr_imobile', null, ['class' => 'form-control'])}}
                                        </div>
                                    </div>                                    
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Regun Inaltime</label>
                                            {{Form::text('regim_inaltime', null, ['class' => 'form-control'])}}
                                        </div>
                                    </div>                                    
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Structura de Rezistenta</label>
                                            {{Form::text('structura_de_rezistenta', null, ['class' => 'form-control'])}}
                                        </div>
                                    </div>                                    
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Suprafata Construita</label>
                                            {{Form::text('suprafata_construita', null, ['class' => 'form-control'])}}
                                        </div>
                                    </div>                                    
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Suprafata Construita</label>
                                            {{Form::text('suprafata_utila', null, ['class' => 'form-control'])}}
                                        </div>
                                    </div>                                    
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Nr. Locuinte</label>
                                            {{Form::text('nr_locuinte', null, ['class' => 'form-control'])}}
                                        </div>
                                    </div>                                    
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Tip Locuinte</label>
                                            {{Form::text('tip_locuinte', null, ['class' => 'form-control'])}}
                                        </div>
                                    </div>                                                                                                                                     
                                </div>                                
                            </div>  
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">Modalitati de blata</div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-sm-12">
                                        <div class="checkbox">
                                            {{Form::checkbox('credit_imobiliar',1,null, ['id' => 'checkbox'])}}
                                            <label for="checkbox">Credit Imobiliar</label>         
                                            {{Form::checkbox('credit_prima_casa',1,null, ['id' => 'checkbox2'])}}
                                            <label for="checkbox2">Credit Prima Casa</label>         
                                            {{Form::checkbox('cash',1,null, ['id' => 'checkbox3'])}}
                                            <label for="checkbox3">Cash</label>         
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">Facilitati Ansamblu Rezidential</div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-sm-12">
                                        <div class="checkbox">
                                            {{Form::checkbox('loc_de_joaca',1,null, ['id' => 'checkbox4'])}}
                                            <label for="checkbox4">Loc de Joaca</label>         
                                            {{Form::checkbox('parc',1,null, ['id' => 'checkbox5'])}}
                                            <label for="checkbox5">Parc</label>         
                                            {{Form::checkbox('parcare',1,null, ['id' => 'checkbox6'])}}
                                            <label for="checkbox6">Parcare</label>         
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">Facilitati in vecinatatea ansamblului rezidential</div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-sm-12">
                                        <div class="checkbox">
                                            {{Form::checkbox('cafenea',1,null, ['id' => 'checkbox'])}}
                                            <label for="checkbox">Cafenea</label>                                            
                                            {{Form::checkbox('parcare_pentru_vizitatori',1,null, ['id' => 'checkbox2'])}}
                                            <label for="checkbox2">Parcare Pentru Vizitatori</label>                                            
                                            {{Form::checkbox('cantina',1,null, ['id' => 'checkbox3'])}}
                                            <label for="checkbox3">Cantina</label>                                            
                                            {{Form::checkbox('parcare_in_apropiere',1,null, ['id' => 'checkbox4'])}}
                                            <label for="checkbox4">Parcare In Apropiere</label>                                            
                                            {{Form::checkbox('servicii_de_curierat',1,null, ['id' => 'checkbox5'])}}
                                            <label for="checkbox5">Servicii De Curierat</label>                                            
                                            {{Form::checkbox('restaurant',1,null, ['id' => 'checkbox6'])}}
                                            <label for="checkbox6">Restaurant</label>                                            
                                            {{Form::checkbox('parc_in_apropiere',1,null, ['id' => 'checkbox7'])}}  
                                            <label for="checkbox7">Parc In Apropiere</label>             
                                        </div>
                                    </div>
                                </div>
                            </div>                                                                            
                            <div class="clearfix"></div>                                                                        

                            {{ $errors->first() }}
                            {{Form::close()}}
                            <div class="clearfix"></div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        Upload Images
                                    </div>
                                    <div class="tools">
                                        <a class="collapse" href="javascript:;"></a>
                                        <a class="config" data-toggle="modal" href="#grid-config"></a>
                                        <a class="reload" href="javascript:;"></a>
                                        <a class="remove" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="panel-body no-scroll no-padding">
                                    <form action="{{ URL::route('administrator.attachment.store') }}" class="dropzone no-margin">                                        
                                    </form>                                    
                                </div>
                            </div>
                            <button class="btn btn-primary" id="add-residential-submit">Add Office</button>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!-- END PANEL -->
                </div>              
            </div>
        </div>        
    </div>
</div>
<!-- END PAGE CONTENT WRAPPER -->
</div>
@stop