<?php 

    if(isset($_POST['submit'])){
      //print_r('Nome: ' . $_POST['nome']);
      // print_r('<br>');
      // print_r('Email: ' . $_POST['email']);
      include('conexao.php');

      $nome = $_POST['nome'];
      $email = $_POST['email'];
      //$senha = $_POST['senha'];

      $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email) VALUES('$nome','$email')");
    }
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel ="stylesheet" href="css/estilo1.css">
    <title>cadastrar</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    
  </head>

  <div class="Nome text-center">
        <h1>Cine Pirata</h1>
    </div>
    
  <body class="p-3 m-0 border-0 bd-example">
    <div class="dropdown-menu color1">
      <form class="px-4 py-3" action="cadastrar.php" method = "POST">

        <div class="mb-3"  class="img-fluid" alt="...">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" class="form-control color1" name ='nome' id="nome" placeholder="Nome da minha princesinha">
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control color1" name ='email' id="email" placeholder="Minha princesinha@gmail.com">
        </div>
      <!--
        <div class="mb-3">
          <label for="Password" class="form-label">Senha</label>
          <input type="password" class="form-control color1" id="Senha" placeholder="senha da minha princesinha">
        </div>
      !-->
        <br>
        <!--<button type="" class="btn btn-primary">Voltar</button> !-->
      
        <button type="submit"  name="submit" class="btn btn-primary">cadastrar</button>

      </form>

    </div>
    
  </body>
</html>