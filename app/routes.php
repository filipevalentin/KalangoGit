<?php

$layout = 'layouts.master';

Route::get('teste4',function(){ 
	
	return View::make('atividade/testeRecVoz');

});


// ===============================================
// COMMON SECTION ================================
// ===============================================

		Route::controller('password', 'RemindersController');

		Route::get('criarUsuariosTeste', function(){

			$u3 = new User;
			$u3->nome = "Administrador 1";
			$u3->login = "789";
			$u3->tipo = "3";
			$u3->password= Hash::make('789');
			$u3->confirmed = '1';
			$u3->save();

			$a = new Administrador;
			$a->id = $u3->id;
			$a->save();
		});

	//Login

		Route::get('/', function(){
			if(Auth::check()){
				if (Auth::user()->tipo == 1){
					return Redirect::to('aluno/home');
				}
				elseif(Auth::user()->tipo == 2){
					return Redirect::to('professor/home');
				}
				elseif(Auth::user()->tipo == 3){
					return Redirect::to('admin/home');
				}
			}
			return View::make('login');
		});

		Route::post('/', function(){
			if (Auth::attempt(array('login' => Input::get('usuario') , 'password' => Input::get('senha'), 'confirmed' => 1 ))){
		    	return Redirect::to('/');
			}
			else{
				return View::make('login')->with('mensagem', 'Seu login ou senha estão incorretos, tente novamente.');
			}
		});

		Route::get('logout', function(){
			Auth::logout();
			return Redirect::to('/');
		});

	//Visualizador de arquivos

		Route::get('Viewer', function(){
			return View::make('view');
		});

	//Registrar usuário

		Route::get('registro/verificar/{confirmation_code}', function($codigo){
			Auth::logout();
			if( ! $codigo)
	        {	
	        	return Redirect::to('/');
	        }

	        $user = User::whereConfirmationCode($codigo)->first();

	        if ( ! $user)
	        {
	           return Redirect::to('/'); 
	        }

	        $user->confirmed = 1;
	        $user->confirmation_code = null;
	        $user->save();

	        return Redirect::to('/');
		});

	
// ===============================================
// ALUNO SECTION ================================
// ===============================================

