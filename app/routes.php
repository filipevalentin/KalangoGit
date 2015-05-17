<?php

$layout = 'layouts.master';

Route::get('teste5',function(){

	// $c = Curso::withTrashed()->find(1);

	// $c->restore();
	// $confirmation_code = "00XgHv1zdNGxCvr8QP3m6X3szxuIgZ";

	// Mail::queue('templateEmail', array('confirmation_code' => $confirmation_code), function($message) {
	//             $message->to("filipethesnake2@gmail.com", "Filipe")
	//                 ->subject('KalanGO! - Verifique sua conta');
	        // });

	//return Topico::orderBy('nome')->get();
	return User::lists('email');

	return Modulo::find(2)->alunos;//whereRaw('datediff(now(), EmailAtividade) > 15 or(EmailAtividade is null)')->get() ;
	return AcessosAtividade::where('idAluno','=', 3)->whereRaw('datediff(now(), DataAcesso) > 1')->get();

	return dd(date_diff(date_create(Aluno::find(3)->acessos()->orderBy('DataAcesso','desc')->first()->pivot->DataAcesso) , date_create(date('Y-m-d'))));

	return (Hash::check('99559955.', User::find(4)->password)) ? "ok" : "nao bate";

	return View::make('templateEmail')->with('confirmation_code','asdlkasdiashdasho');

	return User::where('id','!=',1)->get()->lists('email');

	Session::put("cursos", Curso::all());

	return Session::get("cursos");


	
});

Route::get('truncateKalango', function(){

	try {
		DB::table('contrata')->delete();
		DB::statement("alter table contrata auto_increment = 1");
		DB::table('respostas')->delete();
		DB::statement("alter table respostas auto_increment = 1");
		DB::table('turmasalunos')->delete();
		DB::statement("alter table turmasalunos auto_increment = 1");
		DB::table('acessosatividades')->delete();
		DB::statement("alter table acessosatividades auto_increment = 1");
		DB::table('avisosturmas')->delete();
		DB::statement("alter table avisosturmas auto_increment = 1");
		DB::table('materialapoio')->delete();
		DB::statement("alter table materialapoio auto_increment = 1");
		DB::table('propagandas')->delete();
		DB::statement("alter table propagandas auto_increment = 1");
		DB::table('avisos')->delete();
		DB::statement("alter table avisos auto_increment = 1");
		DB::table('mensagens')->delete();
		DB::statement("alter table mensagens auto_increment = 1");
		DB::table('questoes')->delete();
		DB::statement("alter table questoes auto_increment = 1");
		DB::table('topicos')->delete();
		DB::statement("alter table topicos auto_increment = 1");
		DB::table('atividades')->delete();
		DB::statement("alter table atividades auto_increment = 1");
		DB::table('aulas')->delete();
		DB::statement("alter table aulas auto_increment = 1");
		DB::table('turmas')->delete();
		DB::statement("alter table turmas auto_increment = 1");
		DB::table('modulos')->delete();
		DB::statement("alter table modulos auto_increment = 1");
		DB::table('cursos')->delete();
		DB::statement("alter table cursos auto_increment = 1");
		DB::table('professores')->delete();
		DB::statement("alter table professores auto_increment = 1");
		DB::table('administradores')->delete();
		DB::statement("alter table administradores auto_increment = 1");
		DB::table('alunos')->delete();
		DB::statement("alter table alunos auto_increment = 1");
		DB::table('empresas')->delete();
		DB::statement("alter table empresas auto_increment = 1");
		DB::table('categorias')->delete();
		DB::statement("alter table categorias auto_increment = 1");
		DB::table('idiomas')->delete();
		DB::statement("alter table idiomas auto_increment = 1");
		DB::table('usuarios')->delete();
		DB::statement("alter table usuarios auto_increment = 1");

		$u3 = new User;
		$u3->nome = "Administrador 1";
		$u3->login = 789;
		$u3->tipo = "3";
		$u3->password= Hash::make('789');
		$u3->confirmed = '1';
		$u3->save();

		$a = new Administrador;
		$a->id = $u3->id;
		$a->codRegistro = 789;
		$a->save();

		return "<p><h1>Todas as tabelas foram limpas!!</h1></p> <p><h1>Acesse o Kalango com o usuário admin: 789 / 789</h1></p>";
	} catch (Exception $e) {
		return "Algo de errado aconteceu...: \n".$e;
	}
	
});	

Route::get('truncate/{table}', function($tabela){

	try {
		DB::table($tabela)->delete();
		DB::statement("alter table $tabela auto_increment = 1");
		
		return "<p><h1>A tabela '$tabela' foi limpa!!</h1></p>";
	} catch (Exception $e) {
		return "Algo de errado aconteceu...: \n".$e;
	}
	
});

Route::get('seedKalango', function(){
	try {
		Artisan::call('db:seed');
		return "Os registros foram criados!";
	} catch (Exception $e) {
		return $e;
	}
});


Route::get('teste4',function(){ 
	
	return View::make('atividade/testeRecVoz');

});

// ===============================================
// FUNÇÕES SECTION ===============================
// ===============================================
	
	function deletarMaterial($material){
		if( !in_array($material->url, MaterialApoio::all()->lists('url'))){
			unlink($material->url);
		}

		$material->delete();
	}

	function deletarQuestao($questao, $metodo){

		if($metodo == "soft"){
			$questao->delete();
		}else{

			$questao->forceDelete();
		}

	}

	function deletarAtividade($atividade, $metodo = "soft"){

		foreach ($atividade->questoes as $questao) {
			deletarQuestao($questao, $metodo);
		}

		if($metodo == "soft"){

			$atividade->delete();
		}else{

			$atividade->forceDelete();
		}
	}

	function deletarAula($aula, $metodo = "soft"){

		foreach ($aula->atividades as $atividade) {
			deletarAtividade($atividade, $metodo);
		}

		foreach ($aula->materialApoio as $material ) {
			deletarMaterial($material, $metodo);
		}

		if($metodo == "soft"){
			$aula->delete();
		}else{
			$aula->forceDelete();
		}
	}

	function deletarTurma($turma, $metodo = "soft"){

		if($metodo == "soft"){
			$turma->delete();
			$turma->avisos()->sync(array());
		}else{
			$turma->alunos()->sync(array());
			$turma->avisos()->sync(array());
			$turma->forceDelete();
		}
	}

	function deletarModulo($modulo, $metodo = "soft"){

		foreach ($modulo->aulas as $aula) {
			deletarAula($aula, $metodo);
		}

		foreach ($modulo->turmas as $turma) {
			deletarTurma($turma, $metodo);
		}

		if($metodo == "soft"){
			$modulo->delete();
		}else{
			$atividadesExtras = Atividade::withTrashed()->where('idModulo','=', $modulo->id)->get();

			if($atividadesExtras != null){
				foreach ($atividadesExtras as $atividade) {
					$atividade->idModulo = null;
					$atividade->save();
				}
			}
			$modulo->forceDelete();
		}
	}

	function deletarCurso($curso, $metodo = "soft"){

		Contrata::where("idCurso","=",$curso->id)->delete();

		foreach ($curso->modulos as $modulo) {
			deletarModulo($modulo, $metodo);
		}	

		if($metodo == "soft"){
			$curso->delete();
		}else{
			$curso->forceDelete();
		}
	}

	function deletarIdioma($idioma, $metodo = "soft"){

		foreach ($idioma->cursos as $curso) {
			deletarCurso($curso, $metodo);
		}

		if($metodo == "soft"){
			$idioma->delete();
		}else{
			$idioma->forceDelete();
		}
	}

	function addBreadCrumb($nome){

		$bc = Session::get('bc');
		$test = true;
		foreach ($bc as $b) {
			if( in_array(URL::current(), $b) ){
				$test = false;
			}
		}
		if($test){
			$bc[] = array('nome'=>$nome, 'link'=>URL::current());

			Session::put('bc',$bc);
		}

	}

	function addBreadCrumbHome($nome){
		$bc = array();

		$bc[] = array('nome'=>"Home", 'link'=> '/');
		$bc[] = array('nome'=>$nome, 'link'=>URL::current());

		Session::put('bc',$bc);

	}

	function emailNovasAtividades($modulo = null){
		if($modulo == null){
			foreach (Aluno::whereRaw('datediff(now(), EmailAtividade) > 15 or(EmailAtividade is null)')->get() as $aluno) {
				//checa se o último acesso do aluno a uma atividade foi a mais de 15 dias
				if(AcessosAtividade::where('idAluno','=', $aluno->id)->whereRaw('datediff(now(), DataAcesso) > 15')->count() != null){
					Mail::queue('templateNovasAtividades', array('aluno' => $aluno->usuario->nome), function($message) use($aluno) {
			            $message->to($aluno->usuario->email, $aluno->usuario->nome)
			                ->subject('KalanGO! - Novas Atividades');
			        });
				}
			}

		}else{
			foreach ($modulo->turmas as $turma) {
				//Pegas os alunos que não foi enviado email de lembrete ou que o último email enviado já tem mais de 15 dias
				foreach ($turma->alunos()->whereRaw('datediff(now(), EmailAtividade) > 15 or(EmailAtividade is null)')->get() as $aluno) {
					//checa se o último acesso do aluno a uma atividade foi a mais de 15 dias
					if(AcessosAtividade::where('idAluno','=', $aluno->id)->whereRaw('datediff(now(), DataAcesso) > 15')->count() != null){
						Mail::queue('templateNovasAtividades', array('aluno' => $aluno->usuario->nome), function($message) use($aluno) {
				            $message->to($aluno->usuario->email, $aluno->usuario->nome)
				                ->subject('KalanGO! - Novas Atividades');
				        });
					}
				}
				
			}
		}

	}


	

// ===============================================
// COMMON SECTION ================================
// ===============================================

		Route::controller('password', 'RemindersController');

		Route::get('criarUsuariosTeste', function(){

			$u3 = new User;
			$u3->nome = "Administrador 1";
			$u3->login = 789;
			$u3->tipo = "3";
			$u3->password= Hash::make('789');
			$u3->confirmed = '1';
			$u3->save();

			$a = new Administrador;
			$a->id = $u3->id;
			$a->codRegistro = 789;
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
			if (Auth::attempt(array('login' => Input::get('usuario2') , 'password' => Input::get('senha2'), 'confirmed' => 1 ))){
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
	        	return Redirect::to('/')->with('mensagem', 'Código Inválido');
	        }

	        $user = User::whereConfirmationCode($codigo)->first();

	        if ( ! $user)
	        {
	           return Redirect::to('/')->with('mensagem', 'Usuário não existe mais');
	        }

	        $user->confirmed = 1;
	        $user->confirmation_code = null;
	        $user->save();

	        if($user->tipo == 1){
				return Redirect::to('/aluno/perfil')->with('mensagem', 'E-mail Confirmado!');	        	
	        }elseif($user->tipo == 2){
	        	return Redirect::to('/professor/perfil')->with('mensagem', 'E-mail Confirmado!');;
	        }else{
	        	return Redirect::to('/admin/perfil')->with('mensagem', 'E-mail Confirmado!');;
	        }

		});

	
// ===============================================
// ALUNO SECTION ================================
// ===============================================

