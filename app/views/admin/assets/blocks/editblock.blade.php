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
                    <p>Blocks</p>
                </li>
                <li><a href="#" class="active">Edit Block</a>
                </li>
            </ul>
            <!-- END BREADCRUMB -->
            <div class="row">
                <div class="col-lg-12 col-md-12 ">
                    <!-- START PANEL -->

                    <div class="panel panel-transparent">
                        <div class="panel-body">
                            {{ Form::open(['route' => ['administrator.block.update', $block->id],'method' => 'put', 'role' => 'form', 'autocomplete' => 'off', 'id' => 'add-block']) }}
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
                                        {{Form::textarea('descriere', $block->descriere, ['id' => 'wysiwyg5', 'class' => 'wysiwyg demo-form-wysiwyg'])}}
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
                                            <?php $checked = false; ?>
                                            @foreach ($residentials as $residential)
                                            @if ($residential->id == $block->residential_id) 
                                            <?php $checked = true; ?>                                             
                                            @else
                                            <?php $checked = false; ?>                                             
                                            @endif                                             
                                            {{Form::radio('residential_id',$residential->id, $checked, ['id' => $residential->id])}}
                                            <label for="{{$residential->id}}">{{$residential->id}}</label>                                                  
                                            @endforeach                                                                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">Facilitati, dotari si utilitati</div>
                                </div>
                                <div class="panel-body">                                   
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Certificat Performanta Energetica Clasa</label>
                                            {{Form::text('certificat_performanta_energetica', $block->certificat_performanta_energetica, ['class' => 'form-control'])}}
                                        </div>
                                    </div>    
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Holuri de Acces Placate cu</label>
                                            {{Form::text('placaj_holuri_acces', $block->placaj_holuri_acces, ['class' => 'form-control'])}}
                                        </div>
                                    </div>    
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Lifturi Silentioase Marca</label>
                                            {{Form::text('marca_lift', $block->marca_lift, ['class' => 'form-control'])}}
                                        </div>
                                    </div>    
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Fatada Placata cu Polistiren de</label>
                                            {{Form::text('fatada_polistiren', $block->fatada_polistiren, ['class' => 'form-control'])}}
                                        </div>
                                    </div>    
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Tamplarie Exterioara PVC</label>
                                            {{Form::text('tamplarie_exterioara_pvc', $block->tamplarie_exterioara_pvc, ['class' => 'form-control'])}}
                                        </div>
                                    </div>    
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Usi de Exterior Anti-efractie</label>
                                            {{Form::text('usa_exterior_anti_efractie', $block->usa_exterior_anti_efractie, ['class' => 'form-control'])}}
                                        </div>
                                    </div>    
                                    <div class="col-sm-4">
                                        <div class="form-group form-group-default">
                                            <label>Gresie si Faianta de Import</label>
                                            {{Form::text('gresie_faianta_import', $block->gresie_faianta_import, ['class' => 'form-control'])}}
                                        </div>
                                    </div>                                        
                                    <div class="col-sm-12">
                                        <div class="checkbox">
                                            {{Form::checkbox('aer_conditionat',1,$block->aer_conditionat, ['id' => 'checkbox'])}}
                                            <label for="checkbox">Aer Conditionat</label>         
                                            {{Form::checkbox('centrale_termice_proprii',1,$block->centrale_termice_proprii, ['id' => 'checkbox2'])}}
                                            <label for="checkbox2">Centrale Termice Proprii</label>         
                                            {{Form::checkbox('video_interfon',1,$block->video_interfon, ['id' => 'checkbox3'])}}
                                            <label for="checkbox3">Video Interfon</label>         
                                            {{Form::checkbox('locuinte_racordate',1,$block->locuinte_racordate, ['id' => 'checkbox4'])}}
                                            <label for="checkbox4">Locuintele Sunt Racordate la Toate Unitatile</label>         
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
                            <button class="btn btn-primary" id="add-block-submit">Edit Block</button>
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