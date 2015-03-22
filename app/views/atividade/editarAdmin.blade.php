@extends('master-admin')

@section('modals')

<div class="modal fade" id="editarme" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Editar Questão</h4>
            </div>
            <div class="modal-body">

                <form method="POST" action="/admin/atualizarMultiplaEscolha" id="form" enctype="multipart/form-data">

                    <h3>Pergunta</h3><hr>

                    <div id="div_tipoPergunta-multipla-editar-questao" class="form-group">
                        <label class="control-label" for="idioma"><i id="icone_tipoPergunta-multipla-editar-questao" class="fa"></i> Tipo</label>
                        <select id="pergunta" name="pergunta" onblur="fcn_recarregaCoresMultiplaEditarQuestao();" class="form-control tipoPerguntaObrigatoria-multipla-editar-questao">
                          <option id="texto" value="1">Texto</option> <!-- nessa opção Retirar o campo URL/Arquivo com jquery-->
                          <option id="imagem" value="2">Imagem</option>
                          <option id="audio" value="3">Áudio</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id" name="id">
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="categoria" name="categoria">
                    </div>
                    <div id="div_texto-multipla-editar-questao" class="form-group">
                        <label class="control-label" for="textopergunta"><i id="icone_texto-multipla-editar-questao" class="fa"></i> Texto da Pergunta</label>
                        <input id="textopergunta" name="textopergunta" maxlength="8000" onblur="fcn_recarregaCoresMultiplaEditarQuestao();" class="form-control textoPerguntaObrigatoria-multipla-editar-questao" rows="3" >
                    </div>
                    <div id="div_arquivoPergunta-multipla-editar-questao" class="form-group">
                        <label class="control-label" for="arquivo"><i id="icone_arquivoPergunta-multipla-editar-questao" class="fa"></i> Arquivo</label>
                        <input type="file" id="arquivo" name="arquivo" class="form-control arquivoPerguntaObrigatoria-multipla-editar-questao" onblur="fcn_recarregaCoresMultiplaEditarQuestao();fcn_validaArquivo(this.form, this.form.arquivo.value, 'editar-questao-multipla');" ></input>
                    </div>

                    <div id="" class="form-group">
                        <label class="control-label" for="idioma"><i id="" class="fa"></i> Tópico</label>
                        <select id="topico" name="topico" onblur="" class="form-control">
                        @foreach(Topico::all() as $topico)
                          <option id="texto" value="{{$topico->id}}">{{$topico->nome}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div id="" class="form-group">
                        <label class="control-label" for="idioma"><i id="" class="fa"></i> Dificuldade</label>
                        <select id="dificuldade" name="dificuldade" onblur="" class="form-control">
                          <option id="texto" value="200"> fácil</option>
                          <option id="texto" value="300"> médio</option>
                          <option id="texto" value="400"> difícil</option>
                        </select>
                    </div>
                    
                    <h3>Alternativas</h3><hr>

                    <div id="div_tipoResposta-multipla-editar-questao" class="form-group">
                        <label class="control-label" for="idioma"><i id="icone_tipoResposta-multipla-editar-questao" class="fa"></i> Tipo</label>
                        <select id="resposta" name="resposta" onblur="fcn_recarregaCoresMultiplaEditarQuestao();" class="form-control tipoRespostaObrigatoria-multipla-editar-questao">
                          <option id="texto" value="1">Texto</option> <!-- nessa opção Retirar o campo URL/Arquivo com jquery-->
                          <option id="imagem" value="2">Imagem</option>
                          <option id="audio" value="3">Áudio</option>
                        </select>
                    </div>

                    <div id="div_alternativaA-multipla-editar-questao" class="form-group">
                        <label class="control-label" for="a"><i id="icone_alternativaA-multipla-editar-questao" class="fa"></i> Alternativa A</label>
                        <input type="text" autocomplete="off" id="a" name="a" onblur="fcn_recarregaCoresMultiplaEditarQuestao();fcn_validaArquivoResposta(this.form, this.form.a.value, 'A');" maxlength="100" class="form-control alternativaAObrigatoria-multipla-editar-questao"></input>
                    </div>
                    <div id="div_alternativaB-multipla-editar-questao" class="form-group">
                        <label class="control-label" for="b"><i id="icone_alternativaB-multipla-editar-questao" class="fa"></i> Alternativa B</label>
                        <input type="text" autocomplete="off" id="b" name="b" onblur="fcn_recarregaCoresMultiplaEditarQuestao();fcn_validaArquivoResposta(this.form, this.form.a.value, 'B');" maxlength="100" class="form-control alternativaBObrigatoria-multipla-editar-questao"></input>
                    </div>
                    <div id="div_alternativaC-multipla-editar-questao" class="form-group">
                        <label class="control-label" for="c"><i id="icone_alternativaC-multipla-editar-questao" class="fa"></i> Alternativa C</label>
                        <input type="text" autocomplete="off" id="c" name="c" onblur="fcn_recarregaCoresMultiplaEditarQuestao();fcn_validaArquivoResposta(this.form, this.form.a.value, 'C');" maxlength="100" class="form-control alternativaCObrigatoria-multipla-editar-questao"></input>
                    </div>
                    <div id="div_alternativaD-multipla-editar-questao" class="form-group">
                        <label class="control-label" for="d"><i id="icone_alternativaD-multipla-editar-questao" class="fa"></i> Alternativa D</label>
                        <input type="text" autocomplete="off" id="d" name="d" onblur="fcn_recarregaCoresMultiplaEditarQuestao();fcn_validaArquivoResposta(this.form, this.form.a.value, 'D');" maxlength="100" class="form-control alternativaDObrigatoria-multipla-editar-questao"></input>
                    </div>
                    <div id="div_respostaCorreta-multipla-editar-questao" class="form-group">
                        <label class="control-label" for="idioma"><i id="icone_respostaCorreta-multipla-editar-questao" class="fa"></i> Resposta Correta</label>
                        <select name="respostacerta" id="respostacerta" onblur="fcn_recarregaCoresMultiplaEditarQuestao();" class="form-control respostaCorretaObrigatoria-multipla-editar-questao">
                          <option id="a" value="a">Alternativa A</option> <!-- nessa opção Retirar o campo URL/Arquivo com jquery-->
                          <option id="b" value="b">Alternativa B</option>
                          <option id="c" value="c">Alternativa C</option>
                          <option id="d" value="d">Alternativa D</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-primary btn-salvar-multipla-editar-questao" value="Salvar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editarru" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Editar Questão</h4>
            </div>
            <div class="modal-body">

                <form method="POST" action="/admin/atualizarRespostaUnica" id="form" enctype="multipart/form-data">

                    <h3>Pergunta</h3><hr>

                    <div id="div_tipoPergunta-dissertativa-editar-questao" class="form-group">
                        <label class="control-label" for="idioma"><i id="icone_tipoPergunta-dissertativa-editar-questao" class="fa"></i> Tipo</label>
                        <select id="pergunta" name="pergunta" onblur="fcn_recarregaCoresDissertativaEditarQuestao();" class="form-control tipoPerguntaObrigatoria-dissertativa-editar-questao">
                          <option id="texto" value="1">Texto</option> <!-- nessa opção Retirar o campo URL/Arquivo com jquery-->
                          <option id="imagem" value="2">Imagem</option>
                          <option id="audio" value="3">Áudio</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id" name="id">
                    </div>
                    <div id="div_texto-dissertativa-editar-questao" class="form-group">
                        <label class="control-label" for="textoPergunta"><i id="icone_texto-dissertativa-editar-questao" class="fa"></i> Texto da Pergunta</label>
                        <input id="textopergunta" name="textopergunta" maxlength="8000" onblur="fcn_recarregaCoresDissertativaEditarQuestao();" class="form-control textoPerguntaObrigatoria-dissertativa-editar-questao" rows="3" >
                    </div>
                    <div id="div_arquivoPergunta-dissertativa-editar-questao" class="form-group">
                        <label class="control-label" for="arquivo"><i id="icone_arquivoPergunta-dissertativa-editar-questao" class="fa"></i> Arquivo</label>
                        <input type="file" id="arquivo" name="arquivo" class="form-control arquivoPerguntaObrigatoria-dissertativa-editar-questao" onblur="fcn_recarregaCoresDissertativaEditarQuestao();fcn_validaArquivo(this.form, this.form.arquivo.value, 'editar-questao-dissertativa');"></input>
                    </div>

                    <div id="" class="form-group">
                        <label class="control-label" for="idioma"><i id="" class="fa"></i> Tópico</label>
                        <select id="topico" name="topico" onblur="" class="form-control">
                        @foreach(Topico::all() as $topico)
                          <option id="texto" value="{{$topico->id}}">{{$topico->nome}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div id="" class="form-group">
                        <label class="control-label" for="idioma"><i id="" class="fa"></i> Dificuldade</label>
                        <select id="dificuldade" name="dificuldade" onblur="" class="form-control">
                          <option id="texto" value="200"> fácil</option>
                          <option id="texto" value="300"> médio</option>
                          <option id="texto" value="400"> difícil</option>
                        </select>
                    </div>
                    
                    <h3>Resposta Correta</h3><hr>

                    <div id="div_resposta-dissertativa-editar-questao" class="form-group">
                        <label class="control-label" for="respostaCerta"><i id="icone_resposta-dissertativa-editar-questao" class="fa"></i> Resposta Correta</label>
                        <input type="text" autocomplete="off" id="respostaCerta" name="respostaCerta" onblur="fcn_recarregaCoresDissertativaEditarQuestao();" maxlength="100" class="form-control respostaObrigatoria-dissertativa-editar-questao"></input>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-primary btn-salvar-dissertativa-editar-questao" value="Salvar">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="criarquestao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Nova Questão</h4>
            </div>
            <div class="modal-body">

                <div class="text-center">
                    <button class="btn btn-primary" type="button" id="btnMe">Múltipla Escolha</button>
                    <button class="btn btn-success" type="button" id="btnRu">Dissertativa</button>
                </div>

                <form method="POST" action="/admin/criarQuestaoME" id="formme" style="display:none;" enctype="multipart/form-data">

                    <h3>Pergunta</h3><hr>

                    <div id="div_tipoPergunta-multipla-nova-questao" class="form-group">
                        <label class="control-label" for="idioma"><i id="icone_tipoPergunta-multipla-nova-questao" class="fa"></i> Tipo</label>
                        <select name="pergunta" id="pergunta" onblur="fcn_recarregaCoresMultiplaNovaQuestao();" class="form-control tipoPerguntaObrigatoria-multipla-nova-questao">
                          <option id="texto" value="1">Texto</option> <!-- nessa opção Retirar o campo URL/Arquivo com jquery-->
                          <option id="imagem" value="2">Imagem</option>
                          <option id="audio" value="3">Áudio</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="hidden" class="form-control" id="idatividade" name="idatividade">
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="categoria" name="categoria">
                    </div>
                    <div id="div_texto-multipla-nova-questao" class="form-group">
                        <label class="control-label" for="textoPergunta"><i id="icone_texto-multipla-nova-questao" class="fa"></i> Texto da Pergunta</label>
                        <input id="textopergunta" name="textopergunta" maxlength="8000" onblur="fcn_recarregaCoresMultiplaNovaQuestao();" class="form-control textoPerguntaObrigatoria-multipla-nova-questao">
                    </div>
                    <div id="div_arquivoPergunta-multipla-nova-questao" class="form-group">
                        <label class="control-label" for="arquivo"><i id="icone_arquivoPergunta-multipla-nova-questao" class="fa"></i> Arquivo</label>
                        <input type="file" id="arquivo" name="arquivo" class="form-control arquivoPerguntaObrigatoria-multipla-nova-questao" onblur="fcn_recarregaCoresMultiplaNovaQuestao();fcn_validaArquivo(this.form, this.form.arquivo.value, 'nova-questao-multipla');"></input>
                    </div>

                    <div id="" class="form-group">
                        <label class="control-label" for="idioma"><i id="" class="fa"></i> Tópico</label>
                        <select id="topico" name="topico" onblur="" class="form-control">
                        @foreach(Topico::all() as $topico)
                          <option id="texto" value="{{$topico->id}}">{{$topico->nome}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div id="" class="form-group">
                        <label class="control-label" for="idioma"><i id="" class="fa"></i> Dificuldade</label>
                        <select id="dificuldade" name="dificuldade" onblur="" class="form-control">
                          <option id="texto" value="200"> fácil</option>
                          <option id="texto" value="300"> médio</option>
                          <option id="texto" value="400"> difícil</option>
                        </select>
                    </div>
                    
                    <h3>Alternativas</h3><hr>

                    <div id="div_tipoResposta-multipla-nova-questao" class="form-group">
                        <label class="control-label" for="idioma"><i id="icone_tipoResposta-multipla-nova-questao" class="fa"></i> Tipo</label>
                        <select name="resposta" id="resposta" onblur="fcn_recarregaCoresMultiplaNovaQuestao();" class="form-control tipoRespostaObrigatoria-multipla-nova-questao">
                          <option id="texto" value="1">Texto</option> <!-- nessa opção Retirar o campo URL/Arquivo com jquery-->
                          <option id="imagem" value="2">Imagem</option>
                          <option id="audio" value="3">Áudio</option>
                        </select>
                    </div>

                    <div id="div_alternativaA-multipla-nova-questao" class="form-group">
                        <label class="control-label" for="a"><i id="icone_alternativaA-multipla-nova-questao" class="fa"></i> Alternativa A</label>
                        <input type="text" autocomplete="off" id="a" name="a" onblur="fcn_recarregaCoresMultiplaNovaQuestao();fcn_validaArquivoResposta(this.form, this.form.a.value, 'A');" maxlength="100" class="form-control alternativaAObrigatoria-multipla-nova-questao"></input>
                    </div>
                    <div id="div_alternativaB-multipla-nova-questao" class="form-group">
                        <label class="control-label" for="b"><i id="icone_alternativaB-multipla-nova-questao" class="fa"></i> Alternativa B</label>
                        <input type="text" autocomplete="off" id="b" name="b" onblur="fcn_recarregaCoresMultiplaNovaQuestao();fcn_validaArquivoResposta(this.form, this.form.b.value, 'B');" maxlength="100" class="form-control alternativaBObrigatoria-multipla-nova-questao"></input>
                    </div>
                    <div id="div_alternativaC-multipla-nova-questao" class="form-group">
                        <label class="control-label" for="c"><i id="icone_alternativaC-multipla-nova-questao" class="fa"></i> Alternativa C</label>
                        <input type="text" autocomplete="off" id="c" name="c" onblur="fcn_recarregaCoresMultiplaNovaQuestao();fcn_validaArquivoResposta(this.form, this.form.c.value, 'C');" maxlength="100" class="form-control alternativaCObrigatoria-multipla-nova-questao"></input>
                    </div>
                    <div id="div_alternativaD-multipla-nova-questao" class="form-group">
                        <label class="control-label" for="d"><i id="icone_alternativaD-multipla-nova-questao" class="fa"></i> Alternativa D</label>
                        <input type="text" autocomplete="off" id="d" name="d" onblur="fcn_recarregaCoresMultiplaNovaQuestao();fcn_validaArquivoResposta(this.form, this.form.d.value, 'D');" maxlength="100" class="form-control alternativaDObrigatoria-multipla-nova-questao"></input>
                    </div>
                    <div id="div_respostaCorreta-multipla-nova-questao" class="form-group">
                        <label class="control-label" for="idioma"><i id="icone_respostaCorreta-multipla-nova-questao" class="fa"></i> Resposta Correta</label>
                        <select name="respostaCerta" id="respostaCerta" onblur="fcn_recarregaCoresMultiplaNovaQuestao();" class="form-control respostaCorretaObrigatoria-multipla-nova-questao">
                          <option id="a" value="a">Alternativa A</option> <!-- nessa opção Retirar o campo URL/Arquivo com jquery-->
                          <option id="b" value="b">Alternativa B</option>
                          <option id="c" value="c">Alternativa C</option>
                          <option id="d" value="d">Alternativa D</option>
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-primary btn-salvar-multipla-nova-questao" value="Salvar">
                    </div>
                </form>
                
                <form action="/admin/criarQuestaoRU" method="POST" id="formru" style="display:none;" enctype="multipart/form-data">

                    <h3>Pergunta</h3><hr>

                    <div id="div_tipoPergunta-dissertativa-nova-questao" class="form-group">
                        <label class="control-label" for="idioma"><i id="icone_tipoPergunta-dissertativa-nova-questao" class="fa"></i> Tipo</label>
                        <select name="pergunta" id="pergunta" onblur="fcn_recarregaCoresDissertativaNovaQuestao();" class="form-control tipoPerguntaObrigatoria-dissertativa-nova-questao">
                          <option id="texto" value="1">Texto</option> <!-- nessa opção Retirar o campo URL/Arquivo com jquery-->
                          <option id="imagem" value="2">Imagem</option>
                          <option id="audio" value="3">Áudio</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="hidden" class="form-control" id="idatividade" name="idatividade">
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="categoria" name="categoria">
                    </div>
                    <div id="div_texto-dissertativa-nova-questao" class="form-group">
                        <label class="control-label" for="textoPergunta"><i id="icone_texto-dissertativa-nova-questao" class="fa"></i> Texto da Pergunta</label>
                        <input id="textopergunta" name="textopergunta" maxlength="8000" onblur="fcn_recarregaCoresDissertativaNovaQuestao();" class="form-control textoPerguntaObrigatoria-dissertativa-nova-questao" rows="3" >
                    </div>
                    <div id="div_arquivoPergunta-dissertativa-nova-questao" class="form-group">
                        <label class="control-label" for="arquivo"><i id="icone_arquivoPergunta-dissertativa-nova-questao" class="fa"></i> Arquivo</label>
                        <input type="file" id="arquivo" name="arquivo" class="form-control arquivoPerguntaObrigatoria-dissertativa-nova-questao" onblur="fcn_recarregaCoresDissertativaNovaQuestao();fcn_validaArquivo(this.form, this.form.arquivo.value, 'nova-questao-dissertativa');" ></input>
                    </div>

                    <div id="" class="form-group">
                        <label class="control-label" for="idioma"><i id="" class="fa"></i> Tópico</label>
                        <select id="topico" name="topico" onblur="" class="form-control">
                        @foreach(Topico::all() as $topico)
                          <option id="texto" value="{{$topico->id}}">{{$topico->nome}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div id="" class="form-group">
                        <label class="control-label" for="idioma"><i id="" class="fa"></i> Dificuldade</label>
                        <select id="dificuldade" name="dificuldade" onblur="" class="form-control">
                          <option id="texto" value="200"> fácil</option>
                          <option id="texto" value="300"> médio</option>
                          <option id="texto" value="400"> difícil</option>
                        </select>
                    </div>
                    
                    <h3>Resposta Correta</h3><hr>

                    <div id="div_resposta-dissertativa-nova-questao" class="form-group">
                        <label class="control-label" for="respostaCerta"><i id="icone_resposta-dissertativa-nova-questao" class="fa"></i> Resposta Correta</label>
                        <input type="text" autocomplete="off" id="respostaCerta" name="respostaCerta" onblur="fcn_recarregaCoresDissertativaNovaQuestao();" maxlength="100" class="form-control respostaObrigatoria-dissertativa-nova-questao"></input>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-primary btn-salvar-dissertativa-nova-questao" value="Salvar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('maincontent')
<section class="content-header">
    <h1>Gerenciar Exercícios</h1>
    <ol class="breadcrumb">
        <li><a href="#" ><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Atividades Extras</li>
		<li class="active">Gerenciar Exercícios</li>
    </ol>
</section>

<section class="content">

    <div class="row">
        <div class="col-md-12">

            <h2 class="page-header">Inglês - Teens - Módulo 1 - Aula 2</h2>

            <div class="col-md-8">
                <div class="box box-solid">
                    <div class="box-header">
                        <h3 class="box-title">{{$atividade->nome}}</h3>
                        <div class="box-tools pull-right" style="padding: 10px 20px 5px 5px;">
                            <button class="btn btn-primary btn-md" style="border-radius: 50px;" data-toggle="modal" data-target="#criarquestao" data-idatividade="{{$atividade->id}}"><i class="fa fa-plus"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="box-group connectedSortable ui-sortable" id="accordion">
                        <?php $aux = 1;
                            $questoes = $atividade->questoes->sortBy('numero');
                        ?>
                            
                            @if($questoes->count() == 0)

                            <div class="callout callout-danger">
                                <h4>Nenhuma questão cadastrada</h4>
                            </div>
                                
                            @endif

                            @foreach($questoes as $questao)
                                @if($questao->tipo == "1")  <!-- Multipla Escolha -->

                                <div class="panel box box-primary ui-sortable-handle">
                                    <div class="box-header">
                                        <h4 class="box-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#ME{{$questao->id}}" class="">Questão {{$aux++}}</a>
                                        </h4>
                                        <div class="box-tools pull-right" style="padding-top: 8px;">
                                            <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#editarme" data-id="{{$questao->id}}" data-textopergunta="{{$questao->textoPergunta}}" data-categoria="{{$questao->categoria}}" data-a="{{$questao->alternativaA}}" data-b="{{$questao->alternativaB}}" data-c="{{$questao->alternativaC}}" data-d="{{$questao->alternativaD}}" data-respostacerta="{{$questao->respostaCerta}}" data-numero="{{$questao->numero}}" data-tipo="me" data-topico="{{$questao->topico->id}}" data-dificuldade="{{$questao->pontos}}"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-times"></i></button>
                                        </div>
                                        <small class="badge pull-right bg-green" style="margin: 12px 10px 0px 5px;"><?php if($questao->topico->nome != null) echo $questao->topico->nome ?></small>
                                    </div>
                                    <div id="ME{{$questao->id}}" class="panel-collapse collapse">
                                        <div class="box-body">
                                            <div class="row" style="margin:0px;">
                                                <div class="box text-center">
                                                    <div class="box-header">
                                                        <h3 class="box-title center" style="float: none;">{{$questao->textoPergunta}}</h3>
                                                    </div>
                                                    <div class="box-body">
                                                    <?php $categoria = (string)($questao->categoria);?>

                                                    @if(substr($categoria, 0, 1)==2)
                                                        <img src="/{{$questao->urlMidia}}" class="img-responsive center" alt="Responsive image" style="display: initial; max-height: 300px;">
                                                    @elseif(substr($categoria, 0, 1)==3)
                                                        <audio id="audio" controls="controls" style="display:none;">  
                                                            <source src="/{{$questao->urlMidia}}" />
                                                        </audio>
                                                        <div id="playParent" class="row">
                                                            <div class="small-box bg-aqua" style="width: 100px; margin:auto; font-size: -webkit-xxx-large;">
                                                                <i id="play" class="ion ion-play" style=""></i>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    
                                                    </div>
                                                    
                                                    <div class="row" style="width: 98%; margin: auto;">

                                                        @if(substr($categoria, 1)==2)
                                                            <div class="col-md-6" style="padding-bottom: 5px;">
                                                                <button class="btn btn-block btn-flat bg-aqua" style="border-radius: 16px;">
                                                                    <img src="/{{$questao->alternativaA}}" class="img-responsive center" alt="Responsive image" style="display: initial; max-height: 100px;">
                                                                </button>
                                                                <button class="btn btn-block btn-flat bg-red" style="border-radius: 16px;">
                                                                     <img src="/{{$questao->alternativaB}}" class="img-responsive center" alt="Responsive image" style="display: initial; max-height: 100px;">
                                                                </button>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <button class="btn btn-block btn-flat bg-green" style="border-radius: 16px;">
                                                                     <img src="/{{$questao->alternativaC}}" class="img-responsive center" alt="Responsive image" style="display: initial; max-height: 100px;">
                                                                </button>
                                                                <button class="btn btn-block btn-flat bg-orange" style="border-radius: 16px;">
                                                                     <img src="/{{$questao->alternativaD}}" class="img-responsive center" alt="Responsive image" style="display: initial; max-height: 100px;">
                                                                </button>
                                                            </div>

                                                        @elseif(substr($questao->categoria, 1)==3)
                                                            <div class="col-md-6 " style="padding-bottom: 5px;">
                                                                <audio id="audio" controls="controls" style="display:none;">  
                                                                    <source src="/{{$questao->alternativaA}}">
                                                                </audio>
                                                                <div id="playParent" class="row" style="margin: auto;padding-left: 30px;">
                                                                    <button class="btn btn-primary" style="  font-size: xx-large;">
                                                                        <i id="play" class="ion ion-play" style=""></i>
                                                                    </button>
                                                                    <button class="btn btn-info" style="width: 140px;  font-size: xx-large;">
                                                                        <i id="enviar" class="ion ion-checkmark" style=""></i>
                                                                    </button>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 " style="padding-bottom: 5px;">
                                                                <audio id="audio" controls="controls" style="display:none;">  
                                                                    <source src="/{{$questao->alternativaB}}">
                                                                </audio>
                                                                <div id="playParent" class="row" style="margin: auto;padding-left: 30px;">
                                                                    <button class="btn btn-primary" style="  font-size: xx-large;">
                                                                        <i id="play" class="ion ion-play" style=""></i>
                                                                    </button>
                                                                    <button class="btn btn-danger" style="width: 140px;  font-size: xx-large;">
                                                                        <i id="enviar" class="ion ion-checkmark" style=""></i>
                                                                    </button>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 " style="padding-bottom: 5px;">
                                                                <audio id="audio" controls="controls" style="display:none;">  
                                                                    <source src="/{{$questao->alternativaC}}">
                                                                </audio>
                                                                <div id="playParent" class="row" style="margin: auto;padding-left: 30px;">
                                                                    <button class="btn btn-primary" style="  font-size: xx-large;">
                                                                        <i id="play" class="ion ion-play" style=""></i>
                                                                    </button>
                                                                    <button class="btn btn-success" style="width: 140px;  font-size: xx-large;">
                                                                        <i id="enviar" class="ion ion-checkmark" style=""></i>
                                                                    </button>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 " style="padding-bottom: 5px;">
                                                                <audio id="audio" controls="controls" style="display:none;">  
                                                                    <source src="/{{$questao->alternativaD}}">
                                                                </audio>
                                                                <div id="playParent" class="row" style="margin: auto;padding-left: 30px;">
                                                                    <button class="btn btn-primary" style="  font-size: xx-large;">
                                                                        <i id="play" class="ion ion-play" style=""></i>
                                                                    </button>
                                                                    <button class="btn btn-warning" style="width: 140px;  font-size: xx-large;">
                                                                        <i id="enviar" class="ion ion-checkmark" style=""></i>
                                                                    </button>
                                                                </div>
                                                            </div>


                                                        @elseif(substr($categoria, 1)==1)
                                                            <div class="col-md-6" style="padding-bottom: 5px;">
                                                                <button class="btn btn-block btn-flat bg-aqua">{{$questao->alternativaA}}</button>
                                                                <button class="btn btn-block btn-flat bg-red">{{$questao->alternativaB}}</button>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <button class="btn btn-block btn-flat bg-green">{{$questao->alternativaC}}</button>
                                                                <button class="btn btn-block btn-flat bg-orange">{{$questao->alternativaD}}</button>
                                                            </div>
                                                        @endif
                                                        

                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-1"></div>

                                                        <div class="col-md-10" style="padding-bottom: 5px;">
                                                            <label for="repostaCorreta" class="control-label">Resposta Correta</label>
                                                           <?php
                                                                switch($questao->respostaCerta)
                                                                {
                                                                    case 'a':
                                                                        echo '<p class="bg-aqua"> A) Azul</p>';
                                                                        break;

                                                                    case 'b':
                                                                        echo '<p class="bg-red"> B) Vermelho</p>';
                                                                        break;

                                                                    case 'c':
                                                                        echo '<p class="bg-green"> C) Verde</p>';
                                                                        break;
                                                                        
                                                                    case 'd':
                                                                        echo '<p class="bg-orange"> D) Laranja</p>';
                                                                        break;

                                                                }
                                                            ?>
                                                        </div>

                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif

                                @if($questao->tipo == "2")  <!-- Dissertativa -->

                                <div class="panel box box-primary ui-sortable-handle">
                                    <div class="box-header">
                                        <h4 class="box-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#RU{{$questao->id}}" class="">Questão {{$aux++}}</a>
                                        </h4>
                                        <div class="box-tools pull-right" style="padding-top: 8px;">
                                            <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#editarru" data-id="{{$questao->id}}" data-textopergunta="{{$questao->textoPergunta}}" data-categoria="{{$questao->categoria}}" data-respostaCerta="{{$questao->respostaCerta}}" data-numero="{{$questao->numero}}" data-tipo="ru" data-topico="{{$questao->topico->id}}" data-dificuldade="{{$questao->pontos}}"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-times"></i></button>
                                        </div>
                                        <small class="badge pull-right bg-green" style="margin: 12px 10px 0px 5px;"><?php if($questao->topico->nome != null) echo $questao->topico->nome ?></small>
                                    </div>
                                    <div id="RU{{$questao->id}}" class="panel-collapse collapse">
                                        <div class="box-body">
                                            <div class="row" style="margin:0px;">
                                                <div class="box text-center">
                                                    <div class="box-header">
                                                        <h3 class="box-title center" style="float: none;">{{$questao->textoPergunta}}</h3>
                                                    </div>
                                                    <div class="box-body">

                                                    @if(substr((string)$questao->categoria, 0, 1)==2)
                                                        <img src="/{{$questao->urlMidia}}" class="img-responsive center" alt="Responsive image" style="display: initial; max-height: 300px;">
                                                    @elseif(substr((string)$questao->categoria, 0, 1)==3)
                                                        <audio id="audio" controls="controls" style="display:none;">  
                                                            <source src="/{{$questao->urlMidia}}" />
                                                        </audio>
                                                        <div id="playParent" class="row">
                                                            <div class="small-box bg-aqua" style="width: 100px; margin:auto; font-size: -webkit-xxx-large;">
                                                                <i id="play" class="ion ion-play" style=""></i>
                                                            </div>
                                                        </div>

                                                        
                                                    @endif

                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-1"></div>

                                                        <div class="col-md-10" style="padding-bottom: 5px;">
                                                            <label for="repostaCorreta" class="control-label">Resposta Correta</label>
                                                            <p>{{$questao->respostaCerta}}</p>
                                                        </div>

                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                            
                        </div>
                    </div><!-- /.box-body -->
                </div>
            </div>

        </div>
    </div> 
</section>
@endsection

@section('scripts')

<script>

    $('#audio, #audioA, #audioB, #audioC, #audioD').on('ended', function(){
        $(this).siblings("div#playParent").find('i#play').removeClass('ion-pause').addClass('ion-play');
    });


    $('i#play').click(function () {
        console.log('Fui clicado');
        var button = $(this);
        var audio = $(this).closest('div#playParent').siblings('#audio')[0];

        if (audio.paused){
            audio.play();
            button.removeClass("ion ion-play").addClass('ion ion-pause');
        }else{
            audio.pause();
            button.removeClass("ion ion-pause").addClass('ion ion-play');
        }
    });

</script>

<script>

    var ordemAtual = [];
    var cont=0;

    var ordemNova = [];
    var idAtividade = $('button[data-idatividade]').attr('data-idatividade');
    var data= {0: idAtividade};


    $( ".ui-sortable" ).sortable({

        revert:true,

        start: function( event, ui){
            ordemAtual = [];
            $('button[data-numero]').each(function(index, el) {
                ordemAtual.push($(el).attr('data-numero'));        
            });
            ordemAtual = ordemAtual.sort();
            
        },

        update: function( event, ui ) {

            ordemNova = [];
            $('button[data-numero]').each(function(index, el) {
                ordemNova.push($(el).attr('data-numero'));
            });
            console.log("Oderm Nova: "+ordemNova);

            $.each(ordemNova, function(index, val) {
                console.log(ordemNova.indexOf((index+1).toString())+1);
                data[index+1] = ordemNova.indexOf((index+1).toString())+1;
            });
            console.log(data);

            $.post('/admin/alterarOrdem',data,
                        function(data){
                            alert(data);
                        }
                    );

            $('button[data-numero]').each(function(index, el) {
                $(el).attr('data-numero', ordemAtual[index]);        
            });
            
        }
    });
</script>

<script>
    $('#editarme').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget) // Button that triggered the modal
        var dataid = button.data('id')
        var datatextopergunta = button.data('textopergunta')
        var datacategoria = button.data('categoria')
        var pergunta = String(datacategoria).substring(0,1)
        var resposta = String(datacategoria).substring(1,2)
        var respostacerta = button.data('respostacerta');
        var topico = button.data('topico');
        var dificuldade = button.data('dificuldade');
         // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('#id').val(dataid)
        modal.find('#textopergunta').val(datatextopergunta)
        modal.find('#categoria').val(datacategoria)
        modal.find('#pergunta').val(pergunta)
        modal.find('#resposta').val(resposta)
        modal.find('#respostacerta').val(respostacerta);
        modal.find('#topico').val(topico);
        modal.find('#dificuldade').val(dificuldade);

        if(modal.find('select#resposta').val()!=1){
                modal.find('#a, #b, #c, #d').attr("type", "file")
            }
            else{
                modal.find('#a, #b, #c, #d').attr("type", "text")
                var dataa = button.data('a');
                var datab = button.data('b');
                var datac = button.data('c');
                var datad = button.data('d');
                modal.find('#a').val(dataa);
                modal.find('#b').val(datab);
                modal.find('#c').val(datac);
                modal.find('#d').val(datad);
            }

        if(modal.find('select#pergunta').val()==1){
            modal.find('#arquivo').fadeOut().siblings().fadeOut();
        }
        else{
           modal.find('#arquivo').fadeIn().siblings().fadeIn();
        }
        
    })

    $('#editarru').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget) // Button that triggered the modal
        var dataid = button.data('id')
        var datatextopergunta = button.data('textopergunta')
        var datacategoria = button.data('categoria')
        var pergunta = datacategoria
        var respostaCerta = button.data('respostacerta')
        var topico = button.data('topico');
        var dificuldade = button.data('dificuldade');
         // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('#id').val(dataid)
        modal.find('#textopergunta').val(datatextopergunta)
        modal.find('#categoria').val(datacategoria)
        modal.find('#pergunta').val(pergunta)
        modal.find('#respostaCerta').val(respostaCerta)
        modal.find('#topico').val(topico);
        modal.find('#dificuldade').val(dificuldade);


        if(modal.find('select#pergunta').val()==1){
            modal.find('#arquivo').fadeOut().siblings().fadeOut();
        }
        else{
           modal.find('#arquivo').fadeIn().siblings().fadeIn();
        }
            
    })

    $('select#pergunta').on('change', function (event){
        if($(this).val()==1){
            $(this).parents('.modal-body').find('#arquivo').fadeOut().siblings().fadeOut();
        }
        else{
            $(this).parents('.modal-body').find('#arquivo').fadeIn().siblings().fadeIn();
        }
    })

    $('select#resposta').on('change', function (event){
        if($(this).val()!=1){
            $(this).parents('.modal-body').find('input#a, input#b, input#c, input#d').attr("type", "file")
        }
        else{
            $(this).parents('.modal-body').find('input#a, input#b, input#c, input#d').attr("type", "text")
        }
    })

    $('#criarquestao').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var dataidatividade = button.data('idatividade')
        // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('input#idatividade').val(dataidatividade)

        if(modal.find('select#resposta').val()!=1){
                modal.find('#a, #b, #c, #d').attr("type", "file")
            }
            else{
                modal.find('#a, #b, #c, #d').attr("type", "text")
            }

        if(modal.find('select#pergunta').val()==1){
            modal.find('#arquivo').fadeOut().siblings().fadeOut();
        }
        else{
           modal.find('#arquivo').fadeIn().siblings().fadeIn();
        }
        
    })

    $('button#btnMe').on('click', function(event) {
         event.preventDefault();
         $('form#formru').hide();
         $('form#formme').fadeIn();
     })

     $('button#btnRu').on('click', function(event) {
         event.preventDefault();
         $('form#formme').hide();
         $('form#formru').fadeIn();
     })

