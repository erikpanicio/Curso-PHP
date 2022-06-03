<?php
	$frase = "Gosto de estudar Matemática";
	$nova_frase = str_ireplace("matemática", "PHP", $frase);		//Substitui palavras em uma frase, sem considerar a caixa de texto
	echo $nova_frase;	
?>