Route::group(array('prefix' => 'aluno', 'before'=>'aluno'), function(){
	
	//home

		Route::get('home', function(){
			$bc = array();
			$bc[] = array('nome'=>"Home", 'link'=> URL::current());

			Session::put('bc',$bc);

			$turmas = Auth::user()->aluno->turmas->filter(function($turma){
				if($turma->status != 0){
					return true;
				}
			});
			return View::make('aluno/home')->with('turmas', $turmas);
		});

		Route::post('contatoEmail', function(){
			$titulo = Input::get('titulo');
			$conteudo = Input::get('conteudo');
			$aluno = Auth::user()->aluno;

			Mail::queue('contatoEmail', array('aluno'=>$aluno, 'conteudo'=>$conteudo), function($message) {
	            $message->to('kalangogame@gmail.com', 'Contato Kalango')
	                ->subject('Contato Aluno - '.Input::get('titulo'));
	        });

	        Session::flash('info', "Mensagem enviada com sucesso!");

			return Redirect::back();

		});

	//Cursos Anteriores
		Route::get('cursos/anteriores', function(){
			addBreadCrumbHome("Cursos Anteriores");

			$turmas = Auth::user()->aluno->turmas->filter(function($turma){
				if($turma->status != 1){
					return true;
				}
			});
			return View::make('aluno/cursosAnteriores')->with('turmas', $turmas);
		});


	//Mensagens

		Route::get('mensagens/entrada', function(){
			addBreadCrumbHome("Mensagens");
			$mensagens = Mensagem::where('idUsuarioDestino', '=', Auth::user()->id)->orderBy('id', 'desc')->paginate(10);
			return View::make('mensagem/alunoInbox')->with('mensagens', $mensagens);
			
		});

		Route::get('mensagens/enviados', function(){
			addBreadCrumbHome("Enviados");
			$mensagens = Mensagem::where('idUsuarioOrigem', '=', Auth::user()->id)->orderBy('id', 'desc')->paginate(10);
			return View::make('mensagem/alunoEnviados')->with('mensagens', $mensagens);
			
		});

		Route::get('mensagem/{id}', function($id){
			addBreadCrumb("Ver Mensagem");
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
			$mensagem->data = date('Y-m-d h:i:s');

			$mensagem->lida = 0;
			$mensagem->save();

			Session::flash("info", "Mensagem enviada com sucesso");
			return Redirect::back();
			
		});

		Route::post('mensagem/responder', function(){
			$mensagem = new Mensagem;
			$mensagem->idUsuarioOrigem = Auth::user()->id;
			$mensagem->idUsuarioDestino = Input::get('idUsuarioDestino');
			$mensagem->titulo = Input::get('titulo');
			$mensagem->conteudo = Input::get('conteudo');
			$mensagem->data = date('Y-m-d h:i:s');
			$mensagem->idRE = Input::get('idRE');

			$mensagem->lida = 0;
			$mensagem->save();

			Session::flash("info", "Mensagem enviada com sucesso");
			return Redirect::back();
			
		});

	//Avisos

		Route::get('avisos', function(){
			addBreadCrumbHome("Avisos");
			$avisos = Aviso::all();
			return View::make('aviso/viewAluno')->with('avisos',$avisos);
		});

		Route::get('aviso/{id}', function($id){
			addBreadCrumb("Ver Aviso");
			$aviso = Aviso::find($id);
			return View::make('aviso/showAluno')->with('aviso',$aviso);
		});

	//Atividade e Ativ.Extra - Responder/VerificarAcesso/RegistrarAcesso/Conclusão

		Route::get('atividade/{idAtividade}', function($idAtividade){  // ### APLICAR LOGICA PARA IR NO RESULTADO DAS RESPOSTAS CASO JA TENHA FEITO A ATIVIDADE
			addBreadCrumb("Atividade");
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
				Session::flash('warning','Acesso Proibido!');
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
			$acesso->DataAcesso = date('Y-m-d');

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
			$acesso->DataAcesso = date('Y-m-d');
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

			$questao = Questao::find($idQuestao);

			$respostasCorretas = explode(";", $questao->respostaCerta);

			if(strpos($respostaAluno, ";") !== false){
				foreach ($respostasCorretas as $r) {
					if(strtolower($r) == strtolower($respostaAluno)){
						$resposta->correcao = '1';
					}
					else{
						$respsota->correcao = '0';
					}
				}
			}else{
				if(strtolower($questao->respostaCerta) == strtolower($respostaAluno)){
					$resposta->correcao = '1';
				}
				else{
					$respsota->correcao = '0';
				}
			}
			

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

		});

	//Listar Atividades Extras

		Route::get('atividades/extra', function(){
			addBreadCrumbHome("Atividades Extras");
			$turmas = Auth::user()->aluno->turmas;

			$categorias = Categoria::all();

			$atividadesExtras = new \Illuminate\Database\Eloquent\Collection;

			foreach ($turmas as $turma) {
				foreach ($turma->modulo->atividadesExtras()->where('status','=','1') as $atividade) {
					$atividadesExtras->push($atividade);
				}
			}

			foreach (Atividade::where('idModulo','=', null)->where('status','=','1')->get() as $atividade) {
				$atividadesExtras->push($atividade);
			}
		
			$atividadesExtras = $atividadesExtras->unique();


			return View::make('atividade/atividadeExtraAluno')->with('atividadesExtras', $atividadesExtras)->with('categorias',$categorias);
		});

	// Ver Conteudos do Módulo - Aulas
		Route::get('modulo/{id}', function($id){
			$modulo = Modulo::find($id);
			addBreadCrumbHome($modulo->curso->nome.'-'.$modulo->nome);
			return View::make('modulo/alunoView')->with('modulo',$modulo);
		});


	//Perfil - Senha - Dashborad

		Route::get('perfil', function(){
			addBreadCrumbHome("Perfil");
			if(Session::has('mensagem')){
				$mensagem = Session::get('mensagem');
				return View::make('perfil')->with('mensagem', $mensagem);
			}
			return View::make('aluno/perfil');
			
		});

		Route::post('atualizaSenha', function(){

			$user = User::find(Input::get('id'));

			if( Hash::check(Input::get('senhaAtual'),$user->password) ){
				$user->password = Hash::make(Input::get('senha'));
				$user->save();
				Session::flash('info','Sua senha foi alterada!');
				return Redirect::to('aluno/perfil');
			}else{
				Session::flash('warning','A senha atual está incorreta!');
				return Redirect::to('aluno/perfil');
			}

		});

		Route::post('atualizaCadastro', function(){
			$user = User::find(Input::get('id'));
			$user->nome       = Input::get('nome');
			$user->sobrenome       = Input::get('sobrenome');

			$imagem = Input::file('urlImagem');
			$filename="";

			if(Input::file('urlImagem')!=NULL){
				$filename = $imagem->getClientOriginalName();
				$filename = str_random(30).$filename;

				$user->urlImagem = 'img/'.$filename;
				
				$imagem->move('img/', $filename);
			}

			$user->save();

			$aluno= Aluno::find($user->id);
			$data = explode('/', Input::get('dataNascimento'));
			$aluno->dataNascimento = date('Y-m-d', mktime(0,0,0,$data[1],$data[0],$data[2]));
			$aluno->sobreMim = Input::get('sobreMim');

			$aluno->save();

			Session::flash('info','Os dados foram atualizados');
			return Redirect::back();
		});

		Route::get('dashboard', function(){
			addBreadCrumbHome("Dashborad");
			$turmas = Auth::user()->aluno->turmas->filter(function($turma){
			    return ($turma->status == "1"); // filtra só os com status ativo;
			});


			$certas=0;
			$erradas=0;

			// aqui separamos as informações do dashboard relativa a cada modulo/turma que o aluno cursa. Ex: respostas certas/erradas de atividades do curso inglês(turma A) e outro de espanhol(turmaB)
			foreach ($turmas as $turma) {
								//pega todas as questoes de atividades extras, ou seja, que são relativas a um modulo (FK-IdModulo != null)
				$aux = Questao::withTrashed()->whereIn('idAtividade', (array_merge($turma->modulo->atividadesExtras()->withTrashed()->get()->lists('id'),$turma->modulo->atividades()->withTrashed()->get()->lists('id')) == null) ? array('null'): array_merge($turma->modulo->atividadesExtras()->withTrashed()->get()->lists('id'),$turma->modulo->atividades()->withTrashed()->get()->lists('id')) )->
								// pega todas as questoes de atividades de aula, ou seja, que são relativas a Aula (FK-IdAula != null)
								// por fim, pega só as questoes onde o id esta entre os ids das questoes que o aluno já respondeu
								whereIn('id',(Auth::user()->aluno->respostas()->withTrashed()->get()->lists('id') != null)?(Auth::user()->aluno->respostas()->withTrashed()->get()->lists('id')):array('null'))->
								get();
				//$turma->modulo->questoes;
				//filtra só as questoes do modulo que o aluno já respondeu, atraves de intersecção entre as funções aluno->questoes e $aux
				$aux = Auth::user()->aluno->respostas()->withTrashed()->get()->intersect($aux);

				// adiciona a coleção de questoes que o aluno já respondeu para a turma/modulo correspondende da questão
				$turma->questoes = $aux;

				//Pontos por Topicos
				$topicos = array();
				foreach($turma->questoes as $resposta){
					//se o topico ainda não está na lista, add ele na lista, com sua chave sendo seu id, e inicia seu attr "pontos" como 0.
					if (!(@in_array($resposta->idTopico, $topicos)) ){
						$topico = Topico::withTrashed()->find($resposta->idTopico);
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
				$rankingTurma = $turma->alunos()->get();

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

	//Home

		Route::get('home/{idioma?}', function($idioma = null){

			$bc = array();
			$bc[] = array('nome'=>"Home", 'link'=> URL::current());

			Session::put('bc',$bc);
			// fazer a busca com o idioma

			//Pega o objeto idioma
			$idioma = Idioma::where('nome', '=',$idioma)->first();

			if($idioma !=null){

				//Turmas do professor, de todos os idiomas (será interseccionado mais tarde)
				$turmas = Turma::where('idProfessor', '=', Auth::user()->id)->where('status','=','1')->get();

				if($turmas->count() == null){
					$cursos = Curso::where('nome','=',"jq")->get();
				}else{
					//Pega os cursos do idioma
					$cursos = Curso::where('idIdioma','=',$idioma->id)->whereHas('turmas', function($q) use ($turmas)
						{
							$q->whereIn('turmas.id', $turmas->lists('id'));
						})->get();

					foreach ($cursos as $curso) {
						//Pega só os modulos que haja uma turma relacionada ao professor
						$curso->modulos = Modulo::where('idCurso','=',$curso->id)->whereHas('turmas', function($q) use ($turmas){
											$q->whereIn('id',$turmas->lists('id'));
										})->get();

						$curso->numTurmas = 0;

						foreach ($curso->modulos as $modulo) {
							$modulo->turmas = $modulo->turmas->intersect($turmas);
							$curso->numTurmas += $modulo->turmas->count();
						}
						
					}
				}	

				$cursosArray = $cursos->toArray();

				return View::make('professor/home')->with(array('cursos'=>$cursos, 'cursosArray'=>$cursosArray));
			}else{
				$turmas = Turma::where('idProfessor', '=', Auth::user()->id)->where('status','=','1')->get();

				if($turmas->count() == null){
					$cursos = Curso::where('nome','=',"jq")->get();
				}else{
					$cursos = Curso::whereHas('turmas', function($q) use ($turmas)
						{
							$q->whereIn('turmas.id', $turmas->lists('id'));
						})->get();

					foreach ($cursos as $curso) {
						//Pega só os modulos que haja uma turma relacionada ao professor
						$curso->modulos = Modulo::where('idCurso','=',$curso->id)->whereHas('turmas', function($q) use ($turmas){
											$q->whereIn('id',$turmas->lists('id'));
										})->get();

						$curso->numTurmas = 0;

						foreach ($curso->modulos as $modulo) {
							$modulo->turmas = $modulo->turmas->intersect($turmas);
							$curso->numTurmas += $modulo->turmas->count();
						}
						
					}
					
				}

				$cursosArray = $cursos->toArray();

				return View::make('professor/home')->with(array('cursos'=>$cursos, 'cursosArray'=>$cursosArray));
			}
			
		});

	//Mensagens

		Route::get('mensagens/entrada', function(){
			addBreadCrumbHome('Mensagens');

			$mensagens = Mensagem::where('idUsuarioDestino', '=', Auth::user()->id)->orderBy('id', 'desc')->paginate(10);
			return View::make('mensagem/professorInbox')->with('mensagens', $mensagens);
			
		});

		Route::get('mensagens/enviados', function(){
			addBreadCrumb('Enviados');
			$mensagens = Mensagem::where('idUsuarioOrigem', '=', Auth::user()->id)->orderBy('id', 'desc')->paginate(10);
			return View::make('mensagem/professorEnviados')->with('mensagens', $mensagens);
			
		});

		Route::get('mensagem/{id}', function($id){
			addBreadCrumb('Ver Mensagem');
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
			$mensagem->data = date('Y-m-d h:i:s');

			$mensagem->lida = 0;
			$mensagem->save();

			Session::flash("info", "Mensagem enviada com sucesso");
			return Redirect::back();
			
		});

		Route::post('mensagem/turma/enviar', function(){
			$alunos = Turma::find(Input::get('idTurma'))->alunos;

			foreach($alunos as $aluno){
				$mensagem = new Mensagem;
				$mensagem->idUsuarioOrigem = Auth::user()->id;
				$mensagem->titulo = Input::get('titulo');
				$mensagem->conteudo = Input::get('conteudo');
				$mensagem->data = date('d-m-Y H:i:s');
				$mensagem->lida = 0;
				$mensagem->idUsuarioDestino = $aluno->id;
				$mensagem->save();
			}
			
			Session::flash('info','Mensagem enviada com sucesso!');

			return Redirect::back();
			
		});

		Route::post('mensagem/responder', function(){
			$mensagem = new Mensagem;
			$mensagem->idUsuarioOrigem = Auth::user()->id;
			$mensagem->idUsuarioDestino = Input::get('idUsuarioDestino');
			$mensagem->titulo = Input::get('titulo');
			$mensagem->conteudo = Input::get('conteudo');
			$mensagem->data = date('Y-m-d h:i:s');
			$mensagem->idRE = Input::get('idRE');

			$mensagem->lida = 0;
			$mensagem->save();

			Session::flash("info", "Mensagem enviada com sucesso");
			return Redirect::back();
			
		});

	//Avisos

		Route::get('aviso/{id}', function($id){
			addBreadCrumbHome('Ver Aviso');
			$aviso = Aviso::find($id);
			return View::make('aviso/showProfessor')->with('aviso',$aviso);
		});

	//Perfil - Senha

		Route::get('perfil', function(){
			addBreadCrumbHome('Perfil');
			if(Session::has('mensagem')){
				$mensagem = Session::get('mensagem');
				return View::make('professor/perfil')->with('mensagem', $mensagem);
			}
			return View::make('professor/perfil');
			
		});

		Route::post('atualizaSenha', function(){

			$user = User::find(Input::get('id'));

			if(Hash::check(Input::get('senhaAtual'), $user->password)){
				$user->password = Hash::make(Input::get('senha'));
				$user->save();
				Session::flash('info','Sua senha foi alterada!');
				return Redirect::to('professor/perfil');
			}else{
				Session::flash('warning','A senha atual está incorreta!');
				return Redirect::to('professor/perfil');
			}

		});

		Route::post('atualizaCadastro', function(){
			$user = User::find(Input::get('id'));
			$user->nome       = Input::get('nome');
			$user->sobrenome       = Input::get('sobrenome');

			$professor= Professor::find($user->id);

			$imagem = Input::file('urlImagem');
			$filename="";

			if(Input::file('urlImagem')!=NULL){
				$filename = $imagem->getClientOriginalName();
				$filename = str_random(30).$filename;

				$user->urlImagem = 'img/'.$filename;
				
				$imagem->move('img/', $filename);
			}

			$user->save();

			$professor->formacaoAcademica = Input::get('formacaoAcademica');
			$professor->ExperienciaProfissional = Input::get('ExperienciaProfissional');
			$professor->REProf       = Input::get('REProf');

			$professor->save();

			Session::flash('info','Os dados foram atualizados');
			return Redirect::back();
		});

	// Módulos - Aulas

		Route::get('modulo/{id}', function($id){
			$modulo = Modulo::find($id);
			addBreadCrumbHome($modulo->curso->nome.' - '.$modulo->nome);
			return View::make('modulo/professorView')->with('modulo',$modulo);
		});

		Route::get('modulo/{idModulo}/{idTurma}', function($idModulo, $idTurma){
			$modulo = Modulo::find($idModulo);
			addBreadCrumbHome($modulo->nome.' - Acessos da Turma');
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
			addBreadCrumbHome('Turma: '.$turma->nome);
			$alunos = $turma->alunos;
			return View::make('turma/professorView')->with('turma',$turma)
										           ->with('alunos',$alunos);
		});


	//Atividades

		Route::get('atividade/{id}', function($id){
			addBreadCrumb('Atividade');
			$atividade = Atividade::find($id);

			return View::make('atividade/professorView')->with('atividades',$atividade);
		});

		Route::get('atividade/turma/{idAtividade}/{idTurma}', function($idAtividade, $idTurma){
			addBreadCrumb('Atividade - Resultados da Turma');

			$atividade = Atividade::find($idAtividade);
			$turma = Turma::find($idTurma);
			$alunos = $turma->alunos;
			$questoes = $atividade->questoes->sortBy('numero');

			//Segurança - Verifica se esse aluno é de alguma turma do professor em questao, e se essa turma é do professor
			if(!(Auth::user()->professor->turmas->contains($turma) )){
				Session::flash('warning','Acesso Proibido!');
				return Redirect::back();
			}

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
			addBreadCrumb('Ver Atividade');
			$atividade = Atividade::find($idAtividade);
			$turmas = Turma::where('idProfessor', '=', Auth::user()->id)->get();
			foreach ($turmas as $turma) {
				$turma->alunosTurma = $turma->alunos;
			}

			if($atividade->idUsuario != Auth::user()->id){
				Session::flash('warning','Acesso Proibido!');
				return Redirect::back();
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
			addBreadCrumbHome('Atividades Extras');
			$modulos = Modulo::all();

			$categorias = Categoria::all();

			$all = new Modulo;
			$all->id = null;
			$all->nome = '';
			$curso = new stdClass();
			$curso->nome = "Todas Atividades";
			$all->curso = $curso;

			$categorias->prepend($all);

			foreach ($modulos as $modulo) {
				$categorias->push($modulo);
			}

			//$categorias = $modulos->combine(Categoria::all());

			$atividadesExtras = Atividade::where('tipo', '=', '2')->where('idUsuario', '=', Auth::user()->id)->get();

			return View::make('atividade/atividadeExtraProfessor')->with('categorias', $categorias)
														  ->with('atividadesExtras', $atividadesExtras);
		});

		Route::get('atividade/{id}/editar', function($id){
			addBreadCrumb('Editar Atividade');
			$atividade = Atividade::find($id);

			if($atividade->status == '1'){
				Session::flash('warning', 'Primeiro inative a Atividade para poder editá-la!');
				return Redirect::back();
			}

			return View::make('atividade/editarProfessorView')->with('atividade',$atividade);
		});

		//CRUD Professor - Atividades Extras e Questoes

		Route::post('criarAtividadeExtra', function(){
			$atividadeExtra = new Atividade;
			$atividadeExtra->nome = Input::get('nome');
			$atividadeExtra->tipo = 2;
			$atividadeExtra->status = 0;
			$atividadeExtra->DataElaboracao = date('Y-m-d');
			$idModulo = Input::get('idModulo');
			$idCategoria = Input::get('idCategoria');
			$atividadeExtra->idUsuario = Auth::user()->id;

			if($idModulo!=""){
				$atividadeExtra->idModulo = Input::get('idModulo');

				//Checa se existe atividades extras direcionada para este modulo como o mesmo nome
				if(Modulo::find($atividadeExtra->idModulo) != null){
					if(in_array(Input::get('nome'), Modulo::find($atividadeExtra->idModulo)->atividadesExtras->lists('nome')) ){
						Session::flash('warning', "Já existe uma atividade com esse nome relacionada ao módulo escolhido");
						return Redirect::back();
					}
					
				}
			}

			//Checa se existe atividades extras livres com o mesmo nome
			if(Atividade::where('tipo','=','2')->where('idModulo','=', null)->get() != null){
				if(in_array(Input::get('nome'), Atividade::where('tipo','=','2')->where('idModulo','=', null)->get()->lists('nome')) ){
					Session::flash('warning', "Já existe uma atividade com esse nome");
					return Redirect::back();
				}
				
			}

			if($idCategoria!=""){
				$atividadeExtra->idCategoria = Input::get('idCategoria');
			}

			//Envia email de lembrete - Para os alunos ha mais de 15 dias sem acessar o sistema
			$m = Modulo::find($idModulo);
			if($m != null){
				emailNovasAtividades($m);
			}else{
				emailNovasAtividades();
			}

			$atividadeExtra->save();

			// redirect
			Session::flash('message', 'Atividade Extra criado com sucesso!');
			return Redirect::to('professor/atividade/'.$atividadeExtra->id.'/editar');
		});

		Route::post('criarQuestaoRU', function(){

			$atividade = Atividade::find(Input::get('idatividade'));

			if($atividade->tipo == 1){
				$modulo = $atividade->aula->modulo;
			}else{
				$modulo = $atividade->modulo;
			}
			

			//Se já existe alguma turma fechada neste módulo, não podemos alterar as atividaes adding novas questoes
			if($modulo->turmas->count() != null){
				foreach ($modulo->turmas as $turma) {
					if($turma->status == 0){
						Session::flash('warning','<p> Existem turmas que já concluíram esse Módulo</p> <p> Devido ao histórico do aluno, não é possível mudar a sua estrutura adicionando novas questões às suas Atividades </p>');
						return Redirect::back();
					}
				}
			}

			if($atividade->status == 1){
				Session::flash('warning','A atividade está ativa, para adicionar uma questão primeiro mude o seu status para inativo.');
				return Redirect::back();
			}else {
				if (AcessosAtividade::where('idAtividade','=',$atividade->id)->count() != null){
					Session::flash('warning','A atividade já foi acessada por alunos, não será possível adicionar novas questões');
					return Redirect::back();
				}
			}

			$questao = new Questao;
			$pergunta = Input::get('pergunta');
			$resposta = Input::get('resposta');
			$questao->categoria = (Input::get('pergunta')).(Input::get('resposta'));

			$questao->enunciado = Input::get('enunciado');

			if($pergunta!=1){
				$arquivo = Input::file('arquivo');
				$filename = $arquivo->getClientOriginalName();
					$filename = str_random(30).$filename;

				$questao->urlMidia = 'files/'.$filename;
				
				$arquivo->move('files/', $filename);
			}

	        $questao->idAtividade = Input::get('idatividade');

	        $questao->idTopico = Input::get('topico');
			$questao->pontos = Input::get('dificuldade');

			$questao->tipo=2;

			$questao->respostaCerta = Input::get('respostaCerta');
			$questao->save();

			$questao->numero = $questao->id;
			$questao->save();

			Session::flash('info', 'Questão criada com sucesso!');
			return Redirect::back();
		});

		Route::post('criarQuestaoME', function(){

			$atividade = Atividade::find(Input::get('idatividade'));

			if($atividade->tipo == 1){
				$modulo = $atividade->aula->modulo;
			}else{
				$modulo = $atividade->modulo;
			}

			//Se já existe alguma turma fechada neste módulo, não podemos alterar as atividaes adding novas questoes
			if($modulo->turmas->count() != null){
				foreach ($modulo->turmas as $turma) {
					if($turma->status == 0){
						Session::flash('warning','<p> Existem turmas que já concluíram esse Módulo</p> <p> Devido ao histórico do aluno, não é possível mudar a sua estrutura adicionando novas questões às suas Atividades </p>');
						return Redirect::back();
					}
				}
			}

			if($atividade->status == 1){
				Session::flash('warning','A atividade está ativa, para adicionar uma questão primeiro mude o seu status para inativo.');
				return Redirect::back();
			}else {
				if (AcessosAtividade::where('idAtividade','=',$atividade->id)->count() != null){
					Session::flash('warning','A atividade já foi acessada por alunos, não será possível adicionar novas questões');
					return Redirect::back();
				}
			}

			$questao = new Questao;
			$pergunta = Input::get('pergunta');
			$resposta = Input::get('resposta');

			$questao->enunciado = Input::get('enunciado');

			$questao->tipo=1;

			if($pergunta!=1){
				$arquivo = Input::file('arquivo');
				$filename = $arquivo->getClientOriginalName();
					$filename = str_random(30).$filename;

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
			Session::flash('info', 'Questão criada com sucesso!');
			return Redirect::back();
		});
	
		Route::post('atualizarRespostaUnica', function(){
			$questao = Questao::find(Input::get('id'));
			$atividade = Atividade::find($questao->idAtividade);

			if($atividade->tipo == 1){
				$modulo = $atividade->aula->modulo;
			}else{
				$modulo = $atividade->modulo;
			}

			//Se já existe alguma turma fechada neste módulo, não podemos alterar as atividaes adding novas questoes
			if($modulo->turmas->count() != null){
				foreach ($modulo->turmas as $turma) {
					if($turma->status == 0){
						Session::flash('warning','<p> Existem turmas que já concluíram esse Módulo</p> <p> Devido ao histórico do aluno, não é possível mudar a sua estrutura adicionando novas questões às suas Atividades </p>');
						return Redirect::back();
					}
				}
			}

			if($atividade->status == 1){
				Session::flash('warning','A atividade está ativa, para adicionar uma questão primeiro mude o seu status para inativo.');
				return Redirect::back();
			}else {
				if (AcessosAtividade::where('idAtividade','=',$atividade->id)->count() != null){
					Session::flash('warning','A atividade já foi acessada por alunos, não será possível adicionar novas questões');
					return Redirect::back();
				}
			}

			$pergunta = Input::get('pergunta');
			$resposta = Input::get('resposta');
			$questao->categoria = (Input::get('pergunta')).(Input::get('resposta'));

			$questao->enunciado = Input::get('enunciado');

			if($pergunta!=1 && Input::file('arquivo')!= NULL){
				$arquivo = Input::file('arquivo');
				$filename = $arquivo->getClientOriginalName();
					$filename = str_random(30).$filename;

				$questao->urlMidia = 'files/'.$filename;
				
				$arquivo->move('files/', $filename);
			}

			$questao->idTopico = Input::get('topico');
			$questao->pontos = Input::get('dificuldade');

			$questao->respostaCerta = Input::get('respostaCerta');
			$questao->save();

			Session::flash('info', 'Alterações salvas com sucesso!');
			return Redirect::back();
		});

		Route::post('atualizarMultiplaEscolha', function(){
			$questao = Questao::find(Input::get('id'));
			$atividade = Atividade::find($questao->idAtividade);

			if($atividade->tipo == 1){
				$modulo = $atividade->aula->modulo;
			}else{
				$modulo = $atividade->modulo;
			}

			//Se já existe alguma turma fechada neste módulo, não podemos alterar as atividaes adding novas questoes
			if($modulo->turmas->count() != null){
				foreach ($modulo->turmas as $turma) {
					if($turma->status == 0){
						Session::flash('warning','<p> Existem turmas que já concluíram esse Módulo</p> <p> Devido ao histórico do aluno, não é possível mudar a sua estrutura adicionando novas questões às suas Atividades </p>');
						return Redirect::back();
					}
				}
			}

			if($atividade->status == 1){
				Session::flash('warning','A atividade está ativa, para adicionar uma questão primeiro mude o seu status para inativo.');
				return Redirect::back();
			}else {
				if (AcessosAtividade::where('idAtividade','=',$atividade->id)->count() != null){
					Session::flash('warning','A atividade já foi acessada por alunos, não será possível adicionar novas questões');
					return Redirect::back();
				}
			}

			$pergunta = Input::get('pergunta');
			$resposta = Input::get('resposta');

			$questao->enunciado = Input::get('enunciado');

			if($pergunta!=1 && Input::file('arquivo')!= NULL){
				$arquivo = Input::file('arquivo');

				if($arquivo != null){
					$filename = $arquivo->getClientOriginalName();
					$filename = str_random(30).$filename;

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
			Session::flash('info', 'Alterações salvas com sucesso!');
			return Redirect::back();
		});

		Route::post('atualizarAtividadeExtra', function(){
			$atividadeExtra = Atividade::find(Input::get('id'));
			$idModulo = Input::get('idModulo');
			

			if(Input::get('idCategoria') != null){
				$atividadeExtra->idCategoria = Input::get('idCategoria');
			}

			$atividadeExtra->status = Input::get('status');

			if($atividadeExtra->nome != Input::get('nome')){

				if(isset($idModulo)){
					$atividadeExtra->idModulo = Input::get('idModulo');

					if(Modulo::find($atividadeExtra->idModulo) != null){
						if(in_array(Input::get('nome'), Modulo::find($atividadeExtra->idModulo)->atividadesExtras->lists('nome')) ){
							Session::flash('warning', "Já existe uma atividade com esse nome relacionada ao módulo escolhido");
							return Redirect::back();
						}
						
					}
				}

				//Checa se existe atividades extras livres com o mesmo nome
				if(Atividade::where('tipo','=','2')->where('idModulo','=', null)->get() != null){
					if(in_array(Input::get('nome'), Atividade::where('tipo','=','2')->where('idModulo','=', null)->get()->lists('nome')) ){
						Session::flash('warning', "Já existe uma atividade com esse nome");
						return Redirect::back();
					}
					
				}
			}

			$atividadeExtra->nome = Input::get('nome');
			$atividadeExtra->save();

			// redirect
			Session::flash('info', 'Alterações salvas com sucesso!');
			return Redirect::back();
		});

		Route::post('alterarOrdem', function(){
			
			$atividade = Atividade::find(Input::get('0'));
			$key=1;
			
			if($atividade->tipo == 1){
				$modulo = $atividade->aula->modulo;
			}else{
				$modulo = $atividade->modulo;
			}

			//Se já existe alguma turma fechada neste módulo, não podemos alterar as atividaes adding novas questoes
			if($modulo->turmas->count() != null){
				foreach ($modulo->turmas as $turma) {
					if($turma->status == 0){
						return Response::json('<p> Existem turmas que já concluíram esse Módulo</p> <p> Devido ao histórico do aluno, não é possível mudar a sua estrutura alterando a ordem das questões</p>');
					}
				}
			}

			if($atividade->status == 1){
				return Response::json('A atividade está ativa, para adicionar uma questão primeiro mude o seu status para inativo.');
			}else {
				if (AcessosAtividade::where('idAtividade','=',$atividade->id)->count() != null){
					return Response::json('A atividade já foi acessada por alunos, não será possível adicionar novas questões');
				}
			}


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

		Route::get('atividade/deletar/{id}', function($id){
			$atividade = Atividade::find($id);

			if($atividade != null){

				if($atividade->tipo == 1){
					$modulo = $atividade->aula->modulo;

					//Se já existe alguma turma fechada neste módulo, não podemos add novas atividades
					if($modulo->turmas->count() != null){ 
						foreach ($modulo->turmas as $turma) {
							if($turma->status == 0){
								Session::flash('warning','<p> Existem turmas que já concluíram esse Módulo</p> <p> Devido ao histórico do aluno, não é possível mudar a sua estrutura excluindo Atividades </p>');
								return Redirect::back();
							}
						}
					}
				}
				
				if($atividade->acessos->count() == null){

					deletarAtividade($atividade, "hard");
					Session::flash('info', '<p> A atividade e as suas questões foram excluídas </p>');
					return Redirect::back();
				}else{

					deletarAtividade($atividade);
					Session::flash('info', '<p> A atividade e as suas questões foram excluídas </p>');
					return Redirect::back();
				}
				
			}
			
			Session::flash('warning', "Atividade inexistente");

			return Redirect::back();
		});

	//Relatórios Individuais

		Route::get('relatorios/aula/aluno/{idAluno}/{idTurma}',function($idAluno, $idTurma){ 

			// Lógica função individual
			$aluno = Aluno::find($idAluno); //idAluno como parametro 196
			addBreadCrumb('Relatório de Aula - Aluno: '.$aluno->nome);
			$turma = $aluno->turmas->find($idTurma); //idTurma como parametro 41

			//Segurança - Verifica se esse aluno é de alguma turma do professor em questao, e se essa turma é do professor
			if(!(Auth::user()->professor->turmas->contains($turma) )){
				return Redirect::back();
				
			}elseif( !(Auth::user()->professor->turmas->find($turma->id)->alunos->contains($aluno)) ){
				return Redirect::back();		
			}

			// Add o objeto turma que está sendo gerado o relatório, no objeto aluno
			$aluno->turma = $turma;

			//Pega as atvidades que o aluno concluiu - Intersecciona as atividades de aula com as atividades que o aluno já concluiu
			$atividadesAluno = Atividade::whereIn('id',($aluno->acessos()->where('acessosatividades.status','=',1)->get()->lists('id') != null)?$aluno->acessos()->where('acessosatividades.status','=',1)->get()->lists('id') : array('null'))->get();

			//dd($atividadesAluno);

			//Add as aulas ao objeto aluno
			$aluno->aulasAluno = $turma->modulo->aulas;

			//Cria o attr mediaGeral e presençaGeral ao objeto aluno
			$aluno->mediaGeral = 0;
			$aluno->presencaGeral = 0;

			//Contadores parciais para media e presença Gerais
			$countPresencaGeral = 0;
			$countMediaGeral = 0;

			foreach($aluno->aulasAluno as $aula){
				// Cria os attr media e presença, para o objeto aula
				$aula->presenca = 0;
				$aula->media = 0;

				//Cria o attr atividadesAluno e add ao obejto aula
				$aula->atividadesAluno = $aula->atividades;

				//Contadores parciais para media e presença da Aula
				$countPresencaAula = 0;
				$countMediaAula = 0;
				foreach($aula->atividadesAluno as $atividade){
					//cria o attr nota para o objeto atividade
					$atividade->nota = 0;
					//Se essa atividade está na lista das ativ que o aluno concluiu
					if($atividadesAluno->contains($atividade)){
						//pega a % de acerto
						$questoes = Questao::where('idAtividade', $atividade->id)->
								 		// por fim, pega só as questoes onde o id esta entre os ids das questoes que o aluno já respondeu
								 		whereIn('id',($aluno->respostas->lists('id') != null)?($aluno->respostas->lists('id')):array('null'))->get();
						$questoes = $aluno->respostas->intersect($questoes);
						foreach($questoes as $questao){
							if($questao->pivot->correcao == '1'){
								$atividade->nota = $atividade->nota + 1;
							}
						}

						//Add a nota (% de acerto) ao objeto atividade
						$atividade->nota = ($atividade->nota == 0) ? "0" : $atividade->nota/$atividade->questoes->count();

						//Adiciona +1 no contador de presença (Aula e Geral)
						$countPresencaAula++;
						$countPresencaGeral++;

						//Add a nota no contador de media (Aula e Geral)
						$countMediaAula += $atividade->nota;
						$countMediaGeral += $atividade->nota;

					}else{
						//crava como: 0 =  "Não Concluiu"
						$atividade->nota = 0;
					}

				}

				// Add a lista de atividades já com os calculos ao objeto aula

				// Calcula a média do nº de atividades concluidas nesta Aula (PresençaAula)
				$aula->presenca = (0 == $countPresencaAula) ? 0 : ($countPresencaAula/$aula->atividades->count());

				//Calcula a média da nota das atividades CONCLUIDAS pelo aluno nesta Aula (MediaAula)
				$aula->media = (0 == $countMediaAula) ? 0 : ($countMediaAula/$aula->atividades->count());
			}

			//Calcula a media geral do Nº de atividades concluidas em TODAS as Aulas do Módulo cursado
			$aluno->presencaGeral = (0 == $countPresencaGeral) ? 0 : ($countPresencaGeral/$turma->modulo->atividades->count());

			//Calcula a media geral da nota das atividades concluidas em TODAS as Aulas do Módulo cursado
			$aluno->mediaGeral = (0 == $countMediaGeral) ? 0 : ($countMediaGeral/$turma->modulo->atividades->count());

			//Como acessar as informações:
				//Média Geral do aluno: 		$aluno->mediaGeral
				//Presença Geral do aluno: 		$aluno->presencaGeral
				//Array de aulas do aluno:		$aluno->aulasAluno
				//Presença do aluno numa Aula:	$aula->presenca
				//Média do aluno numa Aula:		$aula->media
				//Array de atividades da Aula:	$aula->atividadesAluno
				//Nota do aluno muma Atividade:	$atividade->nota

			//return $aluno->aulasAluno;

			return View::make('testeRelatorioAluno')->with('aluno', $aluno);
			
		});

		Route::get('relatorios/atividadesExtras/aluno/{idAluno}/{idTurma}',function($idAluno, $idTurma){ 

			// Lógica função individual
			$aluno = Aluno::find($idAluno); //idAluno como parametro
			addBreadCrumb('Relatório de Ativ. Extras - Aluno: '.$aluno->nome);
			$turma = $aluno->turmas->find($idTurma); //idTurma como parametro

			//Segurança - Verifica se esse aluno é de alguma turma do professor em questao, e se essa turma é do professor
			if(!(Auth::user()->professor->turmas->contains($turma) )){
				return Redirect::back();
				
			}elseif( !(Auth::user()->professor->turmas->find($turma->id)->alunos->contains($aluno)) ){
				return Redirect::back();		
			}

			// Add o objeto turma que está sendo gerado o relatório, no objeto aluno
			$aluno->turma = $turma;

			//Pega as atvidades que o aluno concluiu - Intersecciona as atividades de aula com as atividades que o aluno já concluiu
			$atividadesAluno = Atividade::whereIn('id',($aluno->acessos()->where('acessosatividades.status','=',1)->get()->lists('id') != null)?$aluno->acessos()->where('acessosatividades.status','=',1)->get()->lists('id') : array('null'))->get();

			//Add as aulas ao objeto aluno
			$aluno->categoriasAluno = Categoria::all();

			foreach($aluno->categoriasAluno as $categoria){
				// Cria os attr media e presença, para o objeto aula
				$categoria->presenca = 0;
				$categoria->media = 0;

				//Cria o attr atividadesAluno (Extras) e add ao obejto aula -> só as atividades relacionadas ao modulo ou as livres (sem idModulo)
				$categoria->atividadesAluno = $categoria->
											  atividades->
											  filter(function($atividade) use ($aluno){
											    return ($atividade->idModulo == $aluno->turma->idModulo || $atividade->idModulo == null);
											  });

				//Contadores parciais para media e presença da Aula
				$countPresencaAula = 0;
				$countMediaAula = 0;
				foreach($categoria->atividadesAluno as $atividade){
					//cria o attr nota para o objeto atividade
					$atividade->nota = 0;
					//Se essa atividade está na lista das ativ que o aluno concluiu
					if($atividadesAluno->contains($atividade)){
						//pega a % de acerto
						$questoes = Questao::where('idAtividade', $atividade->id)->
								 		// por fim, pega só as questoes onde o id esta entre os ids das questoes que o aluno já respondeu
								 		whereIn('id',($aluno->respostas->lists('id') != null)?($aluno->respostas->lists('id')):array('null'))->get();
						$questoes = $aluno->respostas->intersect($questoes);
						foreach($questoes as $questao){
							if($questao->pivot->correcao == '1'){
								$atividade->nota = $atividade->nota + 1;
							}
						}

						//Add a nota (% de acerto) ao objeto atividade
						$atividade->nota = ($atividade->nota == 0) ? "0" : $atividade->nota/$atividade->questoes->count();

						//Adiciona +1 no contador de presença (Aula e Geral)
						$countPresencaAula++;

						//Add a nota no contador de media (Aula e Geral)
						$countMediaAula += $atividade->nota;

					}else{
						//crava como: 0 =  "Não Concluiu"
						$atividade->nota = 0;
					}

				}

				// Add a lista de atividades já com os calculos ao objeto aula

				// Calcula a média do nº de atividades concluidas nesta Aula (PresençaAula)
				$categoria->presenca = (0 == $countPresencaAula) ? 0 : ($countPresencaAula/$categoria->atividades->count());

				//Calcula a média da nota das atividades CONCLUIDAS pelo aluno nesta Aula (MediaAula)
				$categoria->media = (0 == $countMediaAula) ? 0 : ($countMediaAula/$categoria->atividades->count());
			}

			//Como acessar as informações:
				//Array de categorias do aluno:	$aluno->categoriasAluno
				//Presença do aluno numa Aula:	$aula->presenca
				//Média do aluno numa Aula:		$aula->media
				//Array de atividades da Aula:	$aula->atividadesAluno
				//Nota do aluno muma Atividade:	$atividade->nota

			//return $aluno->aulasAluno;

			return View::make('testeRelatorioAlunoAtividadeExtra')->with('aluno', $aluno);
			
		});

	//Relatórios de Turma

		Route::get('relatorios/aula/turma/{idTurma}',function($idTurma){ 
			$turma = Turma::find($idTurma);
			addBreadCrumb('Relatório de Aula - Turma: '.$turma->nome);
			$alunos = $turma->alunos;

			//Segurança - Verifica se esse aluno é de alguma turma do professor em questao, e se essa turma é do professor
			if(!(Auth::user()->professor->turmas->contains($turma) )){
				Session::flash('warning','Acesso Proibido!');
				return Redirect::back();
			}

			$b = array();

			$count = array();

			foreach ($alunos as $aluno) {

				if(sizeof($b)>1){
					$pop = $alunos;
				}

				$a = array();

				// Add o objeto turma que está sendo gerado o relatório, no objeto aluno
				$aluno->turma = $turma;
				
				//Pega as atvidades que o aluno concluiu - Intersecciona as atividades de aula com as atividades que o aluno já concluiu
				$atividadesAluno = Atividade::whereIn('id',($aluno->acessos()->where('acessosatividades.status','=',1)->get()->lists('id') != null)?$aluno->acessos()->where('acessosatividades.status','=',1)->get()->lists('id') : array('null'))->get();

				//Add as aulas ao objeto aluno
				$aluno->aulasAluno = $turma->modulo->aulas()->get();

				//Cria o attr mediaGeral e presençaGeral ao objeto aluno
				$aluno->mediaGeral = 0;
				$aluno->presencaGeral = 0;

				//Contadores parciais para media e presença Gerais
				$countPresencaGeral = 0;
				$countMediaGeral = 0;

				foreach($aluno->aulasAluno as $aula){

					// Cria os attr media e presença, para o objeto aula
					$aula->presenca = 0;
					$aula->media = 0;

					//Cria o attr atividadesAluno e add ao obejto aula
					$aula->atividadesAluno = $aula->atividades()->get();

					//Contadores parciais para media e presença da Aula
					$countPresencaAula = 0;
					$countMediaAula = 0;
					foreach($aula->atividadesAluno as $atividade){

						//cria o attr nota para o objeto atividade
						$atividade->nota = 0;
						//Se essa atividade está na lista das ativ que o aluno concluiu

						if($atividadesAluno->contains($atividade)){

							//pega a % de acerto
							$questoes = Questao::where('idAtividade', $atividade->id)->
									 		// por fim, pega só as questoes onde o id esta entre os ids das questoes que o aluno já respondeu
									 		whereIn('id',($aluno->respostas->lists('id') != null)?($aluno->respostas->lists('id')):array('null'))->get();
							$questoes = $aluno->respostas->intersect($questoes);
							foreach($questoes as $questao){
								if($questao->pivot->correcao == '1'){
									$atividade->nota = $atividade->nota + 1;
								}
							}

							//Add a nota (% de acerto) ao objeto atividade
							$atividade->nota = ($atividade->nota == 0) ? "0" : $atividade->nota/$atividade->questoes->count();

							$a[] = "Add nota ".$atividade->nota." na atividade '".$atividade->nome."' do aluno ".$aluno->usuario->nome;

							$b[] = $aluno;

							//Adiciona +1 no contador de presença (Aula e Geral)
							$countPresencaAula++;
							$countPresencaGeral++;

							//Add a nota no contador de media (Aula e Geral)
							$countMediaAula += $atividade->nota;
							$countMediaGeral += $atividade->nota;

						}else{
							//crava como: 0 =  "Não Concluiu"
							$atividade->nota = 0;
							$b[] = $aluno;
							$a[] = "Add nota ".$atividade->nota." na atividade '".$atividade->nome."' do aluno ".$aluno->usuario->nome;
						}

					}

					// Add a lista de atividades já com os calculos ao objeto aula

					// Calcula a média do nº de atividades concluidas nesta Aula (PresençaAula)
					$aula->presenca = (0 == $countPresencaAula) ? 0 : ($countPresencaAula/$aula->atividades->count());

					//Calcula a média da nota das atividades CONCLUIDAS pelo aluno nesta Aula (MediaAula)
					$aula->media = (0 == $countMediaAula) ? 0 : ($countMediaAula/$aula->atividades->count());

				}

				$count[] = $a;

				//Calcula a media geral do Nº de atividades concluidas em TODAS as Aulas do Módulo cursado
				$aluno->presencaGeral = (0 == $countPresencaGeral) ? 0 : ($countPresencaGeral/$turma->modulo->atividades->count());

				//Calcula a media geral da nota das atividades concluidas em TODAS as Aulas do Módulo cursado
				$aluno->mediaGeral = (0 == $countMediaGeral) ? 0 : ($countMediaGeral/$turma->modulo->atividades->count());

				//dd($count);

				if(sizeof($b)>2){
					//dd($alunos);
				}

			}

			//dd($b, $count, $alunos);
			//dd($count);
			
			//Como acessar as informações:
				//Média Geral do aluno: 		$aluno->mediaGeral
				//Presença Geral do aluno: 		$aluno->presencaGeral
				//Array de aulas do aluno:		$aluno->aulasAluno
				//Presença do aluno numa Aula:	$aula->presenca
				//Média do aluno numa Aula:		$aula->media
				//Array de atividades da Aula:	$aula->atividadesAluno
				//Nota do aluno muma Atividade:	$atividade->nota

			return View::make('testeRelatorioTurma')->with('alunos', $alunos);
			
		});

		Route::get('relatorios/atividadesExtras/turma/{idTurma}',function($idTurma){ 
			$turma = Turma::find($idTurma);
			addBreadCrumb('Relatório de Ativ. Extras - Turma: '.$turma->nome);

			//Segurança - Verifica se esse aluno é de alguma turma do professor em questao, e se essa turma é do professor
			if(!(Auth::user()->professor->turmas->contains($turma) )){
				Session::flash('warning','Acesso Proibido!');
				return Redirect::back();
			}

			$alunos = $turma->alunos;

			foreach($alunos as $aluno){
				// Add o objeto turma que está sendo gerado o relatório, no objeto aluno
				$aluno->turma = $turma;

				//Pega as atvidades que o aluno concluiu - Intersecciona as atividades de aula com as atividades que o aluno já concluiu
				$atividadesAluno = Atividade::whereIn('id',($aluno->acessos()->where('acessosatividades.status','=',1)->get()->lists('id') != null)?$aluno->acessos()->where('acessosatividades.status','=',1)->get()->lists('id') : array('null'))->get();

				//Add as categorias ao objeto aluno
				$aluno->categoriasAluno = Categoria::all();

				foreach($aluno->categoriasAluno as $categoria){
					// Cria os attr media e presença, para o objeto aula
					$categoria->presenca = 0;
					$categoria->media = 0;

					//Cria o attr atividadesAluno (Extras) e add ao obejto aula -> só as atividades relacionadas ao modulo ou as livres (sem idModulo)
					$categoria->atividadesAluno = $categoria->
												  atividades->
												  filter(function($atividade) use ($aluno){
												    return ($atividade->idModulo == $aluno->turma->idModulo || $atividade->idModulo == null);
												  });

					//Contadores parciais para media e presença da Aula
					$countPresencaAula = 0;
					$countMediaAula = 0;
					foreach($categoria->atividadesAluno as $atividade){
						//cria o attr nota para o objeto atividade
						$atividade->nota = 0;
						//Se essa atividade está na lista das ativ que o aluno concluiu
						if($atividadesAluno->contains($atividade)){
							//pega a % de acerto
							$questoes = Questao::where('idAtividade', $atividade->id)->
									 		// por fim, pega só as questoes onde o id esta entre os ids das questoes que o aluno já respondeu
									 		whereIn('id',($aluno->respostas->lists('id') != null)?($aluno->respostas->lists('id')):array('null'))->get();
							$questoes = $aluno->respostas->intersect($questoes);
							foreach($questoes as $questao){
								if($questao->pivot->correcao == '1'){
									$atividade->nota = $atividade->nota + 1;
								}
							}

							//Add a nota (% de acerto) ao objeto atividade
							$atividade->nota = ($atividade->nota == 0) ? "0" : $atividade->nota/$atividade->questoes->count();

							//Adiciona +1 no contador de presença (Aula e Geral)
							$countPresencaAula++;

							//Add a nota no contador de media (Aula e Geral)
							$countMediaAula += $atividade->nota;

						}else{
							//crava como: 0 =  "Não Concluiu"
							$atividade->nota = 0;
						}

					}

					// Add a lista de atividades já com os calculos ao objeto aula

					// Calcula a média do nº de atividades concluidas nesta Aula (PresençaAula)
					$categoria->presenca = (0 == $countPresencaAula) ? 0 : ($countPresencaAula/$categoria->atividades->count());

					//Calcula a média da nota das atividades CONCLUIDAS pelo aluno nesta Aula (MediaAula)
					$categoria->media = (0 == $countMediaAula) ? 0 : ($countMediaAula/$categoria->atividades->count());
				}
			}

			//Como acessar as informações:
				//Array de categorias do aluno:	$aluno->categoriasAluno
				//Presença do aluno numa Aula:	$aula->presenca
				//Média do aluno numa Aula:		$aula->media
				//Array de atividades da Aula:	$aula->atividadesAluno
				//Nota do aluno muma Atividade:	$atividade->nota

			//return $aluno->aulasAluno;

			return View::make('testeRelatorioTurmaAtividadeExtra')->with('alunos', $alunos);
			
		});


});

// ===============================================
// ADMIN SECTION =================================
// ===============================================

Route::group(array('prefix' => 'admin', 'before'=>'admin'), function(){

	//Home e Perfil e Senha

		Route::get('home/{idioma?}', function($idioma = null){
			$bc = array();
			$bc[] = array('nome'=>"Home", 'link'=> URL::current());

			Session::put('bc',$bc);

			//dd(Request::url());

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
			addBreadCrumbHome("Perfil");
			//(implode(" ", Session::get('bc')));

			return Redirect::to('admin/administrador/'.Auth::user()->id);
			
		});

		Route::post('atualizaSenha', function(){

			$user = User::find(Input::get('id'));

			$user->password = Hash::make(Input::get('senha'));
			$user->save();
			Session::flash('info','Sua senha foi alterada!');
			return Redirect::back();

		});

	//Idiomas

		Route::get('idiomas', function(){
			addBreadCrumbHome("Idiomas");
			return View::make('idioma/adminView');
		});

		Route::get('listarIdiomas', function(){
			
			$idiomas = Idioma::all();
			foreach ($idiomas as $idioma) {
				if($idioma->trashed()){
					$idioma->action = "N/A";
					$idioma->excluido = "Excluído em: ".$idioma->deleted_at->day."/".$idioma->deleted_at->month."/".$idioma->deleted_at->year;
				}else{
					$idioma->action = "<button style='margin-right: 5px;' class='btn btn-xs btn-success' data-toggle='modal' data-target='#editarIdioma' data-id='$idioma->id' data-nome='$idioma->nome'><i class='fa fa-pencil'></i></button></a><a href='/admin/idioma/deletar/$idioma->id' onclick='return confirmar()'><button class='btn btn-xs btn-danger'><i class='fa fa-times'></i></button></a>";
					$idioma->excluido = "Ativo";
				} 
			}

			$response = array(
					"data" => $idiomas->toArray(),
					"iTotalRecords" => count($idiomas),
					"iTotalDisplayRecords" => count($idiomas)
				);
			return Response::json($response);
		});

		Route::post('criarIdioma', function(){
			
			if(Idioma::all()->count() != null){
				$idiomas = array();
				foreach (Idioma::all()->lists('nome') as $idioma) {
					$idiomas[] = strtolower($idioma);
				}

				if(in_array(strtolower(Input::get('nome')), $idiomas) ){
					Session::flash('warning', "Esse idioma já existe");
					return Redirect::back();
				}
				
			}

			$idioma = new Idioma;
			$idioma->nome = Input::get('nome');

			$idioma->save();

			Session::flash('info', "Idioma criado com sucesso!");

			return Redirect::back();
		});

		Route::post('atualizarIdioma', function(){

			$idioma = Idioma::find(Input::get('id'));
			
			if(Idioma::all()->count() != null){
				$idiomas = array();
				foreach (Idioma::all()->lists('nome') as $idi) {
					$idiomas[] = strtolower($idi);
				}

				if(in_array(strtolower(Input::get('nome')), $idiomas) ){
					Session::flash('warning', "Esse idioma já existe");
					return Redirect::back();
				}
				
			}

			$idioma->nome = Input::get('nome');
			
			$idioma->save();

			Session::flash('info', "Alterações salvas com sucesso!");
			return Redirect::back();
		});

		Route::get('idioma/deletar/{id}', function($id){
			$idioma = Idioma::find($id);

			$flag = "hard";

			if($idioma != null){
				foreach ($idioma->modulos as $modulo) {

					foreach($modulo->atividades as $atividade){

						if($atividade->acessos->count() != null){
							$flag = "soft";
						}
					}
				}
				deletarIdioma($idioma, $flag);
				Session::flash('info', "O Idioma e todos os registros relacionados foram excluídos com sucesso!");
				return Redirect::back();
			}
			
			Session::flash('warning', "Idioma inexistente");

			return Redirect::back();
		});

	//Cursos

		Route::get('cursos', function(){
			addBreadCrumbHome("Cursos");
			return View::make('curso/adminView');
		});

		Route::post('criarCurso', function(){
			$Curso = new Curso;
			$Curso->nome = Input::get('nome');
			$Curso->idIdioma = Input::get('idioma');

			$idioma = Idioma::find(Input::get('idioma'));
			
			if($idioma->cursos()->count() != null){
				$cursos = array();
				foreach ($idioma->cursos()->lists('nome') as $c) {
					$cursos[] = strtolower($c);
				}

				if(in_array(strtolower(Input::get('nome')), $cursos) ){
					Session::flash('warning', "Esse curso já existe");
					return Redirect::back();
				}
				
			}

			$Curso->save();
			Session::flash('info', "Curso criado com sucesso!");
			return Redirect::back();
		});

		Route::get('listarCursos',function(){
			

			$data = array();

			$cursos = Curso::withTrashed()->get();

			foreach ($cursos as $key => $curso) {

				if($curso->trashed()){
					$curso->action = "N/A";
					$curso->excluido = "Excluído em: ".$curso->deleted_at->day."/".$curso->deleted_at->month."/".$curso->deleted_at->year;
				}else{
					$curso->action = 
					"<button style='margin-right: 5px;' class='btn btn-xs btn-success' data-toggle='modal' data-target='#editarCurso' data-id='$curso->id' data-idioma='$curso->idIdioma' data-nome='$curso->nome'>
					 	<i class='fa fa-pencil'></i>
					 </button>
					 <a href='/admin/curso/deletar/$curso->id' onclick='return confirmar()'>
						<button class='btn btn-xs btn-danger'>
							<i class='fa fa-times'></i>
						</button>
					 </a>";
					 $curso->excluido = "Ativo";
				}
				
				$curso->idioma2 = $curso->idioma->nome;
				$curso->turmas2 = $curso->turmas->count();
				
				array_push($data, $curso);
			}
			//dd($data);

			$response = array(
					"data" => $data,
					"iTotalRecords" => count($data),
					"iTotalDisplayRecords" => count($data)
				);
			return Response::json($response);
		});

		Route::post('atualizarCurso', function(){
			$Curso 			    = Curso::find(Input::get('id')); 
			$Curso->idIdioma      = Input::get('idioma');

			$idioma = Idioma::find(Input::get('idioma'));
			
			if($idioma->cursos()->count() != null){
				$cursos = array();
				foreach ($idioma->cursos()->where('id','!=',$Curso->id)->lists('nome') as $c) {
					$cursos[] = strtolower($c);
				}

				if(in_array(strtolower(Input::get('nome')), $cursos) ){
					Session::flash('warning', "Esse curso já existe");
					return Redirect::back();
				}
				
			}
			
			$Curso->nome = Input::get('nome');
			
			$Curso->save();

			Session::flash('info', "Alterações salvas com sucesso!");
			return Redirect::back();
		});

		Route::get('curso/deletar/{id}', function($id){
			$curso = Curso::find($id);
			$flag = "hard";

			if($curso != null){
				foreach ($curso->modulos as $modulo) {

					foreach($modulo->atividades as $atividade){

						if($atividade->acessos->count() != null){
							$flag = "soft";
						}
					}
				}
				deletarCurso($curso, $flag);
				Session::flash('info', "O Curso e todos os registros relacionados foram excluídos com sucesso!");
				return Redirect::back();
			}
			
			Session::flash('warning', "Curso inexistente");

			return Redirect::back();
				
		});


	//Modulos

		Route::get('modulos', function(){
			addBreadCrumbHome("Módulos");
			return View::make('modulo/adminView2');
		});

		Route::get('modulo/{id}', function($id){
			addBreadCrumb(Modulo::find($id)->nome);
			$modulo = Modulo::find($id);
			return View::make('modulo/adminView')->with('modulo',$modulo);
		});

		Route::post('criarModulo', function(){
			$modulo = new Modulo;
			$modulo->nome = Input::get('nome');
			$modulo->idCurso = Input::get('idCurso');

			$curso = Idioma::find(Input::get('idCurso'));
			
			if($curso->modulos()->count() != null){
				$modulos = array();
				foreach ($curso->modulos()->lists('nome') as $m) {
					$modulos[] = strtolower($m);
				}

				if(in_array(strtolower(Input::get('nome')), $modulos) ){
					Session::flash('warning', "Já existe um módulo com o mesmo nome neste curso");
					return Redirect::back();
				}
				
			}

			$modulo->save();

			// redirect
			Session::flash('info', 'Módulo criado com sucesso!');
			return Redirect::back();
		});

		Route::get('listarModulos/{idCurso?}', function($idCurso = null){
			
			$modulos = Curso::find($idCurso)->modulos;

			return Response::json($modulos);

		});

		Route::get('listarModulos2',function(){

			$data = array();

			$modulos = Modulo::withTrashed()->get();

			foreach ($modulos as $key => $modulo) {

				if($modulo->trashed()){
					$modulo->action = "N/A";
					$modulo->excluido = "Excluído em: ".$modulo->deleted_at->day."/".$modulo->deleted_at->month."/".$modulo->deleted_at->year;
				}else{
					$modulo->action = 
					"<button style='margin-right: 5px;' class='btn btn-xs btn-success' data-toggle='modal' data-target='#editarModulo' data-id='$modulo->id' data-nome='$modulo->nome'>
					 	<i class='fa fa-pencil'></i>
					 </button>
					 <a href='/admin/modulo/deletar/$modulo->id' onclick='return confirmar()'>
						<button class='btn btn-xs btn-danger'>
							<i class='fa fa-times'></i>
						</button>
					 </a>";
					 $modulo->excluido = "Ativo";
				}
				
				$modulo->idioma2 = $modulo->curso->idioma->nome;
				$modulo->curso2 = $modulo->curso->nome;
				$modulo->turmas2 = $modulo->turmas->count();
				
				array_push($data, $modulo);
			}
			//dd($data);

			$response = array(
					"data" => $data,
					"iTotalRecords" => count($data),
					"iTotalDisplayRecords" => count($data)
				);
			return Response::json($response);
		});

		Route::post('atualizarModulo', function(){
			$Modulo = Modulo::find(Input::get('id'));

			$curso = $Modulo->curso;

			if($curso->modulos()->count() != null){
				$modulos = array();
				foreach ($curso->modulos()->where('id','!=',$Modulo->id)->lists('nome') as $m) {
					$modulos[] = strtolower($m);
				}

				if(in_array(strtolower(Input::get('nome')), $modulos) ){
					Session::flash('warning', "Já existe um módulo com o mesmo nome neste curso");
					return Redirect::back();
				}
				
			} 

			$Modulo->nome = Input::get('nome');
			
			$Modulo->save();

			Session::flash('info', "Alterações salvas com sucesso!");
			return Redirect::back();
		});

		Route::get('modulo/deletar/{id}', function($id){
			$modulo = Modulo::find($id);
			$flag = "hard";

			if($modulo != null){

				foreach($modulo->atividades as $atividade){

					if($atividade->acessos->count() != null){
						$flag = "soft";
					}
				}

				deletarModulo($modulo, $flag);
				Session::flash('info', "O Módulo e todos os registros relacionados foram excluídos com sucesso!");
				return Redirect::back();
			}
			
			Session::flash('warning', "Curso inexistente");

			return Redirect::back();
		});

	//Turmas

		Route::get('turmas', function(){
			addBreadCrumbHome('Turmas');

			return View::make('turma/adminShow');
		});

		Route::get('listarTurmas',function(){
			

			$data = array();

			$turmas = Turma::all();

			foreach ($turmas as $key => $turma) {
				$turma->curso = $turma->modulo->curso->nome;
				$turma->modulo2 = $turma->modulo->nome;
				$turma->professor2 = $turma->professor->usuario->nome ." ". $turma->professor->usuario->sobrenome;
				$turma->status2 = ($turma->status == 0) ? "Fechada" : "Em Andamento";
				$turma->action = "<a style='color:white;' href='/admin/turma/$turma->id'><button style='margin-right: 5px;' class='btn btn-xs btn-primary'><i class='fa fa-group'></i></buton></a><button style='margin-right: 5px;' class='btn btn-xs btn-success' data-toggle='modal' data-target='#editarTurma' data-id='$turma->id' data-nome='$turma->nome' data-professor='$turma->professor2' data-idprofessor='$turma->idProfessor' data-status='$turma->status'><i class='fa fa-pencil'></i></button><a href='/admin/turma/deletar/$turma->id' onclick='return confirmar()'><button class='btn btn-xs btn-danger'><i class='fa fa-times'></i></button></a>";
				array_push($data, $turma);
			}
			//dd($data);

			$response = array(
					"data" => $data,
					"iTotalRecords" => count($data),
					"iTotalDisplayRecords" => count($data)
				);
			return Response::json($response);
		});

		Route::get('turma/{id}', function($id){
			addBreadCrumb(Turma::find($id)->nome);

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
			$turma->status = 1;

			$modulo = $turma->modulo;

			if($modulo->turmas()->count() != null){
				$turmas = array();
				foreach ($modulo->turmas()->lists('nome') as $m) {
					$turmas[] = strtolower($m);
				}

				if(in_array(strtolower(Input::get('nome')), $turmas) ){
					Session::flash('warning', "Já existe uma turma com esse nome neste módulo");
					return Redirect::back();
				}
				
			}

			$turma->save();

			// redirect
			Session::flash('info', 'Turma criada com sucesso!');
			return Redirect::back();
		});

		Route::post('atualizarTurma', function(){
			$turma = Turma::find(Input::get('id'));
			$turma->idProfessor = Input::get('idprofessor');

			$modulo = $turma->modulo;

			if($modulo->turmas()->count() != null){
				$turmas = array();
				foreach ($modulo->turmas()->where('id','!=',$turma->id)->lists('nome') as $m) {
					$turmas[] = strtolower($m);
				}

				if(in_array(strtolower(Input::get('nome')), $turmas) ){
					Session::flash('warning', "Já existe uma turma com esse nome neste módulo");
					return Redirect::back();
				}
				
			} 
			
			$turma->nome = Input::get('nome');

			$turma->status = Input::get('status');
			
			$turma->save();

			Session::flash('info', "Alterações salvas com sucesso!");
			return Redirect::back();
		});

		Route::post('matricularAluno', function(){
			$turma = Turma::find(Input::get('idTurma'));
			$aluno = Aluno::find(Input::get('idAluno'));
			$data = time();
			$dtContratacao = date('Y-m-d');

			//Checa se o aluno já está em uma turma do mesmo módulo
			if($aluno->turmas()->where('turmas.idModulo','=',$turma->idModulo)->count() != null){
				Session::flash('warning','Este aluno já está matriculado em uma turma deste Módulo');
				return Redirect::back();
			}

			DB::table('contrata')->insert(
			    array('idCurso' => $turma->modulo->curso->id, 'idTurma' => $turma->id, 'idAluno' => $aluno->id, 'dtContratacao' => $dtContratacao )
			);

			if($turma != null && $aluno != null){
				if($turma->status != 0){
					$turma->alunos()->save($aluno);
					Session::flash('info', "Aluno matriculado com sucesso!");
					return Redirect::back();
				}else{
					Session::flash('warning', '<p> Não é possivel matricular alunos em uma turma que já foi concluída </p>');
					return Redirect::back();
				}
			}
			else{
				Session::flash('warning','Turma ou aluno inexistente');
			}

		});

		Route::get('desmatricularAluno/{idAluno}/{idTurma}', function($idAluno, $idTurma){
			$turma = Turma::find($idTurma);
			$aluno = Aluno::find($idAluno);

			if($turma != null && $aluno != null){
				if($turma->status != 0){

					//Checar interação do aluno com as atividades da turma/módulo
					if($aluno->acessos->intersect($turma->modulo->atividades)->count() == null){
						$turma->alunos()->detach($aluno);
						Session::flash('info', "Aluno desmatriculado com sucesso!");
						return Redirect::back();
					}else{
						Session::flash('warning', '<p> Não é possivel desmatricular alunos que já responderam atividades do módulo relacionado a turma </p>');
						return Redirect::back();
					}

				}else{
					Session::flash('warning', '<p> Não é possivel desmatricular alunos de uma turma que já foi concluída </p>');
					return Redirect::back();
				}
			}else{
				Session::flash('warning','Turma ou aluno inexistente');
			}

		});

		Route::get('turma/deletar/{id}', function($id){
			$turma = Turma::find($id);
			$flag = "soft";

			if($turma != null){
				//Loop entre todos alunos da turma para ver se ao menos 1 já acessou algo
				// Caso algum aluno tenha acessado, a turma é soft-deleted e os alunos NÃO SÃO DESMATRICULADOS
				foreach ($turma->alunos as $aluno) {
					if($aluno->acessos->intersect($turma->modulo->atividades)->count() == null){
						$flag = "hard";
					}
				}

				deletarTurma($turma, $flag);
				Session::flash('info', 'Turma excluída com sucesso');
				return Redirect::back();
			}
			
			Session::flash('warning', "Turma inexistente");

			return Redirect::back();
		});

	//Aulas

		Route::get('aulas', function(){
			addBreadCrumbHome('Aulas');
			return View::make('aula/adminView');
		});

		Route::post('criarAula', function(){
			$modulo = Modulo::find(Input::get('idModulo'));
			$flag = true;

			//Se já existe alguma turma fechada neste módulo, não podemos adicionar aulas
			if($modulo->turmas->count() != null){ 
				foreach ($modulo->turmas as $turma) {
					if($turma->status == 0){
						$flag = false;
					}
				}
			}

			if(!$flag){
				Session::flash('warning','<p> Existem turmas que já concluíram esse Módulo</p> <p> Devido ao histórico do aluno, não é possível mudar a sua estrutura adicionando novas aulas </p>');
				return Redirect::back();
			}

			$Aula = new Aula;
			$Aula->titulo = Input::get('nome');
			$Aula->idModulo = Input::get('idModulo');

			if(Modulo::find($Aula->idModulo) != null){
				if(in_array(Input::get('nome'), Modulo::find($Aula->idModulo)->aulas->lists('titulo')) ){
					Session::flash('warning', "Já existe uma aula com esse nome neste módulo");
					return Redirect::back();
				}
				
			}

			$Aula->save();

			// redirect
			Session::flash('info', 'Aula criada com sucesso!');
			return Redirect::back();
		});

		Route::post('atualizarAula', function(){
			$Aula = Aula::find(Input::get('id')); 
			
			if($Aula->titulo != Input::get('nome')){
				if(Modulo::find($Aula->idModulo) != null){
					if(in_array(Input::get('nome'), Modulo::find($Aula->idModulo)->aulas->lists('titulo')) ){
						Session::flash('warning', "Já existe uma aula com esse nome neste módulo");
						return Redirect::back();
					}
					
				}
			}
				
			$Aula->save();

			Session::flash('info', "Alterações salvas com sucesso!");
			return Redirect::back();
		});

		Route::get('listarAulas',function(){
			

			$data = array();

			$aulas = Aula::withTrashed()->get();

			foreach ($aulas as $key => $aula) {

				if($aula->trashed()){
					$aula->action = "N/A";
					$aula->excluido = "Excluído em: ".$aula->deleted_at->day."/".$aula->deleted_at->month."/".$aula->deleted_at->year;
				}else{
					$aula->action = 
					"<button style='margin-right: 5px;' class='btn btn-xs btn-success' data-toggle='modal' data-target='#editarAula' data-id='$aula->id' data-nome='$aula->titulo'>
					 	<i class='fa fa-pencil'></i>
					 </button>
					 <a href='/admin/aula/deletar/$aula->id' onclick='return confirmar()'>
						<button class='btn btn-xs btn-danger'>
							<i class='fa fa-times'></i>
						</button>
					 </a>";
					 $aula->excluido = "Ativo";
				}
				$aula->modulo2 = $aula->modulo->nome;
				$aula->curso = $aula->modulo->curso->nome;
				$aula->idioma = $aula->modulo->curso->idioma->nome;
				$aula->atividades2 = $aula->atividades->count();
				$aula->materiais = $aula->materialApoio->count();
				
				array_push($data, $aula);
			}
			//dd($data);

			$response = array(
					"data" => $data,
					"iTotalRecords" => count($data),
					"iTotalDisplayRecords" => count($data)
				);
			return Response::json($response);
		});

		Route::get('aula/deletar/{id}', function($id){
			$aula = Aula::find($id);
			$modulo = $aula->modulo;

			if($aula != null){
				//Se já existe alguma turma fechada neste módulo, não podemos adicionar aulas
				if($modulo->turmas->count() != null){ 
					foreach ($modulo->turmas as $turma) {
						if($turma->status == 0){
							Session::flash('warning','<p> Existem turmas que já concluíram esse Módulo</p> <p> Devido ao histórico do aluno, não é possível mudar a sua estrutura excluindo suas aulas </p>');
							return Redirect::back();
						}
					}
				}

				foreach ($aula->atividades as $atividade) {
					if($atividade->acessos != null){
						Session::flash('warning','<p> Esta aula já foi acessada por outros alunos</p> <p>Não é possível excluí-la</p>');
						return Redirect::back();
					}
				}

				deletarAula($aula, "hard");
			
				Session::flash('info', "Aula excluída com sucesso!");

				return Redirect::back();
			}else{
				Session::flash('warning', "Aula inexistente");

				return Redirect::back();
			}
			
		});

	//Materiais

		Route::get('materiais', function(){
			addBreadCrumbHome('Materiais');
			return View::make('materialApoio/adminView');
		});

		Route::post('criarMaterial', function(){
			$aula = Aula::find(Input::get('idAula'));

			if($aula != null){
				$modulo = $aula->modulo;
			}else{
				Session::flash('warning','<p> Algo deu errado </p> <p> Não foi possível encontrar a Aula para inserir o material...</p>');
				return Redirect::back();
			}
			

			//Se já existe alguma turma fechada neste módulo, não podemos add novos materiais
			if($modulo->turmas->count() != null){ 
				foreach ($modulo->turmas as $turma) {
					if($turma->status == 0){
						Session::flash('warning','<p> Existem turmas que já concluíram esse Módulo</p> <p> Devido ao histórico do aluno, não é possível mudar a sua estrutura adicionando novos Materiais de Apoio </p>');
						return Redirect::back();
					}
				}
			}

			if($aula->materialApoio()->count() != null){
				$materiais = array();
				foreach ($aula->materialApoio()->lists('nome') as $m) {
					$materiais[] = strtolower($m);
				}

				if(in_array(strtolower(Input::get('nome')), $materiais) ){
					Session::flash('warning', "Já existe um material com esse nome");
					return Redirect::back();
				}
				
			} 

			$material = new MaterialApoio;
			$material->nome = Input::get('nome');
			$material->tipo = Input::get('tipo');

			$material->idAula = $aula->id;

			if($material->tipo != 3){
				$arquivo = Input::file('arquivo');
				$filename="";
				if($arquivo!=NULL){
					$filename = $arquivo->getClientOriginalName();
					$filename = str_random(30).$filename;
					
					$material->url = 'files/'.$filename;
					
					$arquivo->move('files/', $filename);
				}
			}else{
				if(Input::get('arquivo') != null){
					$material->url = Input::get('arquivo');
				}else{
					Session::flash('warning', "Você deve preencher o campo 'Arquivo'");
					return Redirect::back();
				}
			}

			$material->save();


			// redirect
			Session::flash('info', 'Material criado com sucesso!');
			return Redirect::back();
		});

		Route::post('atualizarMaterial', function(){
			$material 			    = MaterialApoio::find(Input::get('id')); 
			$material->nome       	= Input::get('nome');

			$material->tipo = Input::get('tipo');

			$aula = $material->aula;

			if($aula->materialApoio()->count() != null){
				$materiais = array();
				foreach ($aula->materialApoio()->where('id','!=',$material->id)->lists('nome') as $m) {
					$materiais[] = strtolower($m);
				}

				if(in_array(strtolower(Input::get('nome')), $materiais) ){
					Session::flash('warning', "Já existe um material com esse nome");
					return Redirect::back();
				}
				
			} 

			if($material->tipo != 3){
				$arquivo = Input::file('arquivo');
				$filename="";
				if($arquivo!=NULL){
					$filename = $arquivo->getClientOriginalName();
					$filename = str_random(30).$filename;

					$material->url = 'files/'.$filename;
					
					$arquivo->move($material->url);
				}
			}else{
				if(Input::get('arquivo') != null){
					$material->url = Input::get('arquivo');
				}else{
					Session::flash('warning', "Você deve preencher o campo 'Arquivo'");
					return Redirect::back();
				}
			}
			
			$material->save();

			Session::flash('info', "Alterações salvas com sucesso!");
			return Redirect::back();
		});

		Route::get('listarMateriais/{idAula?}', function($idAula = null){
			$data = array();
			$aula = ($idAula != null) ? Aula::find($idAula) : null;
			//dd($aula->materialApoio);

			$materiais = ($idAula != null) ? MaterialApoio::all()->diff($aula->materialApoio) : MaterialApoio::all();
			//dd($materiais);
			foreach ($materiais as $material) {
				switch (pathinfo($material->url, PATHINFO_EXTENSION)) {
					case 'txt':
						$material->tipo2 = "Texto";
						break;

					case 'pdf':
						$material->tipo2 = "PDF";
						break;

					case 'odt':
						$material->tipo2 = "Documento de Texto";
						break;

					case 'opd':
						$material->tipo2 = "Apresentação";
						break;
					
					default:
						$material->tipo2 = "Desconhecido";
						break;
				}
				$material->curso2 = $material->aula->modulo->curso->nome;
				$material->modulo2 = $material->aula->modulo->nome;
				$material->aula2 = $material->aula->first()->nome;
				$material->action = "<input type='checkbox' name='materiais[]' class='check' data-id='$material->id' value='$material->id'>";
				array_push($data, $material);
			}

			$response = array(
					"data" => $data,
					"iTotalRecords" => count($data),
					"iTotalDisplayRecords" => count($data)
				);
			return Response::json($response);
		});

		Route::post('copiarMaterial', function(){
			$materiais = Input::get('materiais');
			$aula = Aula::find(Input::get('idAula'));

			$modulo = $aula->modulo;

			//Se já existe alguma turma fechada neste módulo, não podemos add novos materiais
			if($modulo->turmas->count() != null){ 
				foreach ($modulo->turmas as $turma) {
					if($turma->status == 0){
						Session::flash('warning','<p> Existem turmas que já concluíram esse Módulo</p> <p> Devido ao histórico do aluno, não é possível mudar a sua estrutura adicionando novos Materiais de Apoio </p>');
						return Redirect::back();
					}
				}
			}

			if(Input::get('materiais')!=null){
				foreach ($materiais as $material) {
					$mat = new MaterialApoio;
					$mat = MaterialApoio::find($material);
					$mat->id = null;
					$mat->idAula = $aula->id;
					$mat->save();
				}
			}
			Session::flash('info', "Material copiado com sucesso!");
			return Redirect::back();
		});

		Route::get('material/deletar/{id}', function($id){
			$material = MaterialApoio::find($id);
			$modulo = $material->aula->modulo;

			if($material != null){

				//Se já existe alguma turma fechada neste módulo, não podemos excluír materiais
				if($modulo->turmas->count() != null){ 
					foreach ($modulo->turmas as $turma) {
						if($turma->status == 0){
							Session::flash('warning','<p> Existem turmas que já concluíram esse Módulo</p> <p> Devido ao histórico do aluno, não é possível mudar a sua estrutura excluindo seus Materiais de Apoio </p>');
							return Redirect::back();
						}
					}
				}

				deletarMaterial($material);
			
				Session::flash('info', "Material excluído com sucesso!");

				return Redirect::back();
			}else{
				Session::flash('warning', "Material inexistente!");

				return Redirect::back();
			}
			
		});

	//Atividades

		Route::get('atividades', function(){
			addBreadCrumbHome('Atividades');
			return View::make('atividade/adminView');
		});

		Route::get('listarAtividades',function(){
			

			$data = array();

			$atividades = Atividade::withTrashed()->where('tipo','=', 1)->get();

			foreach ($atividades as $key => $atividade) {

				if($atividade->trashed()){
					$atividade->action = "N/A";
					$atividade->excluido = "Excluído em: ".$atividade->deleted_at->day."/".$atividade->deleted_at->month."/".$atividade->deleted_at->year;
				}else{
					$atividade->action = 
					"<button style='margin-right: 5px;' class='btn btn-xs btn-success' data-toggle='modal' data-target='#editaratividade' data-id='$atividade->id' data-nome='$atividade->nome' data-status='$atividade->status'>
					 	<i class='fa fa-pencil'></i>
					 </button>
					 <a href='/admin/atividade/deletar/$atividade->id' onclick='return confirmar()'>
						<button class='btn btn-xs btn-danger'>
							<i class='fa fa-times'></i>
						</button>
					 </a>";
					 $atividade->excluido = "Ativo";
				}
				$atividade->aula2 = ($atividade->aula != null) ? $atividade->aula->titulo : 'N/A' ;
				$atividade->modulo2 = $atividade->aula->modulo->nome;
				$atividade->curso = $atividade->aula->modulo->curso->nome;
				$atividade->idioma = $atividade->aula->modulo->curso->idioma->nome;
				$atividade->tipo2 = ($atividade->tipo == 1) ? 'Conteúdo de Aula' : 'Ativ. Extra';
				
				array_push($data, $atividade);
			}
			//dd($data);

			$response = array(
					"data" => $data,
					"iTotalRecords" => count($data),
					"iTotalDisplayRecords" => count($data)
				);
			return Response::json($response);
		});

		Route::get('atividadesExtras', function(){
			addBreadCrumbHome('Atividades Extras');

			//return Redirect::back();

			$modulos = Modulo::all();

			$categorias = Categoria::all();

			$all = new Modulo;
			$all->id = null;
			$all->nome = '';
			$curso = new stdClass();
			$curso->nome = "Todas Atividades";
			$all->curso = $curso;

			$categorias->prepend($all);


			foreach ($modulos as $modulo) {
				$categorias->push($modulo);
			}

			//$categorias = $modulos->combine(Categoria::all());

			$atividadesExtras = Atividade::where('tipo', '=', '2')->get();

			return View::make('atividade/atividadeExtraAdmin')->with('categorias', $categorias)
														  ->with('atividadesExtras', $atividadesExtras);
		});

		Route::get('atividade/{id}/editar', function($id){
			addBreadCrumb("Editar Ativdade");
			$atividade = Atividade::find($id);

			if($atividade->status == '1'){
				Session::flash('warning', 'Primeiro inative a Atividade para poder editá-la!');
				return Redirect::back();
			}

			return View::make('atividade/editarAdmin')->with('atividade',$atividade);
		});

		Route::post('criarAtividadeExtra', function(){
			$atividadeExtra = new Atividade;
			$atividadeExtra->nome = Input::get('nome');
			$atividadeExtra->tipo = 2;
			$atividadeExtra->status = 0;
			$atividadeExtra->DataElaboracao = date('Y-m-d');
			$idModulo = Input::get('idModulo');
			$idCategoria = Input::get('idCategoria');
			$atividadeExtra->idUsuario = Auth::user()->id;

			if($idModulo!=""){
				$atividadeExtra->idModulo = Input::get('idModulo');

				//Checa se existe atividades extras direcionada para este modulo como o mesmo nome
				if(Modulo::find($atividadeExtra->idModulo) != null){
					if(in_array(Input::get('nome'), Modulo::find($atividadeExtra->idModulo)->atividadesExtras->lists('nome')) ){
						Session::flash('warning', "Já existe uma atividade com esse nome relacionada ao módulo escolhido");
						return Redirect::back();
					}
					
				}
			}

			//Checa se existe atividades extras livres com o mesmo nome
			if(Atividade::where('tipo','=','2')->where('idModulo','=', null)->get() != null){
				if(in_array(Input::get('nome'), Atividade::where('tipo','=','2')->where('idModulo','=', null)->get()->lists('nome')) ){
					Session::flash('warning', "Já existe uma atividade com esse nome");
					return Redirect::back();
				}
				
			}

			if($idCategoria!=""){
				$atividadeExtra->idCategoria = Input::get('idCategoria');
			}

			//Envia email de lembrete - Para os alunos ha mais de 15 dias sem acessar o sistema
			$m = Modulo::find($idModulo);
			if($m != null){
				emailNovasAtividades($m);
			}else{
				emailNovasAtividades();
			}

			$atividadeExtra->save();

			// redirect
			Session::flash('info', 'Atividade Extra criado com sucesso!');
			return Redirect::to('admin/atividadeExtra/'.$atividadeExtra->id.'/editar');
		});

		Route::post('atualizarAtividadeExtra', function(){
			$atividadeExtra = Atividade::find(Input::get('id'));
			$idModulo = Input::get('idModulo');
			

			if(Input::get('idCategoria') != null){
				$atividadeExtra->idCategoria = Input::get('idCategoria');
			}

			$atividadeExtra->status = Input::get('status');

			if($atividadeExtra->nome != Input::get('nome')){

				if(isset($idModulo)){
					$atividadeExtra->idModulo = Input::get('idModulo');

					if(Modulo::find($atividadeExtra->idModulo) != null){
						if(in_array(Input::get('nome'), Modulo::find($atividadeExtra->idModulo)->atividadesExtras->lists('nome')) ){
							Session::flash('warning', "Já existe uma atividade com esse nome relacionada ao módulo escolhido");
							return Redirect::back();
						}
						
					}
				}

				//Checa se existe atividades extras livres com o mesmo nome
				if(Atividade::where('tipo','=','2')->where('idModulo','=', null)->get() != null){
					if(in_array(Input::get('nome'), Atividade::where('tipo','=','2')->where('idModulo','=', null)->get()->lists('nome')) ){
						Session::flash('warning', "Já existe uma atividade com esse nome");
						return Redirect::back();
					}
					
				}
			}

			$atividadeExtra->nome = Input::get('nome');
			$atividadeExtra->save();

			// redirect
			Session::flash('info', 'Alterações salvas com sucesso!');
			return Redirect::back();
		});

		Route::get('atividadeExtra/{id}/editar', function($id){
			addBreadCrumb("Editar Atividade Extra");
			$atividadeExtra = Atividade::find($id);

			return View::make('atividade/extraEditarAdmin')->with('atividade',$atividadeExtra);
		});

		Route::post('criarAtividade', function(){
			$aula = Aula::find(Input::get('idAula'));
			$modulo = $aula->modulo;

			//Se já existe alguma turma fechada neste módulo, não podemos add novas atividades
			if($modulo->turmas->count() != null){ 
				foreach ($modulo->turmas as $turma) {
					if($turma->status == 0){
						Session::flash('warning','<p> Existem turmas que já concluíram esse Módulo</p> <p> Devido ao histórico do aluno, não é possível mudar a sua estrutura adicionando novas Atividades </p>');
						return Redirect::back();
					}
				}
			}

			$Atividade = new Atividade;
			$Atividade->nome = Input::get('nome');
			$Atividade->status = 0;
			$Atividade->idAula = Input::get('idAula');
			$Atividade->idUsuario = Auth::user()->id;
			$Atividade->tipo = 1;
			$Atividade->DataElaboracao = date('Y-m-d');

			if(Aula::find($Atividade->idAula) != null){
				if(in_array(Input::get('nome'), Aula::find($Atividade->idAula)->atividades->lists('nome')) ){
					Session::flash('warning', "Já existe uma atividade com esse nome nesta aula");
					return Redirect::back();
				}
				
			}


			$Atividade->save();

			//Dispara email para os alunos que estão mais de 15 dias sem acessar o kalango
			emailNovasAtividades($modulo);

			// redirect
			Session::flash('info', 'Atividade criada com sucesso!');
			return Redirect::to('/admin/atividade/'.$Atividade->id.'/editar');
		});

		Route::post('atualizarAtividade', function(){
			$Atividade 			    = Atividade::find(Input::get('id'));
			$Atividade->status 		= Input::get('status');

			if($Atividade->nome != Input::get('nome')){

				if(Aula::find($Atividade->idAula) != null){
					if(in_array(Input::get('nome'), Aula::find($Atividade->idAula)->atividades->lists('nome')) ){
						Session::flash('warning', "Já existe uma atividade com esse nome nesta aula");
						return Redirect::back();
					}
					
				}
			}

			$Atividade->nome = Input::get('nome');
			
			$Atividade->save();

			Session::flash('info', "Alterações salvas com sucesso!");
			return Redirect::back();
		});

		Route::post('alterarOrdem', function(){
			
			$atividade = Atividade::find(Input::get('0'));
			$key=1;
			
			if($atividade->tipo == 1){
				$modulo = $atividade->aula->modulo;
			}else{
				$modulo = $atividade->modulo;
			}

			//Se já existe alguma turma fechada neste módulo, não podemos alterar as atividaes adding novas questoes
			if($modulo->turmas->count() != null){
				foreach ($modulo->turmas as $turma) {
					if($turma->status == 0){
						return Response::json('<p> Existem turmas que já concluíram esse Módulo</p> <p> Devido ao histórico do aluno, não é possível mudar a sua estrutura alterando a ordem das questões</p>');
					}
				}
			}

			if($atividade->status == 1){
				return Response::json('A atividade está ativa, para adicionar uma questão primeiro mude o seu status para inativo.');
			}else {
				if (AcessosAtividade::where('idAtividade','=',$atividade->id)->count() != null){
					return Response::json('A atividade já foi acessada por alunos, não será possível adicionar novas questões');
				}
			}


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

		Route::get('atividade/deletar/{id}', function($id){
			$atividade = Atividade::find($id);

			if($atividade != null){

				if($atividade->tipo == 1){
					$modulo = $atividade->aula->modulo;

					//Se já existe alguma turma fechada neste módulo, não podemos add novas atividades
					if($modulo->turmas->count() != null){ 
						foreach ($modulo->turmas as $turma) {
							if($turma->status == 0){
								Session::flash('warning','<p> Existem turmas que já concluíram esse Módulo</p> <p> Devido ao histórico do aluno, não é possível mudar a sua estrutura excluindo Atividades </p>');
								return Redirect::back();
							}
						}
					}
				}
				
				if($atividade->acessos->count() == null){

					deletarAtividade($atividade, "hard");
					Session::flash('info', '<p> A atividade e as suas questões foram excluídas </p>');
					return Redirect::back();
				}else{

					deletarAtividade($atividade);
					Session::flash('info', '<p> A atividade e as suas questões foram excluídas </p>');
					return Redirect::back();
				}
				
			}
			
			Session::flash('warning', "Atividade inexistente");

			return Redirect::back();
		});

	//Categoria

		Route::get('categorias', function(){
			addBreadCrumbHome("Categorias");
			return View::make('categoria/adminView');
		});

		Route::post('criarCategoria', function(){
			$categoria = new Categoria;
			$categoria->nome = Input::get('nome');

			if(Categoria::count() != null){
				$categorias = array();
				foreach (Categoria::lists('nome') as $m) {
					$categorias[] = strtolower($m);
				}

				if(in_array(strtolower(Input::get('nome')), $categorias) ){
					Session::flash('warning', "Já existe uma categoria com esse nome");
					return Redirect::back();
				}
				
			} 

			$categoria->save();

			// redirect
			Session::flash('info', 'Categoria criada com sucesso!');
			return Redirect::back();
		});

		Route::post('atualizarCategoria', function(){
			$categoria = Categoria::find(Input::get('id'));
			$categoria->nome = Input::get('nome');

			if(Categoria::count() != null){
				$categorias = array();
				foreach (Categoria::where('id','!=',$categoria->id)->lists('nome') as $m) {
					$categorias[] = strtolower($m);
				}

				if(in_array(strtolower(Input::get('nome')), $categorias) ){
					Session::flash('warning', "Já existe uma categoria com esse nome");
					return Redirect::back();
				}
				
			} 

			$categoria->save();

			// redirect
			Session::flash('info', 'Alterações salvas com sucesso!');
			return Redirect::back();
		});

		Route::get('listarCategorias',function(){

			$data = array();

			$categorias = Categoria::withTrashed()->get();

			foreach ($categorias as $key => $categoria) {

				if($categoria->trashed()){
					$categoria->action = "N/A";
					$categoria->excluido = "Excluído em: ".$categoria->deleted_at->day."/".$categoria->deleted_at->month."/".$categoria->deleted_at->year;
				}else{
					$categoria->action = 
					"<button style='margin-right: 5px;' class='btn btn-xs btn-success' data-toggle='modal' data-target='#editarCategoria' data-id='$categoria->id' data-nome='$categoria->nome'>
					 	<i class='fa fa-pencil'></i>
					 </button>
					 <a href='/admin/categoria/deletar/$categoria->id' onclick='return confirmar()'>
						<button class='btn btn-xs btn-danger'>
							<i class='fa fa-times'></i>
						</button>
					 </a>";
					 $categoria->excluido = "Ativo";
				}
				
				$categoria->atividades2 = $categoria->atividades->count();
				
				array_push($data, $categoria);
			}
			//dd($data);

			$response = array(
					"data" => $data,
					"iTotalRecords" => count($data),
					"iTotalDisplayRecords" => count($data)
				);
			return Response::json($response);
		});

		Route::get('categoria/deletar/{id}', function($id){
			$categoria = Categoria::find($id);

			if($categoria != null){
				if($categoria->atividades->count() != 0){

					$categoria->forceDelete();	

					Session::flash('info', "Categoria excluída com sucesso!");
					return Redirect::back();
				}
				
				$categoria->delete();
				Session::flash('info', "Categoria excluída com sucesso!");

				return Redirect::back();
			}else{
				Session::flash('warning', "Categoria inexistente!");

				return Redirect::back();
			}
			
		});

	//Questoes

		Route::get('questoes', function(){
			addBreadCrumbHome('Questões');
			return View::make('questao/adminView');
		});

		Route::post('criarQuestaoRU', function(){

			$atividade = Atividade::find(Input::get('idatividade'));

			if($atividade->tipo == 1){
				$modulo = $atividade->aula->modulo;
			}else{
				$modulo = $atividade->modulo;
			}
			
			//Se já existe alguma turma fechada neste módulo, não podemos alterar as atividaes adding novas questoes
			if($atividade->idModulo != null){
				if($modulo->turmas->count() != null){
					foreach ($modulo->turmas as $turma) {
						if($turma->status == 0){
							Session::flash('warning','<p> Existem turmas que já concluíram esse Módulo</p> <p> Devido ao histórico do aluno, não é possível mudar a sua estrutura adicionando novas questões às suas Atividades </p>');
							return Redirect::back();
						}
					}
				}
			}

			if($atividade->status == 1){
				Session::flash('warning','A atividade está ativa, para adicionar uma questão primeiro mude o seu status para inativo.');
				return Redirect::back();
			}else {
				if (AcessosAtividade::where('idAtividade','=',$atividade->id)->count() != null){
					Session::flash('warning','A atividade já foi acessada por alunos, não será possível adicionar novas questões');
					return Redirect::back();
				}
			}

			$questao = new Questao;
			$pergunta = Input::get('pergunta');
			$resposta = Input::get('resposta');
			$questao->categoria = (Input::get('pergunta')).(Input::get('resposta'));

			$questao->enunciado = Input::get('enunciado');

			if($pergunta!=1){
				$arquivo = Input::file('arquivo');
				$filename = $arquivo->getClientOriginalName();
					$filename = str_random(30).$filename;

				$questao->urlMidia = 'files/'.$filename;
				
				$arquivo->move('files/', $filename);
			}

	        $questao->idAtividade = Input::get('idatividade');

	        $questao->idTopico = Input::get('topico');
			$questao->pontos = Input::get('dificuldade');

			$questao->tipo=2;

			$questao->respostaCerta = Input::get('respostaCerta');
			$questao->save();

			$questao->numero = $questao->id;
			$questao->save();

			Session::flash('info', 'Questão criada com sucesso!');
			return Redirect::back();
		});

		Route::post('criarQuestaoME', function(){

			$atividade = Atividade::find(Input::get('idatividade'));

			if($atividade->tipo == 1){
				$modulo = $atividade->aula->modulo;
			}else{
				$modulo = $atividade->modulo;
			}

			//Se já existe alguma turma fechada neste módulo, não podemos alterar as atividaes adding novas questoes
			if($atividade->modulo != null){
				if($modulo->turmas->count() != null){
					foreach ($modulo->turmas as $turma) {
						if($turma->status == 0){
							Session::flash('warning','<p> Existem turmas que já concluíram esse Módulo</p> <p> Devido ao histórico do aluno, não é possível mudar a sua estrutura adicionando novas questões às suas Atividades </p>');
							return Redirect::back();
						}
					}
				}
			}

			if($atividade->status == 1){
				Session::flash('warning','A atividade está ativa, para adicionar uma questão primeiro mude o seu status para inativo.');
				return Redirect::back();
			}else {
				if (AcessosAtividade::where('idAtividade','=',$atividade->id)->count() != null){
					Session::flash('warning','A atividade já foi acessada por alunos, não será possível adicionar novas questões');
					return Redirect::back();
				}
			}

			$questao = new Questao;
			$pergunta = Input::get('pergunta');
			$resposta = Input::get('resposta');

			$questao->enunciado = Input::get('enunciado');

			$questao->tipo=1;

			if($pergunta!=1){
				$arquivo = Input::file('arquivo');
				$filename = $arquivo->getClientOriginalName();
					$filename = str_random(30).$filename;

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
			Session::flash('info', 'Questão criada com sucesso!');
			return Redirect::back();
		});

		Route::get('listarQuestoes',function(){
			

			$data = array();

			$questoes = Questao::withTrashed()->get();

			foreach ($questoes as $key => $questao) {

				if($questao->trashed()){
					$questao->action = "N/A";
					$questao->excluido = "Excluído em: ".$questao->deleted_at->day."/".$questao->deleted_at->month."/".$questao->deleted_at->year;
				}else{
					$questao->action = 
					"<a href='/admin/questao/deletar/$questao->id' onclick='return confirmar()'>
						<button class='btn btn-xs btn-danger'>
							<i class='fa fa-times'></i>
						</button>
					 </a>";
					 $questao->excluido = "Ativo";
				}
				
				$questao->atividade2 = $questao->atividade()->withTrashed()->first()->nome;

				if($questao->atividade()->withTrashed()->first()->tipo == 1){
					$questao->aula2 = $questao->atividade()->withTrashed()->first()->aula->titulo;
					$questao->modulo2 = $questao->atividade()->withTrashed()->first()->aula->modulo->nome;
					$questao->curso = $questao->atividade()->withTrashed()->first()->aula->modulo->curso->nome;
					$questao->idioma = $questao->atividade()->withTrashed()->first()->aula->modulo->curso->idioma->nome;
					$questao->tipo2 = ($questao->tipo == 1) ? 'Múltipla Escolha' : 'Dissertativa';
				}else{
					$questao->aula2 = "Atividade Extra";
					$questao->modulo2 = "Atividade Extra";
					$questao->curso = "Atividade Extra";
					$questao->idioma = "Atividade Extra";
					$questao->tipo2 = "Atividade Extra";
				}
				
				
				array_push($data, $questao);
			}
			//dd($data);

			$response = array(
					"data" => $data,
					"iTotalRecords" => count($data),
					"iTotalDisplayRecords" => count($data)
				);
			return Response::json($response);
		});

		Route::post('atualizarRespostaUnica', function(){
			$questao = Questao::find(Input::get('id'));
			$atividade = Atividade::find($questao->idAtividade);

			if($atividade->tipo == 1){
				$modulo = $atividade->aula->modulo;
			}else{
				$modulo = $atividade->modulo;
			}

			//Se já existe alguma turma fechada neste módulo, não podemos alterar as atividaes adding novas questoes
			if($modulo->turmas->count() != null){
				foreach ($modulo->turmas as $turma) {
					if($turma->status == 0){
						Session::flash('warning','<p> Existem turmas que já concluíram esse Módulo</p> <p> Devido ao histórico do aluno, não é possível mudar a sua estrutura adicionando novas questões às suas Atividades </p>');
						return Redirect::back();
					}
				}
			}

			if($atividade->status == 1){
				Session::flash('warning','A atividade está ativa, para adicionar uma questão primeiro mude o seu status para inativo.');
				return Redirect::back();
			}else {
				if (AcessosAtividade::where('idAtividade','=',$atividade->id)->count() != null){
					Session::flash('warning','A atividade já foi acessada por alunos, não será possível adicionar novas questões');
					return Redirect::back();
				}
			}

			$pergunta = Input::get('pergunta');
			$resposta = Input::get('resposta');
			$questao->categoria = (Input::get('pergunta')).(Input::get('resposta'));

			$questao->enunciado = Input::get('enunciado');

			if($pergunta!=1 && Input::file('arquivo')!= NULL){
				$arquivo = Input::file('arquivo');
				$filename = $arquivo->getClientOriginalName();
					$filename = str_random(30).$filename;

				$questao->urlMidia = 'files/'.$filename;
				
				$arquivo->move('files/', $filename);
			}

			$questao->idTopico = Input::get('topico');
			$questao->pontos = Input::get('dificuldade');

			$questao->respostaCerta = Input::get('respostaCerta');
			$questao->save();

			Session::flash('info', 'Alterações salvas com sucesso!');
			return Redirect::back();
		});

		Route::post('atualizarMultiplaEscolha', function(){
			$questao = Questao::find(Input::get('id'));
			$atividade = Atividade::find($questao->idAtividade);

			if($atividade->tipo == 1){
				$modulo = $atividade->aula->modulo;
			}else{
				$modulo = $atividade->modulo;
			}

			//Se já existe alguma turma fechada neste módulo, não podemos alterar as atividaes adding novas questoes
			if($modulo->turmas->count() != null){
				foreach ($modulo->turmas as $turma) {
					if($turma->status == 0){
						Session::flash('warning','<p> Existem turmas que já concluíram esse Módulo</p> <p> Devido ao histórico do aluno, não é possível mudar a sua estrutura adicionando novas questões às suas Atividades </p>');
						return Redirect::back();
					}
				}
			}

			if($atividade->status == 1){
				Session::flash('warning','A atividade está ativa, para adicionar uma questão primeiro mude o seu status para inativo.');
				return Redirect::back();
			}else {
				if (AcessosAtividade::where('idAtividade','=',$atividade->id)->count() != null){
					Session::flash('warning','A atividade já foi acessada por alunos, não será possível adicionar novas questões');
					return Redirect::back();
				}
			}

			$pergunta = Input::get('pergunta');
			$resposta = Input::get('resposta');

			$questao->enunciado = Input::get('enunciado');

			if($pergunta!=1 && Input::file('arquivo')!= NULL){
				$arquivo = Input::file('arquivo');

				if($arquivo != null){
					$filename = $arquivo->getClientOriginalName();
					$filename = str_random(30).$filename;

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
			Session::flash('info', 'Alterações salvas com sucesso!');
			return Redirect::back();
		});

		Route::get('questao/deletar/{id}', function($id){
			$questao = Questao::find($id);

			$atividade = $questao->atividade;

			if($atividade != null){

				if($atividade->tipo == 1){
					$modulo = $atividade->aula->modulo;

					//Se já existe alguma turma fechada neste módulo, não podemos excluir questoes
					if($modulo->turmas->count() != null){
						foreach ($modulo->turmas as $turma) {
							if($turma->status == 0){
								Session::flash('warning','<p> Existem turmas que já concluíram esse Módulo</p> <p> Devido ao histórico do aluno, não é possível mudar a sua estrutura excluindo Questões </p>');
								return Redirect::back();
							}
						}
					}
				}
				
				if($atividade->acessos->count() == null){

					deletarQuestao($questao, "hard");
					Session::flash('info', '<p> A questão foi excluída </p>');
					return Redirect::back();
				}else{

					Session::flash('warning', '<p> A atividade relacionada a esta questão já foi acessada por alunos </p> <p> Não é possível alterar a estrutura da atividade excluindo suas questões </p>');
					return Redirect::back();
				}
				
			}
			
			Session::flash('warning', "Atividade inexistente");

			return Redirect::back();
		});
	
	//Alunos

		Route::get('alunos', function(){
			addBreadCrumbHome('Alunos');

			return View::make('aluno/showAdmin');
		});

		Route::get('listarAlunos', function(){
			

			$data = array();

			$users = User::withTrashed()->where('tipo', '=', 1)->get();

			foreach ($users as $key => $user) {
				$user->matricula = Aluno::withTrashed()->find($user->id)->matricula;
				$user->dataNascimento = Aluno::withTrashed()->find($user->id)->dataNascimento;

				if($user->trashed()){
					$user->action = "N/A";
					$user->excluido = "Excluído em: ".$user->deleted_at->day."/".$user->deleted_at->month."/".$user->deleted_at->year;
				}else{
					$user->action = "<a href='aluno/$user->id'><button style='margin-right: 5px;' class='btn btn-xs btn-success'><i class='fa fa-pencil'></i></button></a><a href='/admin/aluno/deletar/$user->id' onclick='return confirmar()'><button class='btn btn-xs btn-danger'><i class='fa fa-times'></i></button></a>";
					$user->excluido = "Ativo";
				}

				array_push($data, $user);
			}

			$response = array(
					"data" => $data,
					"iTotalRecords" => count($data),
					"iTotalDisplayRecords" => count($data)
				);
			return Response::json($response);
		});

		Route::get('aluno/{id}', function($id){
			addBreadCrumb(User::find($id)->nome);
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
			$aluno->urlImagem = $user->urlImagem;
			$data = explode('-', $aluno->dataNascimento);
			$aluno->dataNascimento = $data[2].'/'.$data[1].'/'.$data[0]; //hora, min, seg, mes, dia, ano;
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

			if(in_array($user->email, User::all()->lists('email')) ){
				Session::flash('warning','Já existe uma conta com esse email, por favor insira outro email');
				return Redirect::back();
			}

			if(in_array($user->login, User::where('tipo','=','1')->lists('login')) ){
				Session::flash('warning','Já existe um aluno com essa matrícula, por favor insira outra.');
				return Redirect::back();
			}

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
				$filename = str_random(30).$filename;
				$user->urlImagem = 'img/'.$filename;
				
				$imagem->move('img/', $filename);
			}
			$user->save();


			$aluno = new Aluno;

			$aluno->id = $user->id;

			$data = explode('/', Input::get('dataNascimento'));
			$aluno->dataNascimento = date('Y-m-d', mktime(0,0,0,$data[1],$data[0],$data[2])); //hora, min, seg, mes, dia, ano;
			$aluno->sobreMim = Input::get('sobreMim');
			$aluno->matricula       = Input::get('matricula');
			$aluno->dataVencimentoBoleto       = Input::get('dataVencimentoBoleto');

			$aluno->save();

			Mail::queue                    ('templateEmail', array('confirmation_code' => $confirmation_code), function($message) {
	            $message->to(Input::get('email'), Input::get('nome'))
	                ->subject('KalanGO! - Verifique sua conta');
	        });

	        Session::flash('info', "Aluno criado com sucesso!");

			return Redirect::back();
		});

		Route::post('atualizarAluno', function(){
			$user = User::find(Input::get('id'));
			$user->nome       = Input::get('nome');
			$user->sobrenome       = Input::get('sobrenome');
			$user->email       = Input::get('email');
			$user->login = Input::get('matricula');

			if(User::where('id','!=',$user->id)->count() !=null ){
				if(in_array($user->email, User::where('id','!=', $user->id)->lists('email')) ){
					Session::flash('warning','Já existe uma conta com esse email, por favor insira outro email');
					return Redirect::back();
				}
				
			}

			if(in_array($user->login, Aluno::where('id','!=',$user->id)->lists('login')) ){
				Session::flash('warning','Já existe um aluno com essa matrícula, por favor insira outra.');
				return Redirect::back();
			}

			$aluno= Aluno::find($user->id);

			$imagem = Input::file('urlImagem');
			$filename="";


			if(Input::file('urlImagem')!=NULL){
				$filename = $imagem->getClientOriginalName();
				$filename = str_random(30).$filename;

				$user->urlImagem = 'img/'.$filename;
				
				$aluno->urlImagem = 'img/'.$filename;
				
				$imagem->move('img/', $filename);
			}

			$user->save();

			$aluno= Aluno::find($user->id);
			$data = explode('/', Input::get('dataNascimento'));
			$aluno->dataNascimento = date('Y-m-d', mktime(0,0,0,$data[1],$data[0],$data[2]));
			$aluno->sobreMim = Input::get('sobreMim');
			$aluno->dataVencimentoBoleto       = Input::get('dataVencimentoBoleto');

			$aluno->save();

			Session::flash('info', "Alterações salvas com sucesso!");
			return Redirect::back();
		});

		Route::get('aluno/deletar/{id}', function($id){
			$aluno = Aluno::find($id);

			if($aluno->acessos->count() != null ){ 
				$aluno->turmas()->sync(array());
			}

			$aluno->usuario->delete();
			$aluno->delete();

			Session::flash('info','Aluno excluído com sucesso!');
			return Redirect::back();
		});

	//Professores

		Route::get('professores', function(){
			addBreadCrumbHome('Professores');

			return View::make('professor/showAdmin');
		});
		
		Route::get('listarProfessores', function(){

			$data = array();

			$users = User::withTrashed()->where('tipo', '=', 2)->get();
			//dd($users);
			foreach ($users as $key => $user) {
				$user->codRegistro = Professor::withTrashed()->find($user->id)->REProf;
				$user->formacaoAcademica = Professor::withTrashed()->find($user->id)->formacaoAcademica;
				
				if($user->trashed()){
					$user->action = "N/A";
					$user->excluido = "Excluído em: ".$user->deleted_at->day."/".$user->deleted_at->month."/".$user->deleted_at->year;
				}else{
					$user->action = "<a href='professor/$user->id'><button style='margin-right: 5px;' class='btn btn-xs btn-success'><i class='fa fa-pencil'></i></button></a><a href='/admin/professor/deletar/$user->id' onclick='return confirmar()'><button class='btn btn-xs btn-danger'><i class='fa fa-times'></i></button></a>";
					$user->excluido = "Ativo";
				}

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
			addBreadCrumb(User::find($id)->nome);
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
			$professor->urlImagem = $user->urlImagem;
			return View::make('professor/editarAdmin')->with('professor', $professor)
												->with('mensagem', $mensagem);
			
		});

		Route::post('criarProfessor', function(){
			$user = new User;
			$user->nome       = Input::get('nome');
			$user->sobrenome       = Input::get('sobrenome');
			$user->email       = Input::get('email');
			$user->login = Input::get('email');
			$user->tipo = '2';
			$user->password = Hash::make(Input::get('password'));

			if(in_array($user->email, User::all()->lists('email')) ){
				Session::flash('warning','Já existe uma conta com esse email, por favor insira outro email');
				return Redirect::back();
			}

			if(in_array(Input::get('REProf'), Professor::all()->lists('REProf')) ){
				Session::flash('warning','Já existe uma conta com esse RE, por favor insira outro');
				return Redirect::back();
			}

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
				$filename = str_random(30).$filename;

				$user->urlImagem = 'img/'.$filename;
				
				$imagem->move('img/', $filename);
			}

			$user->save();
			$professor = new Professor;
			$professor->id= $user->id;

			$professor->REProf = Input::get('REProf');
			$professor->formacaoAcademica = Input::get('formacaoAcademica');
			$professor->ExperienciaProfissional = Input::get('ExperienciaProfissional');

			$professor->save();

			Mail::queue('templateEmail', array('confirmation_code' => $confirmation_code), function($message) {
	            $message->to(Input::get('email'), Input::get('nome'))
	                ->subject('KalanGO! - Verifique sua conta');
	        });

	        Session::flash('info', "Professor criado com sucesso!");

			return Redirect::back();
		});

		Route::post('atualizarProfessor', function(){
			$user = User::find(Input::get('id'));
			$user->nome       = Input::get('nome');
			$user->sobrenome       = Input::get('sobrenome');
			$user->email       = Input::get('email');
			$user->login = Input::get('email');

			if(User::where('id','!=',$user->id)->count() !=null ){
				if(in_array($user->email, User::where('id','!=', $user->id)->lists('email')) ){
					Session::flash('warning','Já existe uma conta com esse email, por favor insira outro email');
					return Redirect::back();
				}
				
			}

			if(in_array(Input::get('REProf'), Professor::where('id','!=',$user->id)->lists('REProf')) ){
				Session::flash('warning','Já existe uma conta com esse RE, por favor insira outro');
				return Redirect::back();
			}

			$professor= Professor::find($user->id);

			$imagem = Input::file('urlImagem');
			$filename="";

			if(Input::file('urlImagem')!=NULL){
				$filename = $imagem->getClientOriginalName();
				$filename = str_random(30).$filename;

				$user->urlImagem = 'img/'.$filename;
				
				$imagem->move('img/', $filename);
			}

			$user->save();

			$professor->formacaoAcademica = Input::get('formacaoAcademica');
			$professor->ExperienciaProfissional = Input::get('ExperienciaProfissional');
			$professor->REProf       = Input::get('REProf');

			$professor->save();

			Session::flash('info', "Alterações salvas com sucesso!");
			return Redirect::back();
		});

		Route::get('professor/deletar/{id}', function($id){
			$professor = Professor::find($id);

			$professor->usuario->delete();
			$professor->delete();

			Session::flash('info','Professor excluído com sucesso!');
			return Redirect::back();
		});

	//Administradores
		
		Route::get('administradores', function(){
			addBreadCrumbHome('Administradores');

			return View::make('administrador/showAdmin');
		});

		Route::get('listarAdministradores', function(){
			

			$data = array();

			$users = User::withTrashed()->where('tipo', '=', 3)->get();
			//dd($users);
			foreach ($users as $user) {
				$user->codRegistro = Administrador::withTrashed()->find($user->id)->codRegistro;

				if($user->trashed()){
					$user->action = "N/A";
					$user->excluido = "Excluído em: ".$user->deleted_at->day."/".$user->deleted_at->month."/".$user->deleted_at->year;
				}else{
					$user->action = "<a href='administrador/$user->id'><button style='margin-right: 5px;' class='btn btn-xs btn-success'><i class='fa fa-pencil'></i></button></a><a href='/admin/administrador/deletar/$user->id' onclick='return confirmar()'><button class='btn btn-xs btn-danger'><i class='fa fa-times'></i></button></a>";
					$user->excluido = "Ativo";
				}

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
			addBreadCrumb(User::find($id)->nome);
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
			$administrador->urlImagem = $user->urlImagem;

			$administrador->nome = $user->nome;
			return View::make('administrador/editarAdmin')->with('administrador', $administrador)
													->with('mensagem', $mensagem);
			
		});

		Route::post('criarAdministrador', function(){
			$user = new User;
			$user->nome       = Input::get('nome');
			$user->sobrenome       = Input::get('sobrenome');
			$user->email       = Input::get('email');
			$user->login = Input::get('email');
			$user->tipo = '3';
			$user->password = Hash::make(Input::get('password'));

			if(in_array($user->email, User::all()->lists('email')) ){
				Session::flash('warning','Já existe uma conta com esse registro, por favor insira outro');
				return Redirect::back();
			}

			if(in_array(Input::get('codRegistro'), Administrador::all()->lists('codRegistro')) ){
				Session::flash('warning','Já existe uma conta com esse email, por favor insira outro email');
				return Redirect::back();
			}

			$imagem = Input::file('urlImagem');
			$filename="";

			$confirmation_code = str_random(30);
			foreach(User::all() as $u){
				if($u->confirmation_code = $confirmation_code){
					$confirmation_code = str_random(30);
				}
			}
			$user->confirmation_code = $confirmation_code;

			if(Input::file('urlImagem')!=NULL){
				$filename = $imagem->getClientOriginalName();
				$filename = str_random(30).$filename;
				$user->urlImagem = 'img/'.$filename;
				
				$imagem->move('img/', $filename);
			}

			$user->save();
			$administrador= new Administrador;
			$administrador->id = $user->id;
			$administrador->cargo = Input::get('cargo');
			$administrador->codRegistro = Input::get('codRegistro');

			if(in_array($user->codRegistro, Administrador::all()->lists('codRegistro')) ){
				Session::flash('warning','Já existe uma conta com esse registro, por favor insira outro');
				return Redirect::back();
			}

			$administrador->save();

			Mail::queue                    ('templateEmail', array('confirmation_code' => $confirmation_code), function($message) {
	            $message->to(Input::get('email'), Input::get('nome'))
	                ->subject('KalanGO! - Verifique sua conta');
	        });

			Session::flash('info', "Administrador criado com sucesso!");
			return Redirect::back();
		});

		Route::post('atualizarAdministrador', function(){
			$user = User::find(Input::get('id'));
			$user->nome       = Input::get('nome');
			$user->sobrenome       = Input::get('sobrenome');
			$user->email       = Input::get('email');
			$user->login = Input::get('email');

			if(in_array(Input::get('codRegistro'), Administrador::where('id','!=',$user->id)->lists('codRegistro')) ){
				Session::flash('warning','Já existe uma conta com esse registro, por favor insira outro');
				return Redirect::back();
			}

			if(User::where('id','!=',$user->id)->count() !=null ){
				if(in_array($user->email, User::where('id','!=', $user->id)->lists('email')) ){
					Session::flash('warning','Já existe uma conta com esse email, por favor insira outro email');
					return Redirect::back();
				}
				
			}

			$administrador= Administrador::find($user->id);

			$imagem = Input::file('urlImagem');
			$filename="";

			if(Input::file('urlImagem')!=NULL){
				$filename = $imagem->getClientOriginalName();
				$filename = str_random(30).$filename;
				$user->urlImagem = 'img/'.$filename;

				$administrador->urlImagem = 'img/'.$filename;
				
				$imagem->move('img/', $filename);
			}

			$user->save();

			$administrador= Administrador::find($user->id);
			$administrador->codRegistro = Input::get('codRegistro');
			$administrador->cargo = Input::get('cargo');

			$administrador->save();
			
			Session::flash('info', "Alterações salvas com sucesso!");			
			return Redirect::back();
		});

		Route::get('administrador/deletar/{id}', function($id){
			$administrador = Administrador::find($id);

			$administrador->usuario->delete();
			$administrador->delete();

			Session::flash('info','Administrador excluído com sucesso!');
			return Redirect::back();
		});

	//Avisos

		Route::get('avisos', function(){
			addBreadCrumbHome('Avisos');
			$categorias = Turma::all();
			$all = new Turma;
			$all->id = null;
			$all->nome = "Todos Avisos";
			$all->idModulo = null;
			$categorias->prepend($all);
			return View::make('aviso/viewAdmin')->with('categorias', $categorias);
		});

		//ajax - tabela
		Route::get('listarAvisos/{idTurma?}', function($idTurma = null){
			
			$avisos;
			if($idTurma != null){
				$avisos = Turma::find($idTurma)->avisos;
			}else{
				$avisos = Aviso::all();
			}

			foreach ($avisos as $aviso) {
				$aviso->dataExpiracao = date_format(date_create($aviso->dataExpiracao),"d/m/Y");
				$aviso->criadoPor = User::find($aviso->idAdmin)->nome;
				$aviso->enviadoPara = ($aviso->turmas->count() == Turma::all()->count()) ? "Todas as Turmas" : $aviso->turmas->count()." turmas";
				if($aviso->enviadoPara == "Todas as Turmas"){
					$idAvisos = "todos";
				}else{
					$idAvisos = $aviso->turmas->map(function($turma){
						return $turma->id;
					});
					$idAvisos = implode(",", $idAvisos->all());
				}

				$aviso->action = "<a style='color:white;' href='/admin/aviso/$aviso->id'><button style='margin-right: 5px;' class='btn btn-xs btn-primary'><i class='fa fa-external-link'></i></buton></a><button style='margin-right: 5px;' class='btn btn-xs btn-success' data-id='$aviso->id' data-titulo='$aviso->titulo' data-descricao='$aviso->descricao' data-urlImagem='$aviso->urlImagem' data-dataExpiracao='$aviso->dataExpiracao' data-idTurma='$idAvisos' data-toggle='modal' data-target='#editarAviso'><i class='fa fa-pencil'></i></button><a href='/admin/avisos/deletar/$aviso->id' onclick='return confirmar()'> <button class='btn btn-xs btn-danger'><i class='fa fa-times'></i></button></a>";
			}

			$response = array(
					"data" => $avisos,
					"iTotalRecords" => count($avisos),
					"iTotalDisplayRecords" => count($avisos)
				);
			return Response::json($response);
		});

		Route::get('aviso/{id}', function($id){
			addBreadCrumb("Ver Aviso");
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
				$filename = str_random(30).$filename;

				$aviso->urlImagem = 'img/'.$filename;
				
				$imagem->move('img/', $filename);
			}
			$data = explode('/', Input::get('dataExpiracao'));
			$aviso->dataExpiracao = date('Y-m-d', mktime(0,0,0,$data[1],$data[0],$data[2])); //hora, min, seg, mes, dia, ano;
			$aviso->idAdmin = Auth::user()->id;
			$aviso->save();

			if(Input::get('idTurma')[0] != "todos"){
				foreach(Input::get('idTurma') as $turma){
					Turma::find($turma)->avisos()->attach($aviso->id, array('dataAviso'=>date("Y-m-d")));
				}
			}else{
				foreach (Turma::all() as $turma) {
					$turma->avisos()->attach($aviso->id);
				}
			}

			Session::flash('info', "Aviso criado com sucesso!");
			return Redirect::back();
		});

		Route::post('atualizarAviso', function(){
			$aviso = Aviso::find(Input::get('id'));
			$aviso->titulo = Input::get('titulo');
			$aviso->descricao = Input::get('descricao');
			$data = explode('/', Input::get('dataExpiracao'));
			$aviso->dataExpiracao = date('Y-m-d', mktime(0,0,0,$data[1],$data[0],$data[2]));
			$aviso->idAdmin = Auth::user()->id;

			$imagem = Input::file('urlImagem');
			$filename="";
			if($imagem!=NULL){
				$filename = $imagem->getClientOriginalName();
				$filename = str_random(30).$filename;

				$aviso->urlImagem = 'img/'.$filename;
				
				$imagem->move('img/', $filename);
			}

			$aviso->save();

			if(!in_array("todos", (Input::get('idTurma') == null) ? array() : Input::get('idTurma'))){
				foreach(Input::get('idTurma') as $turma){
					Turma::find($turma)->avisos()->sync(array($aviso->id));
				}
			}else{
				foreach (Turma::all() as $turma) {
					$turma->avisos()->sync(array($aviso->id));
				}
			}

			Session::flash('info', "Alterações salvas com sucesso!");
			return Redirect::back();
		});

		Route::get('avisos/deletar/{id}', function($id){
			$aviso = Aviso::find($id);
			$aviso->turmas()->sync(array());
			$aviso->delete();

			Session::flash('info','Aviso excluído com sucesso!');
			return Redirect::back();
		});

	//Tópicos

		Route::get('topicos', function(){
			addBreadCrumbHome('Tópicos');
			return View::make('topico/showAdmin');
		});

		//ajax - tabela
		Route::get('listarTopicos', function(){
			
			$topicos = Topico::withTrashed()->get();

			foreach ($topicos as $topico) {
				$topico->numQuestoes = $topico->questoes->count();

				if($topico->trashed()){
					$topico->action = "N/A";
					$topico->excluido = "Excluído em: ".$topico->deleted_at->day."/".$topico->deleted_at->month."/".$topico->deleted_at->year;
				}else{
					$topico->action = 
					"<a href='/admin/topicos/deletar/$topico->id' onclick='return confirmar()'>
						<button class='btn btn-xs btn-danger'>
							<i class='fa fa-times'></i>
						</button>
					 </a>";
					 $topico->excluido = "Ativo";
				}

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

			if(Topico::count() != null){
				$topicos = array();
				foreach (Topico::lists('nome') as $m) {
					$topicos[] = strtolower($m);
				}

				if(in_array(strtolower(Input::get('nome')), $topicos) ){
					Session::flash('warning', "Já existe uma tópico com esse nome");
					return Redirect::back();
				}
				
			} 

			$topico->save();

			Session::flash('info', "Tópico criado com sucesso!");
			return Redirect::back();
		});

		Route::post('atualizarTopico', function(){
			$topico = Topico::find(Input::get('id'));
			$topico->nome = Input::get('nome');

			if(Topico::count() != null){
				$topicos = array();
				foreach (Topico::where('id','!=',$topico->id)->lists('nome') as $m) {
					$topicos[] = strtolower($m);
				}

				if(in_array(strtolower(Input::get('nome')), $topicos) ){
					Session::flash('warning', "Já existe uma tópico com esse nome");
					return Redirect::back();
				}
				
			} 

			$topico->save();

			Session::flash('info', "Alterações salvas com sucesso!");
			return Redirect::back();
		});

		Route::get('topicos/deletar/{id}', function($id){
			$topico = Topico::find($id);

			if($topico->questoes->count() == null){
				$topico->forceDelete();
			}
			$topico->delete();

			Session::flash('info','Tópico excluído com sucesso!');
			return Redirect::back();
		});

	//Empresas

		Route::get('empresas',function(){
			addBreadCrumbHome('Empresas');
			return View::make('empresa/showAdmin');
		});

		Route::get('listarEmpresas',function(){
			$empresas = Empresa::all();

			foreach ($empresas as $empresa) {
				$empresa->numPropagandas = $empresa->propagandas->count();
				$empresa->action = "<button style='margin-right: 5px;' class='btn btn-xs btn-success' data-id='$empresa->id' data-cnpj='$empresa->cnpj' data-nome='$empresa->nome' data-razaosocial='$empresa->razaoSocial' data-toggle='modal' data-target='#editarEmpresa'><i class='fa fa-pencil'></i></button><a href='/admin/empresas/deletar/$empresa->id' onclick='return confirmar()'><button class='btn btn-xs btn-danger'><i class='fa fa-times'></i></button></a>";
			}

			$response = array(
					"data" => $empresas,
					"iTotalRecords" => count($empresas),
					"iTotalDisplayRecords" => count($empresas)
				);
			return Response::json($response);
		});

		Route::post('criarEmpresa',function(){
			$empresa = new Empresa;
			$empresa->cnpj = Input::get('cnpj');
			$empresa->nome = Input::get('nome');
			$empresa->razaoSocial = Input::get('razaoSocial');

			foreach (Empresa::all() as $empresa2) {
				if($empresa2->cnpj == $empresa->cnpj){
					Session::flash('warning','CNPJ já existente');
					return Redirect::back();
				}
			}

			$empresa->save();

			Session::flash('info', "Empresa criada com sucesso!");
			return Redirect::back();
		});

		Route::post('atualizarEmpresa',function(){
			$empresa = Empresa::find(Input::get('id'));
			$empresa->cnpj = Input::get('cnpj');
			$empresa->nome = Input::get('nome');
			$empresa->razaoSocial = Input::get('razaoSocial');

			foreach (Empresa::where('id','!=',$empresa->id)->get() as $empresa2) {
				if($empresa2->cnpj == $empresa->cnpj){
					Session::flash('warning','CNPJ já existente');
					return Redirect::back();
				}
			}

			$empresa->save();

			Session::flash('info', "Alterações salvas com sucesso!");
			return Redirect::back();
		});

		Route::get('empresas/deletar/{id}', function($id){
			$empresa = Empresa::find($id);

			foreach ($empresa->propagandas as $propaganda) {
				$propaganda->delete();
			}

			$empresa->delete();
			Session::flash('info','Empresa excluída com sucesso!');
			return Redirect::back();
		});

	// Propagandas

		Route::get('propagandas', function(){
			addBreadCrumbHome('Propagandas');
			return View::make('propaganda/showAdmin');
		});

		//Ajax - Tabela
		Route::get('listarPropagandas', function(){
			
			$propagandas = Propaganda::all();

			foreach ($propagandas as $propaganda) {
				$propaganda->criadoPor = User::find($propaganda->idUsuario)->nome;
				$propaganda->empresa = Empresa::find($propaganda->idEmpresa)->nome;
				$propaganda->linkView = ($propaganda->link != null) ? "<a href='$propaganda->link' target='_blank'>Visitar Link</a>" : 'N/A';
				$propaganda->action = "<button style='margin-right: 5px;' class='btn btn-xs btn-primary' data-toggle='modal' data-target='#verImagem' data-src='/$propaganda->urlImagem' data-link='$propaganda->link' data-idempresa='$propaganda->idEmpresa' ><i class='fa fa-picture-o'></i></buton><button style='margin-right: 5px;' class='btn btn-xs btn-success' data-id='$propaganda->id' data-titulo='$propaganda->titulo' data-link='$propaganda->link' data-idempresa='$propaganda->idEmpresa' data-toggle='modal' data-target='#editarPropaganda'><i class='fa fa-pencil'></i></button><a href='/admin/propagandas/deletar/$propaganda->id' onclick='return confirmar()'><button class='btn btn-xs btn-danger'><i class='fa fa-times'></i></button></a>";
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
				$filename = str_random(30).$filename;

				$propaganda->urlImagem = 'img/'.$filename;
				
				$imagem->move('img/', $filename);
			}
			$propaganda->link = Input::get("link");
			$propaganda->idUsuario = Auth::user()->id;
			$propaganda->idEmpresa = Input::get("idEmpresa");
			$propaganda->save();

			Session::flash('info', "Propaganda criada com sucesso!");
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
				$filename = str_random(30).$filename;

				$propaganda->urlImagem = 'img/'.$filename;
				
				$imagem->move('img/', $filename);
			}
			$propaganda->link = Input::get('link');
			$propaganda->save();

			Session::flash('info', "Alterações salvas com sucesso!");
			return Redirect::back();
		});

		Route::get('propagandas/deletar/{id}', function($id){
			$propaganda = Propaganda::find($id);
			$propaganda->delete();

			Session::flash('info','Propaganda excluída com sucesso!');
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


