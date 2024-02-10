<?php


interface Authenticate
{
    public function Logar($credenciais): bool;
    public function Logout(): void;
}

class AuthAdmin implements Authenticate
{
    public function Logar($credenciais): bool
    {
        return false;
    }

    public function Logout(): void
    {
    }

    public function imprimir()
    {
        echo 'ola mundo';
    }
}



class AuthCliente implements Authenticate
{
    public function Logar($credenciais): bool
    {
        return false;
    }

    public function Logout(): void
    {
    }
}

class person
{
    public $nome;
    public $nascimento;

    public function __construct($nome, $nascimento)
    {
        $this->nome = $nome;
        $this->nascimento = $nascimento;
    }
    public function showAttributes(): string
    {
        return "$this->nome, $this->nascimento";
    }
}


class endereco extends person
{
    public $bairro;
    public $numero;
    public $complento;
    public function __construct($nome, $nascimento, $bairro, $numero, $complemento)
    {
        parent::__construct($nome, $nascimento);
        $this->bairro = $bairro;
        $this->numero = $numero;
        $this->complemento = $complemento;
    }
    public function showAttributes(): string
    {
        $message = parent::showAttributes();
        $message .= "$this->bairro, $this->numero, $this->complemento";
        return $message;
    }
}

$p = new person("test nome", 1950);
echo $p->showAttributes() . "<br>";

$e = new endereco('Jose', 1985, 'kalilandia', 156, 'centro');
echo $e->showAttributes();
