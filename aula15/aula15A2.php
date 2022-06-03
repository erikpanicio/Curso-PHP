<?php
	function teste(&$x){
		$x += 2;
		echo "O valor de x é: $x<br>";
	}
	$a = 3;
	teste($a);
	echo "O valor de a é: $a";
?>