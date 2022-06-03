<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<?php
			//Mostrar qual foi o ano anterior ao ano atual
			
			$ano_atual = $_GET["ano_atual"];
			echo "O ano atual é $ano_atual | O ano anterior é ". $ano_atual-- ."<br>"; //mostrou a variável antes de decrementar
			echo "O ano atual é $ano_atual | O ano anterior é ". --$ano_atual;		   //mostrou a variável depois de decrementar
		?>
	</body>
</html>