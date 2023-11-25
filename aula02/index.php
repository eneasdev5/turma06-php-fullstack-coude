<?php 



/*

var_dump(sizeof([1,2,3,4,5,6,7,8,9,10]));
var_dump(count([1,2,3,4,5,6,7,8,9,10]));








if(true) {
    echo "estrutura condicional simples\n";
}



















if(true) {
    echo "\nEstrutura condicional composta bloco if\n";
} else {
    echo "\nEstrutura condicional composta: bloco else\n";
}



















if(true) {
    print("\n Estrutura condicional composta encadeada if\n");
} else if(true){ 
    print("\n Estrutura condicional composta encadeada else if\n");
} else {
    if(false) {
        print("\n Estrutura condicional composta aninhado if\n");
    } else {
        print("\n Estrutura condicional composta aninhado else\n");
    }
    print("\n Estrutura condicional composta encadeada else\n");
}

$nota1 = 9.2;
$nota2 = 9.1;
$nota3 = 9.2;
$media = ($nota1 + $nota2 +$nota3)/3;
if ( $media > 9.5 ){
    $resultado = "Aprovado com distinção";
} elseif (($media >= 8) and ($media <= 9.5)) {
    $resultado = "Aprovado plenamente";
} elseif (($media >= 6) and ($media <= 7.9)) {
    $resultado = "Aprovado";
} else {
    $resultado = "Reprovado";
}
echo "media $media\n";
echo "Você foi $resultado em seu TCC";




















echo true ? "operador ternário resultado true" : "operador ternário resultado false";
 

















$nota10 = null;
echo $nota10 ?? 5;
















$mes = 10;
switch ($mes) {
    case 1:
        # code...
        break;
    
    default:
        # code...
        break;
}
















echo "\nDo While:\n";
$contador = 0;
do {
    $contador = $contador + 1;
    echo "Contador: $contador\n";
} while($contador < 10);


$indice = 0;
do {
    $indice ++;
    if($indice %3 == 0) {
        echo "$indice é Múltiplo de 3\n";
    } 
} while($indice <= 20);


















echo "\nWhile:\n";
while($contador > 0) {
    echo "Contador: $contador\n";
    $contador -= 1;
}


$contador = 10;
echo "\nWhile:\n";
while($contador > 0) {
    $contador -= 1;
    if($contador % 2 ==0) {
        continue;
    }
    echo "Contador: $contador\n";
}

















echo "\n\For:\n";
for($row =0; $row <5; $row ++) {
    echo "Row: $row\n";
}





$nomes = ["Jose", "Carlos", "Carine", "Aline"];
 
// $nomeEscolhido = $nomes[rand(0, count($nomes)-1)];
$nomeEscolhido = $nomes[1];
$nome = "";
for($r=0; $r < 1; $r++) {
    $indice = rand(0, count($nomes)-1);
    $nome = $nomes[$indice];
}
if($nome == $nomeEscolhido) {
    echo "Você acertou!!! O nome escolhido foi $nome";
} else {
    echo "opssss não foi dessa vez :(, tente novamente";
}













echo "\n\rForeach:\n";
foreach([1,2,3,4,5] as $key => $row) {
    echo "indice: $key => valor: $row\n";
}












*** FUNCTIONS ***

function lista_aprovados($alunos){
    for ($i=0; $i < sizeof($alunos); $i++){
        $media = ($alunos[$i]["n1"] + 2*$alunos[$i]["n2"])/3;
        if ($media >= 7){
            $aprovados[] = $alunos[$i]["nome"];
        }
    }
    return $aprovados;
} 

$alunos = array(
    ['nome' => 'Carlos', 'n1'=> 5.5, 'n2' => 9],
    ['nome' => 'Pedro', 'n1'=> 5.9, 'n2' => 7.9],
);

var_dump(lista_aprovados($alunos));




function numberEPar($number) {
    $logico = $number % 2 == 0;
    if($logico) {
        echo "Number é Par";
    } else {
        echo "Number é Impa";
    }
}










*/













/*
Exercicios
quantos numero entre 0 e 100 são impares e quantos são pares
quantos numeros são multiplo por 2, 3 e 5
segunda versão do Exercicios 03 mostre na tela quantas pessoas 
são do sexo maisculino quantas são do sexo feminino
desenvolva um programa que recebe um valor inteiro e realiza a contagem 0 ate o valor passado
desenvolva um programa que recebe um valor inteiro e realiza a contagem do valor passado até 0
desenvolva um algoritmo que dado um numero aleatorio realiza uma contagem progressiva ou regressiva

*/







?>