Route::group(array('prefix' => 'aluno', 'before'=>'aluno'), function(){

		Route::get('home', function(){
			$turmas = Auth::user()->aluno->turmas->filter(function($turma){
				if($turma->status != 0){
					return true;
				}
			});
			return View::make('aluno/home')->with('turmas', $turmas);
		});

	//Cursos Anteriores
		Route::get('cursos/anteriores', function(){
			$turmas = Auth::user()->aluno->turmas->filter(function($turma){
				if($turma->status != 1){
					return true;
				}
			});
			return View::make('aluno/cursosAnteriores')->with('turmas', $turmas);
		});


	//Mensagens

		Route::get('mensagens/entrada', function(){
			$mensagens = Mensagem::where('idUsuarioDestino', '=', Auth::user()->id)->orderBy('id', 'desc')->paginate(10);
			return View::make('mensagem/alunoInbox')->with('mensagens', $mensagens);
			
		});

		Route::get('mensagens/enviados', function(){
			$mensagens = Mensagem::where('idUsuarioOrigem', '=', Auth::user()->id)->orderBy('id', 'desc')->paginate(10);
			return View::make('mensagem/alunoEnviados')->with('mensagens', $mensagens);
			
		});

		Route::get('mensagem/{id}', function($id){
			$mensagem = Mensagem::find($id);
			if(strpos(URL::previous(), 'enviados') != false){

			}else{
				$mensagem->lida = 1;
			}

			$mensagem->save();
			return View::make('mensagem/alunoShow')->with('mensagem', $mensagem);
			
		});

		Route::post('mensagem/enviar', function(){
			$mensagem = new Mensagem;
			$mensagem->idUsuarioOrigem = Auth::user()->id;
			$mensagem->idUsuarioDestino = Input::get('idUsuarioDestino');
			$mensagem->titulo = Input::get('titulo');
			$mensagem->conteudo = Input::get('conteudo');
			$mensagem->data = date('d-m-Y H:i:s');

			$mensagem->lida = 0;
			$mensagem->save();

			return Redirect::back();
			
		});

		Route::post('mensagem/responder', function(){
			$mensagem = new Mensagem;
			$mensagem->idUsuarioOrigem = Auth::user()->id;
			$mensagem->idUsuarioDestino = Input::get('idUsuarioDestino');
			$mensagem->titulo = Input::get('titulo');
			$mensagem->conteudo = Input::get('conteudo');
			$mensagem->data = date('d-m-Y H:i:s');
			$mensagem->idRE = Input::get('idRE');

			$mensagem->lida = 0;
			$mensagem->save();

			return Redirect::back();
			
		});

	//Atividade e Ativ.Extra - Responder/VerificarAcesso/RegistrarAcesso/Conclusão

		Route::get('atividade/{idAtividade}', function($idAtividade){  // ### APLICAR LOGICA PARA IR NO RESULTADO DAS RESPOSTAS CASO JA TENHA FEITO A ATIVIDADE
			$atividade = Atividade::find($idAtividade);

			//Checa se o aluno está habilitado a responder a atividade - No caso dele estar vendo um curso que já fez no passado
			// Fazemos isso vendo se o aluno está matriculado em uma turma ativa do mesmo curso/modulo que a atividade está cadastrada
			$flag = true;
			if(Atividade::find($idAtividade)->tipo == 1){
				$flag = false;
				foreach (Auth::user()->aluno->turmas as $turma) {
					if($turma->status == "1"){
						if($turma->modulo->id == $atividade->aula->modulo->id){
							$flag = true;
						}
					}
				}
			}
			

			if($flag == false){
				return View::make('atividade/alunoView')->with('atividade',$atividade);
			}

			if($atividade->status == '0'){
				return Redirect::back();
			}
			$acesso = AcessosAtividade::where('idAluno', '=', Auth::user()->id)->where('idAtividade', '=', $idAtividade)->first();
			if($acesso != null){
				if($acesso->status != 1){
					return View::make('atividade/ResponderAtividade')->with(array('ultimaQuestao' => $acesso->idQuestao, 'atividade' => $atividade));
				}else{
					//INSERIR AQUI O REDRECIONAMENTO PARA OS RESULTADOS
					return View::make('atividade/alunoView')->with('atividade',$atividade);
				}
			}else{
				return View::make('atividade/ResponderAtividade')->with('atividade', $atividade);
			}
		});

		Route::get('verificarAcesso/{idAtividade}', function($idAtividade){
			$acesso = AcessosAtividade::where('idAtividade', '=', $idAtividade)->where('idAluno', '=', Auth::user()->id)->first();
			if($acesso != null){
				return Response::json('negado');
			}else{
				return Response::json('autorizado');
			}

		});

		Route::get('registrarAcesso/{idAtividade}/{idQuestao}', function($idAtividade, $idQuestao){
			$acesso = AcessosAtividade::where('idAtividade', '=', $idAtividade)->where('idAluno', '=', Auth::user()->id)->first();
			if($acesso == null){
				$acesso = new AcessosAtividade;
			}
			$acesso->idAluno = Auth::user()->id;
			$acesso->idAtividade = $idAtividade;
			$acesso->idQuestao = $idQuestao;
			$acesso->status = '0';

			$acesso->save();

			return Response::json("registro feito!");
		});

		Route::get('registrarConclusao/{idAtividade}', function($idAtividade){
			$acesso = AcessosAtividade::where('idAtividade', '=', $idAtividade)->where('idAluno', '=', Auth::user()->id)->first();
			if($acesso == null){
				$acesso = new AcessosAtividade;
				$acesso->idAtividade = $idAtividade;
				$acesso->idAluno = Auth::user()->id;
			}
			$acesso->status = '1';

			$acesso->save();

			return Response::json("registro feito!");
		});


		Route::get('responder/{idQuestao}/{resposta}', function($idQuestao, $respostaAluno){
			$respostaAluno = urldecode($respostaAluno);
			$acesso = AcessosAtividade::where('idAluno', '=', Auth::user()->id)->where('idAtividade', '=', Questao::find($idQuestao)->atividade->id)->first();
			if($acesso != null){
				if($acesso->status == 1){
					return Response::json('negado');
				}
			}
			$resposta = new Resposta();
			$resposta->idQuestao = $idQuestao;
			$resposta->idAluno = Auth::user()->id;
			$resposta->respostaAluno = $respostaAluno;
			$resposta->correcao = ($respostaAluno == Questao::find($idQuestao)->respostaCerta) ? '1':'0';
			$resposta->save();

			//Adiciona os pontos na contagem geral caso tenha acertado a questao
			//Caso seja atividade de aula
			if($resposta->correcao == 1){
				if(Questao::find($idQuestao)->atividade->idModulo == null){
					Auth::user()->aluno->turmas->each(function($turma) use($idQuestao){
						if($turma->modulo == Questao::find($idQuestao)->atividade->aula->modulo){
							$pontos = Questao::find($idQuestao)->pontos + $turma->pivot->pontuacao;
							Auth::user()->aluno->turmas()->updateExistingPivot($turma->id, array('pontuacao'=>$pontos));
						}
					});
				//Caso seja atividade extra
				}else{
					Auth::user()->aluno->turmas->each(function($turma) use($idQuestao){
						if($turma->modulo == Questao::find($idQuestao)->atividade->modulo){
							$pontos = Questao::find($idQuestao)->pontos + $turma->pivot->pontuacao;
							Auth::user()->aluno->turmas()->updateExistingPivot($turma->id, array('pontuacao'=>$pontos));
						}
					});
				}
			}
			
			return Response::json('Resposta Salva!');
			//salvar resposta do aluno no futuro

		});

	//Listar Atividades Extras

		Route::get('atividades/extra', function(){
			$turmas = Auth::user()->aluno->turmas;

			$categorias = Categoria::all();

			global $atividadesExtras;
			$atividadesExtras = array();

			$turmas->each(function($turma){
				global $atividadesExtras;
				$atividadesExtras = array_merge($turma->modulo->atividadesExtras->all());
			});


			return View::make('atividade/atividadeExtraAluno')->with('atividadesExtras', $atividadesExtras)->with('categorias',$categorias);
		});

	// Ver Conteudos do Módulo - Aulas
		Route::get('modulo/{id}', function($id){
			$modulo = Modulo::find($id);
			return View::make('modulo/alunoView')->with('modulo',$modulo);
		});


	//Perfil - Senha - Dashborad
		Route::get('perfil', function(){
			if(Session::has('mensagem')){
				$mensagem = Session::get('mensagem');
				return View::make('perfil')->with('mensagem', $mensagem);
			}
			return View::make('aluno/perfil');
			
		});

		Route::post('atualizaSenha', function(){

			$user = User::find(Input::get('id'));

			$user->password = Hash::make(Input::get('senha'));
			$user->save();
			return Redirect::to('aluno/perfil')->with('mensagem', 'Sua senha foi alterada!');

		});

		Route::post('atualizaCadastro', function(){
			$user = User::find(Input::get('id'));
			$user->nome       = Input::get('nome');
			$user->sobrenome       = Input::get('sobrenome');
			$user->email       = Input::get('email');

			$imagem = Input::file('urlImagem');
			$filename="";

			if(Input::file('urlImagem')!=NULL){
				$filename = $imagem->getClientOriginalName();

				$user->urlImagem = 'img/'.$filename;
				
				$imagem->move('img/', $filename);
			}

			$user->save();

			$aluno= Aluno::find($user->id);
			$aluno->dataNascimento = Input::get('dataNascimento');
			$aluno->sobreMim = Input::get('sobreMim');

			$aluno->save();

			return Redirect::to('aluno/perfil')->with('mensagem', 'Os dados foram atualizados!');
		});

		Route::get('dashboard', function(){
			$turmas = Auth::user()->aluno->turmas->filter(function($turma){
			    return ($turma->status == "1"); // filtra só os com status ativo;
			});


			$certas=0;
			$erradas=0;

			// aqui separamos as informações do dashboard relativa a cada modulo/turma que o aluno cursa. Ex: respostas certas/erradas de atividades do curso inglês(turma A) e outro de espanhol(turmaB)
			foreach ($turmas as $turma) {
								//pega todas as questoes de atividades extras, ou seja, que são relativas a um modulo (FK-IdModulo != null)
				$aux = Questao::whereIn('idAtividade', array_merge($turma->modulo->atividadesExtras->lists('id'),$turma->modulo->atividades->lists('id')))->
								// pega todas as questoes de atividades de aula, ou seja, que são relativas a Aula (FK-IdAula != null)
								// por fim, pega só as questoes onde o id esta entre os ids das questoes que o aluno já respondeu
								whereIn('id',(Auth::user()->aluno->respostas->lists('id') != null)?(Auth::user()->aluno->respostas->lists('id') != null):array('null'))->
								get();
				//$turma->modulo->questoes;
				//filtra só as questoes do modulo que o aluno já respondeu, atraves de intersecção entre as funções aluno->questoes e $aux
				$aux = Auth::user()->aluno->respostas->intersect($aux);

				// adiciona a coleção de questoes que o aluno já respondeu para a turma/modulo correspondende da questão
				$turma->questoes = $aux;

				//Pontos por Topicos
				$topicos = array();
				foreach($turma->questoes as $resposta){
					//se o topico ainda não está na lista, add ele na lista, com sua chave sendo seu id, e inicia seu attr "pontos" como 0.
					if (!(@in_array($resposta->idTopico, $topicos)) ){
						$topico = Topico::find($resposta->idTopico);
						$topico->pontos = 0;
						$topicos[$resposta->idTopico] = $topico;
					}
					// se a resposta em questao foi acertada pelo aluno, adicionamos os pontos ao topico condizente e incrementamos o contador de acertos
					// caso contrário só incrementamos o contador de erros
					if($resposta->pivot->correcao == '1'){
						$topicos[$resposta->idTopico]->pontos += $resposta->pontos;
						$certas++;
					}else{
						$erradas++;
					}

				};

				//ranking modulo
				$rankingModulo = new \Illuminate\Database\Eloquent\Collection;
				//pega todas as turmas do modulo e da um merge nos alunos;
				$turmasModulo = $turma->modulo->turmas;
				foreach ($turmasModulo as $turmaM) {
					foreach ($turmaM->alunos as $aluno) {
						$rankingModulo->push($aluno);
					}
				}

				 $rankingModulo->sort(function($a, $b){
			        $a = $a->pivot->pontuacao;
			        $b = $b->pivot->pontuacao;
			        if ($a === $b) {
			            return 0;
			        }
			        return ($a < $b) ? 1 : -1;
			    });

				//ranking turma
				$rankingTurma = $turma->alunos;

				 $rankingTurma->sort(function($a, $b){
			        $a = $a->pivot->pontuacao;
			        $b = $b->pivot->pontuacao;
			        if ($a === $b) {
			            return 0;
			        }
			        return ($a < $b) ? 1 : -1;
			    });

				//pega as posiçoes do rank para o aluno atual
				$meuRanking = array();
				$meuRanking['modulo'] = array_search(Auth::user()->id, $rankingModulo->keyBy('id')->keys());
				$meuRanking['turma'] = array_search(Auth::user()->id, $rankingTurma->keyBy('id')->keys());

				//Limita o rankind do módulo para os 10 primeiros
				$rankingModulo = $rankingModulo->slice(0,10);

				//topTopicos
				$topTopicos = $topicos;
				arsort($topTopicos);
				$melhorTopico = reset($topTopicos);
				$piorTopico = end($topTopicos);
				$topTopicos = array();
				$topTopicos['melhor'] = $melhorTopico;
				$topTopicos['pior'] = $piorTopico;

				// adiciona as informações do dashboard no objeto turma;
				$turma->meuRanking = $meuRanking;
				$turma->acertos = $certas;
				$turma->erros = $erradas;
				$turma->topicos = $topicos;
				$turma->topTopicos = $topTopicos;
				$turma->rankingTurma = $rankingTurma;
				$turma->rankingModulo = $rankingModulo;

			}

			//dd($turmas);

			return View::make('aluno/dashboard')->with('turmas', $turmas);
		});

});

	

// ===============================================
// PROFESSOR SECTION =============================
// ===============================================

