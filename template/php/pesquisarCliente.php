<?php
    include "banco.php";

    $login = $_POST['user'];
    $senha = $_POST['senha'];

    $sql = mysqli_query($link, "SELECT * FROM cliente WHERE usuario like '$login' and senha like '$senha'");

    
    if($sql){
        
        /* Loop para selecionar todos os clientes gravados */
        while($vetor = mysqli_fetch_array($sql)){
            $id = $vetor['cliente_ID'];
            $usuario = $vetor['usuario'];
            $email = $vetor['email'];
            $senha = $vetor['senha'];
    
            //echo "Id: $id<br>";
            echo "Usuario: $usuario<br>";
            //echo "email: $email<br>";
            echo "senha: $senha<hr>";
        }
    } else{
        echo "Usuário inexistente";
    } 
    


?>


