<?php


echo '';

/* 
    1 - Crie uma função que receba 2 valores inteiros como argumentos e retorne a sua soma. Se o valor da soma for negativo o método deverá retornar o valor 0.

    2 - Crie uma função que receba 3 valores reais como argumento e retorne o maior valor.

    3 - Crie uma função que receba dois valores reais como argumentos e retorne o valor da raiz quadrada da soma dos quadrados.

    4 - Crie uma função que receba um número inteiro como argumento e retorne o maior valor primo inferior
    a esse argumento. Se o argumento for negativo, a 
    função deverá retornar o valor zero.

    5 - Crie uma função ContaPrimos() que receba dois valores inteiros como argumentos e retorne o número
    de números primos entre estes dois números, inclusive. 
    P. Ex. ContaPrimos(3,10) deverá retornar o valor 3 (3, 5, 7).
    6 - Crie uma função que receba 2 notas (F1 e F2) de um aluno e retorne um booleano indicando se o 
    aluno passou. Para passar, a soma das notas deve ser igual 
    ou superior a 19 e ambas devem ser superiores a 7.
    7 - Crie uma função que receba dois valores inteiros como argumentos e retorne um valor booleano 
    indicando se os números são divisíveis.
    8 - Crie uma função que receba um número inteiro e retorne a soma dos seus algarismos.
    9 - Crie uma função que receba 3 valores inteiros (a, b, c) e retorne um valor booleano true se a>b>c
    e false em caso contrário.
    10 - Crie uma função que verifique se um número é primo (deverá retornar um valor booleano).
    11 - Crie uma função que receba um número inteiro n e retorne o n-ésimo número primo.
    12 - Crie uma função que receba três inteiros como argumentos (ano, mês, dia) e verifique se se trata 
    de um data válida. O ano deverá estar entre 1900 e o presente ano. Deverá retornar um valor booleano.
*/


$pessoas = [
    [
        'id' => 1,
        'nome' => 'jose',
        'email' => 'jose@test.com',
        'idade' => 40
    ],
    [
        'id' => 2,
        'nome' => 'Ana',
        'email' => 'ana@test.com',
        'idade' => 65
    ],
    [
        'id' => 3,
        'nome' => 'pedro',
        'email' => 'pedro@test.com',
        'idade' => 75
    ],
    [
        'id' => 4,
        'nome' => 'lucas',
        'email' => 'lucas@test.com',
        'idade' => 32
    ],
    [
        'id' => 5,
        'nome' => 'larissa',
        'email' => 'larissa@test.com',
        'idade' => 45
    ],
];

function getIdades(array $pessoas)
{
    $idades = [];
    foreach ($pessoas as $pessoa) {
        array_push($idades, $pessoa);
    }
    return $idades;
}


var_dump(getIdades($pessoas));
