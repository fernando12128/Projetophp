<?php 

    if(isset($_POST['submit'])){
      //  print_r('Nome: ' . $_POST['nome']);
      //  print_r('<br>');
      // print_r('Email: ' . $_POST['email']);

      include_once('config.php');

      $nome = $_POST['nome'];
      $email = $_POST['email'];

      $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email) VALUES('$nome','$email')");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="box">
        <form action="cadastro.php" method = "POST">
            <fieldset>
                <legend>Cadastre-se aqui</legend>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="laberInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="laberInput">Email</label>
                </div>
                <br><br>
               <!-- <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="laberInput">Coloque seu Nome completo</label>
                </div>
                <br><br>
                -->
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>