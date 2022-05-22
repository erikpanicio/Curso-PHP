<?php
	$dia_semana = $_GET['dia_semana'];
	
	switch($dia_semana){
		case 2:
		case 3:
		case 4:
		case 5:
		case 6:
			echo "Dia de estudar";
			break;
		case 7:
		case 8:
			echo "Dia de descansar";
			break;
		default:
			echo "Dia da semana inválido!";
	}
?>