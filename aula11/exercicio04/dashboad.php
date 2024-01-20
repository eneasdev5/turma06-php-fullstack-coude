<?php
session_start();

if (isset($_SESSION['usuario'])) {
    $nome = (isset($_GET['nome'])) ? $_GET['nome'] : "fulano";

    printf("<p>Olá Seja Bem vindo %s</p>", $nome);

    echo '<a href="./logout.php">Logout</a>';
} else {
    header("location: ./login_view.php");
}
