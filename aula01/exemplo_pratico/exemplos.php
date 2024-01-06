<?php

// link para comparações php: https://www.php.net/manual/pt_BR/types.comparisons.php

// var_dump(NAN !== NAN); // true: por que verifica se o valor e o tipo são diferentes
// var_dump(NAN != NAN);
// var_dump(true === true);

// var_dump(gettype(2));
// var_dump(gettype('teste'));
// var_dump(gettype(false));
// var_dump(gettype(2.0));
// var_dump(gettype([]));
// var_dump(gettype(new stdClass()));

//var_dump(10 === '');



$nome = "eneas";
$sobrenome = "sena";
$idade = 28;
$ocupacao = "Desenvolvedor de software";
$salario = 5000.59;

$texto = "Olá eu sou %s %s tenho %d anos e trabalho como %s\n";
$texto .= "e tenho um salário aproximado á R$ %.1f";

echo sprintf($texto, $nome, $sobrenome, $idade, $ocupacao, $salario);
