<?php
	/*
	$ano = $_GET['ano'];
	$sexo = $_GET['sexo'];
	$idade = date("Y") - $ano;
	*/
	
	$nome = isset($_GET['nome'])?$_GET['nome']:"[Valor não especificado]";	//Caso eu abra apenas o arquivo PHP, ele não dará erro, antes dava, pois precisava dos valores que não eram definidos, agora se não estiverem definidos mostrará uma mensagem
	$ano = isset($_GET['ano'])?$_GET['ano']:"[Valor não especificado]";
	$sexo = isset($_GET['sexo'])?$_GET['sexo']:"[Valor não especificado]";
	$idade = date("Y") - $ano;
	echo "$nome do sexo $sexo tem $idade anos";
?>