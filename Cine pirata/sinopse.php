<?php include_once('conexao.php');?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel ="stylesheet" href="css/estilo.css">
    <title>Sinopse</title>
</head>
<header>
  <div class="Nome text-center logo">
    <h1>Cine Pirata</h1>
  </div>
    <nav class="navbar navbar-expand-lg navbar-light color1 ">

        <a class="navbar-brand" href="#">Cine Pirata</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="dropdown">
          <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"
            data-bs-auto-close="outside">
            Entrar
          </button>
    
          <form action='' class="dropdown-menu p-4">
    
            <a href="Login.php" class="btn btn-light">Logar</a>
            <br><br>
            <a href="cadastrar.php" class="btn btn-light">Cadastrar</a>
          </form>
        </div>
    
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="Imagem.php">Filmes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Opções</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">pesquisar</button>
          </form>
        </div>
      </nav>
      
</header>
 
  
<div class="texto-centralizado">
  
      <div class="movie-details">
      <?php
          // $idd = $_GET['id'];
          $idd = 2;

          $stmt = $pdo->prepare("Select * from tbfilme where idFilme = $idd");	
          $stmt ->execute();       
               while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
          echo"<a target='_blank' href='$row[4]'> <img src='img/$row[2]' alt=''></a>";
          echo"<h2>$row[1]</h2>";
          echo"<p><strong>Genero: </strong> $row[3];</p>";
          echo"<p><strong>Sinopse: </strong> $row[5] </p>";
            }?>
      </div>
</div>
  </div>


</body>
</html>