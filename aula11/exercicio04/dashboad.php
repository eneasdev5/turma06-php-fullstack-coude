<?php
session_start();

if (isset($_SESSION['usuario'])) {
    $nome = (isset($_GET['nome'])) ? $_GET['nome'] : "fulano";

    if ($_SESSION['usuario']['type'] == 'Gerente') {

        printf("<p>Olá Seja Bem vindo %s</p>", $nome);

        print("<p>Acesso: Gerente</p>");
    } elseif ($_SESSION['usuario']['type'] == 'Funcionario') {

        require './dashboad_funcionario.php';
    }

    echo '<a href="./logout.php">Logout</a>';
} else {
    header("location: ./login_view.php");
}
