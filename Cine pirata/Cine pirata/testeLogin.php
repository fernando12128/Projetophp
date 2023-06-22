<?php 

    $emailLog = $_POST['email'];
    $senhaLog = $_POST['Senha'];

    include("conexao.php");

    $stmt = $pdo ->prepare("select * from usuarios where email='$emailLog' and senha='$senhaLog'");
    $stmt -> execute();

    $row = $stmt ->fetch(PDO::FETCH_BOTH);

    if($row[2]==null){
        header('Location: login.php?mensagem=usuario e/ou senha incorreta');
    }
    else{
        header('Location: index.php');
    }

?>