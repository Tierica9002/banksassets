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
                    <p>Villas</p>
                </li>
                <li><a href="#" class="active">Add Villa</a>
                </li>
            </ul>
            <!-- END BREADCRUMB -->
            <div class="row">
                <div class="col-lg-12 col-md-12 ">
                    <!-- START PANEL -->

                    <div class="panel panel-transparent">
                        <div class="panel-body">
                            {{ Form::open(['route' => ['administrator.villa.store'],'method' => 'post', 'role' => 'form', 'autocomplete' => 'off']) }}
                            <div class="clearfix"></div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">Caracteristici Generale</div>
                                </div>                                
                                <div class="panel-body">
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Pret</label>
                                            <input type="text" class="form-control" name="pret" >
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
                                        <textarea name="descriere" id="wysiwyg5" class="wysiwyg demo-form-wysiwyg" ></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">Caracteristici Locuinta</div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Nr. Camere</label>
                                            <input type="text" class="form-control" name="nr_camere" >
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Suprafata Utila</label>
                                            <input type="text" class="form-control" name="suprafata_utila" >
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Suprafata Construita</label>
                                            <input type="text" class="form-control" name="suprafata_construita" >
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Suprafata Teren</label>
                                            <input type="text" class="form-control" name="suprafata_teren" >
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Nr. Etaje</label>
                                            <input type="text" class="form-control" name="nr_etaje" >
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Compartimentare</label>
                                            <input type="text" class="form-control" name="compartimentare" >
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Nr. Bucatarii</label>
                                            <input type="text" class="form-control" name="nr_bucatarii" >
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Nr. Bai</label>
                                            <input type="text" class="form-control" name="nr_bai" >
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Nr. Balcoane</label>
                                            <input type="text" class="form-control" name="nr_balcoane" >
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Nr. Terase</label>
                                            <input type="text" class="form-control" name="nr_terase" >
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Pivnita</label>
                                            <input type="text" class="form-control" name="pivnita" >
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Tip Imobil</label>
                                            <input type="text" class="form-control" name="tip_imobil" >
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Stare Imobil</label>
                                            <input type="text" class="form-control" name="stare_imobil" >
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>An Constructie</label>
                                            <input type="text" class="form-control" name="an_constructie" >
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Structura Rezistenta</label>
                                            <input type="text" class="form-control" name="structura_rezistenta" >
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Regim Inaltime</label>
                                            <input type="text" class="form-control" name="regim_inaltime" >
                                        </div>
                                    </div>                                    
                                </div>
                            </div>                         
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">Modalitati de Plata</div>
                                </div>
                                <div class="panel-body">
                                    <div class="checkbox ">
                                        <input type="checkbox" name="credit_imobiliar" value="1" id="checkbox1">
                                        <label for="checkbox1">Credit Imobiliar</label>
                                        <input type="checkbox" name="cash" value="cash" id="checkbox2">
                                        <label for="checkbox2">Cash</label>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">Facilitati Ansamblu Rezidential</div>
                                </div>
                                <div class="panel-body">
                                    <div class="checkbox ">
                                        <input type="checkbox" name="parcare" value="1" id="checkbox3">
                                        <label for="checkbox3">Parcare</label>
                                        <input type="checkbox" name="paza_24" value="1" id="checkbox4">
                                        <label for="checkbox4">Paza 24/24</label>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">Facilitati Ansamblu Rezidential</div>
                                </div>
                                <div class="panel-body">
                                    <div class="checkbox ">
                                        <input type="checkbox" name="curent" value="1" id="checkbox5">
                                        <label for="checkbox5">Curent</label>
                                        <input type="checkbox" name="apa" value="1" id="checkbox6">
                                        <label for="checkbox6">Apa</label>
                                        <input type="checkbox" name="canalizare" value="1" id="checkbox7">
                                        <label for="checkbox7">Canalizare</label>
                                        <input type="checkbox" name="gaz" value="1" id="checkbox8">
                                        <label for="checkbox8">Gaz</label>
                                        <input type="checkbox" name="catv" value="1" id="checkbox9">
                                        <label for="checkbox9">CATV</label>
                                        <input type="checkbox" name="telefon" value="1" id="checkbox10">
                                        <label for="checkbox10">Telefon</label>
                                        <input type="checkbox" name="repartitoare" value="1" id="checkbox11">
                                        <label for="checkbox11">Repartitoare</label>
                                        <input type="checkbox" name="apometere" value="1" id="checkbox12">
                                        <label for="checkbox12">Apometre</label>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">Dotari</div>
                                </div>
                                <div class="panel-body">
                                    <div class="checkbox ">
                                        <input type="checkbox" name="scara_interioara" value="1" id="checkbox13">
                                        <label for="checkbox13">Scara Interioara</label>
                                        <input type="checkbox" name="usa_metalica" value="1" id="checkbox14">
                                        <label for="checkbox14">Usa Metalica</label>
                                        <input type="checkbox" name="centrala_proprie" value="1" id="checkbox15">
                                        <label for="checkbox15">Centrala Proprie</label>
                                        <input type="checkbox" name="wc_serviciu" value="1" id="checkbox16">
                                        <label for="checkbox16">WC Serviciu</label>                                        
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>                       

                            <button class="btn btn-primary" type="submit">Add Villa</button>
                            {{ $errors->first() }}
                            {{Form::close()}}
                            <div class="clearfix"></div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        Upload
                                    </div>
                                    <div class="tools">
                                        <a class="collapse" href="javascript:;"></a>
                                        <a class="config" data-toggle="modal" href="#grid-config"></a>
                                        <a class="reload" href="javascript:;"></a>
                                        <a class="remove" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="panel-body no-scroll no-padding">
                                    <form id="drag-drop-upload" action="{{ URL::route('administrator.attachment.store') }}" class="dropzone no-margin">
                                        <div class="fallback">
                                                <input name="image" type="file" multiple />
                                        </div>
                                        <button class="btn btn-primary" type="submit">Add Villa</button>
                                    </form>                                    
                                </div>
                            </div>
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