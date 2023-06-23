<?php include("conexao.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel ="stylesheet" href="css/estilo1.css">
    <title>Adm</title>

</head>


<body>
    
<div class="Nome text-center Logo" >
      <h1>Cine Pirata</h1>
</div>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.html">Cine Pirata</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="imagem.php">Cadastrar imagem</a>
        </li>

        <li class="nav-item">
          <a class="nav-link disabled">Opções</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<div class="card color1">
<section>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope ="col">Senha</th>
            
        </tr>
        </thead>
        <tbody>
        <?php
            $stmt = $pdo->prepare("select * from usuarios");	
            $stmt ->execute();
            
            while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
              echo "<tr class='celula'>";
                echo "<td> $row[0] </td>";						
                echo "<td> $row[1] </td>";						
                echo "<td> $row[2] </td>";
                echo "<td> $row[3] </td>";						

                echo "<td> 
                        <a class='btn btn-warning' href='?id=$row[0]&nome=$row[1]&email=$row[2]'> Editar </a>
                        <a class='btn btn-danger' href='remover.php?id=$row[0]'> Remover </a>
                      </td>";
              echo "</tr>";
            }	
        ?>
        </tbody>
    </table>
</section>

        <form class="altera" action="alterar.php" method="post">      
            <div>
            <input type="hidden" name="txIdContato" value="<?php echo @$_GET['id']; ?>" />
            </div>		

            <div>
                <input type="text" placeholder="Nome" name="txNome" value="<?php echo @$_GET['nome']; ?>" />
            </div>		

            <div>
                <input type="text" placeholder="E-mail" name="txEmail" value="<?php echo @$_GET['email']; ?>" />
            </div>
            
            <br>

            <div>
                <input type="submit" class="btn btn-success" value="Salvar" />
            </div>
        </form>
</div>




</body>
</html>