<?php 
    // variavel    
    $variavel = 10;
    
    // variavel do tipo object
    $pessoa = new stdClass();
    $pessoa->nome = '';
    $pessoa->sobrenome = '';
    $pessoa->nomes = ['João', 'Pedro', 10, ['arroz', 'fejão',],45];
    $pessoa->nomes[3][0]; // true
    $pessoa->nomes[3][1]; // false

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
 
    // ---------------------------------------
    // Comandos de saída
    $nome = "Jose";
    $sobrenome = "Santo";

    echo '<p><strong>'.$nome . '</strong> ' . $sobrenome.'</p>';

    echo '<br />';

    echo $numeros[0];

    

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

    $numero1= 10;
    $numero2 = 5;


    echo '<p>Adição:'. $numero1+$numero2 .' </p>';

    $calculo = $numero1-$numero2;
    echo "<p>Subtração: $calculo </p>";

    $calculo = $numero1*$numero2;
    echo "<p>Multiplicação: $calculo </p>";

    $calculo = $numero1/$numero2;
    echo "<p>Divisão: $calculo </p>";

    
    $quantidade = 0;

    $quantidade++;
    $quantidade++;
    $quantidade++;
    $quantidade++;
    $quantidade++;
    echo $quantidade. '<br />'; 

    $quantidade--;
    print $quantidade;


    /* Operadores de Comparação */
    var_dump(10 > 5); // bool(true)
    var_dump(10 < 5); // bool(false)
    var_dump(10 >= 5); // bool(true)
    var_dump(10 <= 5); // bool(false)
    var_dump('5' == '5'); // bool(false)
    var_dump(10 != 5); // bool(true)

?>
 

