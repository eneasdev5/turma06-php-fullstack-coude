<?php
class Agencia
{
    public $nome;
    public function __construct($nome)
    {
        $this->nome = $nome;
    }
}

class Banco
{
    public $clienteName;
    private $saldo;
    public Agencia $agencia;
    public function __construct($clienteName, Agencia $agencia)
    {
        $this->clienteName = $clienteName;
        $this->agencia = $agencia;
        $this->saldo = 0;
    }

    public function verSaldo(): float
    {
        return $this->saldo;
    }

    public function sacar(float $valor): void
    {
        $this->saldo -= $valor;
    }

    public function depositar(float $valor): void
    {
        if ($this->saldo > $valor) {
            $this->saldo += $valor;
        }
    }

    public function transferir(Banco $banco, float $valor)
    {
        if ($this->saldo >= $valor) {
            $banco->depositar($valor);
            $this->sacar($valor);
        }
    }
}
