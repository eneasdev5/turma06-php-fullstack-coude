<?php

var_dump($_SERVER);



// class person
// {
//     var $nome;
//     var $salario;
//     var $idade;
//     public function __construct($nome, $salario, $idade)
//     {
//         $this->nome = $nome;
//         $this->salario = $salario;
//         $this->idade = 2024 - $idade;
//     }
// }


// $o = new stdClass;
// $o->nome = "Jose Santos";
// $o->idade = 2024 - 1993;

// $p = new person("Jose Santos", 5000, 1995);

// foreach ($o as $k => $value) {
//     var_dump($k, $value);
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