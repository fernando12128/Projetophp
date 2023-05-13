<?php

    $id = $_GET['id'];

    //echo $id;

    include("conexao.php");

    $stmt = $conexao->prepare("delete from usuarios where id = $id");	    
	$stmt ->execute();    

    header("location:contato-lista.php"); 



?>