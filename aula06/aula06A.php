<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<?php
			$soma = 2;
			$subtracao = 2;
			$multiplicacao = 2;
			$divisao = 2;
			$resto = 2;
			$concatenacao = 2;
			$b = 1;
			$soma += $b;			//a recebe ele mesmo mais b
			echo "$soma";
			$subtracao -= $b;		//a recebe ele mesmo menos b
			echo "<br>$subtracao";
			$multiplicacao *= $b;	//a recebe ele mesmo vezes b
			echo "<br>$multiplicacao";
			$divisao /= $b;			//a recebe ele mesmo divido por b
			echo "<br>$divisao";
			$resto %= $b;			//a recebe o resto da divisão de a por b
			echo "<br>$resto";
			$concatenacao .= $b;	//a recebe o resto da divisão de a por b
			echo "<br>$concatenacao";
			$b++;
			echo "<br>$b";			//b recebe ele mesmo mais 1
		?>
	</body>
</html>