<?php
	$numero = $_GET['numero'];
	$i = 0;
	do{
		$multiplicacao = $numero * $i;
		echo "$numero x $i = $multiplicacao<br>";
		$i++;
	}while($i<=10);	
?>