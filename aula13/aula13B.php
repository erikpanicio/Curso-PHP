<?php
	$numero = $_GET['numero'];
	
	for($i=1;$i<=10;$i++){
		$multiplicacao = $numero * $i;
		echo "$numero x $i = $multiplicacao<br>";
	}
?>