Route::group(array('prefix' => 'professor', 'before'=>'professor'), function(){


		Route::get('home/{idioma?}', function($idioma = null){
			// fazer a busca com o idioma
			global $idioma;

			if($idioma !=null){
				global $idioma;
				$turmas = Turma::where('idProfessor', '=', Auth::user()->id)->where('status','=','1')->get();
				$cursos = Curso::whereHas('turmas', function($q)
					{
						global $idioma;
						$q->where('idProfessor', '=', Auth::user()->id)->where('idIdioma', '=', Idioma::where('nome','=', $idioma)->first())->where('status','=','1');
					})->get();

				$cursosArray = $cursos->toArray();

				return View::make('professor/home')->with(array('cursos'=>$cursos, 'cursosArray'=>$cursosArray, 'turmas'=>$turmas));
			}else{
				$turmas = Turma::where('idProfessor', '=', Auth::user()->id)->where('status','=','1')->get();
				$cursos = Curso::whereHas('turmas', function($q)
					{
						$q->where('idProfessor', '=', Auth::user()->id)->where('status','=','1');
					})->get();

				$cursosArray = $cursos->toArray();

				return View::make('professor/home')->with(array('cursos'=>$cursos, 'cursosArray'=>$cursosArray, 'turmas'=>$turmas));
			}
			
		});

	//Mensagens
		Route::get('mensagens/entrada', function(){
			$mensagens = Mensagem::where('idUsuarioDestino', '=', Auth::user()->id)->orderBy('id', 'desc')->paginate(10);
			return View::make('mensagem/professorInbox')->with('mensagens', $mensagens);
			
		});

		Route::get('mensagens/enviados', function(){
			$mensagens = Mensagem::where('idUsuarioOrigem', '=', Auth::user()->id)->orderBy('id', 'desc')->paginate(10);
			return View::make('mensagem/professorEnviados')->with('mensagens', $mensagens);
			
		});

		Route::get('mensagem/{id}', function($id){
			$mensagem = Mensagem::find($id);
			if(strpos(URL::previous(), 'enviados') != false){

			}else{
				$mensagem->lida = 1;
			}
			
			$mensagem->save();
			return View::make('mensagem/professorShow')->with('mensagem', $mensagem);
			
		});

		Route::post('mensagem/enviar', function(){
			$mensagem = new Mensagem;
			$mensagem->idUsuarioOrigem = Auth::user()->id;
			$mensagem->idUsuarioDestino = Input::get('idUsuarioDestino');
			$mensagem->titulo = Input::get('titulo');
			$mensagem->conteudo = Input::get('conteudo');
			$mensagem->data = date('d-m-Y H:i:s');

			$mensagem->lida = 0;
			$mensagem->save();

			return Redirect::back();
			
		});

		Route::post('mensagem/responder', function(){
			$mensagem = new Mensagem;
			$mensagem->idUsuarioOrigem = Auth::user()->id;
			$mensagem->idUsuarioDestino = Input::get('idUsuarioDestino');
			$mensagem->titulo = Input::get('titulo');
			$mensagem->conteudo = Input::get('conteudo');
			$mensagem->data = date('d-m-Y H:i:s');
			$mensagem->idRE = Input::get('idRE');

			$mensagem->lida = 0;
			$mensagem->save();

			return Redirect::back();
			
		});

	//Perfil - Senha

		Route::get('perfil', function(){
			if(Session::has('mensagem')){
				$mensagem = Session::get('mensagem');
				return View::make('professor/perfil')->with('mensagem', $mensagem);
			}
			return View::make('professor/perfil');
			
		});

		Route::post('atualizaSenha', function(){

			$user = User::find(Input::get('id'));

			$user->password = Hash::make(Input::get('senha'));
			$user->save();
			return Redirect::to('professor/perfil')->with('mensagem', 'Sua senha foi alterada!');

		});

		Route::post('atualizaCadastro', function(){
			$user = User::find(Input::get('id'));
			$user->nome       = Input::get('nome');
			$user->sobrenome       = Input::get('sobrenome');
			$user->email       = Input::get('email');
			$user->login = Input::get('codRegistro');

			$professor= Professor::find($user->id);

			$imagem = Input::file('urlImagem');
			$filename="";

			if(Input::file('urlImagem')!=NULL){
				$filename = $imagem->getClientOriginalName();

				$user->urlImagem = 'img/'.$filename;
				
				$imagem->move('img/', $filename);
			}

			$user->save();

			$professor->formacaoAcademica = Input::get('formacaoAcademica');
			$professor->sobreMim = Input::get('sobreMim');
			$professor->codRegistro       = Input::get('codRegistro');

			$professor->save();

			return Redirect::back()->with('mensagem', 'Os dados foram atualizados!');
		});

	// Módulos - Aulas

		Route::get('modulo/{id}', function($id){
			$modulo = Modulo::find($id);
			return View::make('modulo/professorView')->with('modulo',$modulo);
		});

		Route::get('modulo/{idModulo}/{idTurma}', function($idModulo, $idTurma){
			$modulo = Modulo::find($idModulo);
			$turma = Turma::find($idTurma);
			$alunos = $turma->alunos;

			foreach ($alunos as $keyA => $aluno) {
				$presenca = 0;
				foreach ($modulo->atividades as $keyM => $atividade) {
					($aluno->acessos->contains($atividade)) ? $presenca++ : '' ;
				}
				($presenca != 0) ? $presenca = $presenca/$modulo->atividades->count() : '';
				$aluno->presenca = $presenca;
			}

			return View::make('modulo/professorTurmaView')->with('modulo',$modulo)
														 ->with('turma', $turma)
														 ->with('alunos', $alunos);
		});

		Route::get('turma/{id}', function($id){
			$turma = Turma::find($id);
			$alunos = $turma->alunos;
			return View::make('turma/professorView')->with('turma',$turma)
										           ->with('alunos',$alunos);
		});


	//Atividades

		Route::get('atividade/{id}', function($id){
			$atividade = Atividade::find($id);

			return View::make('atividade/professorView')->with('atividades',$atividade);
		});

		Route::get('atividade/turma/{idAtividade}/{idTurma}', function($idAtividade, $idTurma){
			$atividade = Atividade::find($idAtividade);
			$turma = Turma::find($idTurma);
			$alunos = $turma->alunos;
			$questoes = $atividade->questoes->sortBy('numero');

			$i;
			$j;
			for ($i = 0; $i < sizeof($alunos); $i++) {
				$alunos[$i]->respostas = array();

				for ($j = 0; $j < sizeof($questoes); $j++) {
					$resposta = Resposta::where('idAluno', '=', $alunos[$i]->id )->where('idQuestao', '=', $questoes[$j]->numero)->pluck('respostaAluno');
					if($resposta == $questoes[$j]->respostaCerta){
						$r = $alunos[$i]->respostas;
						$r[] = "1";
						$alunos[$i]->respostas = $r;
					}else{
						$r = $alunos[$i]->respostas;
						$r[] = "0";
						$alunos[$i]->respostas = $r;
					}
				}
				$respostasCorretas = substr_count(implode(",", $alunos[$i]->respostas), '1');
				($respostasCorretas != 0) ? $alunos[$i]->desempenho = $respostasCorretas/sizeof($questoes) : $alunos[$i]->desempenho = 0;
			}

			$atividade = Atividade::find($idAtividade);			 

			return View::make('atividade/professorTurmaView')->with('atividade',$atividade)
																  ->with('turma',$turma)
										                          ->with('alunos',$alunos);
		});
		
		Route::get('atividade/extra/{idAtividade}', function($idAtividade){
			$atividade = Atividade::find($idAtividade);
			$turmas = Turma::where('idProfessor', '=', Auth::user()->id)->get();
			foreach ($turmas as $turma) {
				$turma->alunosTurma = $turma->alunos;
			}
			$alunos;
			$questoes = $atividade->questoes->sortBy('numero');

			$i;
			$j;
			$k;
			for ($k=0; $k < sizeof($turmas) ; $k++) {
				$alunos = $turmas[$k]->alunosTurma;
				for ($i = 0; $i < sizeof($alunos); $i++) {
					$alunos[$i]->respostas = array();

					for ($j = 0; $j < sizeof($questoes); $j++) {
						
						$resposta = Resposta::where('idAluno', '=', $alunos[$i]->id )->where('idQuestao', '=', $questoes[$j]->numero)->pluck('respostaAluno');
						if($resposta == $questoes[$j]->respostaCerta){
							$r = $alunos[$i]->respostas;
							$r[] = "1";
							$alunos[$i]->respostas = $r;
						}else{
							$r = $alunos[$i]->respostas;
							$r[] = "0";
							$alunos[$i]->respostas = $r;
						}
					}
					$respostasCorretas = substr_count(implode(",", $alunos[$i]->respostas), '1');
					($respostasCorretas != 0) ? $alunos[$i]->desempenho = $respostasCorretas/sizeof($questoes) : $alunos[$i]->desempenho = 0;

				}

				$turmas[$k]->alunosTurma = $alunos;
			}
				

			$atividade = Atividade::find($idAtividade);			 

			return View::make('atividade/extraProfessorView')->with('exercicio',$atividade)
																  ->with('turmas',$turmas)
																  ->with('turmasArray',$turmas->toArray());
		});

		Route::get('atividadesExtras', function(){
			$modulos = Modulo::all();

			$categorias = Categoria::all();

			foreach ($modulos as $modulo) {
				$categorias->push($modulo);
			}

			//$categorias = $modulos->combine(Categoria::all());

			$atividadesExtras = Atividade::where('tipo', '=', '2')->where('idUsuario', '=', Auth::user()->id)->get(); // trocar por Auth::User

			return View::make('atividade/atividadeExtraProfessor')->with('categorias', $categorias)
														  ->with('atividadesExtras', $atividadesExtras);
		});

		Route::get('atividade/{id}/editar', function($id){
			$atividade = Atividade::find($id);

			return View::make('atividade/editarProfessorView')->with('atividade',$atividade);
		});

		//CRUD Professor - Atividades Extras e Questoes

		Route::post('criarAtividadeExtra', function(){
			$atividadeExtra = new Atividade;
			$atividadeExtra->nome = Input::get('nome');
			$atividadeExtra->tipo = 2;
			$atividadeExtra->status = 0;
			$idModulo = Input::get('idModulo');
			$idCategoria = Input::get('idCategoria');
			$atividadeExtra->idUsuario = Auth::user()->id;

			if($idModulo!=""){
				$atividadeExtra->idModulo = Input::get('idModulo');
			}
			if($idCategoria!=""){
				$atividadeExtra->idCategoria = Input::get('idCategoria');
			}

			$atividadeExtra->save();

			// redirect
			Session::flash('message', 'Atividade Extra criado com sucesso!');
			return Redirect::to('professor/atividade/'.$atividadeExtra->id.'/editar');
		});

		Route::post('criarQuestaoRU', function(){
			$questao = new Questao;
			$pergunta = Input::get('pergunta');

			$questao->textopergunta = Input::get('textopergunta');

			if($pergunta!=1){
				$arquivo = Input::file('arquivo');
				$filename = $arquivo->getClientOriginalName();

				$questao->urlMidia = 'files/'.$filename;
				
				$arquivo->move('files/', $filename);
			}

	        $questao->idAtividade = Input::get('idatividade');

			$questao->categoria = Input::get('pergunta');

			$questao->idTopico = Input::get('topico');
			$questao->pontos = Input::get('dificuldade');

			$questao->tipo=2;

			$questao->respostaCerta = Input::get('respostaCerta');
			$questao->save();

			$questao->numero = $questao->id;
			$questao->save();

			Session::flash('message', 'Questao criada com sucesso!');
			return Redirect::back();

		});

		Route::post('criarQuestaoME', function(){
			$questao = new Questao;
			$pergunta = Input::get('pergunta');
			$resposta = Input::get('resposta');

			$questao->textopergunta = Input::get('textopergunta');

			$questao->tipo=1;

			if($pergunta!=1){
				$arquivo = Input::file('arquivo');
				$filename = $arquivo->getClientOriginalName();

				$questao->urlMidia = 'files/'.$filename;
				
				$arquivo->move('files/', $filename);
			}

			if($resposta==1){

				$questao->alternativaA = Input::get('a');
				$questao->alternativaB = Input::get('b');
				$questao->alternativaC = Input::get('c');
				$questao->alternativaD = Input::get('d');

			}else{

				//#A
				
				$alternativaA = Input::file('a');
				$filenameA = $alternativaA->getClientOriginalName();
				$questao->alternativaA = 'files/'.$filenameA;
				$alternativaA->move('files/', $filenameA);

				//#B

				$alternativaB = Input::file('b');
				$filenameB = $alternativaB->getClientOriginalName();
				$questao->alternativaB = 'files/'.$filenameB;
				$alternativaB->move('files/', $filenameB);

				//C

				$alternativaC = Input::file('c');
				$filenameC = $alternativaC->getClientOriginalName();
				$questao->alternativaC = 'files/'.$filenameC;
				$alternativaC->move('files/', $filenameC);

				//#D
				$alternativaD = Input::file('d');
				$filenameD = $alternativaD->getClientOriginalName();
				$questao->alternativaD = 'files/'.$filenameD;
				$alternativaD->move('files/', $filenameD);
			}

			$questao->respostaCerta = Input::get('respostaCerta');
			$questao->idAtividade = Input::get('idatividade');
			$questao->idTopico = Input::get('topico');
			$questao->pontos = Input::get('dificuldade');

			$questao->categoria = (Input::get('pergunta')).(Input::get('resposta'));

			$questao->save();

			$questao->numero = $questao->id;
			$questao->save();

			// redirect
			Session::flash('message', 'Questao criada com sucesso!');
			return Redirect::back();
		});

		Route::post('atualizarAtividadeExtra', function(){
			$atividadeExtra = Atividade::find(Input::get('id'));
			$atividadeExtra->nome = Input::get('nome');
			$idModulo = Input::get('idModulo');
			$idCategoria = Input::get('idCategoria');
			$atividadeExtra->status = Input::get('status');

			if(isset($idModulo)){
				$atividadeExtra->idModulo = Input::get('idModulo');
			}
			if(isset($idCategoria)){
				$atividadeExtra->idCategoria = Input::get('idCategoria');
			}

			$atividadeExtra->save();

			// redirect
			Session::flash('message', 'Atividade Extra atualizada com sucesso!');
			return Redirect::back();
		});

		Route::post('alterarOrdem', function(){
			
			$atividade = Atividade::find(Input::get('0'));
			$key=1;
			//return Response::json(Input::all());


			$questoes = $atividade->questoes->sortBy('numero');

			//return Response::json(dd($numeros));

			foreach ($questoes as $questao) {
				//return Response::json(dd($numeros[Input::get($key)-1]));
				$questao->numero = Input::get($key);
				$questao->save();
				$key++;
			}

			return Response::json("alterado");

		});


});

