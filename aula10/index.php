<?php
// echo phpinfo();
include('./dados.php');



$dados = listar();

unset($dados);

var_dump($dados);


// echo '<p><a href="./cadastro.html">Voltar</a></p>';

// $outra_senha = 'teste01';

// $senha = $_GET['senha'];

// $hash_senha = crypto_senha($outra_senha);


// if (password_verify($senha, $hash_senha)) {
//     echo "<p>Credenciais Valida</p>";
// } else {
//     echo "<p>Credenciais Invalida</p>";
// }



// function crypto_senha($senha)
// {
//     $s = filter_var($senha, FILTER_SANITIZE_STRIPPED);
//     return password_hash($s, PASSWORD_DEFAULT);
// }



// echo '<h2>Variável GET:</h2><pre>';
// $nome = addslashes($_GET['nome_completo']);
// $code = htmlspecialchars($_GET['nome_completo']);
// var_dump($nome, $code);
// var_dump(filter_var($_GET['nome_completo'], FILTER_SANITIZE_STRIPPED));
// echo "</pre>";


// echo "<h2>Variável POST:</h2><pre>";
// var_dump($_POST);
// echo "</pre>";

// echo $_SERVER['QUERY_STRING'] . '<br>';
// echo "<p>Método de request: <b>{$_SERVER['REQUEST_METHOD']}</b> </p>";
// echo "<h2>Variável SERVER:</h2><pre>";
// var_dump($_SERVER, count($_SERVER));
// echo "</pre>";