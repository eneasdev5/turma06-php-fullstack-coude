<?php
session_start();

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = 'crud';


$conexao = mysqli_connect($servername, $username, $password, $dbname);
if (!$conexao) { // Check connection
    die("Connection failed: " . mysqli_connect_error());
}


$nome = $_GET['login'];
$senha = $_GET['senha'];


$result = mysqli_query($conexao, "select * from usuarios where nickname='" . $nome . "'");
if (mysqli_num_rows($result) > 0) {
    $dados = mysqli_fetch_assoc($result);

    if (password_verify($senha, $dados['senha'])) {
        $_SESSION['usuario'] = $dados['id'];

        header("location: ./dashboad.php?nome={$dados["nome"]}");
    } else {
        header("location: ./login_view.php?msg=Credenciais invalida!");
    }
} else {
    header("location: ./login_view.php?msg=Credenciais invalida!");
}
