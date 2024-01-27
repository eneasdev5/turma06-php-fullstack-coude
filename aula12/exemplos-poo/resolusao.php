<?php

/* 

    Exercicio 02
    Desenvolva um exercicio que simula uma agencia bancaria então crie as 
    seguintes classes

    Agencia(Nome)
    Banco(clienteName, saldo, agencia){
        sacar(valor)
        depositar(valor)
        transferir(clienteDestino, valor)
    }
*/

class Agencia
{
    public $nome;
    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }
}

class Banco
{
    /** @attr string[$clienteName] */
    public string $clienteName;

    /** @attr string[$saldo] */
    private float $saldo;

    /** @attr string[$agencia] */
    public Agencia $agencia;

    /** @attr string[$dividaPaga] */
    public bool $dividaPaga;

    /** @attr string[$dono] */
    public $dono;

    /** @attr string[$checklistDevidados] */
    public $checklistDividados;

    /**
     * @param Banco[$cliente]
     * @return void
     */
    public function addlist(Banco $cliente): void
    {
        $this->checklistDividados[] = $cliente;
    }

    /**
     * @return void
     */
    public function listagem(): void
    {
        foreach ($this->checklistDividados as $cliente) {
            var_dump($cliente);
        }
    }

    public function __construct(string $clienteName, Agencia $agencia)
    {
        $this->saldo = 0;
        $this->dividaPaga = true;
        $this->clienteName = $clienteName;
        $this->agencia = $agencia;
    }

    /**
     * @return float
     */
    public function verSaldo(): float
    {
        return $this->saldo;
    }

    /**
     * @param float[$valor]
     * @return void
     */
    public function sacar(float $valor): void
    {
        $this->saldo -= $valor;

        if (!($this->saldo >= $valor)) {
            $this->dividaPaga = false;
        }
    }

    /**
     * @param float[$valor]
     * @return void
     */
    public function depositar(float $valor): void
    {
        $this->saldo += $valor;
    }

    /**
     * @param Banco[$destinatario]
     * @param float[$valor]
     * @return void
     */
    public function transferir(Banco $destinatario, float $valor): void
    {
        $this->sacar($valor);
        $destinatario->depositar($valor);
    }

    /**
     * __destruct
     * @return void
     */
    public function __destruct()
    {
        if (!$this->dividaPaga) {
            echo "O {$this->clienteName}, Morreu por não ter pago sua divida de R$:{$this->verSaldo()} \n";
        }
    }
}
