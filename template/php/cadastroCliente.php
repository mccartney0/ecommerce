<?php
    include "banco.php";

    $usuario = $_POST['login'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirm_Senha = $_POST['confirm_Senha'];

    if($senha != $confirm_Senha){
        echo "Senhas não conferem!";
    } else{
        mysqli_query($link, "INSERT INTO cliente(email, senha, usuario) values ('$email', '$senha', '$usuario')");
        header('location: login.php');
    }

?>


