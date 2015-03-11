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
                    <p>Industrials</p>
                </li>
                <li><a href="#" class="active">Add Industrial</a>
                </li>
            </ul>
            <!-- END BREADCRUMB -->
            <div class="row">
                <div class="col-lg-12 col-md-12 ">
                    <!-- START PANEL -->

                    <div class="panel panel-transparent">
                        <div class="panel-body">
                            {{ Form::open(['route' => ['administrator.industrial.store'],'method' => 'post', 'role' => 'form', 'autocomplete' => 'off', 'id' => 'add-industrial']) }}
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
                                    <div class="panel-title">Detalii</div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-sm-6">
                                        <div class="form-group form-group-default">
                                            <label>Categorii clasificare</label>
                                            <select name="categorii_clasificare" class="full-width" data-init-plugin="select2">                                                
                                                <option>Depozite verzi</option>                                                    
                                                <option>Depozite clasa A</option>                                                    
                                                <option>Depozite clasa B</option>                                                    
                                                <option>Depozite clasa C</option>                                                    
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-group-default">
                                            <label>Categorii clasificare</label>
                                            <select name="stadiul_cladirii" class="full-width" data-init-plugin="select2">                                                
                                                <option>Existenta</option>                                                    
                                                <option>In Constructie</option>                                                    
                                                <option>Planificata</option>                                                    
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group form-group-default">
                                            <label>Suprafata Totala a Parcului</label>
                                            <input type="text" class="form-control" name="suprafata_totala" >
                                        </div>
                                    </div>     
                                    <div class="col-sm-3">
                                        <div class="form-group form-group-default">
                                            <label>Suprafata Totala de Inchiriat</label>
                                            <input type="text" class="form-control" name="suprafata_totala_inchiriat" >
                                        </div>
                                    </div>     
                                    <div class="col-sm-3">
                                        <div class="form-group form-group-default">
                                            <label>Spatiu Disponibil</label>
                                            <input type="text" class="form-control" name="spatiu_disponibil" >
                                        </div>
                                    </div>     
                                    <div class="col-sm-3">
                                        <div class="form-group form-group-default">
                                            <label>Spatiu de Depozit Minim de Inchiriat</label>
                                            <input type="text" class="form-control" name="spatiu_depozit_minim" >
                                        </div>
                                    </div>     
                                </div>
                            </div>  
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">Cost de Inchiriere Spatiu Depozit</div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Cost de inchriere spatiu depozit</label>
                                            <input type="text" class="form-control" name="cost_inchieriere_depozit" >
                                        </div>
                                    </div>     
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Depozit/garantie bancara</label>
                                            <input type="text" class="form-control" name="depozit_garantie_bancara" >
                                        </div>
                                    </div>     
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Durata inchiriere minima</label>
                                            <input type="text" class="form-control" name="durata_inchiriere_minima" >
                                        </div>
                                    </div>     
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">Informatii suplimentare</div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-sm-6">
                                        <div class="form-group form-group-default">
                                            <label>Anul Construirii</label>
                                            <input type="text" class="form-control" name="anul_constructiei" >
                                        </div>
                                    </div>     
                                    <div class="col-sm-6">
                                        <div class="form-group form-group-default">
                                            <label>Chiriasi</label>
                                            <input type="text" class="form-control" name="chiriasi" >
                                        </div>
                                    </div>     
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">Detalii depozit</div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Cladire</label>
                                            <input type="text" class="form-control" name="cladire" >
                                        </div>
                                    </div>     
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Total spatiu de depozit (m <sup>2</sup>)</label>
                                            <input type="text" class="form-control" name="total_spatiu_depozit" >
                                        </div>
                                    </div>     
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Spatiu de Depozit Disponibil (m <sup>2</sup>)</label>
                                            <input type="text" class="form-control" name="spatiu_depozit_disponibil" >
                                        </div>
                                    </div>     
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Cost de inchiriere depozit, minim: </label>
                                            <input type="text" class="form-control" name="cost_inchiriere_depozit_minim" >
                                        </div>
                                    </div>     
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Cost de inchiriere depozit, maxim:</label>
                                            <input type="text" class="form-control" name="cost_inchiriere_depozit_maxim" >
                                        </div>
                                    </div>                                          
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Spatiu Total Birouri (m <sup>2</sup>)</label>
                                            <input type="text" class="form-control" name="spatiu_total_birouri" >
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Spatiu Birou Disponibil (m <sup>2</sup>)</label>
                                            <input type="text" class="form-control" name="spatiu_birou_disponibil" >
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Cost inchiere birouri, minim</label>
                                            <input type="text" class="form-control" name="cost_inchiere_birouri_minim" >
                                        </div>
                                    </div>     
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Cost inchiriere birouri, maxim</label>
                                            <input type="text" class="form-control" name="cost_inchiere_birouri_minim" >
                                        </div>
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
                                        <div class="col-sm-12">
                                            <input type="checkbox" name="benzinarie" value="1" id="checkbox1">
                                            <label for="checkbox1">Benzinarie</label>
                                            <input type="checkbox" name="spatiu_manevre" value="1" id="checkbox2">
                                            <label for="checkbox2">Spatiu Pentru Manevre</label>
                                            <input type="checkbox" name="productie" value="1" id="checkbox3">
                                            <label for="checkbox3">Productie</label>
                                            <input type="checkbox" name="acces_transport_public" value="1" id="checkbox4">
                                            <label for="checkbox4">Acces Transport Public</label>
                                            <input type="checkbox" name="echipa_management_parc" value="1" id="checkbox5">
                                            <label for="checkbox5">Echipa de Management Parc In Incinta</label>
                                            <input type="checkbox" name="restaurant" value="1" id="checkbox6">
                                            <label for="checkbox6">Restaurant</label>
                                            <input type="checkbox" name="birouri" value="1" id="checkbox7">
                                            <label for="checkbox7">Birouri</label>
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="checkbox" name="acces_autostrada" value="1" id="checkbox8">
                                            <label for="checkbox8">Acces Direct Autostrada</label>
                                            <input type="checkbox" name="parcare_autovehicule" value="1" id="checkbox9">
                                            <label for="checkbox9">Parcare Pentru Autovehicule</label>
                                            <input type="checkbox" name="servicii_catering" value="1" id="checkbox10">
                                            <label for="checkbox10">Servicii Catering</label>
                                            <input type="checkbox" name="access_separat_personal_birou" value="1" id="checkbox11">
                                            <label for="checkbox11">Acces Separat Pentru Personal Birou</label>
                                            <input type="checkbox" name="showroom" value="1" id="checkbox12">
                                            <label for="checkbox12">Showroom</label>
                                            <input type="checkbox" name="parcare_camioane" value="1" id="checkbox13">
                                            <label for="checkbox13">Parcare camioane</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">Parametrii tehnici</div>
                                </div>
                                <div class="panel-body">
                                    <div class="checkbox ">
                                        <input type="checkbox" name="paza_permanenta" value="1" id="checkbox14">
                                        <label for="checkbox14">Paza permanenta</label>
                                        <input type="checkbox" name="protectie_incendiu" value="1" id="checkbox15">
                                        <label for="checkbox15">Protectie Incendiu</label>
                                        <input type="checkbox" name="generator_electric" value="1" id="checkbox16">
                                        <label for="checkbox16">Generator Electric</label>
                                        <input type="checkbox" name="sistem_sprinclere" value="1" id="checkbox17">
                                        <label for="checkbox17">Sistem Sprinclere</label>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">Caracteristici</div>
                                </div>
                                <div class="panel-body">
                                    <div class="checkbox ">
                                        <input type="checkbox" name="cross_dock" value="1" id="checkbox18">
                                        <label for="checkbox18">Cross Dock</label>
                                        <input type="checkbox" name="depozitare_vrac" value="1" id="checkbox19">
                                        <label for="checkbox19">Depozitare Vrac</label>                                        
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>                                                   
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">Specificatii</div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Griaj Stalpi</label>
                                            <input type="text" class="form-control" name="griaj_stalpi" >
                                        </div>
                                    </div>    
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Inaltime Libera</label>
                                            <input type="text" class="form-control" name="inaltime_libera" >
                                        </div>
                                    </div>    
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Incarcare Pardoseala</label>
                                            <input type="text" class="form-control" name="incarcare_pardoseala" >
                                        </div>
                                    </div>    
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Usi Andocare</label>
                                            <input type="text" class="form-control" name="usi_andocare" >
                                        </div>
                                    </div>    
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Usi Acces DriveIn</label>
                                            <input type="text" class="form-control" name="acces_drivein" >
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
                            <button class="btn btn-primary" id="add-industrial-submit">Add Industrial</button>
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