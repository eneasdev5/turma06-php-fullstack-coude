<?php

echo '<a href="./login_view.php">Voltar</a><br>';


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

$result = mysqli_query($conexao, "SELECT * FROM usuarios WHERE nickname='" . $nome . "'");
if (mysqli_num_rows($result) > 0) {
    $dados = mysqli_fetch_assoc($result);
    if (password_verify($senha, $dados['senha'])) {
        var_dump("<p>Credenciais Validas!</p>");
    } else {
        var_dump("<p>Credenciais Invalidas!</p>");
    }
} else {
    echo "<p>Credenciais Invalidas!</p>";
}
