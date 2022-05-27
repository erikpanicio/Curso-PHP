<?php
	$txt = "Este é um exemplo de string grande";
	
	$resultado = wordwrap($txt, 20, "<br>");
	echo $resultado;
?>