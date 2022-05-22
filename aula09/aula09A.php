<?php
	$ano_nasc = $_GET['ano_nasc'];
	$idade = date("Y") - $ano_nasc;
	if ($idade >= 18){
		echo "Voto obrigatório";
	}
	else{
		echo "Voto não obrigatório";
	}
?>