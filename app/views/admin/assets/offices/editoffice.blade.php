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
                <li><a href="#" class="active">Edit Office</a>
                </li>
            </ul>
            <!-- END BREADCRUMB -->
            <div class="row">
                <div class="col-lg-12 col-md-12 ">
                    <!-- START PANEL -->

                    <div class="panel panel-transparent">
                        <div class="panel-body">
                            {{ Form::open(['route' => ['administrator.office.update', $office->id],'method' => 'put', 'role' => 'form', 'autocomplete' => 'off', 'id' => 'add-office']) }}
                            <div class="clearfix"></div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">Caracteristici Generale</div>
                                </div>                                
                                <div class="panel-body">
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Pret</label>
                                            {{Form::text('pret', $commons->pret, ['class' => 'form-control'])}}
                                        </div>
                                        <div class="checkbox">
                                            <input {{ ($commons->premium_property == 1 ? 'checked' : '')}} type="checkbox" name="premium_property" value="1" id="checkbox1">
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
                                        {{Form::textarea('descriere', $office->descriere, ['id' => 'wysiwyg5', 'class' => 'wysiwyg demo-form-wysiwyg'])}}
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
                                            {{Form::select('categorii_clasificare', array('Cladiri de birouri verzi' => 'Cladiri de birouri verzi', 'Birouri de clasa A' => 'Birouri de clasa A',
                                                        'Birouri de clasa B' => 'Birouri clasa B', 'Birouri de clasa C' => 'Birouri de clasa C', 'Birouri sub 100 mp' => 'Birouri sub 100 mp', 'Birouri spre subinchiriere' => 'Birouri spre subinchiriere',
                                                        'Birouri in apartamente, vile' => 'Birouri in apartamente, vile', 'Birouri instant' => 'Birouri Instant', 'Cladiri  de birouri vanzare' => 'Cladiri de birouri vanzare'), $office->categorii_clasificare, ['class' => 'full-width', 'data-init-plugin' => 'select2']);}}                                           
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-group-default">
                                            <label>Statutul cladirii</label>
                                            {{Form::select('statutul_cladirii', array('Existenta' => 'Existenta', 'In Constructie' => 'In Constructie',
                                                        'Planificata' => 'Planificata'), $office->statutul_cladirii, ['class' => 'full-width', 'data-init-plugin' => 'select2']);}}                                           
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-group-default">
                                            <label>Suprafata Totala Birouri</label>
                                            {{Form::text('suprafata_totala_birouri', $office->suprafata_totala_birouri, ['class' => 'form-control'])}}
                                        </div>
                                    </div>     
                                    <div class="col-sm-6">
                                        <div class="form-group form-group-default">
                                            <label>Birou disponibil</label>
                                            {{Form::text('birou_disponibil', $office->birou_disponibil, ['class' => 'form-control'])}}
                                        </div>
                                    </div>                                           
                                </div>
                                <div class="panel-heading">
                                    <div class="panel-title">Etaje</div>
                                    <a class="add-floor" href="#">Adauga Etaj</a>
                                </div>
                                <div class="panel-body" id="floors">                                       
                                    @foreach ($floors as $floor)
                                    <div class="floor-container">
                                    <div class="col-sm-2">                                        
                                            <label>Etaj {{$floor->nr}}</label><a href="#" class="delete-floor">Sterge Etaj</a>                                                                                    
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group form-group-default">
                                            <label>Suprafata</label>                                                                                    
                                            {{Form::text('surface[]', $floor->surface, ['class' => 'form-control', 'placeholder' => 'Suprafata'])}}                                                                                 
                                        </div>
                                    </div>
                                    <div class="col-sm-5">                                        
                                        <div class="form-group form-group-default">
                                            <label>Cost Chirie</label>
                                            {{Form::text('rent_cost[]', $floor->rent_cost, ['class' => 'form-control', 'placeholder' => 'Cost Chirie'])}}
                                        </div>
                                    </div>                                                
                                    <div style="clear:both;"></div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>  
                            <div class="panel panel-default">                                
                                <div class="panel-body">
                                    <div class="col-sm-3">
                                        <div class="form-group form-group-default">
                                            <label>Birouri min de inchiriat</label>
                                            {{Form::text('birouri_min_inchiriat', $office->birouri_min_inchiriat, ['class' => 'form-control'])}}
                                        </div>
                                    </div>     
                                    <div class="col-sm-3">
                                        <div class="form-group form-group-default">
                                            <label>Rata de Ocupare</label>
                                            {{Form::text('rata_ocupare', $office->rata_ocupare, ['class' => 'form-control'])}}
                                        </div>
                                    </div>     
                                    <div class="col-sm-3">
                                        <div class="form-group form-group-default">
                                            <label>Cost Inchiriere Birouri</label>
                                            {{Form::text('cost_inchiriere_birouri', $office->cost_inchiriere_birouri, ['class' => 'form-control'])}}
                                        </div>
                                    </div>     
                                    <div class="col-sm-3">
                                        <div class="form-group form-group-default">
                                            <label>Pret Vanzare</label>
                                            {{Form::text('pret_vanzare', $office->pret_vanzare, ['class' => 'form-control'])}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">Parcari</div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-sm-6">
                                        <div class="form-group form-group-default">
                                            <label>Tip parcare</label>
                                            {{Form::select('tip_parcare', array('Supraterana' => 'Supraterana', 'Parcare subterana' => 'Parcare subterana'), $office->tip_parcare, ['class' => 'full-width', 'data-init-plugin' => 'select2']);}}
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-group-default">
                                            <label>Cost parcare</label>
                                            {{Form::text('cost_parcare', $office->cost_parcare, ['class' => 'form-control'])}}
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
                                            {{Form::checkbox('cafenea',$office->cafenea,$office->cafenea, ['id' => 'checkbox'])}}
                                            <label for="checkbox">Cafenea</label>                                            
                                            {{Form::checkbox('parcare_pentru_vizitatori',1,$office->parcare_pentru_vizitatori, ['id' => 'checkbox2'])}}
                                            <label for="checkbox2">Parcare Pentru Vizitatori</label>                                            
                                            {{Form::checkbox('cantina',1,$office->cantina, ['id' => 'checkbox3'])}}
                                            <label for="checkbox3">Cantina</label>                                            
                                            {{Form::checkbox('parcare_in_apropiere',1,$office->parcare_in_apropiere, ['id' => 'checkbox4'])}}
                                            <label for="checkbox4">Parcare In Apropiere</label>                                            
                                            {{Form::checkbox('servicii_de_curierat',1,$office->servicii_de_curierat, ['id' => 'checkbox5'])}}
                                            <label for="checkbox5">Servicii De Curierat</label>                                            
                                            {{Form::checkbox('restaurant',1,$office->restaurant, ['id' => 'checkbox6'])}}
                                            <label for="checkbox6">Restaurant</label>                                            
                                            {{Form::checkbox('parc_in_apropiere',1,$office->parc_in_apropiere, ['id' => 'checkbox7'])}}  
                                            <label for="checkbox7">Parc In Apropiere</label>                                            
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
                                        <h5>Detalii Tehnice</h5>
                                          {{Form::checkbox('control_access',1,$office->control_access, ['id' => 'checkbox8'])}}
                                            <label for="checkbox8">Control Acces</label>                                            
                                            {{Form::checkbox('sistem_antiincendiu',1,$office->sistem_antiincendiu, ['id' => 'checkbox9'])}}
                                            <label for="checkbox9">Sistem Antiincendiu</label>                                            
                                            {{Form::checkbox('detectoare_fum_incendiu',1,$office->detectoare_fum_incendiu, ['id' => 'checkbox10'])}}
                                            <label for="checkbox10">Detectoare de fum/incendiu</label>                                            
                                            {{Form::checkbox('tavan_fals',1, $office->tavan_fals, ['id' => 'checkbox11'])}}
                                            <label for="checkbox11">Tavan Fals</label>                                            
                                            {{Form::checkbox('hvac',1, $office->hvac, ['id' => 'checkbox12'])}}
                                            <label for="checkbox12">HVAC</label>                                            
                                            {{Form::checkbox('ventiloconvectoare_2_tevi',1,$office->ventiloconvectoare_2_tevi, ['id' => 'checkbox13'])}}
                                            <label for="checkbox13">Ventiloconvectoare cu 2 tevi</label>                                            
                                            {{Form::checkbox('incalzire_centrala',1,$office->incalzire_centrala, ['id' => 'checkbox14'])}}  
                                            <label for="checkbox14">Incalzire Centrala</label>                       
                                    </div>
                                    <div class="checkbox ">
                                        <h5>Contoare</h5>
                                            {{Form::checkbox('contoare',1, $office->contoare, ['id' => 'checkbox15'])}}
                                            <label for="checkbox15">Contoare</label>                                            
                                    </div>
                                    <div class="checkbox ">
                                        <h5>Ferestre</h5>
                                            {{Form::checkbox('geamuri_termopan',1, $office->geamuri_termopan, ['id' => 'checkbox16'])}}
                                            <label for="checkbox16">Geamuri Termopan</label>                                            
                                    </div>
                                    <div class="checkbox ">
                                        <h5>Servicii Asigurate In Cladire</h5>
                                            {{Form::checkbox('curatarea_ferestrelor_exterioare',1,$office->curatarea_ferestrelor_exterioare, ['id' => 'checkbox17'])}}
                                            <label for="checkbox17">Curatarea Ferestrelor Exterioare</label>
                                            {{Form::checkbox('paza_permanenta',1,$office->paza_permanenta, ['id' => 'checkbox18'])}}
                                            <label for="checkbox18">Paza Permanenta</label>                                            
                                            {{Form::checkbox('intrenetinere_reparatii_lifturi',1,$office->intrenetinere_reparatii_lifturi, ['id' => 'checkbox19'])}}
                                            <label for="checkbox19">Intretinere Reparatii Lifturi</label>                                            
                                            {{Form::checkbox('administratie_management_proprietate',1, $office->administratie_management_proprietate, ['id' => 'checkbox20'])}}
                                            <label for="checkbox20">Administratie si Management Proprietate</label>                                            
                                    </div>
                                </div>
                            </div>                            
                            <div class="clearfix"></div>                                                   
                             <div class="col-sm-12">
                                @foreach ($photos as $photo)
                                    <img width="200"  src="{{URL::to('/')}}/uploaded_files/{{$photo->filename}}" />
                                @endforeach
                            </div>
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
                            <button class="btn btn-primary" id="add-office-submit">Edit Office</button>
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