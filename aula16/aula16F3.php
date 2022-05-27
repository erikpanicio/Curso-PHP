<?php
	$frase = "Eu vou estudar PHP";
	$contador = str_word_count($frase, 2);		//conta as palavras na frase, coloca em um vetor, o valor do vetor é o valor do inicio de onde a palavra começa
	print_r($contador);
?>