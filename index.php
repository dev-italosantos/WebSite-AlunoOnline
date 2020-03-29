<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="styleFooter.css">
</head>
<body class="bg-info">
<nav class="navbar navbar-inverse col-sm-12 bg-success">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Aluno Offline</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Sobre</a></li>
    </ul> 	
    <ul class="nav navbar-nav navbar-right">
      <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span><button type="button" data-toggle="modal" data-target="#cadastro" style="border: none; background-color: transparent; outline: none;">Cadastrar-se</button></a></li> -->
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span><button type="button" data-toggle="modal" data-target="#login" style="border: none; background-color: transparent; outline: none; margin-left: 3px" id="b">Logar-se</button></a></li>
    </ul>
  </div>
</nav>

<!-- Parallax -->

<section class="header-site">

    <div class="container">

      <div class="row">

        <div class="col-xs-12">

            <h1 class="text-center">BEM-VINDO</h1>

            <p class="lead text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

            <p class="text-center">

              <a href="#login" class="btn btn-danger" data-toggle="modal" data-target="#login">Logar-se</a>
            </p>

        </div>
      </div>
    </div>
</section>

<section class="container-site">
  <div class="container">

    <div class="row">

      <div class="col-xs-12">
        
        <h1 class="text-center">Lorem Ipsum has been the industry's standard dummy text ever</h1>

        <p class="text-center">
           Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>

      </div>
      
      <div class="row">
        
        <div class="col-sm-4">
          <div class="thumbnail">
            
            <img src="imagens/06.jpg">

            <div class="caption text-center">

            <h3>Universidades convocam</h3>

            <p>Sistema utiliza a nota do Enem ao selecionar alunos para universidades públicas. Prazos para matrícula são definidos pela instituição de ensino.
            </p>

            </div>
          </div>
        </div>
       <div class="row">

          <div class="col-sm-4">

            <div class="thumbnail">
              
              <img src="imagens/03.jpg">

              <div class="caption text-center">

              <h3>Novo reitor da UFTM</h3>

              <p>Última edição do QS University Ranking 2020 alerta para queda no desempenho das instituições do Brasil.
              </p>
              
              </div>
            </div>
          </div>
         <div class="row">
        
          <div class="col-sm-4">

            <div class="thumbnail">
              
              <img src="imagens/05.jpg">

              <div class="caption text-center">

              <h3>Contrary to popular</h3>

              <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model
              </p>
              
              </div>
            </div>
          </div>
      </div>
    </div>
    
  </div>
</section>

<section class="img-site">

  <div class="container">

    <div class="row">

      <div class="col-xs-12">
        
        <h1 class="text-center">Lorem Ipsum has been</h1>

        <p class="text-center">
           Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type 
        </p>

      </div>
    </div>
  </div>
</section>

<section class="footer-site">

  <div class="row">
    <div class="col-xs-12">  

  <div class="team-section">

    <h1>Nossa Equipe</h1>
    <span class="border"></span>
    <div class="ps">
      <a href="#p1"><img src="imagens/Nalyson.jpg"></a>
      <a href="#p3"><img src="imagens/italo.jpg"></a>
    </div>
    <div class="section" id="p1">
      <span class="nome">Werick Nalyson</span>
      <span class="border"></span>
      <p>
        Werick Nalyson, <strong>Doutorado</strong> na Universidade Federal do Ceará em Bioquimica. Mestrado no Instituro Federal de Educação. Bacharel em Biotecnologia e Computação. Participou de visitas internacionais e realizou estudos de importância Internacionalmente, Bacharel em Desenvolvimento de Websites.
      </p>
    </div>
    <div class="section" id="p3">
      <span class="nome">Italo Santos</span>
      <span class="border"></span>
      <p>
        Italo dos Santos, possui doutorado na Univesidade federal do Céara (UFC) no campo da matemática aplicada. Escritor do livro matemática no meio computacional. Ramificações com a Programação Orientada a Objetos. Diretor do Centro de Aplicações de Matemática do Céara.
      </p>
    </div>
  </div>
      <h1 class="text-center"> Direitos Reservados ©copyrhigt</h1>
    </div>
  </div>
  
</section>
<!-- Modal 1 --> 
<div class="modal fade" id="cadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title text-center" id="exampleModalLabel">Cadastro</h3>
      </div>
      <div class="modal-body">
      	<form method="post" action="processamento/processaCadastro.php">
      		<div class="form-group">
      			<label>Email</label>
      			<input type="email" class="form-control" name="email" required="">
      		</div>
      		<div class="form-group">
      			<label>Login</label>
      			<input type="text" class="form-control" name="usuario" required="">
      		</div>
      		<div class="row row-sm-12 form-group">
      			<div class="col-sm-6">
      				<label>Senha</label>
      				<input class="form-control" type="password" class="form-control" name="senha" required="">
      			</div>
      			<div class="col-sm-6">
      				<label>Confirme a senha</label>
      				<input class="form-control" type="password" class="form-control" name="confSenha" required="">
      			</div>
      		</div>
      		<div class="form-group text-right">
      			<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      			<input class="btn btn-success " type="submit" value="Entrar">
      		</div>
      	</form>
      </div>
    </div>
  </div>
</div>
<!-- Modal 2 -->
<div class="modal modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title text-center" id="exampleModalLabel">Login</h3>
      </div>
      <div class="modal-body">
      	<form method="post" action="processamento/processaLogin.php">
      		<div class="form-group">
      			<label>Login</label>
      			<input type="text" class="form-control" name="usuario" required="">
      		</div>
      		<div class="form-group">
      			<label>Senha</label>
      			<input type="password" class="form-control" name="senha" required="">
      		</div>
          <div class="form-group">
            <input class="form-check-input" type="radio" name="select" value="1" checked="">
            <label>Aluno</label>
            <input class="form-check-input" type="radio" name="select" value="2">
            <label>Professor</label>
          </div>
      		<div class="form-group text-right">
      			<div class="form-group col-6">
      				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      				<input class="btn btn-success " type="submit" value="Entrar">
      			</div>
      		</div>
      	</form>
      </div>
    </div>
  </div>
</div>
</body>
</html>
