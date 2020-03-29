<?php 
	session_start();
	if (!isset($_SESSION['professor'])) {
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
    echo "<h3>Bem Vindo Professor: " . $_SESSION['professor'] . "</h3>";
  ?>
  <div class="container text-center">
    <form class="col-12" method="post" action="processamento/notas.php">



      <?php 

        $alunos = ["Werick Nalyson", "Italo dos Santos Souza", "Yuri Silva de Lima", "Vinicius de Sousa", "Rodrigo Vieira", "Sara dos Santos", "Naira Janaina", "Leando Vieira", "Andrew Monteiro", "Natanael Oliveira"];

        print("<table class='table'>");
          print("<thead>");
            print("<th>Aluno</th>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Nota 3</th>
            <th>Nota 4</th>
            <th>Media</th>");
          print("</thead>");
          print("<tbody>");
              $ind1 = 1;
              $ind2 = 2;
              $ind3 = 3;
              $ind4 = 4;
            for ($ind = 0; $ind < 10 ; $ind++) {
              print("<tr>
              <td>"  . $alunos[$ind] . "</td>" . " 
              <td><input type='number' name='nota$ind1'></td>
              <td><input type='number' name='nota$ind2'></td>
              <td><input type='number' name='nota$ind3'></td>
              <td><input type='number' name='nota$ind4'></td>
              <td><input type='number' name='media' disabled=''></td>
            </tr>");
              $ind1 += 4;
              $ind2 += 4;
              $ind3 += 4;
              $ind4 += 4;
            }
             print("<tr class='text-right'>
              <td colspan='6'><input class='btn btn-danger' type='reset' value='Limpar'>
              <input class='btn btn-warning' type='submit' value='Enviar'>
            </tr>");
          print("</tbody>");
        print("</table>");


       ?>
      <!-- <table class="table">
          <thead>
            <th>Aluno</th>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Nota 3</th>
            <th>Nota 4</th>
            <th>Media</th>
          </thead>
          <tbody>
            <tr>
              <td>Werick Nalyson de Paulo</td>
              <td><input type="number" name="nota1"></td>
              <td><input type="number" name="nota2"></td>
              <td><input type="number" name="nota3"></td>
              <td><input type="number" name="nota4"></td>
              <td><input type="number" name="media" disabled=""></td>
            </tr>
            <tr>
              <td>Italo dos Santos Souza</td>
              <td><input type="number" name="nota1"></td>
              <td><input type="number" name="nota2"></td>
              <td><input type="number" name="nota3"></td>
              <td><input type="number" name="nota4"></td>
              <td><input type="number" name="media" disabled=""></td>
            </tr>
            <tr>
              <td>Bil Gates genio</td>
              <td><input type="number" name="nota1"></td>
              <td><input type="number" name="nota2"></td>
              <td><input type="number" name="nota3"></td>
              <td><input type="number" name="nota4"></td>
              <td><input type="number" name="media" disabled=""></td>
            </tr>
            <tr>
              <td>Nao sei mais quem colocar</td>
              <td><input type="number" name="nota1"></td>
              <td><input type="number" name="nota2"></td>
              <td><input type="number" name="nota3"></td>
              <td><input type="number" name="nota4"></td>
              <td><input type="number" name="media" disabled=""></td>
            </tr>
            <tr>
              <td>Nao sei mais quem colocar</td>
              <td><input type="number" name="nota1"></td>
              <td><input type="number" name="nota2"></td>
              <td><input type="number" name="nota3"></td>
              <td><input type="number" name="nota4"></td>
              <td><input type="number" name="media" disabled=""></td>
            </tr>
            <tr class="text-right">
              <td colspan="6"><input class="btn btn-danger" type="reset" value="Limpar">
              <input class="btn btn-warning" type="submit" value="Enviar">
            </tr>
          </tbody>          
        </table> -->
    </form>
  </div>
</div>
</body>
</html>

<?php } ?>