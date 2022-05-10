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
			$n3 = $_GET['n3'];
			$media = ($n1+$n2+$n3) / 3;
			$resultado = ($media >= 6)?"Aprovado":"Reprovado";
			echo "A média do aluno foi de: $media <br>O aluno foi: $resultado";
		?>
	</body>
</html>