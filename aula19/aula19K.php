<?php
	$n = array( 2 => "B",
				3 => "A",
				4 => "E",
				1 => "D",
				0 => "C");
	krsort($n);		//Organiza em ordem decrescente os índices, levando junto os valores
	print_r($n);
?>