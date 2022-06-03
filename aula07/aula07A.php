<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<?php
			$n1 = $_GET['n1'];
			$n2 = $_GET['n2'];
			$operacao = $_GET['operacao'];
			$resultado = ($operacao == "soma")?$n1+$n2:$n1*$n2;	//Se o valor da operacao for igual a soma: n1 + n2, se não for: n1*n2
			echo "O resultado é: $resultado";
		?>
	</body>
</html>