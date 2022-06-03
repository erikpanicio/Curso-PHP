<?php
	$n = array( 3 => 1,
				1 => 2,
				0 => 3,
				7 => 4);
	unset($n[7]);		//Desaloca a posição 7
	print_r($n);
?>