</script>

<script> //Validações
	
	$(".btn-salvar-multipla-nova-questao").click(function(event){
		
		var filePergunta = $( ".arquivoPerguntaObrigatoria-multipla-nova-questao" ).val();
		extensaoPergunta = (filePergunta.substring(filePergunta.lastIndexOf("."))).toLowerCase();
		
		var fileAlternativaA = $( ".alternativaAObrigatoria-multipla-nova-questao" ).val();
		extensaoAlternativaA = (fileAlternativaA.substring(fileAlternativaA.lastIndexOf("."))).toLowerCase();
		
		var fileAlternativaB = $( ".alternativaBObrigatoria-multipla-nova-questao" ).val();
		extensaoAlternativaB = (fileAlternativaB.substring(fileAlternativaB.lastIndexOf("."))).toLowerCase();
		
		var fileAlternativaC = $( ".alternativaCObrigatoria-multipla-nova-questao" ).val();
		extensaoAlternativaC = (fileAlternativaC.substring(fileAlternativaC.lastIndexOf("."))).toLowerCase();
		
		var fileAlternativaD = $( ".alternativaDObrigatoria-multipla-nova-questao" ).val();
		extensaoAlternativaD = (fileAlternativaD.substring(fileAlternativaD.lastIndexOf("."))).toLowerCase();
		
		if(extensaoPergunta == ".wav" || extensaoPergunta == ".ogg" || extensaoAlternativaA == ".wav" || extensaoAlternativaA == ".ogg" || extensaoAlternativaB == ".wav" || extensaoAlternativaB == ".ogg" || extensaoAlternativaC == ".wav" || extensaoAlternativaC == ".ogg" || extensaoAlternativaD == ".wav" || extensaoAlternativaD == ".ogg"){
			
			if(confirm("Arquivos com extensão 'wav' ou 'ogg' não funcionam corretamente em todos navegadores.\nRecomendamos sempre a utilização de arquivos com extensão 'mp3'.\n\nDeseja continuar?")){
			
				var obrigatorioPendente = 0;
		
				if($(".tipoPerguntaObrigatoria-multipla-nova-questao").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_tipoPergunta-multipla-nova-questao" ).removeClass("has-success");
					$( "#icone_tipoPergunta-multipla-nova-questao" ).removeClass("fa-check");
					$( "#div_tipoPergunta-multipla-nova-questao" ).addClass("has-error");
					$( "#icone_tipoPergunta-multipla-nova-questao" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_tipoPergunta-multipla-nova-questao" ).removeClass("has-error");
					$( "#icone_tipoPergunta-multipla-nova-questao" ).removeClass("fa-times-circle-o");
					$( "#div_tipoPergunta-multipla-nova-questao" ).addClass("has-success");
					$( "#icone_tipoPergunta-multipla-nova-questao" ).addClass("fa-check");
				}
				
				if($(".textoPerguntaObrigatoria-multipla-nova-questao").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_texto-multipla-nova-questao" ).removeClass("has-success");
					$( "#icone_texto-multipla-nova-questao" ).removeClass("fa-check");
					$( "#div_texto-multipla-nova-questao" ).addClass("has-error");
					$( "#icone_texto-multipla-nova-questao" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_texto-multipla-nova-questao" ).removeClass("has-error");
					$( "#icone_texto-multipla-nova-questao" ).removeClass("fa-times-circle-o");
					$( "#div_texto-multipla-nova-questao" ).addClass("has-success");
					$( "#icone_texto-multipla-nova-questao" ).addClass("fa-check");
				}
				
				if($(".tipoPerguntaObrigatoria-multipla-nova-questao").val() == "2" || $(".tipoPerguntaObrigatoria-multipla-nova-questao").val() == "3"){
					
					if($(".arquivoPerguntaObrigatoria-multipla-nova-questao").val() == ""){
						obrigatorioPendente = 1;
						$( "#div_arquivoPergunta-multipla-nova-questao" ).removeClass("has-success");
						$( "#icone_arquivoPergunta-multipla-nova-questao" ).removeClass("fa-check");
						$( "#div_arquivoPergunta-multipla-nova-questao" ).addClass("has-error");
						$( "#icone_arquivoPergunta-multipla-nova-questao" ).addClass("fa-times-circle-o");
					}else{
						$( "#div_arquivoPergunta-multipla-nova-questao" ).removeClass("has-error");
						$( "#icone_arquivoPergunta-multipla-nova-questao" ).removeClass("fa-times-circle-o");
						$( "#div_arquivoPergunta-multipla-nova-questao" ).addClass("has-success");
						$( "#icone_arquivoPergunta-multipla-nova-questao" ).addClass("fa-check");
					}
					
				}
				
				if($(".tipoRespostaObrigatoria-multipla-nova-questao").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_tipoResposta-multipla-nova-questao" ).removeClass("has-success");
					$( "#icone_tipoResposta-multipla-nova-questao" ).removeClass("fa-check");
					$( "#div_tipoResposta-multipla-nova-questao" ).addClass("has-error");
					$( "#icone_tipoResposta-multipla-nova-questao" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_tipoResposta-multipla-nova-questao" ).removeClass("has-error");
					$( "#icone_tipoResposta-multipla-nova-questao" ).removeClass("fa-times-circle-o");
					$( "#div_tipoResposta-multipla-nova-questao" ).addClass("has-success");
					$( "#icone_tipoResposta-multipla-nova-questao" ).addClass("fa-check");
				}
				
				if($(".alternativaAObrigatoria-multipla-nova-questao").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_alternativaA-multipla-nova-questao" ).removeClass("has-success");
					$( "#icone_alternativaA-multipla-nova-questao" ).removeClass("fa-check");
					$( "#div_alternativaA-multipla-nova-questao" ).addClass("has-error");
					$( "#icone_alternativaA-multipla-nova-questao" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_alternativaA-multipla-nova-questao" ).removeClass("has-error");
					$( "#icone_alternativaA-multipla-nova-questao" ).removeClass("fa-times-circle-o");
					$( "#div_alternativaA-multipla-nova-questao" ).addClass("has-success");
					$( "#icone_alternativaA-multipla-nova-questao" ).addClass("fa-check");
				}
				
				if($(".alternativaBObrigatoria-multipla-nova-questao").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_alternativaB-multipla-nova-questao" ).removeClass("has-success");
					$( "#icone_alternativaB-multipla-nova-questao" ).removeClass("fa-check");
					$( "#div_alternativaB-multipla-nova-questao" ).addClass("has-error");
					$( "#icone_alternativaB-multipla-nova-questao" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_alternativaB-multipla-nova-questao" ).removeClass("has-error");
					$( "#icone_alternativaB-multipla-nova-questao" ).removeClass("fa-times-circle-o");
					$( "#div_alternativaB-multipla-nova-questao" ).addClass("has-success");
					$( "#icone_alternativaB-multipla-nova-questao" ).addClass("fa-check");
				}
				
				if($(".alternativaCObrigatoria-multipla-nova-questao").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_alternativaC-multipla-nova-questao" ).removeClass("has-success");
					$( "#icone_alternativaC-multipla-nova-questao" ).removeClass("fa-check");
					$( "#div_alternativaC-multipla-nova-questao" ).addClass("has-error");
					$( "#icone_alternativaC-multipla-nova-questao" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_alternativaC-multipla-nova-questao" ).removeClass("has-error");
					$( "#icone_alternativaC-multipla-nova-questao" ).removeClass("fa-times-circle-o");
					$( "#div_alternativaC-multipla-nova-questao" ).addClass("has-success");
					$( "#icone_alternativaC-multipla-nova-questao" ).addClass("fa-check");
				}
				
				if($(".alternativaDObrigatoria-multipla-nova-questao").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_alternativaD-multipla-nova-questao" ).removeClass("has-success");
					$( "#icone_alternativaD-multipla-nova-questao" ).removeClass("fa-check");
					$( "#div_alternativaD-multipla-nova-questao" ).addClass("has-error");
					$( "#icone_alternativaD-multipla-nova-questao" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_alternativaD-multipla-nova-questao" ).removeClass("has-error");
					$( "#icone_alternativaD-multipla-nova-questao" ).removeClass("fa-times-circle-o");
					$( "#div_alternativaD-multipla-nova-questao" ).addClass("has-success");
					$( "#icone_alternativaD-multipla-nova-questao" ).addClass("fa-check");
				}
				
				if($(".respostaCorretaObrigatoria-multipla-nova-questao").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_respostaCorreta-multipla-nova-questao" ).removeClass("has-success");
					$( "#icone_respostaCorreta-multipla-nova-questao" ).removeClass("fa-check");
					$( "#div_respostaCorreta-multipla-nova-questao" ).addClass("has-error");
					$( "#icone_respostaCorreta-multipla-nova-questao" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_respostaCorreta-multipla-nova-questao" ).removeClass("has-error");
					$( "#icone_respostaCorreta-multipla-nova-questao" ).removeClass("fa-times-circle-o");
					$( "#div_respostaCorreta-multipla-nova-questao" ).addClass("has-success");
					$( "#icone_respostaCorreta-multipla-nova-questao" ).addClass("fa-check");
				}
				
				if(obrigatorioPendente == 1){
					alert("É necessário preencher todos os campos obrigatórios!");
					return false;
				}
			
			}else{
				return false;
			}
			
		}else{
			
			var obrigatorioPendente = 0;
		
			if($(".tipoPerguntaObrigatoria-multipla-nova-questao").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_tipoPergunta-multipla-nova-questao" ).removeClass("has-success");
				$( "#icone_tipoPergunta-multipla-nova-questao" ).removeClass("fa-check");
				$( "#div_tipoPergunta-multipla-nova-questao" ).addClass("has-error");
				$( "#icone_tipoPergunta-multipla-nova-questao" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_tipoPergunta-multipla-nova-questao" ).removeClass("has-error");
				$( "#icone_tipoPergunta-multipla-nova-questao" ).removeClass("fa-times-circle-o");
				$( "#div_tipoPergunta-multipla-nova-questao" ).addClass("has-success");
				$( "#icone_tipoPergunta-multipla-nova-questao" ).addClass("fa-check");
			}
			
			if($(".textoPerguntaObrigatoria-multipla-nova-questao").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_texto-multipla-nova-questao" ).removeClass("has-success");
				$( "#icone_texto-multipla-nova-questao" ).removeClass("fa-check");
				$( "#div_texto-multipla-nova-questao" ).addClass("has-error");
				$( "#icone_texto-multipla-nova-questao" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_texto-multipla-nova-questao" ).removeClass("has-error");
				$( "#icone_texto-multipla-nova-questao" ).removeClass("fa-times-circle-o");
				$( "#div_texto-multipla-nova-questao" ).addClass("has-success");
				$( "#icone_texto-multipla-nova-questao" ).addClass("fa-check");
			}
			
			if($(".tipoPerguntaObrigatoria-multipla-nova-questao").val() == "2" || $(".tipoPerguntaObrigatoria-multipla-nova-questao").val() == "3"){
				
				if($(".arquivoPerguntaObrigatoria-multipla-nova-questao").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_arquivoPergunta-multipla-nova-questao" ).removeClass("has-success");
					$( "#icone_arquivoPergunta-multipla-nova-questao" ).removeClass("fa-check");
					$( "#div_arquivoPergunta-multipla-nova-questao" ).addClass("has-error");
					$( "#icone_arquivoPergunta-multipla-nova-questao" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_arquivoPergunta-multipla-nova-questao" ).removeClass("has-error");
					$( "#icone_arquivoPergunta-multipla-nova-questao" ).removeClass("fa-times-circle-o");
					$( "#div_arquivoPergunta-multipla-nova-questao" ).addClass("has-success");
					$( "#icone_arquivoPergunta-multipla-nova-questao" ).addClass("fa-check");
				}
				
			}
			
			if($(".tipoRespostaObrigatoria-multipla-nova-questao").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_tipoResposta-multipla-nova-questao" ).removeClass("has-success");
				$( "#icone_tipoResposta-multipla-nova-questao" ).removeClass("fa-check");
				$( "#div_tipoResposta-multipla-nova-questao" ).addClass("has-error");
				$( "#icone_tipoResposta-multipla-nova-questao" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_tipoResposta-multipla-nova-questao" ).removeClass("has-error");
				$( "#icone_tipoResposta-multipla-nova-questao" ).removeClass("fa-times-circle-o");
				$( "#div_tipoResposta-multipla-nova-questao" ).addClass("has-success");
				$( "#icone_tipoResposta-multipla-nova-questao" ).addClass("fa-check");
			}
			
			if($(".alternativaAObrigatoria-multipla-nova-questao").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_alternativaA-multipla-nova-questao" ).removeClass("has-success");
				$( "#icone_alternativaA-multipla-nova-questao" ).removeClass("fa-check");
				$( "#div_alternativaA-multipla-nova-questao" ).addClass("has-error");
				$( "#icone_alternativaA-multipla-nova-questao" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_alternativaA-multipla-nova-questao" ).removeClass("has-error");
				$( "#icone_alternativaA-multipla-nova-questao" ).removeClass("fa-times-circle-o");
				$( "#div_alternativaA-multipla-nova-questao" ).addClass("has-success");
				$( "#icone_alternativaA-multipla-nova-questao" ).addClass("fa-check");
			}
			
			if($(".alternativaBObrigatoria-multipla-nova-questao").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_alternativaB-multipla-nova-questao" ).removeClass("has-success");
				$( "#icone_alternativaB-multipla-nova-questao" ).removeClass("fa-check");
				$( "#div_alternativaB-multipla-nova-questao" ).addClass("has-error");
				$( "#icone_alternativaB-multipla-nova-questao" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_alternativaB-multipla-nova-questao" ).removeClass("has-error");
				$( "#icone_alternativaB-multipla-nova-questao" ).removeClass("fa-times-circle-o");
				$( "#div_alternativaB-multipla-nova-questao" ).addClass("has-success");
				$( "#icone_alternativaB-multipla-nova-questao" ).addClass("fa-check");
			}
			
			if($(".alternativaCObrigatoria-multipla-nova-questao").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_alternativaC-multipla-nova-questao" ).removeClass("has-success");
				$( "#icone_alternativaC-multipla-nova-questao" ).removeClass("fa-check");
				$( "#div_alternativaC-multipla-nova-questao" ).addClass("has-error");
				$( "#icone_alternativaC-multipla-nova-questao" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_alternativaC-multipla-nova-questao" ).removeClass("has-error");
				$( "#icone_alternativaC-multipla-nova-questao" ).removeClass("fa-times-circle-o");
				$( "#div_alternativaC-multipla-nova-questao" ).addClass("has-success");
				$( "#icone_alternativaC-multipla-nova-questao" ).addClass("fa-check");
			}
			
			if($(".alternativaDObrigatoria-multipla-nova-questao").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_alternativaD-multipla-nova-questao" ).removeClass("has-success");
				$( "#icone_alternativaD-multipla-nova-questao" ).removeClass("fa-check");
				$( "#div_alternativaD-multipla-nova-questao" ).addClass("has-error");
				$( "#icone_alternativaD-multipla-nova-questao" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_alternativaD-multipla-nova-questao" ).removeClass("has-error");
				$( "#icone_alternativaD-multipla-nova-questao" ).removeClass("fa-times-circle-o");
				$( "#div_alternativaD-multipla-nova-questao" ).addClass("has-success");
				$( "#icone_alternativaD-multipla-nova-questao" ).addClass("fa-check");
			}
			
			if($(".respostaCorretaObrigatoria-multipla-nova-questao").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_respostaCorreta-multipla-nova-questao" ).removeClass("has-success");
				$( "#icone_respostaCorreta-multipla-nova-questao" ).removeClass("fa-check");
				$( "#div_respostaCorreta-multipla-nova-questao" ).addClass("has-error");
				$( "#icone_respostaCorreta-multipla-nova-questao" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_respostaCorreta-multipla-nova-questao" ).removeClass("has-error");
				$( "#icone_respostaCorreta-multipla-nova-questao" ).removeClass("fa-times-circle-o");
				$( "#div_respostaCorreta-multipla-nova-questao" ).addClass("has-success");
				$( "#icone_respostaCorreta-multipla-nova-questao" ).addClass("fa-check");
			}
			
			if(obrigatorioPendente == 1){
				alert("É necessário preencher todos os campos obrigatórios!");
				return false;
			}
			
		}
		
	})
	
	$(".btn-salvar-dissertativa-nova-questao").click(function(event){
	
		var filePergunta = $( ".arquivoPerguntaObrigatoria-dissertativa-nova-questao" ).val();
		extensaoPergunta = (filePergunta.substring(filePergunta.lastIndexOf("."))).toLowerCase();
		
		if(extensaoPergunta == ".wav" || extensaoPergunta == ".ogg" || extensaoAlternativaA == ".wav" || extensaoAlternativaA == ".ogg" || extensaoAlternativaB == ".wav" || extensaoAlternativaB == ".ogg" || extensaoAlternativaC == ".wav" || extensaoAlternativaC == ".ogg" || extensaoAlternativaD == ".wav" || extensaoAlternativaD == ".ogg"){
			
			if(confirm("Arquivos com extensão 'wav' ou 'ogg' não funcionam corretamente em todos navegadores.\nRecomendamos sempre a utilização de arquivos com extensão 'mp3'.\n\nDeseja continuar?")){
				
				var obrigatorioPendente = 0;
	
				if($(".tipoPerguntaObrigatoria-dissertativa-nova-questao").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_tipoPergunta-dissertativa-nova-questao" ).removeClass("has-success");
					$( "#icone_tipoPergunta-dissertativa-nova-questao" ).removeClass("fa-check");
					$( "#div_tipoPergunta-dissertativa-nova-questao" ).addClass("has-error");
					$( "#icone_tipoPergunta-dissertativa-nova-questao" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_tipoPergunta-dissertativa-nova-questao" ).removeClass("has-error");
					$( "#icone_tipoPergunta-dissertativa-nova-questao" ).removeClass("fa-times-circle-o");
					$( "#div_tipoPergunta-dissertativa-nova-questao" ).addClass("has-success");
					$( "#icone_tipoPergunta-dissertativa-nova-questao" ).addClass("fa-check");
				}
				
				if($(".textoPerguntaObrigatoria-dissertativa-nova-questao").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_texto-dissertativa-nova-questao" ).removeClass("has-success");
					$( "#icone_texto-dissertativa-nova-questao" ).removeClass("fa-check");
					$( "#div_texto-dissertativa-nova-questao" ).addClass("has-error");
					$( "#icone_texto-dissertativa-nova-questao" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_texto-dissertativa-nova-questao" ).removeClass("has-error");
					$( "#icone_texto-dissertativa-nova-questao" ).removeClass("fa-times-circle-o");
					$( "#div_texto-dissertativa-nova-questao" ).addClass("has-success");
					$( "#icone_texto-dissertativa-nova-questao" ).addClass("fa-check");
				}
				
				if($(".tipoPerguntaObrigatoria-dissertativa-nova-questao").val() == "2" || $(".tipoPerguntaObrigatoria-dissertativa-nova-questao").val() == "3"){
					
					if($(".arquivoPerguntaObrigatoria-dissertativa-nova-questao").val() == ""){
						obrigatorioPendente = 1;
						$( "#div_arquivoPergunta-dissertativa-nova-questao" ).removeClass("has-success");
						$( "#icone_arquivoPergunta-dissertativa-nova-questao" ).removeClass("fa-check");
						$( "#div_arquivoPergunta-dissertativa-nova-questao" ).addClass("has-error");
						$( "#icone_arquivoPergunta-dissertativa-nova-questao" ).addClass("fa-times-circle-o");
					}else{
						$( "#div_arquivoPergunta-dissertativa-nova-questao" ).removeClass("has-error");
						$( "#icone_arquivoPergunta-dissertativa-nova-questao" ).removeClass("fa-times-circle-o");
						$( "#div_arquivoPergunta-dissertativa-nova-questao" ).addClass("has-success");
						$( "#icone_arquivoPergunta-dissertativa-nova-questao" ).addClass("fa-check");
					}
					
				}
				
				if($(".respostaObrigatoria-dissertativa-nova-questao").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_resposta-dissertativa-nova-questao" ).removeClass("has-success");
					$( "#icone_resposta-dissertativa-nova-questao" ).removeClass("fa-check");
					$( "#div_resposta-dissertativa-nova-questao" ).addClass("has-error");
					$( "#icone_resposta-dissertativa-nova-questao" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_resposta-dissertativa-nova-questao" ).removeClass("has-error");
					$( "#icone_resposta-dissertativa-nova-questao" ).removeClass("fa-times-circle-o");
					$( "#div_resposta-dissertativa-nova-questao" ).addClass("has-success");
					$( "#icone_resposta-dissertativa-nova-questao" ).addClass("fa-check");
				}
				
				if(obrigatorioPendente == 1){
					alert("É necessário preencher todos os campos obrigatórios!");
					return false;
				}
				
			}else{
				
				return false;
				
			}
			
		}else{
			
			var obrigatorioPendente = 0;
	
			if($(".tipoPerguntaObrigatoria-dissertativa-nova-questao").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_tipoPergunta-dissertativa-nova-questao" ).removeClass("has-success");
				$( "#icone_tipoPergunta-dissertativa-nova-questao" ).removeClass("fa-check");
				$( "#div_tipoPergunta-dissertativa-nova-questao" ).addClass("has-error");
				$( "#icone_tipoPergunta-dissertativa-nova-questao" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_tipoPergunta-dissertativa-nova-questao" ).removeClass("has-error");
				$( "#icone_tipoPergunta-dissertativa-nova-questao" ).removeClass("fa-times-circle-o");
				$( "#div_tipoPergunta-dissertativa-nova-questao" ).addClass("has-success");
				$( "#icone_tipoPergunta-dissertativa-nova-questao" ).addClass("fa-check");
			}
			
			if($(".textoPerguntaObrigatoria-dissertativa-nova-questao").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_texto-dissertativa-nova-questao" ).removeClass("has-success");
				$( "#icone_texto-dissertativa-nova-questao" ).removeClass("fa-check");
				$( "#div_texto-dissertativa-nova-questao" ).addClass("has-error");
				$( "#icone_texto-dissertativa-nova-questao" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_texto-dissertativa-nova-questao" ).removeClass("has-error");
				$( "#icone_texto-dissertativa-nova-questao" ).removeClass("fa-times-circle-o");
				$( "#div_texto-dissertativa-nova-questao" ).addClass("has-success");
				$( "#icone_texto-dissertativa-nova-questao" ).addClass("fa-check");
			}
			
			if($(".tipoPerguntaObrigatoria-dissertativa-nova-questao").val() == "2" || $(".tipoPerguntaObrigatoria-dissertativa-nova-questao").val() == "3"){
				
				if($(".arquivoPerguntaObrigatoria-dissertativa-nova-questao").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_arquivoPergunta-dissertativa-nova-questao" ).removeClass("has-success");
					$( "#icone_arquivoPergunta-dissertativa-nova-questao" ).removeClass("fa-check");
					$( "#div_arquivoPergunta-dissertativa-nova-questao" ).addClass("has-error");
					$( "#icone_arquivoPergunta-dissertativa-nova-questao" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_arquivoPergunta-dissertativa-nova-questao" ).removeClass("has-error");
					$( "#icone_arquivoPergunta-dissertativa-nova-questao" ).removeClass("fa-times-circle-o");
					$( "#div_arquivoPergunta-dissertativa-nova-questao" ).addClass("has-success");
					$( "#icone_arquivoPergunta-dissertativa-nova-questao" ).addClass("fa-check");
				}
				
			}
			
			if($(".respostaObrigatoria-dissertativa-nova-questao").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_resposta-dissertativa-nova-questao" ).removeClass("has-success");
				$( "#icone_resposta-dissertativa-nova-questao" ).removeClass("fa-check");
				$( "#div_resposta-dissertativa-nova-questao" ).addClass("has-error");
				$( "#icone_resposta-dissertativa-nova-questao" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_resposta-dissertativa-nova-questao" ).removeClass("has-error");
				$( "#icone_resposta-dissertativa-nova-questao" ).removeClass("fa-times-circle-o");
				$( "#div_resposta-dissertativa-nova-questao" ).addClass("has-success");
				$( "#icone_resposta-dissertativa-nova-questao" ).addClass("fa-check");
			}
			
			if(obrigatorioPendente == 1){
				alert("É necessário preencher todos os campos obrigatórios!");
				return false;
			}
			
		}
		
	})
	
	$(".btn-salvar-multipla-editar-questao").click(function(event){
		
		var filePergunta = $( ".arquivoPerguntaObrigatoria-multipla-editar-questao" ).val();
		extensaoPergunta = (filePergunta.substring(filePergunta.lastIndexOf("."))).toLowerCase();
		
		var fileAlternativaA = $( ".alternativaAObrigatoria-multipla-editar-questao" ).val();
		extensaoAlternativaA = (fileAlternativaA.substring(fileAlternativaA.lastIndexOf("."))).toLowerCase();
		
		var fileAlternativaB = $( ".alternativaBObrigatoria-multipla-editar-questao" ).val();
		extensaoAlternativaB = (fileAlternativaB.substring(fileAlternativaB.lastIndexOf("."))).toLowerCase();
		
		var fileAlternativaC = $( ".alternativaCObrigatoria-multipla-editar-questao" ).val();
		extensaoAlternativaC = (fileAlternativaC.substring(fileAlternativaC.lastIndexOf("."))).toLowerCase();
		
		var fileAlternativaD = $( ".alternativaDObrigatoria-multipla-editar-questao" ).val();
		extensaoAlternativaD = (fileAlternativaD.substring(fileAlternativaD.lastIndexOf("."))).toLowerCase();
		
		if(extensaoPergunta == ".wav" || extensaoPergunta == ".ogg" || extensaoAlternativaA == ".wav" || extensaoAlternativaA == ".ogg" || extensaoAlternativaB == ".wav" || extensaoAlternativaB == ".ogg" || extensaoAlternativaC == ".wav" || extensaoAlternativaC == ".ogg" || extensaoAlternativaD == ".wav" || extensaoAlternativaD == ".ogg"){
			
			if(confirm("Arquivos com extensão 'wav' ou 'ogg' não funcionam corretamente em todos navegadores.\nRecomendamos sempre a utilização de arquivos com extensão 'mp3'.\n\nDeseja continuar?")){
			
				var obrigatorioPendente = 0;
		
				if($(".tipoPerguntaObrigatoria-multipla-editar-questao").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_tipoPergunta-multipla-editar-questao" ).removeClass("has-success");
					$( "#icone_tipoPergunta-multipla-editar-questao" ).removeClass("fa-check");
					$( "#div_tipoPergunta-multipla-editar-questao" ).addClass("has-error");
					$( "#icone_tipoPergunta-multipla-editar-questao" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_tipoPergunta-multipla-editar-questao" ).removeClass("has-error");
					$( "#icone_tipoPergunta-multipla-editar-questao" ).removeClass("fa-times-circle-o");
					$( "#div_tipoPergunta-multipla-editar-questao" ).addClass("has-success");
					$( "#icone_tipoPergunta-multipla-editar-questao" ).addClass("fa-check");
				}
				
				if($(".textoPerguntaObrigatoria-multipla-editar-questao").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_texto-multipla-editar-questao" ).removeClass("has-success");
					$( "#icone_texto-multipla-editar-questao" ).removeClass("fa-check");
					$( "#div_texto-multipla-editar-questao" ).addClass("has-error");
					$( "#icone_texto-multipla-editar-questao" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_texto-multipla-editar-questao" ).removeClass("has-error");
					$( "#icone_texto-multipla-editar-questao" ).removeClass("fa-times-circle-o");
					$( "#div_texto-multipla-editar-questao" ).addClass("has-success");
					$( "#icone_texto-multipla-editar-questao" ).addClass("fa-check");
				}
				
				if($(".tipoPerguntaObrigatoria-multipla-editar-questao").val() == "2" || $(".tipoPerguntaObrigatoria-multipla-editar-questao").val() == "3"){
					
					if($(".arquivoPerguntaObrigatoria-multipla-editar-questao").val() == ""){
						obrigatorioPendente = 1;
						$( "#div_arquivoPergunta-multipla-editar-questao" ).removeClass("has-success");
						$( "#icone_arquivoPergunta-multipla-editar-questao" ).removeClass("fa-check");
						$( "#div_arquivoPergunta-multipla-editar-questao" ).addClass("has-error");
						$( "#icone_arquivoPergunta-multipla-editar-questao" ).addClass("fa-times-circle-o");
					}else{
						$( "#div_arquivoPergunta-multipla-editar-questao" ).removeClass("has-error");
						$( "#icone_arquivoPergunta-multipla-editar-questao" ).removeClass("fa-times-circle-o");
						$( "#div_arquivoPergunta-multipla-editar-questao" ).addClass("has-success");
						$( "#icone_arquivoPergunta-multipla-editar-questao" ).addClass("fa-check");
					}
					
				}
				
				if($(".tipoRespostaObrigatoria-multipla-editar-questao").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_tipoResposta-multipla-editar-questao" ).removeClass("has-success");
					$( "#icone_tipoResposta-multipla-editar-questao" ).removeClass("fa-check");
					$( "#div_tipoResposta-multipla-editar-questao" ).addClass("has-error");
					$( "#icone_tipoResposta-multipla-editar-questao" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_tipoResposta-multipla-editar-questao" ).removeClass("has-error");
					$( "#icone_tipoResposta-multipla-editar-questao" ).removeClass("fa-times-circle-o");
					$( "#div_tipoResposta-multipla-editar-questao" ).addClass("has-success");
					$( "#icone_tipoResposta-multipla-editar-questao" ).addClass("fa-check");
				}
				
				if($(".alternativaAObrigatoria-multipla-editar-questao").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_alternativaA-multipla-editar-questao" ).removeClass("has-success");
					$( "#icone_alternativaA-multipla-editar-questao" ).removeClass("fa-check");
					$( "#div_alternativaA-multipla-editar-questao" ).addClass("has-error");
					$( "#icone_alternativaA-multipla-editar-questao" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_alternativaA-multipla-editar-questao" ).removeClass("has-error");
					$( "#icone_alternativaA-multipla-editar-questao" ).removeClass("fa-times-circle-o");
					$( "#div_alternativaA-multipla-editar-questao" ).addClass("has-success");
					$( "#icone_alternativaA-multipla-editar-questao" ).addClass("fa-check");
				}
				
				if($(".alternativaBObrigatoria-multipla-editar-questao").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_alternativaB-multipla-editar-questao" ).removeClass("has-success");
					$( "#icone_alternativaB-multipla-editar-questao" ).removeClass("fa-check");
					$( "#div_alternativaB-multipla-editar-questao" ).addClass("has-error");
					$( "#icone_alternativaB-multipla-editar-questao" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_alternativaB-multipla-editar-questao" ).removeClass("has-error");
					$( "#icone_alternativaB-multipla-editar-questao" ).removeClass("fa-times-circle-o");
					$( "#div_alternativaB-multipla-editar-questao" ).addClass("has-success");
					$( "#icone_alternativaB-multipla-editar-questao" ).addClass("fa-check");
				}
				
				if($(".alternativaCObrigatoria-multipla-editar-questao").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_alternativaC-multipla-editar-questao" ).removeClass("has-success");
					$( "#icone_alternativaC-multipla-editar-questao" ).removeClass("fa-check");
					$( "#div_alternativaC-multipla-editar-questao" ).addClass("has-error");
					$( "#icone_alternativaC-multipla-editar-questao" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_alternativaC-multipla-editar-questao" ).removeClass("has-error");
					$( "#icone_alternativaC-multipla-editar-questao" ).removeClass("fa-times-circle-o");
					$( "#div_alternativaC-multipla-editar-questao" ).addClass("has-success");
					$( "#icone_alternativaC-multipla-editar-questao" ).addClass("fa-check");
				}
				
				if($(".alternativaDObrigatoria-multipla-editar-questao").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_alternativaD-multipla-editar-questao" ).removeClass("has-success");
					$( "#icone_alternativaD-multipla-editar-questao" ).removeClass("fa-check");
					$( "#div_alternativaD-multipla-editar-questao" ).addClass("has-error");
					$( "#icone_alternativaD-multipla-editar-questao" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_alternativaD-multipla-editar-questao" ).removeClass("has-error");
					$( "#icone_alternativaD-multipla-editar-questao" ).removeClass("fa-times-circle-o");
					$( "#div_alternativaD-multipla-editar-questao" ).addClass("has-success");
					$( "#icone_alternativaD-multipla-editar-questao" ).addClass("fa-check");
				}
				
				if($(".respostaCorretaObrigatoria-multipla-editar-questao").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_respostaCorreta-multipla-editar-questao" ).removeClass("has-success");
					$( "#icone_respostaCorreta-multipla-editar-questao" ).removeClass("fa-check");
					$( "#div_respostaCorreta-multipla-editar-questao" ).addClass("has-error");
					$( "#icone_respostaCorreta-multipla-editar-questao" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_respostaCorreta-multipla-editar-questao" ).removeClass("has-error");
					$( "#icone_respostaCorreta-multipla-editar-questao" ).removeClass("fa-times-circle-o");
					$( "#div_respostaCorreta-multipla-editar-questao" ).addClass("has-success");
					$( "#icone_respostaCorreta-multipla-editar-questao" ).addClass("fa-check");
				}
				
				if(obrigatorioPendente == 1){
					alert("É necessário preencher todos os campos obrigatórios!");
					return false;
				}
			
			}else{
				return false;
			}
			
		}else{
			
			var obrigatorioPendente = 0;
		
			if($(".tipoPerguntaObrigatoria-multipla-editar-questao").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_tipoPergunta-multipla-editar-questao" ).removeClass("has-success");
				$( "#icone_tipoPergunta-multipla-editar-questao" ).removeClass("fa-check");
				$( "#div_tipoPergunta-multipla-editar-questao" ).addClass("has-error");
				$( "#icone_tipoPergunta-multipla-editar-questao" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_tipoPergunta-multipla-editar-questao" ).removeClass("has-error");
				$( "#icone_tipoPergunta-multipla-editar-questao" ).removeClass("fa-times-circle-o");
				$( "#div_tipoPergunta-multipla-editar-questao" ).addClass("has-success");
				$( "#icone_tipoPergunta-multipla-editar-questao" ).addClass("fa-check");
			}
			
			if($(".textoPerguntaObrigatoria-multipla-editar-questao").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_texto-multipla-editar-questao" ).removeClass("has-success");
				$( "#icone_texto-multipla-editar-questao" ).removeClass("fa-check");
				$( "#div_texto-multipla-editar-questao" ).addClass("has-error");
				$( "#icone_texto-multipla-editar-questao" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_texto-multipla-editar-questao" ).removeClass("has-error");
				$( "#icone_texto-multipla-editar-questao" ).removeClass("fa-times-circle-o");
				$( "#div_texto-multipla-editar-questao" ).addClass("has-success");
				$( "#icone_texto-multipla-editar-questao" ).addClass("fa-check");
			}
			
			if($(".tipoPerguntaObrigatoria-multipla-editar-questao").val() == "2" || $(".tipoPerguntaObrigatoria-multipla-editar-questao").val() == "3"){
				
				if($(".arquivoPerguntaObrigatoria-multipla-editar-questao").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_arquivoPergunta-multipla-editar-questao" ).removeClass("has-success");
					$( "#icone_arquivoPergunta-multipla-editar-questao" ).removeClass("fa-check");
					$( "#div_arquivoPergunta-multipla-editar-questao" ).addClass("has-error");
					$( "#icone_arquivoPergunta-multipla-editar-questao" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_arquivoPergunta-multipla-editar-questao" ).removeClass("has-error");
					$( "#icone_arquivoPergunta-multipla-editar-questao" ).removeClass("fa-times-circle-o");
					$( "#div_arquivoPergunta-multipla-editar-questao" ).addClass("has-success");
					$( "#icone_arquivoPergunta-multipla-editar-questao" ).addClass("fa-check");
				}
				
			}
			
			if($(".tipoRespostaObrigatoria-multipla-editar-questao").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_tipoResposta-multipla-editar-questao" ).removeClass("has-success");
				$( "#icone_tipoResposta-multipla-editar-questao" ).removeClass("fa-check");
				$( "#div_tipoResposta-multipla-editar-questao" ).addClass("has-error");
				$( "#icone_tipoResposta-multipla-editar-questao" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_tipoResposta-multipla-editar-questao" ).removeClass("has-error");
				$( "#icone_tipoResposta-multipla-editar-questao" ).removeClass("fa-times-circle-o");
				$( "#div_tipoResposta-multipla-editar-questao" ).addClass("has-success");
				$( "#icone_tipoResposta-multipla-editar-questao" ).addClass("fa-check");
			}
			
			if($(".alternativaAObrigatoria-multipla-editar-questao").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_alternativaA-multipla-editar-questao" ).removeClass("has-success");
				$( "#icone_alternativaA-multipla-editar-questao" ).removeClass("fa-check");
				$( "#div_alternativaA-multipla-editar-questao" ).addClass("has-error");
				$( "#icone_alternativaA-multipla-editar-questao" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_alternativaA-multipla-editar-questao" ).removeClass("has-error");
				$( "#icone_alternativaA-multipla-editar-questao" ).removeClass("fa-times-circle-o");
				$( "#div_alternativaA-multipla-editar-questao" ).addClass("has-success");
				$( "#icone_alternativaA-multipla-editar-questao" ).addClass("fa-check");
			}
			
			if($(".alternativaBObrigatoria-multipla-editar-questao").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_alternativaB-multipla-editar-questao" ).removeClass("has-success");
				$( "#icone_alternativaB-multipla-editar-questao" ).removeClass("fa-check");
				$( "#div_alternativaB-multipla-editar-questao" ).addClass("has-error");
				$( "#icone_alternativaB-multipla-editar-questao" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_alternativaB-multipla-editar-questao" ).removeClass("has-error");
				$( "#icone_alternativaB-multipla-editar-questao" ).removeClass("fa-times-circle-o");
				$( "#div_alternativaB-multipla-editar-questao" ).addClass("has-success");
				$( "#icone_alternativaB-multipla-editar-questao" ).addClass("fa-check");
			}
			
			if($(".alternativaCObrigatoria-multipla-editar-questao").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_alternativaC-multipla-editar-questao" ).removeClass("has-success");
				$( "#icone_alternativaC-multipla-editar-questao" ).removeClass("fa-check");
				$( "#div_alternativaC-multipla-editar-questao" ).addClass("has-error");
				$( "#icone_alternativaC-multipla-editar-questao" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_alternativaC-multipla-editar-questao" ).removeClass("has-error");
				$( "#icone_alternativaC-multipla-editar-questao" ).removeClass("fa-times-circle-o");
				$( "#div_alternativaC-multipla-editar-questao" ).addClass("has-success");
				$( "#icone_alternativaC-multipla-editar-questao" ).addClass("fa-check");
			}
			
			if($(".alternativaDObrigatoria-multipla-editar-questao").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_alternativaD-multipla-editar-questao" ).removeClass("has-success");
				$( "#icone_alternativaD-multipla-editar-questao" ).removeClass("fa-check");
				$( "#div_alternativaD-multipla-editar-questao" ).addClass("has-error");
				$( "#icone_alternativaD-multipla-editar-questao" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_alternativaD-multipla-editar-questao" ).removeClass("has-error");
				$( "#icone_alternativaD-multipla-editar-questao" ).removeClass("fa-times-circle-o");
				$( "#div_alternativaD-multipla-editar-questao" ).addClass("has-success");
				$( "#icone_alternativaD-multipla-editar-questao" ).addClass("fa-check");
			}
			
			if($(".respostaCorretaObrigatoria-multipla-editar-questao").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_respostaCorreta-multipla-editar-questao" ).removeClass("has-success");
				$( "#icone_respostaCorreta-multipla-editar-questao" ).removeClass("fa-check");
				$( "#div_respostaCorreta-multipla-editar-questao" ).addClass("has-error");
				$( "#icone_respostaCorreta-multipla-editar-questao" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_respostaCorreta-multipla-editar-questao" ).removeClass("has-error");
				$( "#icone_respostaCorreta-multipla-editar-questao" ).removeClass("fa-times-circle-o");
				$( "#div_respostaCorreta-multipla-editar-questao" ).addClass("has-success");
				$( "#icone_respostaCorreta-multipla-editar-questao" ).addClass("fa-check");
			}
			
			if(obrigatorioPendente == 1){
				alert("É necessário preencher todos os campos obrigatórios!");
				return false;
			}
			
		}
		
	})
	
	$(".btn-salvar-dissertativa-editar-questao").click(function(event){
		
		var filePergunta = $( ".arquivoPerguntaObrigatoria-dissertativa-editar-questao" ).val();
		extensaoPergunta = (filePergunta.substring(filePergunta.lastIndexOf("."))).toLowerCase();
		
		if(extensaoPergunta == ".wav" || extensaoPergunta == ".ogg" || extensaoAlternativaA == ".wav" || extensaoAlternativaA == ".ogg" || extensaoAlternativaB == ".wav" || extensaoAlternativaB == ".ogg" || extensaoAlternativaC == ".wav" || extensaoAlternativaC == ".ogg" || extensaoAlternativaD == ".wav" || extensaoAlternativaD == ".ogg"){
			
			if(confirm("Arquivos com extensão 'wav' ou 'ogg' não funcionam corretamente em todos navegadores.\nRecomendamos sempre a utilização de arquivos com extensão 'mp3'.\n\nDeseja continuar?")){
				
				var obrigatorioPendente = 0;
	
				if($(".tipoPerguntaObrigatoria-dissertativa-editar-questao").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_tipoPergunta-dissertativa-editar-questao" ).removeClass("has-success");
					$( "#icone_tipoPergunta-dissertativa-editar-questao" ).removeClass("fa-check");
					$( "#div_tipoPergunta-dissertativa-editar-questao" ).addClass("has-error");
					$( "#icone_tipoPergunta-dissertativa-editar-questao" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_tipoPergunta-dissertativa-editar-questao" ).removeClass("has-error");
					$( "#icone_tipoPergunta-dissertativa-editar-questao" ).removeClass("fa-times-circle-o");
					$( "#div_tipoPergunta-dissertativa-editar-questao" ).addClass("has-success");
					$( "#icone_tipoPergunta-dissertativa-editar-questao" ).addClass("fa-check");
				}
				
				if($(".textoPerguntaObrigatoria-dissertativa-editar-questao").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_texto-dissertativa-editar-questao" ).removeClass("has-success");
					$( "#icone_texto-dissertativa-editar-questao" ).removeClass("fa-check");
					$( "#div_texto-dissertativa-editar-questao" ).addClass("has-error");
					$( "#icone_texto-dissertativa-editar-questao" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_texto-dissertativa-editar-questao" ).removeClass("has-error");
					$( "#icone_texto-dissertativa-editar-questao" ).removeClass("fa-times-circle-o");
					$( "#div_texto-dissertativa-editar-questao" ).addClass("has-success");
					$( "#icone_texto-dissertativa-editar-questao" ).addClass("fa-check");
				}
				
				if($(".tipoPerguntaObrigatoria-dissertativa-editar-questao").val() == "2" || $(".tipoPerguntaObrigatoria-dissertativa-editar-questao").val() == "3"){
					
					if($(".arquivoPerguntaObrigatoria-dissertativa-editar-questao").val() == ""){
						obrigatorioPendente = 1;
						$( "#div_arquivoPergunta-dissertativa-editar-questao" ).removeClass("has-success");
						$( "#icone_arquivoPergunta-dissertativa-editar-questao" ).removeClass("fa-check");
						$( "#div_arquivoPergunta-dissertativa-editar-questao" ).addClass("has-error");
						$( "#icone_arquivoPergunta-dissertativa-editar-questao" ).addClass("fa-times-circle-o");
					}else{
						$( "#div_arquivoPergunta-dissertativa-editar-questao" ).removeClass("has-error");
						$( "#icone_arquivoPergunta-dissertativa-editar-questao" ).removeClass("fa-times-circle-o");
						$( "#div_arquivoPergunta-dissertativa-editar-questao" ).addClass("has-success");
						$( "#icone_arquivoPergunta-dissertativa-editar-questao" ).addClass("fa-check");
					}
					
				}
				
				if($(".respostaObrigatoria-dissertativa-editar-questao").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_resposta-dissertativa-editar-questao" ).removeClass("has-success");
					$( "#icone_resposta-dissertativa-editar-questao" ).removeClass("fa-check");
					$( "#div_resposta-dissertativa-editar-questao" ).addClass("has-error");
					$( "#icone_resposta-dissertativa-editar-questao" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_resposta-dissertativa-editar-questao" ).removeClass("has-error");
					$( "#icone_resposta-dissertativa-editar-questao" ).removeClass("fa-times-circle-o");
					$( "#div_resposta-dissertativa-editar-questao" ).addClass("has-success");
					$( "#icone_resposta-dissertativa-editar-questao" ).addClass("fa-check");
				}
				
				if(obrigatorioPendente == 1){
					alert("É necessário preencher todos os campos obrigatórios!");
					return false;
				}
				
			}else{
				return false;
			}
			
		}else{
			
			var obrigatorioPendente = 0;
	
			if($(".tipoPerguntaObrigatoria-dissertativa-editar-questao").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_tipoPergunta-dissertativa-editar-questao" ).removeClass("has-success");
				$( "#icone_tipoPergunta-dissertativa-editar-questao" ).removeClass("fa-check");
				$( "#div_tipoPergunta-dissertativa-editar-questao" ).addClass("has-error");
				$( "#icone_tipoPergunta-dissertativa-editar-questao" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_tipoPergunta-dissertativa-editar-questao" ).removeClass("has-error");
				$( "#icone_tipoPergunta-dissertativa-editar-questao" ).removeClass("fa-times-circle-o");
				$( "#div_tipoPergunta-dissertativa-editar-questao" ).addClass("has-success");
				$( "#icone_tipoPergunta-dissertativa-editar-questao" ).addClass("fa-check");
			}
			
			if($(".textoPerguntaObrigatoria-dissertativa-editar-questao").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_texto-dissertativa-editar-questao" ).removeClass("has-success");
				$( "#icone_texto-dissertativa-editar-questao" ).removeClass("fa-check");
				$( "#div_texto-dissertativa-editar-questao" ).addClass("has-error");
				$( "#icone_texto-dissertativa-editar-questao" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_texto-dissertativa-editar-questao" ).removeClass("has-error");
				$( "#icone_texto-dissertativa-editar-questao" ).removeClass("fa-times-circle-o");
				$( "#div_texto-dissertativa-editar-questao" ).addClass("has-success");
				$( "#icone_texto-dissertativa-editar-questao" ).addClass("fa-check");
			}
			
			if($(".tipoPerguntaObrigatoria-dissertativa-editar-questao").val() == "2" || $(".tipoPerguntaObrigatoria-dissertativa-editar-questao").val() == "3"){
				
				if($(".arquivoPerguntaObrigatoria-dissertativa-editar-questao").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_arquivoPergunta-dissertativa-editar-questao" ).removeClass("has-success");
					$( "#icone_arquivoPergunta-dissertativa-editar-questao" ).removeClass("fa-check");
					$( "#div_arquivoPergunta-dissertativa-editar-questao" ).addClass("has-error");
					$( "#icone_arquivoPergunta-dissertativa-editar-questao" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_arquivoPergunta-dissertativa-editar-questao" ).removeClass("has-error");
					$( "#icone_arquivoPergunta-dissertativa-editar-questao" ).removeClass("fa-times-circle-o");
					$( "#div_arquivoPergunta-dissertativa-editar-questao" ).addClass("has-success");
					$( "#icone_arquivoPergunta-dissertativa-editar-questao" ).addClass("fa-check");
				}
				
			}
			
			if($(".respostaObrigatoria-dissertativa-editar-questao").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_resposta-dissertativa-editar-questao" ).removeClass("has-success");
				$( "#icone_resposta-dissertativa-editar-questao" ).removeClass("fa-check");
				$( "#div_resposta-dissertativa-editar-questao" ).addClass("has-error");
				$( "#icone_resposta-dissertativa-editar-questao" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_resposta-dissertativa-editar-questao" ).removeClass("has-error");
				$( "#icone_resposta-dissertativa-editar-questao" ).removeClass("fa-times-circle-o");
				$( "#div_resposta-dissertativa-editar-questao" ).addClass("has-success");
				$( "#icone_resposta-dissertativa-editar-questao" ).addClass("fa-check");
			}
			
			if(obrigatorioPendente == 1){
				alert("É necessário preencher todos os campos obrigatórios!");
				return false;
			}
			
		}
		
	})
	
	function fcn_recarregaCoresMultiplaNovaQuestao(){
		
		if($(".tipoPerguntaObrigatoria-multipla-nova-questao").val() == ""){
			$( "#div_tipoPergunta-multipla-nova-questao" ).removeClass("has-success");
			$( "#icone_tipoPergunta-multipla-nova-questao" ).removeClass("fa-check");
			$( "#div_tipoPergunta-multipla-nova-questao" ).addClass("has-error");
			$( "#icone_tipoPergunta-multipla-nova-questao" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_tipoPergunta-multipla-nova-questao" ).removeClass("has-error");
			$( "#icone_tipoPergunta-multipla-nova-questao" ).removeClass("fa-times-circle-o");
			$( "#div_tipoPergunta-multipla-nova-questao" ).addClass("has-success");
			$( "#icone_tipoPergunta-multipla-nova-questao" ).addClass("fa-check");
		}
		
		if($(".textoPerguntaObrigatoria-multipla-nova-questao").val() == ""){
			$( "#div_texto-multipla-nova-questao" ).removeClass("has-success");
			$( "#icone_texto-multipla-nova-questao" ).removeClass("fa-check");
			$( "#div_texto-multipla-nova-questao" ).addClass("has-error");
			$( "#icone_texto-multipla-nova-questao" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_texto-multipla-nova-questao" ).removeClass("has-error");
			$( "#icone_texto-multipla-nova-questao" ).removeClass("fa-times-circle-o");
			$( "#div_texto-multipla-nova-questao" ).addClass("has-success");
			$( "#icone_texto-multipla-nova-questao" ).addClass("fa-check");
		}
		
		if($(".tipoPerguntaObrigatoria-multipla-nova-questao").val() == "2" || $(".tipoPerguntaObrigatoria-multipla-nova-questao").val() == "3"){
			
			if($(".arquivoPerguntaObrigatoria-multipla-nova-questao").val() == ""){
				$( "#div_arquivoPergunta-multipla-nova-questao" ).removeClass("has-success");
				$( "#icone_arquivoPergunta-multipla-nova-questao" ).removeClass("fa-check");
				$( "#div_arquivoPergunta-multipla-nova-questao" ).addClass("has-error");
				$( "#icone_arquivoPergunta-multipla-nova-questao" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_arquivoPergunta-multipla-nova-questao" ).removeClass("has-error");
				$( "#icone_arquivoPergunta-multipla-nova-questao" ).removeClass("fa-times-circle-o");
				$( "#div_arquivoPergunta-multipla-nova-questao" ).addClass("has-success");
				$( "#icone_arquivoPergunta-multipla-nova-questao" ).addClass("fa-check");
			}
			
		}
		
		if($(".tipoRespostaObrigatoria-multipla-nova-questao").val() == ""){
			$( "#div_tipoResposta-multipla-nova-questao" ).removeClass("has-success");
			$( "#icone_tipoResposta-multipla-nova-questao" ).removeClass("fa-check");
			$( "#div_tipoResposta-multipla-nova-questao" ).addClass("has-error");
			$( "#icone_tipoResposta-multipla-nova-questao" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_tipoResposta-multipla-nova-questao" ).removeClass("has-error");
			$( "#icone_tipoResposta-multipla-nova-questao" ).removeClass("fa-times-circle-o");
			$( "#div_tipoResposta-multipla-nova-questao" ).addClass("has-success");
			$( "#icone_tipoResposta-multipla-nova-questao" ).addClass("fa-check");
		}
		
		if($(".alternativaAObrigatoria-multipla-nova-questao").val() == ""){
			$( "#div_alternativaA-multipla-nova-questao" ).removeClass("has-success");
			$( "#icone_alternativaA-multipla-nova-questao" ).removeClass("fa-check");
			$( "#div_alternativaA-multipla-nova-questao" ).addClass("has-error");
			$( "#icone_alternativaA-multipla-nova-questao" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_alternativaA-multipla-nova-questao" ).removeClass("has-error");
			$( "#icone_alternativaA-multipla-nova-questao" ).removeClass("fa-times-circle-o");
			$( "#div_alternativaA-multipla-nova-questao" ).addClass("has-success");
			$( "#icone_alternativaA-multipla-nova-questao" ).addClass("fa-check");
		}
		
		if($(".alternativaBObrigatoria-multipla-nova-questao").val() == ""){
			$( "#div_alternativaB-multipla-nova-questao" ).removeClass("has-success");
			$( "#icone_alternativaB-multipla-nova-questao" ).removeClass("fa-check");
			$( "#div_alternativaB-multipla-nova-questao" ).addClass("has-error");
			$( "#icone_alternativaB-multipla-nova-questao" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_alternativaB-multipla-nova-questao" ).removeClass("has-error");
			$( "#icone_alternativaB-multipla-nova-questao" ).removeClass("fa-times-circle-o");
			$( "#div_alternativaB-multipla-nova-questao" ).addClass("has-success");
			$( "#icone_alternativaB-multipla-nova-questao" ).addClass("fa-check");
		}
		
		if($(".alternativaCObrigatoria-multipla-nova-questao").val() == ""){
			$( "#div_alternativaC-multipla-nova-questao" ).removeClass("has-success");
			$( "#icone_alternativaC-multipla-nova-questao" ).removeClass("fa-check");
			$( "#div_alternativaC-multipla-nova-questao" ).addClass("has-error");
			$( "#icone_alternativaC-multipla-nova-questao" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_alternativaC-multipla-nova-questao" ).removeClass("has-error");
			$( "#icone_alternativaC-multipla-nova-questao" ).removeClass("fa-times-circle-o");
			$( "#div_alternativaC-multipla-nova-questao" ).addClass("has-success");
			$( "#icone_alternativaC-multipla-nova-questao" ).addClass("fa-check");
		}
		
		if($(".alternativaDObrigatoria-multipla-nova-questao").val() == ""){
			$( "#div_alternativaD-multipla-nova-questao" ).removeClass("has-success");
			$( "#icone_alternativaD-multipla-nova-questao" ).removeClass("fa-check");
			$( "#div_alternativaD-multipla-nova-questao" ).addClass("has-error");
			$( "#icone_alternativaD-multipla-nova-questao" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_alternativaD-multipla-nova-questao" ).removeClass("has-error");
			$( "#icone_alternativaD-multipla-nova-questao" ).removeClass("fa-times-circle-o");
			$( "#div_alternativaD-multipla-nova-questao" ).addClass("has-success");
			$( "#icone_alternativaD-multipla-nova-questao" ).addClass("fa-check");
		}
		
		if($(".respostaCorretaObrigatoria-multipla-nova-questao").val() == ""){
			$( "#div_respostaCorreta-multipla-nova-questao" ).removeClass("has-success");
			$( "#icone_respostaCorreta-multipla-nova-questao" ).removeClass("fa-check");
			$( "#div_respostaCorreta-multipla-nova-questao" ).addClass("has-error");
			$( "#icone_respostaCorreta-multipla-nova-questao" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_respostaCorreta-multipla-nova-questao" ).removeClass("has-error");
			$( "#icone_respostaCorreta-multipla-nova-questao" ).removeClass("fa-times-circle-o");
			$( "#div_respostaCorreta-multipla-nova-questao" ).addClass("has-success");
			$( "#icone_respostaCorreta-multipla-nova-questao" ).addClass("fa-check");
		}
		
	}
	
	function fcn_recarregaCoresDissertativaNovaQuestao(){
		
		if($(".tipoPerguntaObrigatoria-dissertativa-nova-questao").val() == ""){
			$( "#div_tipoPergunta-dissertativa-nova-questao" ).removeClass("has-success");
			$( "#icone_tipoPergunta-dissertativa-nova-questao" ).removeClass("fa-check");
			$( "#div_tipoPergunta-dissertativa-nova-questao" ).addClass("has-error");
			$( "#icone_tipoPergunta-dissertativa-nova-questao" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_tipoPergunta-dissertativa-nova-questao" ).removeClass("has-error");
			$( "#icone_tipoPergunta-dissertativa-nova-questao" ).removeClass("fa-times-circle-o");
			$( "#div_tipoPergunta-dissertativa-nova-questao" ).addClass("has-success");
			$( "#icone_tipoPergunta-dissertativa-nova-questao" ).addClass("fa-check");
		}
		
		if($(".textoPerguntaObrigatoria-dissertativa-nova-questao").val() == ""){
			$( "#div_texto-dissertativa-nova-questao" ).removeClass("has-success");
			$( "#icone_texto-dissertativa-nova-questao" ).removeClass("fa-check");
			$( "#div_texto-dissertativa-nova-questao" ).addClass("has-error");
			$( "#icone_texto-dissertativa-nova-questao" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_texto-dissertativa-nova-questao" ).removeClass("has-error");
			$( "#icone_texto-dissertativa-nova-questao" ).removeClass("fa-times-circle-o");
			$( "#div_texto-dissertativa-nova-questao" ).addClass("has-success");
			$( "#icone_texto-dissertativa-nova-questao" ).addClass("fa-check");
		}
		
		if($(".tipoPerguntaObrigatoria-dissertativa-nova-questao").val() == "2" || $(".tipoPerguntaObrigatoria-dissertativa-nova-questao").val() == "3"){
			
			if($(".arquivoPerguntaObrigatoria-dissertativa-nova-questao").val() == ""){
				$( "#div_arquivoPergunta-dissertativa-nova-questao" ).removeClass("has-success");
				$( "#icone_arquivoPergunta-dissertativa-nova-questao" ).removeClass("fa-check");
				$( "#div_arquivoPergunta-dissertativa-nova-questao" ).addClass("has-error");
				$( "#icone_arquivoPergunta-dissertativa-nova-questao" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_arquivoPergunta-dissertativa-nova-questao" ).removeClass("has-error");
				$( "#icone_arquivoPergunta-dissertativa-nova-questao" ).removeClass("fa-times-circle-o");
				$( "#div_arquivoPergunta-dissertativa-nova-questao" ).addClass("has-success");
				$( "#icone_arquivoPergunta-dissertativa-nova-questao" ).addClass("fa-check");
			}
			
		}
		
		if($(".respostaObrigatoria-dissertativa-nova-questao").val() == ""){
			$( "#div_resposta-dissertativa-nova-questao" ).removeClass("has-success");
			$( "#icone_resposta-dissertativa-nova-questao" ).removeClass("fa-check");
			$( "#div_resposta-dissertativa-nova-questao" ).addClass("has-error");
			$( "#icone_resposta-dissertativa-nova-questao" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_resposta-dissertativa-nova-questao" ).removeClass("has-error");
			$( "#icone_resposta-dissertativa-nova-questao" ).removeClass("fa-times-circle-o");
			$( "#div_resposta-dissertativa-nova-questao" ).addClass("has-success");
			$( "#icone_resposta-dissertativa-nova-questao" ).addClass("fa-check");
		}
		
	}
	
	function fcn_recarregaCoresMultiplaEditarQuestao(){
		
		if($(".tipoPerguntaObrigatoria-multipla-editar-questao").val() == ""){
			$( "#div_tipoPergunta-multipla-editar-questao" ).removeClass("has-success");
			$( "#icone_tipoPergunta-multipla-editar-questao" ).removeClass("fa-check");
			$( "#div_tipoPergunta-multipla-editar-questao" ).addClass("has-error");
			$( "#icone_tipoPergunta-multipla-editar-questao" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_tipoPergunta-multipla-editar-questao" ).removeClass("has-error");
			$( "#icone_tipoPergunta-multipla-editar-questao" ).removeClass("fa-times-circle-o");
			$( "#div_tipoPergunta-multipla-editar-questao" ).addClass("has-success");
			$( "#icone_tipoPergunta-multipla-editar-questao" ).addClass("fa-check");
		}
		
		if($(".textoPerguntaObrigatoria-multipla-editar-questao").val() == ""){
			$( "#div_texto-multipla-editar-questao" ).removeClass("has-success");
			$( "#icone_texto-multipla-editar-questao" ).removeClass("fa-check");
			$( "#div_texto-multipla-editar-questao" ).addClass("has-error");
			$( "#icone_texto-multipla-editar-questao" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_texto-multipla-editar-questao" ).removeClass("has-error");
			$( "#icone_texto-multipla-editar-questao" ).removeClass("fa-times-circle-o");
			$( "#div_texto-multipla-editar-questao" ).addClass("has-success");
			$( "#icone_texto-multipla-editar-questao" ).addClass("fa-check");
		}
		
		if($(".tipoPerguntaObrigatoria-multipla-editar-questao").val() == "2" || $(".tipoPerguntaObrigatoria-multipla-editar-questao").val() == "3"){
			
			if($(".arquivoPerguntaObrigatoria-multipla-editar-questao").val() == ""){
				$( "#div_arquivoPergunta-multipla-editar-questao" ).removeClass("has-success");
				$( "#icone_arquivoPergunta-multipla-editar-questao" ).removeClass("fa-check");
				$( "#div_arquivoPergunta-multipla-editar-questao" ).addClass("has-error");
				$( "#icone_arquivoPergunta-multipla-editar-questao" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_arquivoPergunta-multipla-editar-questao" ).removeClass("has-error");
				$( "#icone_arquivoPergunta-multipla-editar-questao" ).removeClass("fa-times-circle-o");
				$( "#div_arquivoPergunta-multipla-editar-questao" ).addClass("has-success");
				$( "#icone_arquivoPergunta-multipla-editar-questao" ).addClass("fa-check");
			}
			
		}
		
		if($(".tipoRespostaObrigatoria-multipla-editar-questao").val() == ""){
			$( "#div_tipoResposta-multipla-editar-questao" ).removeClass("has-success");
			$( "#icone_tipoResposta-multipla-editar-questao" ).removeClass("fa-check");
			$( "#div_tipoResposta-multipla-editar-questao" ).addClass("has-error");
			$( "#icone_tipoResposta-multipla-editar-questao" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_tipoResposta-multipla-editar-questao" ).removeClass("has-error");
			$( "#icone_tipoResposta-multipla-editar-questao" ).removeClass("fa-times-circle-o");
			$( "#div_tipoResposta-multipla-editar-questao" ).addClass("has-success");
			$( "#icone_tipoResposta-multipla-editar-questao" ).addClass("fa-check");
		}
		
		if($(".alternativaAObrigatoria-multipla-editar-questao").val() == ""){
			$( "#div_alternativaA-multipla-editar-questao" ).removeClass("has-success");
			$( "#icone_alternativaA-multipla-editar-questao" ).removeClass("fa-check");
			$( "#div_alternativaA-multipla-editar-questao" ).addClass("has-error");
			$( "#icone_alternativaA-multipla-editar-questao" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_alternativaA-multipla-editar-questao" ).removeClass("has-error");
			$( "#icone_alternativaA-multipla-editar-questao" ).removeClass("fa-times-circle-o");
			$( "#div_alternativaA-multipla-editar-questao" ).addClass("has-success");
			$( "#icone_alternativaA-multipla-editar-questao" ).addClass("fa-check");
		}
		
		if($(".alternativaBObrigatoria-multipla-editar-questao").val() == ""){
			$( "#div_alternativaB-multipla-editar-questao" ).removeClass("has-success");
			$( "#icone_alternativaB-multipla-editar-questao" ).removeClass("fa-check");
			$( "#div_alternativaB-multipla-editar-questao" ).addClass("has-error");
			$( "#icone_alternativaB-multipla-editar-questao" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_alternativaB-multipla-editar-questao" ).removeClass("has-error");
			$( "#icone_alternativaB-multipla-editar-questao" ).removeClass("fa-times-circle-o");
			$( "#div_alternativaB-multipla-editar-questao" ).addClass("has-success");
			$( "#icone_alternativaB-multipla-editar-questao" ).addClass("fa-check");
		}
		
		if($(".alternativaCObrigatoria-multipla-editar-questao").val() == ""){
			$( "#div_alternativaC-multipla-editar-questao" ).removeClass("has-success");
			$( "#icone_alternativaC-multipla-editar-questao" ).removeClass("fa-check");
			$( "#div_alternativaC-multipla-editar-questao" ).addClass("has-error");
			$( "#icone_alternativaC-multipla-editar-questao" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_alternativaC-multipla-editar-questao" ).removeClass("has-error");
			$( "#icone_alternativaC-multipla-editar-questao" ).removeClass("fa-times-circle-o");
			$( "#div_alternativaC-multipla-editar-questao" ).addClass("has-success");
			$( "#icone_alternativaC-multipla-editar-questao" ).addClass("fa-check");
		}
		
		if($(".alternativaDObrigatoria-multipla-editar-questao").val() == ""){
			$( "#div_alternativaD-multipla-editar-questao" ).removeClass("has-success");
			$( "#icone_alternativaD-multipla-editar-questao" ).removeClass("fa-check");
			$( "#div_alternativaD-multipla-editar-questao" ).addClass("has-error");
			$( "#icone_alternativaD-multipla-editar-questao" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_alternativaD-multipla-editar-questao" ).removeClass("has-error");
			$( "#icone_alternativaD-multipla-editar-questao" ).removeClass("fa-times-circle-o");
			$( "#div_alternativaD-multipla-editar-questao" ).addClass("has-success");
			$( "#icone_alternativaD-multipla-editar-questao" ).addClass("fa-check");
		}
		
		if($(".respostaCorretaObrigatoria-multipla-editar-questao").val() == ""){
			$( "#div_respostaCorreta-multipla-editar-questao" ).removeClass("has-success");
			$( "#icone_respostaCorreta-multipla-editar-questao" ).removeClass("fa-check");
			$( "#div_respostaCorreta-multipla-editar-questao" ).addClass("has-error");
			$( "#icone_respostaCorreta-multipla-editar-questao" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_respostaCorreta-multipla-editar-questao" ).removeClass("has-error");
			$( "#icone_respostaCorreta-multipla-editar-questao" ).removeClass("fa-times-circle-o");
			$( "#div_respostaCorreta-multipla-editar-questao" ).addClass("has-success");
			$( "#icone_respostaCorreta-multipla-editar-questao" ).addClass("fa-check");
		}
		
	}
	
	function fcn_recarregaCoresDissertativaEditarQuestao(){
		
		if($(".tipoPerguntaObrigatoria-dissertativa-editar-questao").val() == ""){
			$( "#div_tipoPergunta-dissertativa-editar-questao" ).removeClass("has-success");
			$( "#icone_tipoPergunta-dissertativa-editar-questao" ).removeClass("fa-check");
			$( "#div_tipoPergunta-dissertativa-editar-questao" ).addClass("has-error");
			$( "#icone_tipoPergunta-dissertativa-editar-questao" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_tipoPergunta-dissertativa-editar-questao" ).removeClass("has-error");
			$( "#icone_tipoPergunta-dissertativa-editar-questao" ).removeClass("fa-times-circle-o");
			$( "#div_tipoPergunta-dissertativa-editar-questao" ).addClass("has-success");
			$( "#icone_tipoPergunta-dissertativa-editar-questao" ).addClass("fa-check");
		}
		
		if($(".textoPerguntaObrigatoria-dissertativa-editar-questao").val() == ""){
			$( "#div_texto-dissertativa-editar-questao" ).removeClass("has-success");
			$( "#icone_texto-dissertativa-editar-questao" ).removeClass("fa-check");
			$( "#div_texto-dissertativa-editar-questao" ).addClass("has-error");
			$( "#icone_texto-dissertativa-editar-questao" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_texto-dissertativa-editar-questao" ).removeClass("has-error");
			$( "#icone_texto-dissertativa-editar-questao" ).removeClass("fa-times-circle-o");
			$( "#div_texto-dissertativa-editar-questao" ).addClass("has-success");
			$( "#icone_texto-dissertativa-editar-questao" ).addClass("fa-check");
		}
		
		if($(".tipoPerguntaObrigatoria-dissertativa-editar-questao").val() == "2" || $(".tipoPerguntaObrigatoria-dissertativa-editar-questao").val() == "3"){
			
			if($(".arquivoPerguntaObrigatoria-dissertativa-editar-questao").val() == ""){
				$( "#div_arquivoPergunta-dissertativa-editar-questao" ).removeClass("has-success");
				$( "#icone_arquivoPergunta-dissertativa-editar-questao" ).removeClass("fa-check");
				$( "#div_arquivoPergunta-dissertativa-editar-questao" ).addClass("has-error");
				$( "#icone_arquivoPergunta-dissertativa-editar-questao" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_arquivoPergunta-dissertativa-editar-questao" ).removeClass("has-error");
				$( "#icone_arquivoPergunta-dissertativa-editar-questao" ).removeClass("fa-times-circle-o");
				$( "#div_arquivoPergunta-dissertativa-editar-questao" ).addClass("has-success");
				$( "#icone_arquivoPergunta-dissertativa-editar-questao" ).addClass("fa-check");
			}
			
		}
		
		if($(".respostaObrigatoria-dissertativa-editar-questao").val() == ""){
			$( "#div_resposta-dissertativa-editar-questao" ).removeClass("has-success");
			$( "#icone_resposta-dissertativa-editar-questao" ).removeClass("fa-check");
			$( "#div_resposta-dissertativa-editar-questao" ).addClass("has-error");
			$( "#icone_resposta-dissertativa-editar-questao" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_resposta-dissertativa-editar-questao" ).removeClass("has-error");
			$( "#icone_resposta-dissertativa-editar-questao" ).removeClass("fa-times-circle-o");
			$( "#div_resposta-dissertativa-editar-questao" ).addClass("has-success");
			$( "#icone_resposta-dissertativa-editar-questao" ).addClass("fa-check");
		}
		
	}
	
	function fcn_validaArquivo(formulario, arquivo, pstr_metodoEntrada) { 
		
		if(arquivo != ""){
			
			extensoes_permitidas = "";
			meuerro = "";
			
			//Múltipla Escolha
			if(pstr_metodoEntrada == "nova-questao-multipla"){
			
				//Imagem
				if($(".tipoPerguntaObrigatoria-multipla-nova-questao").val() == "2"){
					extensoes_permitidas = new Array(".jpg", ".png", ".jpeg"); 
				}
				
				//Aúdio
				if($(".tipoPerguntaObrigatoria-multipla-nova-questao").val() == "3"){
					extensoes_permitidas = new Array(".mp3", ".wav", ".ogg"); 
				}
				
			}
			
			//Dissertativa
			if(pstr_metodoEntrada == "nova-questao-dissertativa"){
				
				//Imagem
				if($(".tipoPerguntaObrigatoria-dissertativa-nova-questao").val() == "2"){
					extensoes_permitidas = new Array(".jpg", ".png", ".jpeg"); 
				}
				
				//Aúdio
				if($(".tipoPerguntaObrigatoria-dissertativa-nova-questao").val() == "3"){
					extensoes_permitidas = new Array(".mp3", ".wav", ".ogg"); 
				}
				
			}
			
			//Múltipla Escolha
			if(pstr_metodoEntrada == "editar-questao-multipla"){
			
				//Imagem
				if($(".tipoPerguntaObrigatoria-multipla-editar-questao").val() == "2"){
					extensoes_permitidas = new Array(".jpg", ".png", ".jpeg"); 
				}
				
				//Aúdio
				if($(".tipoPerguntaObrigatoria-multipla-editar-questao").val() == "3"){
					extensoes_permitidas = new Array(".mp3", ".wav", ".ogg"); 
				}
				
			}
			
			//Dissertativa
			if(pstr_metodoEntrada == "editar-questao-dissertativa"){
				
				//Imagem
				if($(".tipoPerguntaObrigatoria-dissertativa-editar-questao").val() == "2"){
					extensoes_permitidas = new Array(".jpg", ".png", ".jpeg"); 
				}
				
				//Aúdio
				if($(".tipoPerguntaObrigatoria-dissertativa-editar-questao").val() == "3"){
					extensoes_permitidas = new Array(".mp3", ".wav", ".ogg"); 
				}
				
			}
			 
			extensao = (arquivo.substring(arquivo.lastIndexOf("."))).toLowerCase(); 
			permitida = false; 
			for (var i = 0; i < extensoes_permitidas.length; i++) { 
				if (extensoes_permitidas[i] == extensao) { 
					permitida = true; 
					break; 
				} 
			} 
			
			if (permitida == false) { 
				alert("Verifique a extensão do arquivo anexado. \n\nAs extensões permitidas são: " + extensoes_permitidas.join()); 
				
				if(pstr_metodoEntrada == "nova-questao-multipla"){
					$(".arquivoPerguntaObrigatoria-multipla-nova-questao").val("") 
					return 1;
				}
				
				if(pstr_metodoEntrada == "nova-questao-dissertativa"){
					$(".arquivoPerguntaObrigatoria-dissertativa-nova-questao").val("") 
					return 1;
				}
				
				if(pstr_metodoEntrada == "editar-questao-multipla"){
					$(".arquivoPerguntaObrigatoria-multipla-editar-questao").val("") 
					return 1;
				}
				
				if(pstr_metodoEntrada == "editar-questao-dissertativa"){
					$(".arquivoPerguntaObrigatoria-dissertativa-editar-questao").val("") 
					return 1;
				}
			}
			 
			return 0;
			 
		}
	}
	
	function fcn_validaArquivoResposta(formulario, arquivo, alternativa) { 
		
		if(arquivo != ""){
			
			extensoes_permitidas = "";
			meuerro = "";
			
			//Imagem
			if($(".tipoRespostaObrigatoria-multipla-nova-questao").val() == "2"){
				extensoes_permitidas = new Array(".jpg", ".png", ".jpeg"); 
			}
			
			//Aúdio
			if($(".tipoRespostaObrigatoria-multipla-nova-questao").val() == "3"){
				extensoes_permitidas = new Array(".mp3", ".wav", ".ogg"); 
			}
			
			//Imagem
			if($(".tipoRespostaObrigatoria-multipla-editar-questao").val() == "2"){
				extensoes_permitidas = new Array(".jpg", ".png", ".jpeg"); 
			}
			
			//Aúdio
			if($(".tipoRespostaObrigatoria-multipla-editar-questao").val() == "3"){
				extensoes_permitidas = new Array(".mp3", ".wav", ".ogg"); 
			}
			
			extensao = (arquivo.substring(arquivo.lastIndexOf("."))).toLowerCase(); 
			permitida = false; 
			for (var i = 0; i < extensoes_permitidas.length; i++) { 
				if (extensoes_permitidas[i] == extensao) { 
					permitida = true; 
					break; 
				} 
			} 
			
			if (permitida == false) { 
				alert("Verifique a extensão do arquivo anexado. \n\nAs extensões permitidas são: " + extensoes_permitidas.join()); 
				
				if(alternativa == "A"){
					$(".alternativaAObrigatoria-multipla-nova-questao").val("") 
					return 1;
				}
				
				if(alternativa == "B"){
					$(".alternativaBObrigatoria-multipla-nova-questao").val("") 
					return 1;
				}
				
				if(alternativa == "C"){
					$(".alternativaCObrigatoria-multipla-nova-questao").val("") 
					return 1; 
				}
				
				if(alternativa == "D"){
					$(".alternativaDObrigatoria-multipla-nova-questao").val("") 
					return 1;
				}
				
				if(alternativa == "A"){
					$(".alternativaAObrigatoria-multipla-editar-questao").val("") 
					return 1;
				}
				
				if(alternativa == "B"){
					$(".alternativaBObrigatoria-multipla-editar-questao").val("") 
					return 1;
				}
				
				if(alternativa == "C"){
					$(".alternativaCObrigatoria-multipla-editar-questao").val("") 
					return 1; 
				}
				
				if(alternativa == "D"){
					$(".alternativaDObrigatoria-multipla-editar-questao").val("") 
					return 1;
				}
				
			}
			 
			return 0;
			 
		}
	}
	
</script>
@endsection
<!-- Scripts import -->