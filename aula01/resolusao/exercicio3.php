<?php 

/*
    ### Exercicios 03
    desenvolva um programa que armazena os dados de 5 
    pessoas e mostra na tela quais pessoas são Masculino e Quais são Feminino
    */

$dadosPessoas = [];
$pessoa = new stdClass;
$pessoa->nome = 'Ana'; 
$pessoa->genero = 'Feminino'; 
$pessoa->idade = 50; 

$dadosPessoas[] = $pessoa;

$pessoa = new stdClass;
$pessoa->nome = 'Maria';
$pessoa->genero = 'Feminino';
$pessoa->idade = 56;

$dadosPessoas[] = $pessoa;

$pessoa = new stdClass;
$pessoa->nome = 'Pedro';
$pessoa->genero = 'Masculino';
$pessoa->idade = 60;

$dadosPessoas[] = $pessoa;

$pessoa = new stdClass;
$pessoa->nome = 'Carlos';
$pessoa->genero = 'Masculino';
$pessoa->idade = 55;
$dadosPessoas[] = $pessoa;


$pessoa = new stdClass;
$pessoa->nome = 'Cremilda';
$pessoa->genero = 'Feminino';
$pessoa->idade = 35;

$dadosPessoas[] = $pessoa;


// operador Ternário
// condição ? () : ()




echo "<p><b>Pessoas do Genero Masculino</b></p>";
echo "A pessoal: {$dadosPessoas[0]->nome}, ".( ($dadosPessoas[0]->genero == "Masculino") ? "{$dadosPessoas[0]->nome} é do genero {$dadosPessoas[0]->genero}<br />" : "Não é do genero Masculino<br />");
echo ($dadosPessoas[1]->genero == "Masculino"? "é do genero {$dadosPessoas[3]->genero}<br />" : "Não é do genero Masculino<br />"); 
echo ($dadosPessoas[2]->genero == "Masculino" ? "é do genero {$dadosPessoas[3]->genero}<br />": "Não é do genero Masculino<br />"); 
echo ($dadosPessoas[3]->genero == "Masculino"? "é do genero {$dadosPessoas[3]->genero}<br />" : "Não é do genero Masculino<br/>");
echo ($dadosPessoas[4]->genero == "Masculino" ? "é do genero {$dadosPessoas[3]->genero}<br />": "Não é do genero Masculino<br />");




echo "<p><b>Pessoas do Genero Feminino</b></p>";
echo ($dadosPessoas[0]->genero == "Feminino" ? "é do genero {$dadosPessoas[0]->genero}<br />": "Não é do genero Masculino<br />");
echo ($dadosPessoas[1]->genero == "Feminino" ? "é do genero {$dadosPessoas[1]->genero}<br />": "Não é do genero Masculino<br />");
echo ($dadosPessoas[2]->genero == "Feminino" ? "é do genero {$dadosPessoas[2]->genero}<br />": "Não é do genero Masculino<br />");
echo ($dadosPessoas[3]->genero == "Feminino" ? "é do genero {$dadosPessoas[3]->genero}<br />": "Não é do genero Masculino<br />");
echo ($dadosPessoas[4]->genero == "Feminino" ? "é do genero {$dadosPessoas[4]->genero}<br />": "Não é do genero Masculino<br />");