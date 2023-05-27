<?php
    $nome = $_POST['txNome'];
    $email = $_POST['txEmail'];
    $senha = $_POST['txSenha'];
        
    include("cadastrar.php");

    $stmt = $pdo->prepare("insert into tbcontato values(null,'$nome','$email','$Senha')");	    
	$stmt ->execute();    

    header("location:cadastrar.php");    
?>
