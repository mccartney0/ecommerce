<?php
    include "banco.php";

    $cpf = $_POST['user'];
    $email = $_POST['email'];
    $nome = $_POST['senha'];
    $usuario = $_POST['usuario'];

    $sql = mysqli_query($link, "UPDATE FROM cliente SET cpf='$cpf', email = '$email', nome= '$nome', senha = '$senha', usuario = ''$usuario 
                        WHERE usuario = '$usuario' and email = '$email'");
    
?>


