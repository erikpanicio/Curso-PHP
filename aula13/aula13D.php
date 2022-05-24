<?php
	$numero = $_GET['numero'];
	$divisores = 0;
	
	for($i=1;$i<=$numero;$i++){
		if($numero % $i == 0){
			$divisores += 1;
			echo "O número: $numero é divisível por $i<br>";
		}
	}
	if($divisores == 2){
		echo "O número $numero é primo!<br>";
	}
	else{
		echo "O número $numero não é primo!";
	}
?>