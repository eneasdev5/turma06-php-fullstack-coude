<?php


abstract class Authenticate2
{
    public $nome;
    abstract public function Logar();

    public static function Logout()
    {
        echo 'Usuario fez o logout no sistema';
    }
}

class User extends Authenticate2
{
    public function Logar()
    {
        echo 'usuario logado';
    }
}
