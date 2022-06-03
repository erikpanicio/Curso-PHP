<?php
	$frase = "Eu vou estudar PHP";
	$contador = str_word_count($frase, 1);		//conta as palavras na frase e coloca em um vetor
	print_r($contador);
?>