<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<?php
			$texto = $_GET['texto'];
			$tamanho = $_GET['tamanho'];
			$cor = $_GET['cor'];
		?>
		<style>
			span.texto{
				font-size: <?php $tamanho;?>;
				color: <?php $cor;?>;
			}
		</style>
	</head>
	<body>
	<div>
		<?php
			echo "<span class='texto'>$texto</span>";
		?>
	</div>
	<style>
		span.texto{
			font-size: <?php echo $tamanho;?>;
			color: <?php echo $cor;?>;
		}
	</style>
	</body>
</html>