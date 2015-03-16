@extends('frontend.layouts.main')
@section('content')
<div id="page-content">
    <!-- Breadcrumb -->
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Right Sidebar</li>
        </ol>
    </div>
    <!-- end Breadcrumb -->

    <div class="container">
        <div class="row">
            <!-- left sidebar -->
            @include('frontend.partials.left_sidebar')                       
            <!-- end left Sidebar -->
            <!-- Content -->
            <div class="col-md-6 col-sm-6">
                <section id="content">
                    <header><h1></h1></header>
                    <section>
                        <div class="stat-section" id="stat-section-1">
                            <script src="http://www.imobiliare.ro/widgets/js-indice-luna-bucuresti-5"></script> 
                            <div style="margin:0;border:0;outline:0;vertical-align:baseline;font-size:11px;background: #fff url(http://www.imobiliare.ro/imagini/widgets/w.png) no-repeat 0 0;display: block;width:290px;height:42px;line-height:42px;padding:0 10px 0 0;text-align:right;"><a href="http://www.imobiliare.ro?utm_source=widget_indice&utm_campaign=widgets&utm_medium=sigla" style="height:42px; width:120px; display:block; float:left" target="_blank" title="Anunturi imobiliare"></a><a href="http://www.imobiliare.ro/sugestie-pret?utm_source=widget_indice&utm_campaign=widgets&utm_medium=link_sugestie" style="height:37px;margin-top:5px; display:block; float:right;" target="_blank">Afl&#259; c&#226;t cost&#259; locuin&#355;a ta!</a></div>
                        </div>
                        <div class="stat-section" id="stat-section-2">
                            <script src="http://www.imobiliare.ro/widgets/js-indice-luna-bucuresti-1"></script> 
                            <div style="margin:0;border:0;outline:0;vertical-align:baseline;font-size:11px;background: #fff url(http://www.imobiliare.ro/imagini/widgets/w.png) no-repeat 0 0;display: block;width:290px;height:42px;line-height:42px;padding:0 10px 0 0;text-align:right;"><a href="http://www.imobiliare.ro?utm_source=widget_indice&utm_campaign=widgets&utm_medium=sigla" style="height:42px; width:120px; display:block; float:left" target="_blank" title="Anunturi imobiliare"></a><a href="http://www.imobiliare.ro/sugestie-pret?utm_source=widget_indice&utm_campaign=widgets&utm_medium=link_sugestie" style="height:37px;margin-top:5px; display:block; float:right;" target="_blank">Afl&#259; c&#226;t cost&#259; locuin&#355;a ta!</a></div>
                        </div>
                        <div class="stat-section" id="stat-section-3">
                            <script src="http://www.imobiliare.ro/widgets/js-indice-luna-bucuresti-2"></script> 
                            <div style="margin:0;border:0;outline:0;vertical-align:baseline;font-size:11px;background: #fff url(http://www.imobiliare.ro/imagini/widgets/w.png) no-repeat 0 0;display: block;width:290px;height:42px;line-height:42px;padding:0 10px 0 0;text-align:right;"><a href="http://www.imobiliare.ro?utm_source=widget_indice&utm_campaign=widgets&utm_medium=sigla" style="height:42px; width:120px; display:block; float:left" target="_blank" title="Anunturi imobiliare"></a><a href="http://www.imobiliare.ro/sugestie-pret?utm_source=widget_indice&utm_campaign=widgets&utm_medium=link_sugestie" style="height:37px;margin-top:5px; display:block; float:right;" target="_blank">Afl&#259; c&#226;t cost&#259; locuin&#355;a ta!</a></div>
                        </div>
                        <div class="stat-section" id="stat-section-4">
                            <script src="http://www.imobiliare.ro/widgets/js-indice-luna-bucuresti-3"></script> 
                            <div style="margin:0;border:0;outline:0;vertical-align:baseline;font-size:11px;background: #fff url(http://www.imobiliare.ro/imagini/widgets/w.png) no-repeat 0 0;display: block;width:290px;height:42px;line-height:42px;padding:0 10px 0 0;text-align:right;"><a href="http://www.imobiliare.ro?utm_source=widget_indice&utm_campaign=widgets&utm_medium=sigla" style="height:42px; width:120px; display:block; float:left" target="_blank" title="Anunturi imobiliare"></a><a href="http://www.imobiliare.ro/sugestie-pret?utm_source=widget_indice&utm_campaign=widgets&utm_medium=link_sugestie" style="height:37px;margin-top:5px; display:block; float:right;" target="_blank">Afl&#259; c&#226;t cost&#259; locuin&#355;a ta!</a></div>
                        </div>
                        <div class="stat-section" id="stat-section-5">
                            <script src="http://www.imobiliare.ro/widgets/js-indice-luna-bucuresti-4"></script> 
                            <div style="margin:0;border:0;outline:0;vertical-align:baseline;font-size:11px;background: #fff url(http://www.imobiliare.ro/imagini/widgets/w.png) no-repeat 0 0;display: block;width:290px;height:42px;line-height:42px;padding:0 10px 0 0;text-align:right;"><a href="http://www.imobiliare.ro?utm_source=widget_indice&utm_campaign=widgets&utm_medium=sigla" style="height:42px; width:120px; display:block; float:left" target="_blank" title="Anunturi imobiliare"></a><a href="http://www.imobiliare.ro/sugestie-pret?utm_source=widget_indice&utm_campaign=widgets&utm_medium=link_sugestie" style="height:37px;margin-top:5px; display:block; float:right;" target="_blank">Afl&#259; c&#226;t cost&#259; locuin&#355;a ta!</a></div>
                        </div>
                        <div class="stat-section" id="stat-section-6">
                            <script src="http://www.imobiliare.ro/widgets/js-indice-luna-bucuresti-4"></script> 
                            <div style="margin:0;border:0;outline:0;vertical-align:baseline;font-size:11px;background: #fff url(http://www.imobiliare.ro/imagini/widgets/w.png) no-repeat 0 0;display: block;width:290px;height:42px;line-height:42px;padding:0 10px 0 0;text-align:right;"><a href="http://www.imobiliare.ro?utm_source=widget_indice&utm_campaign=widgets&utm_medium=sigla" style="height:42px; width:120px; display:block; float:left" target="_blank" title="Anunturi imobiliare"></a><a href="http://www.imobiliare.ro/sugestie-pret?utm_source=widget_indice&utm_campaign=widgets&utm_medium=link_sugestie" style="height:37px;margin-top:5px; display:block; float:right;" target="_blank">Afl&#259; c&#226;t cost&#259; locuin&#355;a ta!</a></div>
                        </div>
                        <div class="stat-section" id="stat-section-7">
                            <script src="http://www.imobiliare.ro/widgets/js-indice-luna-bucuresti-4"></script> 
                            <div style="margin:0;border:0;outline:0;vertical-align:baseline;font-size:11px;background: #fff url(http://www.imobiliare.ro/imagini/widgets/w.png) no-repeat 0 0;display: block;width:290px;height:42px;line-height:42px;padding:0 10px 0 0;text-align:right;"><a href="http://www.imobiliare.ro?utm_source=widget_indice&utm_campaign=widgets&utm_medium=sigla" style="height:42px; width:120px; display:block; float:left" target="_blank" title="Anunturi imobiliare"></a><a href="http://www.imobiliare.ro/sugestie-pret?utm_source=widget_indice&utm_campaign=widgets&utm_medium=link_sugestie" style="height:37px;margin-top:5px; display:block; float:right;" target="_blank">Afl&#259; c&#226;t cost&#259; locuin&#355;a ta!</a></div>
                        </div>
                    </section>
                </section><!-- /#agent-detail -->
            </div><!-- /.col-md-9 -->
            <!-- end Content -->
            <!-- sidebar -->
            @include('frontend.partials.right_sidebar')                       
            <!-- end Sidebar -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->
@stop