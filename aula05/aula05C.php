<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<?php
			$valor1 = $_GET["x"];
			$valor2 = $_GET["y"];
			echo "Valor: $valor1 <br> Valor absoluto:" . abs($valor1); //elimina o sinal negativo
			echo "<br> $valor1 elevado à $valor2 = ", pow($valor1, $valor2); //eleva o valor1 pelo valor2
			echo "<br> A raiz de $valor1 é:", sqrt($valor1); //raiz quadrada
			echo "<br>", round($valor1); //Arredonda um valor (pode ser trocado por: ceil (sempre arredonda para cima) ou floor (sempre arredonda para baixo))
			echo "<br>", intval($valor1); //Pega somente a parte inteira do valor
			echo "<br>", number_format($valor1, 2); //Formatado com duas casas decimais
		?>
	</body>
</html>