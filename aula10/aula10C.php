<?php
	$estado = $_GET['estado'];
	
	switch($estado){
		case "Goiás":
		case "Mato Grosso":
			echo "Centro-Oeste ";
			break;
		case "Acre":
		case "Amazonas":
			echo "Norte ";
			break;
		case "Bahia":
		case "Ceará":
			echo "Nordeste";
			break;
		case "Paraná":
		case "Santa Catarina":
			echo "Sul";
			break;
		case "Minas Gerais":
		case "São Paulo":
			echo "Sudeste";
		
	}
?>