<?php 
  $conexao = mysqli_connect("localhost", "root", "", "bd_notas");
	session_start();
	if (!isset($_SESSION['aluno'])) {
		header("Location:index.php");
	} else {
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
</head>
<body class="bg-info">
<nav class="navbar navbar-inverse col-sm-12">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Aluno Offline</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Sobre</a></li>
    </ul> 	
    <ul class="nav navbar-nav navbar-right">
      <li><a href="sair.php"><span class="glyphicon glyphicon-log-in"></span><button type="button" data-toggle="modal" data-target="#login" style="border: none; background-color: transparent; outline: none;" id="b">Sair</button></a></li>
    </ul>
  </div>
</nav>
<div class="container">
  <?php 
    @session_start(); 
    echo "<h3>Bem Vindo Aluno: " . $_SESSION['aluno'] . "</h3>"; 
  ?>
  <table class="table table-striped">
    <thead class="bg-warning">
      <th>Nota 1:</th>
      <th>Nota 2:</th>
      <th>Nota 3:</th>
      <th>Nota 4:</th>
      <th>Resultado Final:</th>
    </thead>
    <tbody class="bg-danger">
      <tr>
      <?php 

        $sql = "select * from tb_notas";
        $consultas = mysqli_query($conexao, $sql);

        while ($notas = mysqli_fetch_array($consultas)) {
          $id = $notas[0];
          $nota1 = $notas[1];
          $nota2 = $notas[2];
          $nota3 = $notas[3];
          $nota4 = $notas[4];
          $resultado = $notas[5];

          if ($nota1 < 6 && $nota2 < 6 && $nota3 < 6 && $nota4 < 6) {
            echo "<td>$nota1</td>";
            echo "<td>$nota2</td>";
            echo "<td>$nota3</td>";
            echo "<td>$nota4</td>";            
          }else {
            echo "<td>$nota1</td>";
            echo "<td>$nota2</td>";
            echo "<td>$nota3</td>";
            echo "<td>$nota4</td>";
          }
          if ($resultado < 6) {
            echo "<td>$resultado</td></tr>";
          } else {
            echo "<td>$resultado</td></tr>";
          }
        }

       ?>
    </tbody>
  </table>
</div>
</body>
</html>

<?php } ?>