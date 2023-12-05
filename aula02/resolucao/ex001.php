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


    pessoa 
    - nome
    - genero
    - profissão
    - idade
*/

// banco de dados
$listNomesM = ['Pedro', 'Carlos', 'Lula', 'Godofredo', 'Rafael', 'Flaviano'];
$listNomesF = ['Aline', 'Luzia', 'Ana', 'Julia', 'Betania', 'Cristiane'];
$listIdades = [45,22,35,25,80,76, 67];
$listProfissao = ['Arquiteto(a)', 'Medido(a)', 'Veterinario(a)', 'Psicóloga(a)', 'Engenheiro(a)', 'Programador PHP'];
$listGenero = ['M', 'F'];


// gerador de pessoas
$dbPessoas = [];
$lenArr = count($listNomesF); // tamanho do array 5


// esta função vai gerar um numero aleatorio
// function geradorNumeroAleatorio(int $final): int{
//     $number = 0;
//     for($j=1; $j <=$final; $j++) {
//         $number = rand(0, $final-1);
//     }
//     return $number;
// }


$totalGerador = 50;
for($line=0; $line < $totalGerador; $line++) {

    
    // gera numero aleatorio de genero
    $sorteaGenero = rand(0, count($listGenero)-1);  
    $indice = rand(0, $lenArr-1);

    // define um array que representa uma pessoa
    $pessoa = ['nome' =>'', 'genero' => '','idade' => 0, 'profissao' => ''];
    
    // preenche os dados no array de pessoas
    $pessoa['idade'] = $listIdades[$indice];
    $pessoa['profissao'] = $listProfissao[$indice];
    $pessoa['genero'] = $listGenero[$sorteaGenero];
  
    // escolha o nome da pessoa pelo genero
    switch($listGenero[$sorteaGenero]){
        case 'M':
            $pessoa['nome'] = $listNomesM[$indice];
            break;
        case 'F':
            $pessoa['nome'] = $listNomesF[$indice];
            break;
    }

    // registra uma pessoa gerada automaticamente no array de pessoas
    $dbPessoas[] = $pessoa;
}



// motando o relatorio
$pessoaComIdadeMaior20 = 0;
$pessoaComIdadeMaior50 = 0;
$generoM = 0;
$pessoasGerada = [];

foreach($dbPessoas as $p) {
    if($p['genero'] != 'M') {
        continue;
    }

    if($p['idade'] >= 20  && $p['idade'] < 50){
        $pessoaComIdadeMaior20++;
    }

    if($p['idade'] >= 50){
        $pessoaComIdadeMaior50++;
    }

    $generoM++;
    $arrPessoaComIdadeMaior20[] = $p;
}

echo "Foram registradas {$totalGerador} dessas pessoas {$generoM} são do genero Masculino, {$pessoaComIdadeMaior20} possui idade acima de 20 anos e {$pessoaComIdadeMaior50} tem idade acima de 50 anos\n";

echo "\nLista de Pessoas\n";
var_dump($arrPessoaComIdadeMaior20);
