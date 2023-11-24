<?php 
/*
### Exercicios 01

    Desenvolva um programa que armazena informações de três pessoas, 
    para uma inscrição de entrevista de emprego, após armazenar em variaveis 
    exiba as informações em tela de forma organizada:
    - Nome
    - Genero
    - profissão 
    - idade
    - pretencaoSalário 
    - hobbies
    
    
    Exemplo 
    Nome: fulano
    Genero: Masculino
    Profissão: Engenheiro
    Idade: 1980
    pretencaoSalário: 15000.55
    hobbies: 'ver series', 'anime', 'videogame', 'futebol'
    */

// forma 1
$registros = [
    ['Jose', 'Masculino', 'Engenheiro', 1980, 15000.00, ['anime', 'videogame', 'futebol']],
    ['Maria', 'Feminino', 'Arquiteta', 1945, 12000.00, ['anime']],
];

// forma 2
$pedro = new stdClass();
$pedro->nome = 'Pedro';
$pedro->genero = 'Masculino';
$pedro->profissao = 'Programador';
$pedro->pretencaoSalario = 2500.00;
$pedro->hobbies = ['vedeogame', 'práticar esporte'];

// forma 3
$nome = 'Pedro';
$genero = 'Masculino';
$profissao = 'Programador';
$pretencaoSalario = 2500.00;
$hobbies = ['vedeogame', 'práticar esporte'];



// saída de dados
$idade = 2023 - $registros[0][3];
echo "<p>Nome: {$registros[0][0]}, Genero: {$registros[0][1]}, Profissão: {$registros[0][2]}, Idade: $idade,</p>";

echo "<p>Nome: $pedro->nome, Genero: $pedro->genero, Profissão: $pedro->profissao, Salário: $pedro->pretencaoSalario, Hobbies: {$pedro->hobbies[0]},{$pedro->hobbies[1]}  </p>";

echo "<p>Nome: $nome, Genero: $genero, Profissão: $profissao, Salário: $pretencaoSalario, Hobbies: {$hobbies[0]},{$hobbies[1]}  </p>";
