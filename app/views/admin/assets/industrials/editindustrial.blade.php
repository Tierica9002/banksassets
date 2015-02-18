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
                <li><a href="#" class="active">Edit Industrial</a>
                </li>
            </ul>
            <!-- END BREADCRUMB -->
            <div class="row">
                <div class="col-lg-12 col-md-12 ">
                    <!-- START PANEL -->

                    <div class="panel panel-transparent">
                        <div class="panel-body">
                            {{ Form::model($industrial, ['route' => ['administrator.industrial.update', $industrial->id],'method' => 'put', 'role' => 'form', 'autocomplete' => 'off', 'id' => 'add-industrial']) }}
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
                                    <div class="panel-title">Detalii</div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-sm-6">
                                        <div class="form-group form-group-default">
                                            <label>Categorii clasificare</label>
                                            {{Form::select('categorii_clasificare', array('Depozite verzi' => 'Depozite verzi', 'Depozite clasa A' => 'Depozite clasa A',
                                                        'Depozite clasa B' => 'Depozite clasa B', 'Depozite clasa C' => 'Depozite clasa C'), null, ['class' => 'full-width', 'data-init-plugin' => 'select2']);}}                                           
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-group-default">
                                            <label>Stadiul Cladirii</label>
                                           {{Form::select('stadiul_cladirii', array('Existenta' => 'Existenta',
                                                        'In Constructie' => 'In Constructie', 'Planificata' => 'Planificata'), null, ['class' => 'full-width', 'data-init-plugin' => 'select2']);}}                                           
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group form-group-default">
                                            <label>Suprafata Totala a Parcului</label>
                                            <input type="text" class="form-control" name="suprafata_totala" value="{{$industrial->suprafata_totala}}" >
                                        </div>
                                    </div>     
                                    <div class="col-sm-3">
                                        <div class="form-group form-group-default">
                                            <label>Suprafata Totala de Inchiriat</label>
                                            <input type="text" class="form-control" name="suprafata_totala_inchiriat" value="{{$industrial->suprafata_totala_inchiriat}}" >
                                        </div>
                                    </div>     
                                    <div class="col-sm-3">
                                        <div class="form-group form-group-default">
                                            <label>Spatiu Disponibil</label>
                                            <input type="text" class="form-control" name="spatiu_disponibil" value="{{$industrial->spatiu_disponibil}}">
                                        </div>
                                    </div>     
                                    <div class="col-sm-3">
                                        <div class="form-group form-group-default">
                                            <label>Spatiu de Depozit Minim de Inchiriat</label>
                                            <input type="text" class="form-control" name="spatiu_depozit_minim" value="{{$industrial->spatiu_depozit_minim}}">
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
                                            <input type="text" class="form-control" name="cost_inchieriere_depozit" value="{{$industrial->cost_inchieriere_depozit}}">
                                        </div>
                                    </div>     
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Depozit/garantie bancara</label>
                                            <input type="text" class="form-control" name="depozit_garantie_bancara" value="{{$industrial->depozit_garantie_bancara}}">
                                        </div>
                                    </div>     
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Durata inchiriere minima</label>
                                            <input type="text" class="form-control" name="durata_inchiriere_minima" value="{{$industrial->durata_inchiriere_minima}}">
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
                                            <input type="text" class="form-control" name="anul_constructiei" value="{{$industrial->anul_constructiei}}">
                                        </div>
                                    </div>     
                                    <div class="col-sm-6">
                                        <div class="form-group form-group-default">
                                            <label>Chiriasi</label>
                                            <input type="text" class="form-control" name="chiriasi" value="{{$industrial->chiriasi}}">
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
                                            <input type="text" class="form-control" name="cladire" value="{{$industrial->cladire}}">
                                        </div>
                                    </div>     
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Total spatiu de depozit (m <sup>2</sup>)</label>
                                            <input type="text" class="form-control" name="total_spatiu_depozit" value="{{$industrial->total_spatiu_depozit}}">
                                        </div>
                                    </div>     
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Spatiu de Depozit Disponibil (m <sup>2</sup>)</label>
                                            <input type="text" class="form-control" name="spatiu_depozit_disponibil" value="{{$industrial->spatiu_depozit_disponibil}}">
                                        </div>
                                    </div>     
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Cost de inchiriere depozit, minim: </label>
                                            <input type="text" class="form-control" name="cost_inchiriere_depozit_minim" value="{{$industrial->cost_inchiriere_depozit_minim}}">
                                        </div>
                                    </div>     
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Cost de inchiriere depozit, maxim:</label>
                                            <input type="text" class="form-control" name="cost_inchiriere_depozit_maxim" value="{{$industrial->cost_inchiriere_depozit_maxim}}">
                                        </div>
                                    </div>                                          
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Spatiu Total Birouri (m <sup>2</sup>)</label>
                                            <input type="text" class="form-control" name="spatiu_total_birouri" value="{{$industrial->spatiu_total_birouri}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Spatiu Birou Disponibil (m <sup>2</sup>)</label>
                                            <input type="text" class="form-control" name="spatiu_birou_disponibil" value="{{$industrial->spatiu_birou_disponibil}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Cost inchiere birouri, minim</label>
                                            <input type="text" class="form-control" name="cost_inchiere_birouri_minim" value="{{$industrial->cost_inchiere_birouri_minim}}">
                                        </div>
                                    </div>     
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Cost inchiriere birouri, maxim</label>
                                            <input type="text" class="form-control" name="cost_inchiere_birouri_minim" value="{{$industrial->cost_inchiere_birouri_minim}}">
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
                                            {{Form::checkbox('benzinarie',null,null, ['id' => 'checkbox1'])}}
                                            <label for="checkbox1">Benzinarie</label>
                                            {{Form::checkbox('spatiu_manevre',null,null, ['id' => 'checkbox2'])}}
                                            <label for="checkbox2">Spatiu Pentru Manevre</label>                                                                                        
                                            {{Form::checkbox('productie',null,null, ['id' => 'checkbox3'])}}
                                            <label for="checkbox3">Productie</label>                                                                                        
                                            {{Form::checkbox('acces_transport_public',null,null, ['id' => 'checkbox4'])}}
                                            <label for="checkbox4">Acces Transport Public</label>
                                            {{Form::checkbox('echipa_management_parc',null,null, ['id' => 'checkbox5'])}}
                                            <label for="checkbox5">Echipa de Management Parc In Incinta</label>                                            
                                            {{Form::checkbox('restaurant',null,null, ['id' => 'checkbox6'])}}
                                            <label for="checkbox6">Restaurant</label>
                                            {{Form::checkbox('birouri',null,null, ['id' => 'checkbox7'])}}
                                            <label for="checkbox7">Birouri</label>
                                        </div>
                                        <div class="col-sm-12">
                                            {{Form::checkbox('acces_autostrada',null,null, ['id' => 'checkbox8'])}}
                                            <label for="checkbox8">Acces Direct Autostrada</label>
                                            {{Form::checkbox('parcare_autovehicule',null,null, ['id' => 'checkbox9'])}}
                                            <label for="checkbox9">Parcare Pentru Autovehicule</label>
                                            {{Form::checkbox('servicii_catering',null,null, ['id' => 'checkbox10'])}}
                                            <label for="checkbox10">Servicii Catering</label>
                                            {{Form::checkbox('access_separat_personal_birou',null,null, ['id' => 'checkbox11'])}}
                                            <label for="checkbox11">Acces Separat Pentru Personal Birou</label>
                                            {{Form::checkbox('showroom',null,null, ['id' => 'checkbox12'])}}
                                            <label for="checkbox12">Showroom</label>
                                            {{Form::checkbox('parcare_camioane',null,null, ['id' => 'checkbox13'])}}
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
                                        {{Form::checkbox('paza_permanenta',null,null, ['id' => 'checkbox14'])}}
                                        <label for="checkbox14">Paza permanenta</label>
                                        {{Form::checkbox('protectie_incendiu',null,null, ['id' => 'checkbox15'])}}
                                        <label for="checkbox15">Protectie Incendiu</label>
                                        {{Form::checkbox('generator_electric',null,null, ['id' => 'checkbox16'])}}
                                        <label for="checkbox16">Generator Electric</label>
                                        {{Form::checkbox('sistem_sprinclere',null,null, ['id' => 'checkbox17'])}}
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
                                        {{Form::checkbox('cross_dock',null,null, ['id' => 'checkbox18'])}}
                                        <label for="checkbox18">Cross Dock</label>
                                        {{Form::checkbox('depozitare_vrac',null,null, ['id' => 'checkbox19'])}}
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
                                            <input type="text" class="form-control" name="griaj_stalpi" value="{{$industrial->griaj_stalpi}}" >
                                        </div>
                                    </div>    
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Inaltime Libera</label>
                                            <input type="text" class="form-control" name="inaltime_libera" value="{{$industrial->inaltime_libera}}">
                                        </div>
                                    </div>    
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Incarcare Pardoseala</label>
                                            <input type="text" class="form-control" name="incarcare_pardoseala" value="{{$industrial->incarcare_pardoseala}}">
                                        </div>
                                    </div>    
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Usi Andocare</label>
                                            <input type="text" class="form-control" name="usi_andocare" value="{{$industrial->usi_andocare}}">
                                        </div>
                                    </div>    
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Usi Acces DriveIn</label>
                                            <input type="text" class="form-control" name="acces_drivein" value="{{$industrial->acces_drivein}}">
                                        </div>
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
                                    <form action="{{ URL::route('administrator.attachment.store') }}" class="dropzone no-margin">                                        
                                    </form>                                    
                                </div>
                            </div>
                            <button class="btn btn-primary" id="add-industrial-submit">Edit Industrial</button>
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