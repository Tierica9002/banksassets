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
                    <p>Appartments</p>
                </li>
                <li><a href="#" class="active">Add Appartment</a>
                </li>
            </ul>
            <!-- END BREADCRUMB -->
            <div class="row">
                <div class="col-lg-12 col-md-12 ">
                    <!-- START PANEL -->

                    <div class="panel panel-transparent">
                        <div class="panel-body">
                            {{ Form::open(['route' => ['administrator.appartment.store'],'method' => 'post', 'role' => 'form', 'autocomplete' => 'off', 'id' => 'add-appartment']) }}
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
                                    <div class="panel-title">Complex Residential</div>
                                </div>
                                <div class="panel-body"> 
                                    <div class="col-sm-12">
                                        <div class="radio radio-success">
                                            @foreach ($blocks as $block)
                                            {{Form::radio('block_id',$block->id, null, ['id' => $block->id])}}
                                            <label for="{{$block->id}}">{{$block->id}}</label>           
                                            @endforeach                                                                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">Caracteristici locuinta</div>
                                </div>
                                <div class="panel-body">                                   
                                    <div class="col-sm-3">
                                        <div class="form-group form-group-default">
                                            <label>Tip Imobil</label>
                                            {{Form::text('tip_imobil', null, ['class' => 'form-control'])}}
                                        </div>
                                    </div>                                                                                                                                                                             
                                    <div class="col-sm-3">
                                        <div class="form-group form-group-default">
                                            <label>Stare Imobil</label>
                                            {{Form::text('stare_imobil', null, ['class' => 'form-control'])}}
                                        </div>
                                    </div>                                                                                                                                                                             
                                    <div class="col-sm-3">
                                        <div class="form-group form-group-default">
                                            <label>Structura de Rezistenta</label>
                                            {{Form::text('structura_de_rezistenta', null, ['class' => 'form-control'])}}
                                        </div>
                                    </div>                                                                                                                                                                             
                                    <div class="col-sm-3">
                                        <div class="form-group form-group-default">
                                            <label>Nr. Camere</label>
                                            {{Form::text('nr_camere', null, ['class' => 'form-control'])}}
                                        </div>
                                    </div>                                                                                                                                                                             
                                    <div class="col-sm-3">
                                        <div class="form-group form-group-default">
                                            <label>Suprafata Utila</label>
                                            {{Form::text('suprafata_utilta', null, ['class' => 'form-control'])}}
                                        </div>
                                    </div>                                                                                                                                                                             
                                    <div class="col-sm-3">
                                        <div class="form-group form-group-default">
                                            <label>Suprafata Construita</label>
                                            {{Form::text('suprafata_construita', null, ['class' => 'form-control'])}}
                                        </div>
                                    </div>                                                                                                                                                                             
                                    <div class="col-sm-3">
                                        <div class="form-group form-group-default">
                                            <label>Compartimentare</label>
                                            {{Form::text('compartimentare', null, ['class' => 'form-control'])}}
                                        </div>
                                    </div>                                                                                                                                                                             
                                    <div class="col-sm-3">
                                        <div class="form-group form-group-default">
                                            <label>Pivnita</label>
                                            {{Form::text('pivnita', null, ['class' => 'form-control'])}}
                                        </div>
                                    </div>                                                                                                                                                                             
                                </div>                                
                            </div>        
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">Utilitati</div>
                                </div>
                                <div class="panel-body">
                                    <div class="checkbox ">
                                        <div class="col-sm-12">
                                            {{Form::checkbox('curent',1,null, ['id' => 'checkbox'])}}
                                            <label for="checkbox">Curent</label>                                            
                                            {{Form::checkbox('apa',1,null, ['id' => 'checkbox2'])}}
                                            <label for="checkbox2">Apa</label>                                            
                                            {{Form::checkbox('canalizare',1,null, ['id' => 'checkbox3'])}}
                                            <label for="checkbox3">Canalizare</label>                                            
                                            {{Form::checkbox('gaz',1,null, ['id' => 'checkbox4'])}}
                                            <label for="checkbox4">Gaz</label>                                            
                                            {{Form::checkbox('catv',1,null, ['id' => 'checkbox5'])}}
                                            <label for="checkbox5">CATV</label>                                            
                                            {{Form::checkbox('telefon',1,null, ['id' => 'checkbox6'])}}
                                            <label for="checkbox6">Telefon</label>                                            
                                            {{Form::checkbox('apometre',1,null, ['id' => 'checkbox7'])}}
                                            <label for="checkbox7">Apometre</label>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">Sistem Incalzire</div>
                                </div>
                                <div class="panel-body">
                                    <div class="checkbox ">
                                        <div class="col-sm-12">
                                            {{Form::checkbox('centrala_proprie',1,null, ['id' => 'checkbox8'])}}
                                            <label for="checkbox8">Centrala Proprie</label>                                            
                                            {{Form::checkbox('calorifere',1,null, ['id' => 'checkbox9'])}}
                                            <label for="checkbox9">Calorifere</label>                                                                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">Finisaje</div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Tamplarie Ferestre</label>
                                            {{Form::select('tamplarie_ferestre', array('PVC' => 'PVC'), null, ['class' => 'full-width', 'data-init-plugin' => 'select2']);}}
                                        </div>            
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Usa Intrare</label>
                                            {{Form::select('usa_intrare', array('Metal' => 'Metal'), null, ['class' => 'full-width', 'data-init-plugin' => 'select2']);}}
                                        </div>            
                                    </div>                                   
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Tamplarie Ferestre</label>
                                            {{Form::select('tamplarie_ferestre', array('PVC' => 'PVC'), null, ['class' => 'full-width', 'data-init-plugin' => 'select2']);}}
                                        </div>            
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Usi Interior</label>
                                            {{Form::select('usi_interior', array('Lemn' => 'Lemn'), null, ['class' => 'full-width', 'data-init-plugin' => 'select2']);}}
                                        </div>            
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Pereti</label>
                                            {{Form::select('pereti', array('Vopsea Lavabila' => 'Vopsea Lavabila', 'Faianta' => 'Faianta'), null, ['class' => 'full-width', 'data-init-plugin' => 'select2']);}}
                                        </div>            
                                    </div>
                                    <div class="checkbox ">
                                        <div class="col-sm-12">
                                            {{Form::checkbox('izolatii_termice_exterior',1,null, ['id' => 'checkbox10'])}}
                                            <label for="checkbox10">Izoltii Termice Exterior</label>        
                                            {{Form::checkbox('izolatii_termice_interior',1,null, ['id' => 'checkbox11'])}}
                                            <label for="checkbox11">Izoltii Termice Interior</label>        
                                            {{Form::checkbox('parchet',1,null, ['id' => 'checkbox12'])}}
                                            <label for="checkbox12">Parchet</label>        
                                            {{Form::checkbox('gresie',1,null, ['id' => 'checkbox13'])}}
                                            <label for="checkbox13">Gresie</label>        
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">Dotari</div>
                                </div>
                                <div class="panel-body">
                                    <div class="checkbox ">
                                        <div class="col-sm-12">
                                                                                       {{Form::checkbox('hi_fi',1,null, ['id' => 'checkbox14'])}}
                                            <label for="checkbox14">HI-FI</label>                                            
                                            {{Form::checkbox('interfon',1,null, ['id' => 'checkbox15'])}}
                                            <label for="checkbox15">Interfon</label>                                                                                        
                                            {{Form::checkbox('lift',1,null, ['id' => 'checkbox16'])}}
                                            <label for="checkbox16">Lift</label>                                            
                                            {{Form::checkbox('usa_metalica',1,null, ['id' => 'checkbox17'])}}
                                            <label for="checkbox17">Usa Metalica</label>
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
                            <button class="btn btn-primary" id="add-appartment-submit">Add Apparment</button>
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