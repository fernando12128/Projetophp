<?php  
    $nome = $_POST['txNome'];
    $sobrenome = $_POST['txSobrenome'];
    $email = $_POST['txEmail'];
    $senha = $_POST['txSenha'];
        
    include("cadastrar.php");

    $stmt = $pdo->prepare("insert into tbcontato values(null,'$nome','$sobrenome','$email','$Senha')");	    
	$stmt ->execute();    

    header("location:cadastrar.php");    
?>