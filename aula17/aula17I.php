<?php
	$nome = "Guanabara";
	$novo = str_pad($nome, 30, "-", STR_PAD_LEFT);		//Faz uma string caber em x espaços, colocando um valor (no caso -) onde estiver vazio
	echo "Meu professor é o $novo<br>";
	
	$novo = str_pad($nome, 30, "-", STR_PAD_RIGHT);		//
	echo "Meu professor é o $novo";
	
	
?>