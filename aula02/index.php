<?php 


// $vetor0 = [];
// $vetor = array("um" => 1, "dois"=>2);



// var_dump(sizeof($vetor0));


// var_dump(count($vetor));








// if($linguagem == 'PHp') {
//     echo "estrutura condicional simples\n";
// }

















// $linguagem = 'Java';
// if($linguagem != "Javascript") { // false
//     echo "O valor é diferente de $linguagem";
// } else {
//     if($linguagem == "Javascript") {
//         echo "O valor é igual a Javascript";
//     }
// }










// $tem = (int) $_GET['temContrapiso'];
 

// $temContrapiso = (bool) $tem;
// if($temContrapiso) {
//     echo "próximo passo colocar o piso";
// } else {
//     if(!$temContrapiso) {
//         echo "Compra o material para por o contra piso<br>";
//         $materias = ["Cimento", "Area", "Pó de pedra"];

//         echo "Lista de Materiais<br><ol>";
//         foreach($materias as $items){
//             echo "<li>$items</li>";
//         }
//         echo "</ol>";
//     }
// }



// $numero = 15;

// if($numero % 5 == 0 ) {
//     print("$numero é multiplo de 5<br>");
// }

// if($numero % 3 == 0) {
//     print("$numero é multiplo de 3");
// }



// if($numero % 5 == 0) {
//     print("$numero é multiplo de 5 e 3");
// } elseif($numero % 3 == 0){ 
//     print("$numero é múltiplo de 3");
// } else {
//     if($numero % 2 == 0) {
//         print("$numero é Par");
//     } else {
//         print("$numero é impar");
//     }
// }








// $nota1 = 9.2;
// $nota2 = 5.1;
// $nota3 = 9.2;
// $media = ($nota1 + $nota2 +$nota3)/3;
// if ($media > 9.5 ){
//     $resultado = "Aprovado com distinção";
// } elseif (($media >= 8) and ($media <= 9.5)) {
//     $resultado = "Aprovado plenamente";
// } elseif (($media >= 6) and ($media <br 8)) {
//     $resultado = "Aprovado";
// } else {
//     $resultado = "Reprovado";
// }


// echo "media $media<br />";
// echo "Você foi $resultado em seu TCC";




















// echo false ? "operador ternário resultado true" : "operador ternário resultado false";
 

















// $nota10 = null;
// var_dump($nota10 ?? 5);
 
// if(empty('abc')) {
//     echo 'o valor é vazio';
// }











// $mes = 10;
// switch ($mes) {
//     case 1:
//         # code...
//         break;
    
//     default:
//         # code...
//         break;
// }


// $mes = 11;
// switch($mes) {
//     case 1:
//         echo "Janeiro<br>";
//     case 2:
//         echo "Fevereiro<br> ";
//         break;
//     case 3:
//         echo "Março<br> ";
//     case 4:
//         echo "Abril<br> ";
//     case 5:
//         echo "Maio<br>  ";
//     case 6:
//         echo "Julho<br> ";
//     case 7:
//         echo "Junho<br> ";
//     case 8:
//         echo "Agosto<br>    ";
//     case 9:
//         echo "Setembro<br>  ";
//     case 10:
//         echo "Outubro<br>   ";
//     case 11:
//         echo "Novembro<br>  ";
//     case 12:
//         echo "Dezembro";
//     default:
//         echo "Este Mês Não existe";
// }  















// echo "Do While:<br>";
// $contador = 0;
// do {
//     echo "<p>Contador: $contador</p>";
//     $contador = $contador + 10;
// } while($contador <= 100);


// echo "contador regresso<br>";
// do {
//     $contador -= 10;
//     echo "<p>Contador: $contador</p>";
//     // if($contador %3 == 0) {
//     //     echo "$contador é Múltiplo de 3\n";
//     // } 
// } while($contador > 0);

 














// $contador = 5;
// echo "\nWhile:\n";
// while($contador > 0) {
//     echo "Contador: $contador<br>";
//     $contador -= 1;
// }


// $contador = 10;
// echo "<p>While:</p>";
// while($contador > 0) {
//     $contador -= 1;
//     if($contador % 2 ==0) {
//         continue;
//     }
//     echo "Contador: $contador<br>";
// }


// $contador = 10;
// while(true) {

//     $contador -= 1;
//     echo $contador. "<br>";

//     if($contador == 5) {
//         echo "<br>condição da parada atendida<br>";
//         break;
//     }

// }











// echo "<p>For:</p>";
// for($row =0; $row <5; $row ++) {
//     echo "Row: $row<br>";
// }





// $nomes = ["Jose", "Carlos", "Carine", "Aline"];
 
// // $nomeEscolhido = $nomes[rand(0, count($nomes)-1)];
// $nomeEscolhido = $nomes[1];
// $nome = "";
// $saida = "";
// for($row=0; $row < 2; $row+= 1) {
  
//     $indice = rand(0, count($nomes)-1);
//     $nome = $nomes[$indice];

//     if($nome == $nomeEscolhido) {
//         $saida = "Você acertou!!! O nome escolhido foi $nome";
//     } else {
//         $saida ="opssss não foi dessa vez :(, tente novamente";
//     }
//     echo "<p>".$saida."</p>";
    
// }













// echo "\n\rForeach:\n";
// foreach([1,2,3,4,5] as $key => $row) {
//     echo "indice: $key => valor: $row\n";
// }











// *** FUNCTIONS ***

function lista_aprovados(array $alunos){
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
echo '<pre>';
var_dump(lista_aprovados($alunos));





$objeto = function($number) {
    $logico = $number % 2 == 0;
    if($logico) {
        echo "Number é Par";
    } else {
        echo "Number é Impa";
    }
};
















/*
    Exercicios
    quantos numero entre 0 e 100 são impares e quantos são pares

    quantos numeros são multiplo por 2, 3 e 5

    segunda versão do Exercicios 03 mostre na tela quantas pessoas 

    são do sexo maisculino quantas são do sexo feminino

    desenvolva um programa que recebe um valor inteiro e realiza a contagem 0 ate 
    o valor passado

    desenvolva um programa que recebe um valor inteiro e realiza a contagem do 
    valor passado até 0

    desenvolva um algoritmo que dado um numero aleatorio realiza uma contagem progressiva 
    ou regressiva
*/







?>