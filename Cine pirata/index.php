<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilo.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

  <title>Cine Pirata</title>
</head>

<body>
  <div class="Nome text-center">
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

      <form action='' class="dropdown-menu p-4" style="">

        <a href="Login.php" class="btn btn-light">Logar</a>
        <br><br>
        <a href="cadastrar.php" class="btn btn-light">Cadastrar</a>
      </form>
    </div>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Filmes</a>
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

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/ford_v_ferrari-des.jpeg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/DUNE-Poster.webp" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/a vangança1.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <br><br>

  <div class="container text-light">
    <h2>Filmes de ação</h2>
  </div>
  <Div class="container">
    <div class="row">
      <div class="col">
        <img src="img/Tropa-de-elite.jpg" class="img-fluid" alt="...">
      </div>
      <div class="col">
        <img src="img/Django.jpg" class="img-fluid" alt="...">
      </div>
      <div class="col">
        <img src="img/Terminator2.jpg" class="img-fluid" alt="...">
      </div>
      <div class="col">
        <img src="img/The dark.jpg" class="img-fluid" alt="...">
      </div>
      <div class="col">
        <img src="img/Rambo1.jpg" class="img-fluid" alt="...">
      </div>
    </div>
  </Div>

  <br><br>

  <div class="container text-light">
    <h2>Filmes de animação</h2>
  </div>

  <Div class="container">
    <div class="row">
      <div class="col">
        <img src="img/Brave_Teaser.jpg" class="img-fluid" alt="...">
      </div>
      <div class="col">
        <img src="img/The_Princess.jpg" class="img-fluid" alt="...">
      </div>
      <div class="col">
        <img src="img/chapeu.jpg" class="img-fluid" alt="...">
      </div>
      <div class="col">
        <img src="img/Scorpion.webp" class="img-fluid" alt="...">
      </div>
      <div class="col">
        <img src="img/aranha.jpg" class="img-fluid" alt="...">
      </div>
    </div>
  </Div>

  <br><br>

  <div class="container text-light">
    <h2>Filmes aclamados pela critica</h2>
  </div>

  <Div class="container">
    <div class="row">
      <div class="col">
        <img src="img/Duna.jpeg" class="img-fluid" alt="...">
      </div>
      <div class="col">
        <img src="img/a origem1.webp" class="img-fluid" alt="...">
      </div>
      <div class="col">
        <img src="img/Ford_v_Ferrari.png" class="img-fluid" alt="...">
      </div>
      <div class="col">
        <img src="img/Terminator1984.jpg" class="img-fluid" alt="...">
      </div>
      <div class="col">
        <img src="img/alien-o-outavo-passageiro.webp" class="img-fluid" alt="...">
      </div>
    </div>
  </Div>

  <br><br>

  <div class="rodo">
    <h1>Roda o Pé</h1>

    <footer>
      <div class="box">
        <h2>Inicio<h2>
            <ul>
              <li><a href="Home"></a></li>
              <li><a href="Generos"></a></li>

            </ul>
      </div>
      <div class="box">
        <h2>Colaboradores<h2>
            <ul>
              <li><a href="jonathan"></a></li>
              <li><a href="Ezequiel"></a></li>
              <li><a href="Fernando"></a></li>
            </ul>
      </div>



    </footer>

  </div>

</body>

</html>