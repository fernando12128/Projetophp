<?php 

    //print_r($_REQUEST);

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['Senha'])){


        include_once('conexao.php');
        $email = $_POST['email'];
        $senha = $_POST['Senha'];

        //print_r('Email: ' . $email);
        //print_r('<br>');
        //print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and Senha = '$senha'";

        $result = $conexao->query($sql);

        print_r ($result);

    }else{
        header('Location : login.php');
    }

?>