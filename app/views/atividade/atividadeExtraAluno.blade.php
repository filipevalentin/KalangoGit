@extends('master')

@section('modals')

<!--  ### MODALS ### -->

@endsection


@section('maincontent')

<section class="content-header">
    <h1>Atividades Extras</h1>
    <ol class="breadcrumb">
        <?php
            $aux2 = Session::get('bc');
        ?>
        @foreach($aux2 as $b)
            <li><a href="{{$b['link']}}" >{{$b['nome']}}</a></li>
        @endforeach
    </ol>
</section>

<section class="content">

    <div class="row">
        <div class="col-md-12">

            <div class="box box-solid">
                <div class="box-header">
                    <h3 class="box-title">Filtre as Atividades por categoria</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">

                        @for($i=0; $i <= (int)($categorias->count()/5); $i++)
        
                            <div class="item">

                            @for($j=4*$i; $j<4*$i+4 && $j<($categorias->count()); $j++)

                                <?php
                                    $atividades = Atividade::where('idCategoria', '=', $categorias[$j]->id)->get()->lists('id'); 
                                    $atividades = json_encode($atividades);
                                
                                ?>

                                <div class="col-sm-3">
                                    <div class="box-body">
                                        <div class="small-box bg-blue">
                                            <div class="inner">
                                                @if(get_class($categorias[$j])!="Modulo")
                                                    <div class="curso" style="cursor:pointer;" id="{{$categorias[$j]->id}}" data-tipo="{{get_class($categorias[$j])}}" data-atividades="{{$atividades}}">
                                                        <h4 style="font-size: 20px;">{{$categorias[$j]->nome}}</h4>
                                                        <p style="margin:0px;">  </p>
                                                    </div>
                                                @endif
                                            </div>

                                            <a href="#" class="small-box-footer"></a>
                                        </div>
                                    </div>
                                </div>

                            @endfor

                            </div>
                        @endfor

                        </div>
                    
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev" style="background-image:none; width:3%;"><span class="glyphicon glyphicon-chevron-left"></span></a>
                        
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next" style="background-image:none; width:3%;"><span class="glyphicon glyphicon-chevron-right"></span></a>

                    </div>
                </div> <!-- /.box-body -->
            </div>
           
            <div class="box box-solid">
                <div class="box-header">
                    <h3 class="box-title">Atividades Extras</h3>
                </div>

                <div class="box-body">

                    <div class="row">
                        @foreach($atividadesExtras as $atividade)
                         @if($atividade->status != '0')
                            <div class="col-lg-3 atividade" id="{{$atividade->id}}" style="margin:10px;">
                                <div id="div_card_4" class="small-box bg-olive card">
                                    <div style="padding: 10px;" class="inner">
                                    <a href="/aluno/atividade/{{$atividade->id}}">
                                        <span style="color:#FFF;font-size:30px;"><b>{{$atividade->nome}}</b></span><br>
                                    </a>
                                    <p>{{$atividade->questoes->count()}} Questões</p>              
                                    </div>
                                </div>
                            </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            

        </div>
    </div> 
</section>

    @section('scripts')

        <script>


        $('div.curso').on('click', (function(event) {
                var atividades = $(this).data('atividades');
                console.log("Mostar atividades: "+atividades);
                $('div.atividade').fadeOut();
                $.each(atividades, function(index, val) {
                    $('div.atividade#'+val).delay(900).fadeIn();
                });
                var tipo = $(this).data('tipo');
                if(tipo == "Modulo"){
                    $('button#criarAtividadeExtra').data('idmodulo', id);
                }
                
                //$("div.conteudocurso[id="+id+"]").delay(401).fadeIn();
            }));


            $('.item').first().addClass("active")

        </script>
		
		<script> //Validações
			
		</script>
    @endsection

@endsection
