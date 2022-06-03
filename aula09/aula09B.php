<?php
	$nota1 = $_GET['nota1'];
	$nota2 = $_GET['nota2'];	
	$media = ($nota1 + $nota2) / 2;
	if ($media >= 7.0){
		echo "A média entre $nota1 e $nota2 é de $media<br>O aluno foi Aprovado!";
	}
	else if ($media >= 5.0){
		echo "A média entre $nota1 e $nota2 é de $media<br>O aluno está de Recuperação!";
	}
	else{
		echo "A média entre $nota1 e $nota2 é de $media<br>O aluno está de Reprovado";
	}
?>