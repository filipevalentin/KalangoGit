<?php 
	class Aula extends Eloquent{

		public $timestamps = false;

		public function modulo(){
			return $this->belongsTo('Modulo', "idModulo");
		}

		public function materialApoio(){
			return $this-> hasMany('MaterialApoio',"idAula");
		}

		public function atividades(){
			return $this-> hasMany('Atividade', 'idAula');
		}

	}

	//#### COMO FAZER COM AS FUNÇOES DE RELAÇÃO ENTRE TABELAS ? ####
	//EXEMPLO: UM ARTISTA TEM MUITOS ALBUNS e UM ALBUM PERTENCE A UM ARTISTA 
	
	/*

	class Artista{	

		public function albums(){
			return $this->hasMany("Album"/NomeDOModelo, "idArtista"/Nome Da Fk Que Deverá Ser Procurada Na Tabela De Destino) 
		}
	}

	class Album{
	
		public function artista(){
			return $this-belongsTo("Artista"/NomeDoModelo, "idArtista"/NomeDaFK)
		}
	}

	*/

 ?>