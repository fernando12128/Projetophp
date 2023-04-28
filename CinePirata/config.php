<?php 

    $dbhost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario-cine';

    $conexao = new mysqli($dbhost, $dbUsername,$dbPassword, $dbName );

    // if($conexao -> connect_errno){
    //     echo "Erro!!";
    // }else{
    //     echo "conexao efetuada com sucesso!!";
    // }
?>