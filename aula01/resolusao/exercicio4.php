<?php 
/*
    ### Exercicios 04
    desenvolva um programa que guarda os dados de acesso(por exemplo login e senha) de um sistema e exiba se as informações são valida para logar no sistema atrávez de uma comparação lógica
*/

// constante
define('USUARIO', 'admin');
define('SENHA', 'admin123');

// mais vocês podem por esse dados em variaveis normais como foi passado em sala de aula
$usuario = 'admin';
$senha = 'admin123';


// dados do formulario html
$usuarioLogin = "admin";
$usuarioSenha = "admin123";


var_dump((USUARIO == $usuarioLogin) ? "Login Valido para acesso" : "login invalido para acesso"); echo '<br>';
var_dump((SENHA == $usuarioSenha) ? "Senha Valido para acesso" : "Senha invalida para acesso");







