<?php	
	function soma(){
		$p = func_get_args();	//Cria um vetor para os valores
		$t = func_num_args();	//Igual o len() do python		
		$s = 0;
		for($i=0;$i!=$t;$i++){
		$s += $p[$i];
	}
	return $s;
	}
	$r = soma(3,5,2);
	echo "A soma é: $r";
?>