<?php
    include "banco.php";

    $nome = "camisa";
    $quantidade = "10";
    $valor = "40";

    mysqli_query($link, "INSERT INTO produtos(nome, quantidade, valor) values ('$nome', '$quantidade', '$valor')");

?>