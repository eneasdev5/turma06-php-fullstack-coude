<?php 


/* 
    Exercicio 3
    Crie um programa que gera automaticamente os dados de uma pessoa e 

    insere essas informações em um array,
    
    após inserir no array. O programa deve analisar quantas pessoas são do genero Masculino, 
    quantas pessoas do genero masculino tem idade acima de 20 anos 
    
    e quantos deles tem mais de 50 anos, 
    
    no final deve ser feito um relatorio com a analise feita desses dados e 
    imprimir na tela.

    obs: a quantidade de pessoas gerada automaticamente é por criterio de vocês pode 
    ser 5, 10, ou 30, fica a criterio de vocês;
    Uma Dica Usem a função do php rand(min, max) para gerar os dados automaticamente 
    e adicionar no array de pessoas
*/



// banco de dados
$listNomesM = ['Pedro', 'Carlos', 'Lula', 'Godofredo', 'Rafael', 'Flaviano'];
$listNomesF = ['Aline', 'Luzia', 'Ana', 'Julia', 'Betania', 'Cristiane'];
$listIdades = [45,22,35,25,80,76, 67];
$listProfissao = ['Arquiteto(a)', 'Medido(a)', 'Veterinario(a)', 'Psicóloga(a)', 'Engenheiro(a)', 'Programador PHP'];
$listGenero = ['M', 'F'];