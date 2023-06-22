<?php  
    $idAlter = $_POST['txIdContato'];
    $nomeAlter = $_POST['txNome'];
    $emailAlter = $_POST['txEmail'];

    include("conexao.php");

    $stmt = $pdo->prepare("UPDATE usuarios SET nome='$nomeAlter',email='$emailAlter' WHERE id ='$idAlter';");	    
	$stmt ->execute();    

    header("location:adm.php");    
    
?>