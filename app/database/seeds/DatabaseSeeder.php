<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		
		$this->call('IdiomaSeeder');
		$this->call('CursoSeeder');
		$this->call('ModuloSeeder');
		$this->call('ProfessorSeeder');
		$this->call('AulaSeeder');
		$this->call('AtividadeSeeder');
		$this->call('TurmaSeeder');
		$this->call('AlunoSeeder');

		$this->command->info("\nThe Universe is prepared!\n");
	}

}
