<?php
    $nome = $_POST['txNome'];
    $email = $_POST['txEmail'];
    $senha = $_POST['txSenha'];
        
    include("cadastrar.php");

    $stmt = $pdo->prepare("insert into usuarios values(null,'$nome','$email','$senha')");	    
	$stmt ->execute();    

    header("location:cadastrar.php");    
?>
