<?php
	$inicio = $_GET['inicio'];
	$fim = $_GET['fim'];
	$opcao = $_GET['opcao'];

	if ($inicio <= $fim){
		while ($inicio <= $fim){
		echo "$inicio<br>";
		$inicio += $opcao;
		}
	}
	else{
		while ($inicio >= $fim){
		echo "$inicio<br>";
		$inicio -= $opcao;
		}
	}
?>