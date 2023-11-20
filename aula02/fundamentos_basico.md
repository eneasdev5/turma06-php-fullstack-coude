## Fundamentação básica do PHP

### O php é uma linguagem dinamica que tem o foco no desenvolvimento de aplicações web


### Configuração do código php
Para iniciar o desenvolvimento de projeto em php, é necessário fazer a criação da pasta 
do projeto a ser desenvolvido dentro do diretório `htdocs`, essa pasta fica em local 
diferente a depender do sistema operacional.

#### Para o Sistema Operacional Linux
- /opt/lampp/htdocs


#### Para o Sistema Operacional Windows
- C://xampp/htdocs


#### Uma Vez com essa pasta criada e carregada no seu editor de código por exemplo vscode, criaremos um arquivo chamado `index.php` que será desenvolvido o código em linguagem php.

## 

### O que vamos Aprender
- <a href='#estruturaCondicional'>Estrutura Condicional</a>
- <a href='#estruturadecontrole'>Estrutura de Controle</a>
- <a href='#funçõesphp'>Funções PHP</a>
- <a href='#crud'>Prática com PHP e MySql</a>


### <span id='estruturaCondicional'>Estrutura Condicional</span>
Uma estrutura de condição é usada para tomar decisões se baseando em 
condições especificada, na programação essa condição tem como resultado um valor bool(boleano), lógico (true ou false), e essa códição terá como resultado true se a condição imposta for atendida.
Na maioria das linguagens de programação usa-se if, else, if e else.

<h3>Exemplo:</h3>

```php
<?php 
if(condição) {
    // bloco de comandos php...
}

if(condição) {
    // bloco de comandos php...
} else {
    // bloco de comandos php...
}

if(condição) {
    // bloco de comandos php...
} elseif(outracondição) {
    // bloco de comandos php...
} else {
    // bloco de comandos php...
}
?>
```


### <span id='estruturadecontrole'>Estrutura de Controle</span>
<p>Estrutura de Controlle</p>
A estrutura de controle também chamada de estrutura de repetição, execulta um bolo de código baseado em uma condição até que essa condição seja atendida, no php vamos trabalhar com o "for" e "foreach" 

```php
<?php
   /* 
        essa estrutura esta pecorrendo uma lista de numeros inteiros e exibindo na tela
    */
    
    for(; $indice < count($numeros); $indice+=1) {
         
    }

    /* 
        uma segunda forma de realizar a mesma saída é com  o foreach
    */
    echo "<br><br>";
    $nomeDeProdutos = ['lapis', 'caneta','teclado', 'mouse'];
    foreach($nomeDeProdutos as $nome){
        echo 'Produto: ' . $nome . '<br>';
    }
?>
```




### <span id='funçõesphp'>Funções PHP</span>
<p>Uma função é bloco de código que é execultado quando chamado por outras parte do código.</p>
<p>algumas características de uma função são:</p> 
<ol>
    <li>Nome: o nome é o identificador da função e será usado para chamar a função</li>
    <li>Paramentros: são dados que são passados quando a função é chamada </li>
    <li>corpo: é o escopo da função local onde o processamento de dados acontece</li>
    <li>retorno: é a saída que da função para quem a chamou. Os dados de saída pode ser de qualquer tipo.</li>
</ol> 

```php
<?php
    /* no php função é escrita da seguinte forma */
    function nome_da_funcao(paramentros) {
        // bloco de comandos
    }

    // vamos ver algumas formas que podemos declarar nossas funções

    // exemplo 1
    function imprimir() {
        echo 'hello, world!';
    }

    // exemplo 2
    function imprimirMessage($message) {
        echo($message);
    }

    // exemplo 3
    function somar($number1, $number2) {
        $soma = $number1 + $number2;
        return $soma;
    }

    // como chamamos nossas funções?
    imprimir();
    imprimirMessage('Hello, World!');
    $resultado_da_soma = somar(5, 8);
    echo $resultado_da_soma;
?>
```


### <span id="crud">Prática com PHP e MySql</span>
<p>
    Pessoal esse é o momento que vamos testar o conhecimento que apredenmos ate esse agora iremmos desenvolver um projeto de crud simples com php

    a idea deste projeto é desenvover operações com o php e mysql
</p>