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
                    <p>Lands</p>
                </li>
                <li><a href="#" class="active">Add Land</a>
                </li>
            </ul>
            <!-- END BREADCRUMB -->
            <div class="row">
                <div class="col-lg-12 col-md-12 ">
                    <!-- START PANEL -->

                    <div class="panel panel-transparent">
                        <div class="panel-body">
                            {{ Form::open(['route' => ['administrator.land.store'],'method' => 'post', 'role' => 'form', 'autocomplete' => 'off', 'id' => 'add-land']) }}
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
                                    <div class="panel-title"></div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-sm-6">
                                        <div class="form-group form-group-default">
                                            <label>Dupa tip destinatie</label>
                                            {{Form::select('tip_destinatie', array('Terenuri entru Birouri' => 'Terenuri pentru Birouri', 'Terenuri pentru Blocuri de Apartamente sau Vile' => 'Terenuri pentru Blocuri de Apartamente sau Vile',
                                            'Terenuri pentru Hale, Depozite si Spatii Industriale' => 'Terenuri pentru Hale, Depozite si Spatii Industriale', 'Terenuri pentru Spatii de Retail' => 'Terenuri pentru Spatii de Retail', 'Terenuri Agricole' => 'Terenuri Agricole', 'Terenuri Zone Turistice' => 'Terenuri Zone Turistice'), null, ['class' => 'full-width', 'data-init-plugin' => 'select2']);}}
                                        </div>
                                    </div>                                                                                                         
                                </div>                              
                            </div>  

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">Date Generale Imobil</div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Suprafata</label>
                                            {{Form::text('suprafata', null, ['class' => 'form-control'])}}
                                        </div>
                                    </div>                                                                                
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Front Stradal</label>
                                            {{Form::text('front_stradal', null, ['class' => 'form-control'])}}
                                        </div>
                                    </div>                                                                                
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Nr. Fronturi</label>
                                            {{Form::text('nr_fronturi', null, ['class' => 'form-control'])}}
                                        </div>
                                    </div>                                                                                
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Procent de Ocupare a Terenului</label>
                                            {{Form::text('pot', null, ['class' => 'form-control'])}}
                                        </div>
                                    </div>                                                                                
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Coeficient de Utilizare a Terenului</label>
                                            {{Form::text('cut', null, ['class' => 'form-control'])}}
                                        </div>
                                    </div>                                                                                
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Regim de Inaltime</label>
                                            {{Form::text('regim_inaltime', null, ['class' => 'form-control'])}}
                                        </div>
                                    </div>
                                    <div class="checkbox ">
                                        <div class="col-sm-12">
                                            {{Form::checkbox('reglementari_urbanistice',1,null, ['id' => 'checkbox'])}}
                                            <label for="checkbox">Pentru Aceasta Zona Exista Reglemantarile Urbanistice</label>                                            
                                            {{Form::checkbox('scos_circuit_agricol',1,null, ['id' => 'checkbox2'])}}
                                            <label for="checkbox2">Scos din Circuitul Agricol</label>                                            
                                            {{Form::checkbox('cadastru',1,null, ['id' => 'checkbox3'])}}
                                            <label for="checkbox3">Cadastru</label>                                       
                                            {{Form::checkbox('intabulare',1,null, ['id' => 'checkbox4'])}}
                                            <label for="checkbox4">Intabulare</label>
                                        </div>                                       
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Proiect Constructie</label>
                                        {{Form::file('proiect_constructie');}}
                                    </div>
                                </div>
                            </div>  
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">Detalii Despre Utilitati</div>
                                </div>
                                <div class="panel-body">
                                    <div class="checkbox ">
                                        <div class="col-sm-12">
                                            {{Form::checkbox('apa',1,null, ['id' => 'checkbox5'])}}
                                            <label for="checkbox5">Apa</label>                                            
                                            {{Form::checkbox('canalizare',1,null, ['id' => 'checkbox6'])}}
                                            <label for="checkbox6">Canalizare</label>                                            
                                            {{Form::checkbox('gaz',1,null, ['id' => 'checkbox7'])}}
                                            <label for="checkbox7">Gaz</label>                                       
                                            {{Form::checkbox('curent',1,null, ['id' => 'checkbox8'])}}
                                            <label for="checkbox8">Curent</label>
                                        </div>                                       
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">Detalii Despre Acces si Transport</div>
                                </div>
                                <div class="panel-body">
                                    <div class="checkbox ">
                                        <div class="col-sm-12">
                                            {{Form::checkbox('amenajare_strazi_asfaltate',1,null, ['id' => 'checkbox9'])}}
                                            <label for="checkbox9">Amenajare Strazi Asfaltate</label>                                            
                                            {{Form::checkbox('mijloace_transport',1,null, ['id' => 'checkbox10'])}}
                                            <label for="checkbox10">Mijloace de Transport</label>                                            
                                            {{Form::checkbox('iluminat_stradal',1,null, ['id' => 'checkbox11'])}}
                                            <label for="checkbox11">Iluminat Stradal</label>                                                                                   
                                        </div>                                       
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">Alte Caracteristici</div>
                                </div>
                                <div class="panel-body">
                                    <div class="checkbox ">
                                        <div class="col-sm-12">
                                            {{Form::checkbox('oportunitate_investitie',1,null, ['id' => 'checkbox12'])}}
                                            <label for="checkbox12">Oportunitate de Investitie</label>                                            
                                            {{Form::checkbox('teren_imprejmuit',1,null, ['id' => 'checkbox13'])}}
                                            <label for="checkbox13">Teren imprejmuit</label>                                                                                                                                                              
                                        </div>                                       
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="clearfix"></div>
                                                                        

                            {{ $errors->first() }}
                            {{Form::close()}}
                          
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
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        Acte / Avize
                                    </div>
                                    <div class="tools">
                                        <a class="collapse" href="javascript:;"></a>
                                        <a class="config" data-toggle="modal" href="#grid-config"></a>
                                        <a class="reload" href="javascript:;"></a>
                                        <a class="remove" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="panel-body no-scroll no-padding">
                                    <form action="{{ URL::route('administrator.attachment.store') }}" id="dropzone-documents" class="new-dropzone no-margin">                                        
                                    </form>                                    
                                </div>
                            </div>
                            <button class="btn btn-primary" id="add-land-submit">Add Land</button>
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