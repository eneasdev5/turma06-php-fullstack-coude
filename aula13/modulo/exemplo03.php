<?php


class Agencia2
{
    public $nome;
    public $attrs;

    public function __construct($nome)
    {
        $this->nome = $nome;
        $this->attrs = [];
    }

    public function __set($key, $value)
    {
        echo 'criando um atributo novo';
        $this->attrs[$key] = $value;
    }
    public function __get($key)
    {
        echo 'retorna o atributo criado';
        return $this->attrs[$key];
    }
    public function __toString()
    {
        $message = "$this->nome";
        return $message;
    }

    public function __destruct()
    {
        echo '__destruct';
    }
}


$a = new Agencia2("bradesco");
echo $a;
