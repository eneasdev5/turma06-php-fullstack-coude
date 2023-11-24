<?php 
    // variavel    
    $variavel = 10;
    
    // variavel do tipo object
    $pessoa = new stdClass();
    $pessoa->nome = '';
    $pessoa->sobrenome = '';
    $pessoa->filmes = ['Transformers', 'Velozes e furiosos'];

    /* 
        Tipo Primitivos
        string = 'text'
        int = 1245
        float = 20.212
        bool = false, true
        array = [1, 2.51, 'text', false]
        object stdClass
    */

    // variável do tipo array
    $numeros = [1, 2.51, 'text', false];
    $numeros2 = [0];
 
    // ---------------------------------------
    // Comandos de saída
    $nome = "Jose";
    $sobrenome = "Santo";

    // echo '<p><strong>'.$nome . '</strong> ' . $sobrenome.'</p>';

    // echo '<br />';

    // echo "<p> {$numeros2[1][0]} </p>";

    // echo '<pre>';
    $pessoa = [
        'nome' => 'Pedro',
        'sobrenome' => 'Santo',
        'filmes' => ['Transformers', 'Velozes e furiosos', 'Era do Gelo'],
    ];
    // var_dump($pessoa['filmes'][2]);

    /*
        Operadores Aritmetrico
        adição +
        subtração -
        multiplicação *
        divisão /
        incremento ++
        decremento --
        modulo %
      */

    // $numero1 = 10;
    // $numero2 = 5;


    // echo '<p>Adição:'. $numero1+$numero2 .' </p>';

    // $calculo = $numero1-$numero2;
    // echo "<p>Subtração: $calculo </p>";

    // $calculo = $numero1*$numero2;
    // echo "<p>Multiplicação: $calculo </p>";

    // $calculo = $numero1/$numero2;
    // echo "<p>Divisão: $calculo </p>";

    
    // $quantidade = 0;

    // $quantidade++;
    // $quantidade++;
    // $quantidade++;
    // $quantidade++;
    // $quantidade++;
    // $quantidade += 5;
    // echo $quantidade. '<br />'; 

    // $quantidade--;
    // $quantidade -= 3;
    // print $quantidade;


    /* Operadores de Comparação */
    // var_dump(!true); // bool(true)
    // echo '<br>';
    // var_dump(10 < 5); // bool(false)
    // var_dump(10 >= 5); // bool(true)
    // var_dump(10 <= 5); // bool(false)
    // var_dump('5' == '5'); // bool(false)
    // var_dump(10 != 5); // bool(true)




    $idade = 15; 
    $idade++;
    $idade++;
    $idade++;

    
    var_dump('1' !== 10);
    var_dump(10 === '');
    // valor != valor == false
    // tipo != tipo == true

    /* 
        ==  10 == '10'
        !=  10 != '10'

        === 10 === '10' 
        !== 10 !== '10'
    
    */

    /*
        AND --> &&
        OR --> ||
        Negação --> !
    */
?>
 

