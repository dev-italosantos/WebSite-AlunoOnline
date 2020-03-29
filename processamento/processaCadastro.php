<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>

</body>
</html>

<?php
	$email = $_POST['email'] ? $_POST['email'] : "";
	$login = $_POST['usuario'] ? $_POST['usuario'] : "";
	$senha = $_POST['senha'] ? $_POST['senha'] : "";
	$confirmeSenha = $_POST['confSenha'] ? $_POST['confSenha'] : "";

	if ($senha == $confirmeSenha) {		
		header("Location:../index.php");
	} else {
		header("Location:../index.php");
	}
 ?>