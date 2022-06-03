<?php
	$numero = $_GET['numero'];
	$operacao = $_GET['operacao'];
	
	switch($operacao){
		case 1:
			$resultado = $numero * 2;
			break;
		case 2:
			$resultado = pow($numero, 3);
			break;
		case 3:
			$resultado = sqrt($numero);
	}
	echo "O resultado foi: $resultado";
?>