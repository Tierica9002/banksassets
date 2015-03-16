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
                <li><a href="#" class="active">Edit Residential Complex</a>
                </li>
            </ul>
            <!-- END BREADCRUMB -->
            <div class="row">
                <div class="col-lg-12 col-md-12 ">
                    <!-- START PANEL -->

                    <div class="panel panel-transparent">
                        <div class="panel-body">
                            {{ Form::open(['route' => ['administrator.residentialcomplex.update', $residential->id],'method' => 'put', 'role' => 'form', 'autocomplete' => 'off', 'id' => 'add-residential']) }}
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
                                        {{Form::textarea('descriere', $residential->descriere, ['id' => 'wysiwyg5', 'class' => 'wysiwyg demo-form-wysiwyg'])}}
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
                                            {{Form::text('tip_imobil', $residential->tip_imobil, ['class' => 'form-control'])}}
                                        </div>
                                    </div>     
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Stare Imobil</label>
                                            {{Form::text('stare_imobil', $residential->stare_imobil, ['class' => 'form-control'])}}
                                        </div>
                                    </div>                                    
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Suprafata Teren</label>
                                            {{Form::text('suprafata_teren', $residential->suprafata_teren, ['class' => 'form-control'])}}
                                        </div>
                                    </div>                                    
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Nr. Imobile</label>
                                            {{Form::text('nr_imobile', $residential->nr_imobile, ['class' => 'form-control'])}}
                                        </div>
                                    </div>                                    
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Regim Inaltime</label>
                                            {{Form::text('regim_inaltime', $residential->regim_inaltime, ['class' => 'form-control'])}}
                                        </div>
                                    </div>                                    
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Structura de Rezistenta</label>
                                            {{Form::text('structura_de_rezistenta', $residential->structura_de_rezistenta, ['class' => 'form-control'])}}
                                        </div>
                                    </div>                                    
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Suprafata Construita</label>
                                            {{Form::text('suprafata_construita', $residential->suprafata_construita, ['class' => 'form-control'])}}
                                        </div>
                                    </div>                                    
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Suprafata Construita</label>
                                            {{Form::text('suprafata_utila', $residential->suprafata_utila, ['class' => 'form-control'])}}
                                        </div>
                                    </div>                                    
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Nr. Locuinte</label>
                                            {{Form::text('nr_locuinte', $residential->nr_locuinte, ['class' => 'form-control'])}}
                                        </div>
                                    </div>                                    
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Tip Locuinte</label>
                                            {{Form::text('tip_locuinte', $residential->tip_locuinte, ['class' => 'form-control'])}}
                                        </div>
                                    </div>                                                                                                                                     
                                </div>                                
                            </div>  
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">Modalitati de plata</div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-sm-12">
                                        <div class="checkbox">
                                            {{Form::checkbox('credit_imobiliar',1,$residential->credit_imobiliar, ['id' => 'checkbox'])}}
                                            <label for="checkbox">Credit Imobiliar</label>         
                                            {{Form::checkbox('credit_prima_casa',1,$residential->credit_prima_casa, ['id' => 'checkbox2'])}}
                                            <label for="checkbox2">Credit Prima Casa</label>         
                                            {{Form::checkbox('cash',1, $residential->cash, ['id' => 'checkbox3'])}}
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
                                            {{Form::checkbox('loc_de_joaca',1, $residential->loc_de_joaca, ['id' => 'checkbox4'])}}
                                            <label for="checkbox4">Loc de Joaca</label>         
                                            {{Form::checkbox('parc',1,$residential->parc, ['id' => 'checkbox5'])}}
                                            <label for="checkbox5">Parc</label>         
                                            {{Form::checkbox('parcare',1,$residential->parcare, ['id' => 'checkbox6'])}}
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
                                            {{Form::checkbox('gradinita',1, $residential->gradinita, ['id' => 'checkbox7'])}}
                                            <label for="checkbox7">Gradinita</label>         
                                            {{Form::checkbox('scoala',1,$residential->scoala, ['id' => 'checkbox8'])}}
                                            <label for="checkbox8">Scoala</label>         
                                            {{Form::checkbox('after_school',1,$residential->after_school, ['id' => 'checkbox9'])}}
                                            <label for="checkbox9">After School</label>         
                                            {{Form::checkbox('institutii_medicale',1,$residential->institutii_medicale, ['id' => 'checkbox10'])}}
                                            <label for="checkbox10">Institutii Medicale</label>         
                                            {{Form::checkbox('centre_comerciale',1, $residential->centre_comerciale, ['id' => 'checkbox11'])}}
                                            <label for="checkbox11">Centre Comerciale</label>         
                                            {{Form::checkbox('mijloace_transport',1,$residential->mijloace_transport, ['id' => 'checkbox12'])}}
                                            <label for="checkbox12">Mijloace transport</label>         
                                        </div>
                                    </div>
                                </div>
                            </div>                                                                            
                            <div class="clearfix"></div>                                                                        
                               @foreach ($photos as $photo)
                                    <img width="200"  src="{{URL::to('/')}}/uploaded_files/{{$photo->filename}}" />
                                @endforeach
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
                            <button class="btn btn-primary" id="add-residential-submit">Edit Residential</button>
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