// ===============================================
// ADMIN SECTION =================================
// ===============================================

Route::group(array('prefix' => 'admin', 'before'=>'admin'), function(){

		Route::get('home/{idioma?}', function($idioma = null){
			if($idioma == null){
				$cursos = Curso::all();
				$cursosArray = $cursos->toArray();
				return View::make('administrador/home')->with(array('cursos'=>$cursos, 'cursosArray'=>$cursosArray));	
			}else{
				$cursos = Curso::where('idIdioma','=',Idioma::where('nome','=', $idioma)->first()->id)->get();
				$cursosArray = $cursos->toArray();
				return View::make('administrador/home')->with(array('cursos'=>$cursos, 'cursosArray'=>$cursosArray));
			}
			
		});

		Route::get('perfil', function(){
			if(Session::has('mensagem')){
				$mensagem = Session::get('mensagem');
				return Redirect::to('admin/administrador/'.Auth::user()->id)->with('mensagem', $mensagem);
			}
			return Redirect::to('admin/administrador/'.Auth::user()->id);
			
		});

	//Idiomas

		Route::get('idiomas', function(){
			return View::make('idioma/adminView');
		});

		Route::get('listarIdiomas', function(){
			$idiomas = Idioma::all();
			foreach ($idiomas as $idioma) {
				$idioma->action = "<button style='margin-right: 5px;' class='btn btn-xs btn-success' data-toggle='modal' data-target='#editarIdioma' data-id='$idioma->id' data-nome='$idioma->nome'><i class='fa fa-pencil'></i></button></a><button class='btn btn-xs btn-danger'><i class='fa fa-times'></i></button>";
			}

			$response = array(
					"data" => $idiomas->toArray(),
					"iTotalRecords" => count($idiomas),
					"iTotalDisplayRecords" => count($idiomas)
				);
			return Response::json($response);
		});

		Route::post('criarIdioma', function(){
			$idioma = new Idioma;
			$idioma->nome = Input::get('nome');
			$idioma->save();
		});

	//Cursos

		Route::post('criarCurso', function(){
			$Curso = new Curso;
			$Curso->nome = Input::get('nome');
			$Curso->idIdioma = Input::get('idioma');

			$Curso->save();
			Session::flash('message', "Curso criado com sucesso!");
			return Redirect::back();
		});

		Route::post('atualizarCurso', function(){
			$Curso 			    = Curso::find(Input::get('id')); 
			$Curso->nome       	= Input::get('nome');
			$Curso->idIdioma      = Input::get('idioma');
			
			$Curso->save();

			Session::flash('message', "Alterações salvas com sucesso!");
			return Redirect::back();
		});


	//Modulos
		Route::get('modulo/{id}', function($id){
			$modulo = Modulo::find($id);
			return View::make('modulo/adminView')->with('modulo',$modulo);
		});

		Route::post('criarModulo', function(){
			$modulos = new Modulo;
			$modulos->nome = Input::get('nome');
			$modulos->idCurso = Input::get('idCurso');

			$modulos->save();

			// redirect
			Session::flash('message', 'Módulo criado com sucesso!');
			return Redirect::back();
		});

		Route::post('atualizarModulo', function(){
			$Modulo 			    = Modulo::find(Input::get('id')); 
			$Modulo->nome       	= Input::get('nome');
			
			$Modulo->save();

			Session::flash('message', "Alterações salvas com sucesso!");
			return Redirect::back();
		});

	//Turmas

		Route::get('turma/{id}', function($id){
			$turma = Turma::find($id);
			$alunos = $turma->alunos;
			return View::make('turma/adminView')->with('turma',$turma)
										  ->with('alunos',$alunos);
		});

		Route::post('criarTurma', function(){
			$turma = new Turma;
			$turma->nome = Input::get('nome');
			$turma->idProfessor = Input::get('idprofessor');
			$turma->idModulo = Input::get('idModulo');

			$turma->save();

			// redirect
			Session::flash('message', 'Módulo criado com sucesso!');
			return Redirect::back();
		});

		Route::post('atualizarTurma', function(){
			$Turma 			    = Turma::find(Input::get('id')); 
			$Turma->nome       	= Input::get('nome');
			
			$Turma->save();

			Session::flash('message', "Alterações salvas com sucesso!");
			return Redirect::back();
		});

		Route::post('matricularAluno', function(){
			$turma = Turma::find(Input::get('idTurma'));
			$aluno = Aluno::find(Input::get('idAluno'));

			$turma->alunos()->save($aluno);
			return Redirect::back();
		});

		Route::get('desmatricularAluno/{idAluno}/{idTurma}', function($idAluno, $idTurma){
			$turma = Turma::find($idTurma);
			$aluno = Aluno::find($idAluno);

			$turma->alunos()->detach($aluno);
			return Redirect::back();
		});

	//Aulas
		Route::post('criarAula', function(){
			$Aula = new Aula;
			$Aula->titulo = Input::get('nome');
			$Aula->idModulo = Input::get('idModulo');

			$Aula->save();

			// redirect
			Session::flash('message', 'Aula criada com sucesso!');
			return Redirect::back();
		});

		Route::post('atualizarAula', function(){
			$Aula 			    = Aula::find(Input::get('id')); 
			$Aula->titulo       	= Input::get('nome');
			
			$Aula->save();

			Session::flash('message', "Alterações salvas com sucesso!");
			return Redirect::back();
		});

	//Materiais

		Route::post('criarMaterial', function(){
			$Material = new Materialapoio;
			$Material->nome = Input::get('nome');
			$Material->idAula = Input::get('idAula');

			$arquivo = Input::file('arquivo');
			$filename="";
			if($arquivo!=NULL){
				$filename = $arquivo->getClientOriginalName();

				$Material->url = 'files/'.$filename;
				
				$arquivo->move('files/', $filename);
			}

			$Material->save();

			// redirect
			Session::flash('message', 'Material criado com sucesso!');
			return Redirect::back();
		});

		Route::post('atualizarMaterial', function(){
			$Material 			    = MaterialApoio::find(Input::get('id')); 
			$Material->nome       	= Input::get('nome');

			$arquivo = Input::file('arquivo');

			if($arquivo!=NULL){
				$filename = $arquivo->getClientOriginalName();
				$Material->url = 'files/'.$filename;
				$arquivo->move('files/', $filename);

			}
			
			$Material->save();

			Session::flash('message', "Alterações salvas com sucesso!");
			return Redirect::back();
		});

	//Atividades

		Route::get('atividadesExtras', function(){
			$modulos = Modulo::all();

			$categorias = Categoria::all();

			foreach ($modulos as $modulo) {
				$categorias->push($modulo);
			}

			//$categorias = $modulos->combine(Categoria::all());

			$atividadesExtras = Atividade::where('tipo', '=', '2')->get();

			return View::make('atividade/atividadeExtraAdmin')->with('categorias', $categorias)
														  ->with('atividadesExtras', $atividadesExtras);
		});

		Route::get('atividade/{id}/editar', function($id){
			$atividade = Atividade::find($id);

			if($atividade->status == '1'){
				Session::flash('message', 'Primeiro inative a Atividade para poder editá-la!');
				return Redirect::back();
			}

			return View::make('atividade/editarAdmin')->with('atividade',$atividade);
		});

		Route::post('criarAtividadeExtra', function(){
			$atividadeExtra = new Atividade;
			$atividadeExtra->nome = Input::get('nome');
			$atividadeExtra->tipo = 2;
			$atividadeExtra->status = 0;
			$idModulo = Input::get('idModulo');
			$idCategoria = Input::get('idCategoria');
			$atividadeExtra->idUsuario = Auth::user()->id;

			if($idModulo!=""){
				$atividadeExtra->idModulo = Input::get('idModulo');
			}
			if($idCategoria!=""){
				$atividadeExtra->idCategoria = Input::get('idCategoria');
			}

			$atividadeExtra->save();

			// redirect
			Session::flash('message', 'Atividade Extra criado com sucesso!');
			return Redirect::to('admin/atividadeExtra/'.$atividadeExtra->id.'/editar');
		});

		Route::post('atualizarAtividadeExtra', function(){
			$atividadeExtra = Atividade::find(Input::get('id'));
			$atividadeExtra->nome = Input::get('nome');
			$idModulo = Input::get('idModulo');
			$idCategoria = Input::get('idCategoria');
			$atividadeExtra->status = Input::get('status');

			if(isset($idModulo)){
				$atividadeExtra->idModulo = Input::get('idModulo');
			}
			if(isset($idCategoria)){
				$atividadeExtra->idCategoria = Input::get('idCategoria');
			}

			$atividadeExtra->save();

			// redirect
			Session::flash('message', 'Atividade Extra atualizada com sucesso!');
			return Redirect::back();
		});

		Route::get('atividadeExtra/{id}/editar', function($id){
			$atividadeExtra = Atividade::find($id);

			return View::make('atividade/extraEditarAdmin')->with('atividade',$atividadeExtra);
		});

		Route::post('criarAtividade', function(){
			$Atividade = new Atividade;
			$Atividade->nome = Input::get('nome');
			$Atividade->status = 0;
			$Atividade->idAula = Input::get('idAula');
			$Atividade->idUsuario = Auth::user()->id;

			$Atividade->save();

			// redirect
			Session::flash('message', 'Atividade criado com sucesso!');
			return Redirect::to('/admin/atividade/'.$Atividade->id.'/editar');
		});

		Route::post('atualizarAtividade', function(){
			$Atividade 			    = Atividade::find(Input::get('id')); 
			$Atividade->nome       	= Input::get('nome');
			$Atividade->status 		= Input::get('status');
			
			$Atividade->save();

			Session::flash('message', "Alterações salvas com sucesso!");
			return Redirect::back();
		});

		Route::post('alterarOrdem', function(){
			
			$atividade = Atividade::find(Input::get('0'));
			$key=1;
			//return Response::json(Input::all());


			$questoes = $atividade->questoes->sortBy('numero');

			//return Response::json(dd($numeros));

			foreach ($questoes as $questao) {
				//return Response::json(dd($numeros[Input::get($key)-1]));
				$questao->numero = Input::get($key);
				$questao->save();
				$key++;
			}

			return Response::json("alterado");
		});

		//Categoria
		Route::post('criarCategoria', function(){
			$categoria = new Categoria;
			$categoria->nome = Input::get('nome');

			$categoria->save();

			// redirect
			Session::flash('message', 'Categoria criada com sucesso!');
			return Redirect::back();
		});

		Route::post('atualizarCategoria', function(){
			$categoria = Categoria::find(Input::get('id'));
			$categoria->nome = Input::get('nome');

			$categoria->save();

			// redirect
			Session::flash('message', 'Alterações salvas com sucesso!');
			return Redirect::back();
		});

	//Questoes

		Route::post('criarQuestaoRU', function(){
			$questao = new Questao;
			$pergunta = Input::get('pergunta');

			$questao->textopergunta = Input::get('textopergunta');

			if($pergunta!=1){
				$arquivo = Input::file('arquivo');
				$filename = $arquivo->getClientOriginalName();

				$questao->urlMidia = 'files/'.$filename;
				
				$arquivo->move('files/', $filename);
			}

	        $questao->idAtividade = Input::get('idatividade');

	        $questao->idTopico = Input::get('topico');
			$questao->pontos = Input::get('dificuldade');

			$questao->categoria = Input::get('pergunta');

			$questao->tipo=2;

			$questao->respostaCerta = Input::get('respostaCerta');
			$questao->save();

			$questao->numero = $questao->id;
			$questao->save();

			Session::flash('message', 'Questao criada com sucesso!');
			return Redirect::back();
		});

		Route::post('criarQuestaoME', function(){
			$questao = new Questao;
			$pergunta = Input::get('pergunta');
			$resposta = Input::get('resposta');

			$questao->textopergunta = Input::get('textopergunta');

			$questao->tipo=1;

			if($pergunta!=1){
				$arquivo = Input::file('arquivo');
				$filename = $arquivo->getClientOriginalName();

				$questao->urlMidia = 'files/'.$filename;
				
				$arquivo->move('files/', $filename);
			}

			if($resposta==1){

				$questao->alternativaA = Input::get('a');
				$questao->alternativaB = Input::get('b');
				$questao->alternativaC = Input::get('c');
				$questao->alternativaD = Input::get('d');

			}else{

				//#A
				
				$alternativaA = Input::file('a');
				$filenameA = $alternativaA->getClientOriginalName();
				$questao->alternativaA = 'files/'.$filenameA;
				$alternativaA->move('files/', $filenameA);

				//#B

				$alternativaB = Input::file('b');
				$filenameB = $alternativaB->getClientOriginalName();
				$questao->alternativaB = 'files/'.$filenameB;
				$alternativaB->move('files/', $filenameB);

				//C

				$alternativaC = Input::file('c');
				$filenameC = $alternativaC->getClientOriginalName();
				$questao->alternativaC = 'files/'.$filenameC;
				$alternativaC->move('files/', $filenameC);

				//#D
				$alternativaD = Input::file('d');
				$filenameD = $alternativaD->getClientOriginalName();
				$questao->alternativaD = 'files/'.$filenameD;
				$alternativaD->move('files/', $filenameD);
			}

			$questao->respostaCerta = Input::get('respostaCerta');
			$questao->idAtividade = Input::get('idatividade');

			$questao->idTopico = Input::get('topico');
			$questao->pontos = Input::get('dificuldade');

			$questao->categoria = (Input::get('pergunta')).(Input::get('resposta'));

			$questao->save();

			$questao->numero = $questao->id;
			$questao->save();

			// redirect
			Session::flash('message', 'Questao criada com sucesso!');
			return Redirect::back();
		});

		Route::post('atualizarRespostaUnica', function(){
			$questao 			    = Questao::find(Input::get('id')); 
			$pergunta = Input::get('pergunta');

			$questao->textopergunta = Input::get('textopergunta');

			if($pergunta!=1 && Input::file('arquivo')!= NULL){
				$arquivo = Input::file('arquivo');
				$filename = $arquivo->getClientOriginalName();

				$questao->urlMidia = 'files/'.$filename;
				
				$arquivo->move('files/', $filename);
			}

			$questao->categoria = $pergunta;

			$questao->idTopico = Input::get('topico');
			$questao->pontos = Input::get('dificuldade');

			$questao->respostaCerta = Input::get('respostaCerta');
			$questao->save();

			Session::flash('message', 'Questao atualizada com sucesso!');
			return Redirect::back();
		});

		Route::post('atualizarMultiplaEscolha', function(){
			$questao = Questao::find(Input::get('id')); 
			$pergunta = Input::get('pergunta');
			$resposta = Input::get('resposta');

			$questao->textopergunta = Input::get('textopergunta');

			if($pergunta!=1 && Input::file('arquivo')!= NULL){
				$arquivo = Input::file('arquivo');

				if($arquivo != null){
					$filename = $arquivo->getClientOriginalName();

					$questao->urlMidia = 'files/'.$filename;
					
					$arquivo->move('files/', $filename);
				}
			}

			if($resposta==1){
				if(Input::get('a')!=null)
					$questao->alternativaA = Input::get('a');

				if(Input::get('b')!=null)
					$questao->alternativaB = Input::get('b');

				if(Input::get('c')!=null)
					$questao->alternativaC = Input::get('c');

				if(Input::get('d')!=null)
					$questao->alternativaD = Input::get('d');

			}else{

				//#A
				
				$alternativaA = Input::file('a');
				if($alternativaA != NULL){
					$filenameA = $alternativaA->getClientOriginalName();
					$questao->alternativaA = 'files/'.$filenameA;
					$alternativaA->move('files/', $filenameA);
				}

				//#B

				$alternativaB = Input::file('b');
				if($alternativaB != NULL){
					$filenameB = $alternativaB->getClientOriginalName();
					$questao->alternativaB = 'files/'.$filenameB;
					$alternativaB->move('files/', $filenameB);
				}

				//C

				$alternativaC = Input::file('c');
				if($alternativaC != NULL){
					$filenameC = $alternativaC->getClientOriginalName();
					$questao->alternativaC = 'files/'.$filenameC;
					$alternativaC->move('files/', $filenameC);
				}

				//#D
				$alternativaD = Input::file('d');
				if($alternativaC != NULL){
					$filenameD = $alternativaD->getClientOriginalName();
					$questao->alternativaD = 'files/'.$filenameD;
					$alternativaD->move('files/', $filenameD);
				}
			}

			$questao->respostaCerta = Input::get('respostacerta');
			
			$questao->categoria = $pergunta. $resposta;

			$questao->idTopico = Input::get('topico');
			$questao->pontos = Input::get('dificuldade');

			$questao->save();

			// redirect
			Session::flash('message', 'Alterações salvas com sucesso!');
			return Redirect::back();
		});

	//Usuarios
	
	//Alunos
		Route::get('alunos', function(){

			return View::make('aluno/showAdmin');
		});

		Route::get('listarAlunos', function(){

			$data = array();

			$users = User::where('tipo', '=', 1)->get();
			//dd($users);
			foreach ($users as $key => $user) {
				$user->matricula = Aluno::find($user->id)->matricula;
				$user->dataNascimento = Aluno::find($user->id)->dataNascimento;
				$user->action = "<a style='color:white;' href='aluno/$user->id'><button style='margin-right: 5px;' class='btn btn-xs btn-primary'><i class='fa fa-user'></i></buton></a><a href='aluno/$user->id'><button style='margin-right: 5px;' class='btn btn-xs btn-success'><i class='fa fa-pencil'></i></button></a><button class='btn btn-xs btn-danger'><i class='fa fa-times'></i></button>";
				array_push($data, $user);
			}
			//dd($data);



			$response = array(
					"data" => $data,
					"iTotalRecords" => count($data),
					"iTotalDisplayRecords" => count($data)
				);
			return Response::json($response);
		});

		Route::get('aluno/{id}', function($id){
			$mensagem=NULL;
			if(Session::has('mensagem')){
				$mensagem = Session::get('mensagem');
			}
			$aluno = Aluno::find($id);
			$user = User::find($id);
			$aluno->nome = $user->nome;
			$aluno->sobrenome = $user->sobrenome;
			$aluno->password = $user->password;
			$aluno->email = $user->email;
			$aluno->respostaSecreta = $user->respostaSecreta;
			$aluno->nome = $user->nome;
			return View::make('aluno/editarAdmin')->with('aluno', $aluno)
											->with('mensagem', $mensagem);
			
		});

		Route::post('criarAluno', function(){
			$user = new User;
			$user->nome       = Input::get('nome');
			$user->sobrenome       = Input::get('sobrenome');
			$user->email       = Input::get('email');
			$user->login = Input::get('matricula');
			$user->password = Hash::make(Input::get('password'));
			$user->tipo = 1;

			$confirmation_code = str_random(30);
			foreach(User::all() as $u){
				if($u->confirmation_code = $confirmation_code){
					$confirmation_code = str_random(30);
				}
			}
			$user->confirmation_code = $confirmation_code;

			$imagem = Input::file('urlImagem');
			$filename="";

			if(Input::file('urlImagem')!=NULL){
				$filename = $imagem->getClientOriginalName();
				$user->urlImagem = 'img/'.$filename;
				
				$imagem->move('img/', $filename);
			}
			$user->save();


			$aluno = new Aluno;

			$aluno->id = $user->id;

			$aluno->dataNascimento = Input::get('dataNascimento');
			$aluno->sobreMim = Input::get('sobreMim');
			$aluno->matricula       = Input::get('matricula');
			$aluno->dataVencimentoBoleto       = Input::get('dataVencimentoBoleto');

			$aluno->save();

			Mail::send('templateEmail', array('confirmation_code' => $confirmation_code), function($message) {
	            $message->to(Input::get('email'), Input::get('nome'))
	                ->subject('KalanGO! - Verifique sua conta');
	        });

			return Redirect::back();
		});

		Route::post('atualizarAluno', function(){
			$user = User::find(Input::get('id'));
			$user->nome       = Input::get('nome');
			$user->sobrenome       = Input::get('sobrenome');
			$user->email       = Input::get('email');
			$user->login = Input::get('matricula');

			$aluno= Aluno::find($user->id);

			$imagem = Input::file('urlImagem');
			$filename="";


			if(Input::file('urlImagem')!=NULL){
				$user->urlImagem = 'img/'.$filename;
				$filename = $imagem->getClientOriginalName();

				$aluno->urlImagem = 'img/'.$filename;
				
				$imagem->move('img/', $filename);
			}

			$user->save();

			$aluno->dataNascimento = Input::get('dataNascimento');
			$aluno->sobreMim = Input::get('sobreMim');
			$aluno->matricula       = Input::get('matricula');
			$aluno->dataVencimentoBoleto       = Input::get('dataVencimentoBoleto');

			$aluno->save();

			return Redirect::back()->with('mensagem', 'Os dados foram atualizados!');
		});

	//Professores
		Route::get('professores', function(){

			return View::make('professor/showAdmin');
		});
		
		Route::get('listarProfessores', function(){

			$data = array();

			$users = User::where('tipo', '=', 2)->get();
			//dd($users);
			foreach ($users as $key => $user) {
				$user->codRegistro = Professor::find($user->id)->codRegistro;
				$user->formacaoAcademica = Professor::find($user->id)->formacaoAcademica;
				$user->action = "<a href='professor/$user->id'><button style='margin-right: 5px;' class='btn btn-xs btn-primary'><i class='fa fa-user'></i></button></a><a href='professor/$user->id'><button style='margin-right: 5px;' class='btn btn-xs btn-success'><i class='fa fa-pencil'></i></button></a><button class='btn btn-xs btn-danger'><i class='fa fa-times'></i></button>";
				array_push($data, $user);
			}

			$response = array(
					"data" => $data,
					"iTotalRecords" => count($data),
					"iTotalDisplayRecords" => count($data)
				);
			return Response::json($response);
		});

		Route::get('professor/{id}', function($id){
			$mensagem =NULL;
			if(Session::has('mensagem')){
				$mensagem = Session::get('mensagem');
			}
			$professor = Professor::find($id);
			$user = User::find($id);
			$professor->nome = $user->nome;
			$professor->sobrenome = $user->sobrenome;
			$professor->password = $user->password;
			$professor->email = $user->email;
			$professor->respostaSecreta = $user->respostaSecreta;
			$professor->nome = $user->nome;
			return View::make('professor/editarAdmin')->with('professor', $professor)
												->with('mensagem', $mensagem);
			
		});

		Route::post('criarProfessor', function(){
			$user = new User;
			$user->nome       = Input::get('nome');
			$user->sobrenome       = Input::get('sobrenome');
			$user->email       = Input::get('email');
			$user->login = Input::get('codRegistro');
			$user->tipo = '2';
			$user->password = Hash::make(Input::get('password'));

			$confirmation_code = str_random(30);
			foreach(User::all() as $u){
				if($u->confirmation_code = $confirmation_code){
					$confirmation_code = str_random(30);
				}
			}
			$user->confirmation_code = $confirmation_code;

			$imagem = Input::file('urlImagem');
			$filename="";

			if(Input::file('urlImagem')!=NULL){
				$filename = $imagem->getClientOriginalName();

				$user->urlImagem = 'img/'.$filename;
				
				$imagem->move('img/', $filename);
			}

			$user->save();
			$professor->id= $user->id;

			$professor->formacaoAcademica = Input::get('formacaoAcademica');
			$professor->sobreMim = Input::get('sobreMim');
			$professor->codRegistro       = Input::get('codRegistro');

			$professor->save();

			Mail::send('templateEmail', array('confirmation_code' => $confirmation_code), function($message) {
	            $message->to(Input::get('email'), Input::get('nome'))
	                ->subject('KalanGO! - Verifique sua conta');
	        });

			return Redirect::back();
		});

		Route::post('atualizarProfessor', function(){
			$user = User::find(Input::get('id'));
			$user->nome       = Input::get('nome');
			$user->sobrenome       = Input::get('sobrenome');
			$user->email       = Input::get('email');
			$user->login = Input::get('codRegistro');

			$professor= Professor::find($user->id);

			$imagem = Input::file('urlImagem');
			$filename="";

			if(Input::file('urlImagem')!=NULL){
				$filename = $imagem->getClientOriginalName();

				$user->urlImagem = 'img/'.$filename;
				
				$imagem->move('img/', $filename);
			}

			$user->save();

			$professor->formacaoAcademica = Input::get('formacaoAcademica');
			$professor->sobreMim = Input::get('sobremim');
			$professor->codRegistro       = Input::get('codRegistro');

			$professor->save();

			return Redirect::back()->with('mensagem', 'Os dados foram atualizados!');
		});

	//Administradores
		Route::get('administradores', function(){

			return View::make('administrador/showAdmin');
		});

		Route::get('listarAdministradores', function(){

			$data = array();

			$users = User::where('tipo', '=', 3)->get();
			//dd($users);
			foreach ($users as $key => $user) {
				$user->codRegistro = Administrador::find($user->id)->codRegistro;
				$user->action = "<a style='color: white;' href='administrador/$user->id'><button style='margin-right: 5px;' class='btn btn-xs btn-primary'><i class='fa fa-user'></i></buton></a><a href='administrador/$user->id'><button style='margin-right: 5px;' class='btn btn-xs btn-success'><i class='fa fa-pencil'></i></button></a><button class='btn btn-xs btn-danger'><i class='fa fa-times'></i></button>";
				array_push($data, $user);
			}
			//dd($data);



			$response = array(
					"data" => $data,
					"iTotalRecords" => count($data),
					"iTotalDisplayRecords" => count($data)
				);
			return Response::json($response);
		});

		Route::get('administrador/{id}', function($id){
			$mensagem =NULL;
			if(Session::has('mensagem')){
				$mensagem = Session::get('mensagem');
			}
			$administrador = Administrador::find($id);
			$user = User::find($id);
			$administrador->nome = $user->nome;
			$administrador->sobrenome = $user->sobrenome;
			$administrador->password = $user->password;
			$administrador->email = $user->email;
			$administrador->respostaSecreta = $user->respostaSecreta;
			$administrador->nome = $user->nome;
			return View::make('administrador/editarAdmin')->with('administrador', $administrador)
													->with('mensagem', $mensagem);
			
		});

		Route::post('criarAdministrador', function(){
			$user = new User;
			$user->nome       = Input::get('nome');
			$user->sobrenome       = Input::get('sobrenome');
			$user->email       = Input::get('email');
			$user->login = Input::get('codRegistro');
			$user->tipo = '3';
			$user->password = Hash::make(Input::get('password'));

			$imagem = Input::file('urlImagem');
			$filename="";

			if(Input::file('urlImagem')!=NULL){
				$filename = $imagem->getClientOriginalName();
				$user->urlImagem = 'img/'.$filename;
				
				$imagem->move('img/', $filename);
			}

			$user->save();
			$administrador= Administrador::find($user->id);

			$administrador->codRegistro = Input::get('codRegistro');

			$administrador->save();

			return Redirect::back();
		});

		Route::post('atualizarAdministrador', function(){
			$user = User::find(Input::get('id'));
			$user->nome       = Input::get('nome');
			$user->sobrenome       = Input::get('sobrenome');
			$user->email       = Input::get('email');
			$user->login = Input::get('codRegistro');

			$administrador= Administrador::find($user->id);

			$imagem = Input::file('urlImagem');
			$filename="";

			if(Input::file('urlImagem')!=NULL){
				$filename = $imagem->getClientOriginalName();
				$user->urlImagem = 'img/'.$filename;

				$administrador->urlImagem = 'img/'.$filename;
				
				$imagem->move('img/', $filename);
			}

			$user->save();

			$administrador= Administrador::find($user->id);
			$administrador->codRegistro = Input::get('codRegistro');

			$administrador->save();

			return Redirect::back()->with('mensagem', 'Os dados foram atualizados!');
		});

	//Avisos

		Route::get('avisos', function(){
			$categorias = Curso::all();
			return View::make('aviso/viewAdmin')->with('categorias', $categorias);
		});

		//ajax - tabela
		Route::get('listarAvisos/{idCurso?}', function($idCurso = null){
			$avisos;
			if($idCurso != null){
				$avisos = Aviso::where('idCurso','=',$idCurso)->get();
			}else{
				$avisos = Aviso::all();
			}

			foreach ($avisos as $aviso) {
				$aviso->dataExpiracao = date_format(date_create($aviso->dataExpiracao),"d/m/Y");
				$aviso->criadoPor = User::find($aviso->idUsuario)->nome;
				$aviso->enviadoPara = ($aviso->idCurso == null) ? 'Todos alunos' : 'Alunos do curso: '.$aviso->curso->nome;
				$aviso->action = "<a style='color:white;' href='/admin/aviso/$aviso->id'><button style='margin-right: 5px;' class='btn btn-xs btn-primary'><i class='fa fa-external-link'></i></buton></a><button style='margin-right: 5px;' class='btn btn-xs btn-success' data-id='$aviso->id' data-titulo='$aviso->titulo' data-descricao='$aviso->descricao' data-urlImagem='$aviso->urlImagem' data-dataExpiracao='$aviso->dataExpiracao' data-idCurso='$aviso->idCurso' data-toggle='modal' data-target='#editarAviso'><i class='fa fa-pencil'></i></button><button class='btn btn-xs btn-danger'><i class='fa fa-times'></i></button>";
			}

			$response = array(
					"data" => $avisos,
					"iTotalRecords" => count($avisos),
					"iTotalDisplayRecords" => count($avisos)
				);
			return Response::json($response);
		});

		Route::get('aviso/{id}', function($id){
			$aviso = Aviso::find($id);
			return View::make('aviso/showAdmin')->with('aviso',$aviso);
		});

		Route::post('criarAviso', function(){
			$aviso = new Aviso;
			$aviso->titulo = Input::get('titulo');
			$aviso->descricao = Input::get('descricao');

			$imagem = Input::file('urlImagem');
			$filename="";
			if($imagem!=NULL){
				$filename = $imagem->getClientOriginalName();

				$aviso->urlImagem = 'img/'.$filename;
				
				$imagem->move('img/', $filename);
			}
			$data = explode('/', Input::get('dataExpiracao'));
			$aviso->dataExpiracao = date('Y-m-d', mktime(0,0,0,$data[1],$data[0],$data[2])); //hora, min, seg, mes, dia, ano;
			$aviso->idUsuario = Auth::user()->id;
			$aviso->idCurso = (Input::get('idCurso') != null) ? Input::get('idCurso') : NULL ;
			$aviso->save();

			return Redirect::back();
		});

		Route::post('atualizarAviso', function(){
			$aviso = Aviso::find(Input::get('id'));
			$aviso->titulo = Input::get('titulo');
			$aviso->descricao = Input::get('descricao');
			$aviso->dataExpiracao = Input::get('dataExpiracao');
			$aviso->idUsuario = Auth::user()->id;
			$aviso->idCurso = (Input::get('idCurso') != null)? Input::get('idCurso') : NULL;

			$imagem = Input::file('urlImagem');
			$filename="";
			if($imagem!=NULL){
				$filename = $imagem->getClientOriginalName();

				$aviso->urlImagem = 'img/'.$filename;
				
				$imagem->move('img/', $filename);
			}

			$aviso->save();
			return Redirect::back();
		});

		Route::get('avisos/deletar/{id}', function($id){
			$aviso = Aviso::find($id);
			$aviso->delete();
			return Redirect::back();
		});

	//Tópicos

		Route::get('topicos', function(){
			return View::make('topico/showAdmin');
		});

		//ajax - tabela
		Route::get('listarTopicos', function(){
			$topicos = Topico::all();

			foreach ($topicos as $topico) {
				$topico->criadoPor = User::find($topico->idUsuario)->nome;
				$topico->numQuestoes = $topico->questoes->count();
				$topico->action = "<button style='margin-right: 5px;' class='btn btn-xs btn-success' data-id='$topico->id' data-nome='$topico->nome' data-toggle='modal' data-target='#editarTopico'><i class='fa fa-pencil'></i></button><button class='btn btn-xs btn-danger'><i class='fa fa-times'></i></button>";
			}

			$response = array(
					"data" => $topicos,
					"iTotalRecords" => count($topicos),
					"iTotalDisplayRecords" => count($topicos)
				);
			return Response::json($response);
		});

		Route::post('criarTopico', function(){
			$topico = new Topico;
			$topico->nome = Input::get('nome');
			$topico->idUsuario = Auth::user()->id;

			$topico->save();

			return Redirect::back();
		});

		Route::post('atualizarTopico', function(){
			$topico = Topico::find(Input::get('id'));
			$topico->nome = Input::get('nome');
			$topico->idUsuario = Auth::user()->id;

			$topico->save();
			return Redirect::back();
		});

		Route::get('topicos/deletar/{id}', function($id){
			$topico = Topico::find($id);
			$topico->delete();
			return Redirect::back();
		});

	// Propagandas

		Route::get('propagandas', function(){
			return View::make('propaganda/showAdmin');
		});

		//Ajax - Tabela
		Route::get('listarPropagandas', function(){
			$propagandas = Propaganda::all();

			foreach ($propagandas as $propaganda) {
				$propaganda->criadoPor = User::find($propaganda->idUsuario)->nome;
				$propaganda->linkView = ($propaganda->link != null) ? "<a href='$propaganda->link''>Visitar Link</a>" : 'N/A';
				$propaganda->action = "<button style='margin-right: 5px;' class='btn btn-xs btn-primary' data-toggle='modal' data-target='#verImagem' data-src='/$propaganda->imagem' data-link='$propaganda->link' ><i class='fa fa-picture-o'></i></buton><button style='margin-right: 5px;' class='btn btn-xs btn-success' data-id='$propaganda->id' data-titulo='$propaganda->titulo' data-toggle='modal' data-target='#editarPropaganda'><i class='fa fa-pencil'></i></button><button class='btn btn-xs btn-danger'><i class='fa fa-times'></i></button>";
			}

			$response = array(
					"data" => $propagandas,
					"iTotalRecords" => count($propagandas),
					"iTotalDisplayRecords" => count($propagandas)
				);
			return Response::json($response);
		});

		Route::post('criarPropaganda', function(){
			$propaganda = new Propaganda;
			$propaganda->titulo = Input::get('titulo');

			$imagem = Input::file('urlImagem');
			$filename="";
			if($imagem!=NULL){
				$filename = $imagem->getClientOriginalName();

				$propaganda->imagem = 'img/'.$filename;
				
				$imagem->move('img/', $filename);
			}
			$propaganda->idUsuario = Auth::user()->id;
			$propaganda->save();

			return Redirect::back();
		});

		Route::post('atualizarPropaganda', function(){
			$propaganda = Propaganda::find(Input::get('id'));
			$propaganda->titulo = Input::get('titulo');
			$propaganda->idUsuario = Auth::user()->id;

			$imagem = Input::file('urlImagem');
			$filename="";
			if($imagem!=NULL){
				$filename = $imagem->getClientOriginalName();

				$propaganda->imagem = 'img/'.$filename;
				
				$imagem->move('img/', $filename);
			}

			$propaganda->save();
			return Redirect::back();
		});

		Route::get('propagandas/deletar/{id}', function($id){
			$propaganda = Propaganda::find($id);
			$propaganda->delete();
			return Redirect::back();
		});

});


// Crud Controllers - Admin pannel

Route::resource('acessos', 'AcessoController');
Route::resource('administradores', 'AdministradorController');
Route::resource('alunos', 'AlunoController');
Route::resource('atividadesextras', 'AtividadesExtraController');
Route::resource('aulas', 'AulaController');
Route::resource('categorias', 'CategoriaController');
Route::resource('cursos', 'CursoController');
Route::resource('exercicios', 'AtividadeController');
Route::resource('materialapoio', 'MaterialApoioController');
Route::resource('modulos', 'ModuloController');
Route::resource('professores', 'ProfessorController');
Route::resource('turmas', 'TurmaController');
Route::resource('turmasalunos', 'TurmasAlunoController');
Route::resource('usuarios', 'UserController');

 	
// Event::listen('illuminate.query', function($sql)
// {
//     var_dump($sql);
// }); 

?>


