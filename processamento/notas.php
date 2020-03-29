<?php 
	$conexao = mysqli_connect("localhost", "root", "", "bd_notas");

	$nota1 = $_POST['nota1'] ? $_POST['nota1'] : "";
	$nota2 = $_POST['nota2'] ? $_POST['nota2'] : "";
	$nota3 = $_POST['nota3'] ? $_POST['nota3'] : "";
	$nota4 = $_POST['nota4'] ? $_POST['nota4'] : "";
	$resultado = ($nota1 + $nota1 + $nota1 + $nota4) / 4;

	$sql = "insert into tb_notas (nota1, nota2, nota3, nota4, resultado) values ('$nota1', '$nota2', '$nota3', '$nota4', '$resultado')";
	$salvar = mysqli_query($conexao, $sql);

	header("Location:../indexAluno.php")
 ?>