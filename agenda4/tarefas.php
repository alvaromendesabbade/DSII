<?php


function mostrarLista($listaDeTarefas) {

	echo "Minha lista de tarefas:\n";

	foreach ($listaDeTarefas as $tarefa) {

		echo "- " . $tarefa . "\n"; 

	}

}


$minhasTarefas = ["fazer atividades escolares", "estudar para a avaliação trimestral", "realizar agendas da semana do curso técnico da ETEC"];


mostrarLista($minhasTarefas);


?>