<?php
	function soma($a, $b){
		$s = $a + $b;
		return $s;		//Quando a função for chamada a variável que a chamou receberá o valor $s, no caso $res chamou a função, então ele receberá o valor $s
	}
	$res = soma(4,3);
	echo $res;
?>