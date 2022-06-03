<?php
	$n1 = $_GET['numero'];
	$i = $n1-1;
	$fatorial = $n1 * $i;
	while($i!=1){
		$i--;
		$fatorial *= $i;		
	}
	echo "$fatorial";
?>