<?php 
<p> Ausência de Alunos</p>


Parte 1
	select `alunos`.*, `turmasalunos`.`idTurma` as `pivot_idTurma`, 
	 `turmasalunos`.`idAluno` as `pivot_idAluno`, 
	 `turmasalunos`.`pontuacao` as `pivot_pontuacao` from `alunos`
	 inner join `turmasalunos` on `alunos`.`id` = `turmasalunos`.`idAluno`
	 where `alunos`.`deleted_at` is null and
	  `turmasalunos`.`idTurma` = ? and
	   datediff(now(), EmailAtividade) > 15 or
	   (EmailAtividade is null)

Parte 2
	select count(*) as aggregate from `acessosatividades` where 
	`idAluno` = ? and 
	datediff(now(), DataAcesso) > 15




<p> Relatório de Contratação</p>

 SELECT concat( year(dtContratacao), ' / ', LPAD(month(dtContratacao), 2, 0 ) ) as mes, 
 count(id) as contratações from contrata 
 where idTurma in ('1,2,3,4,5') and
  (dtContratacao between '2014-01-01 00:00:00' and '2015-05-26 00:00:00') 
  group by LPAD(month(dtContratacao), 2, 0 )
  order by (dtContratacao)




<p> Ranking de pontos - Dashboard do aluno</p>

	select `questoes`.*, `respostas`.`idAluno` as `pivot_idAluno`,
	 `respostas`.`idQuestao` as `pivot_idQuestao`,
	  `respostas`.`correcao` as `pivot_correcao`,
	   `respostas`.`respostaAluno` as `pivot_respostaAluno` from `questoes`
	    inner join `respostas` on `questoes`.`id` = `respostas`.`idQuestao`
	     where `respostas`.`idAluno` = ?



<p> Cadastro de Múltiplas respostas corretas </p>

	
	

?>