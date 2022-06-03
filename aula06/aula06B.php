<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<?php
			//Exercício: aplicar 10% de desconto ao preço de um produto
			
			$produto = $_GET["p"];
			echo "preço do produto: R$ $produto";
			$produto -= ($produto / 100) * 10;
			echo "<br>preço 10% de desconto: R$ $produto";
		?>
	</body>
</html>