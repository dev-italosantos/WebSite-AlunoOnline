<?php 
	$login = $_POST['usuario'] ? $_POST['usuario'] : "";
	$senha = $_POST['senha'] ? $_POST['senha'] : "";
	$select = $_POST['select'] ? $_POST['select'] : "";
	
	switch ($select) {
		case '1':
			if ($login == "aluno" && $senha == "aluno") {
			session_start();
			$_SESSION['aluno'] = $login;
			header("Location:../indexAluno.php");
		} else {
			header("Location:../index.php");
		}		
		break;
		
		case '2':
			if ($login == "professor" && $senha == "professor") {
				session_start();
				$_SESSION['professor'] = $login;
				header("Location:../indexProfessor.php");
			} else {
				header("Location:../index.php");
			}
				break;
		}

	 
 ?>