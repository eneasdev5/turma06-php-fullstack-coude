<?php

/*
    Você vai criar uma classe chamada Aluno, tendo como atributos as variáveis
    $ra, $nome, $curso e os métodos getCurso() e setCurso() que devem retorna
    e armazenar os cursos do aluno, respectivamente.

*/
class Aluno
{
    // Atributos
    var string $ra;
    var string $nome;
    var string $curso;

    // Métodos
    function setCurso(string $curso): void
    {
        $this->curso = $curso;
    }

    function getCurso(): string
    {
        return $this->curso;
    }
}

// nova instancia
// $a = new Aluno();
// $a->ra = "sd23f1";
// $a->nome = "Pedro";

// $a->setCurso("Linguagem PHP");
// var_dump($a);


/*
    Crie uma class chamada Cliente e outras duas PessoaFisica e PessoaJuridica
    para a classe PessoaFisica terá um atributo CPF
    para a classe PessoaJuridica terá um atributo CNPJ
*/
// Herança
// definição da classe cliente
class Cliente
{
    // definição de atributos
    var $nome;
    public $nomew;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    function getNome(): string
    {
        return $this->nome;
    }
}

class PessoaFisica extends Cliente
{
    var string $cpf;
    public function __construct(string $nome, string $cpf)
    {
        parent::__construct($nome);
        $this->cpf = $cpf;
    }
}

class PessoaJuridica extends Cliente
{
    var string $cnpj;
    public function __construct(string $nome, string $cnpj)
    {
        parent::__construct($nome);
        $this->cnpj = $cnpj;
    }
}

// novas instancia de classe
$cliente = new Cliente("Cliente 01");
$pessoaFisica = new PessoaFisica("Cliente Pessoa Fisica", "1243234");
$pessoaJuridica = new PessoaJuridica("Cliente Pessoa Juridica", "2216747234237");

var_dump($cliente, $pessoaFisica, $pessoaJuridica);



class Pessoa
{
    public $_nome;
    public $_ano_nascimento;
    public $_endereco;
    protected $_telefone;
}

class Estudantes extends Pessoa
{
    public $_curso;
    public function __construct(string $telefone)
    {
        $this->_telefone = $telefone; // forma correta

        // parent::$_telefone = $telefone; // forma incorreta
    }

    public function verDocumento(): void
    {
        $texto = "Nome: {$this->_nome}\n";
        $texto .= "Ano de Nascimento: {$this->_ano_nascimento}\n";
        $texto .= "Endereço: {$this->_endereco}\n";
        $texto .= "Telefone: {$this->_telefone}\n\n";
        echo $texto;
    }
}

// $e = new Estudante('11 95555-5555');
// $e->_nome = 'Jose Silva';
// $e->_ano_nascimento = 1945;
// $e->_endereco = 'Rua C, 265';
// // $e->_telefone = '11 95555-5555';
// $e->verDocumento();



class Pessoas
{
    private $_tipo;
    protected $_nome;
    protected $_endereco;
    protected $_telefone;
    public function setTipo(string $tipo): void
    {
        $this->_tipo  = $tipo;
    }
    public function getTipo(): string
    {
        return $this->_tipo;
    }
}

class Estudante extends Pessoas
{
    protected $_curso;

    public function __construct()
    {
        echo 'Inicializando o Objeto de Estudante\n';
    }

    public function __destruct()
    {
        echo 'Destruindo o objeto de Estudante';
    }
}

// $e = new Estudante();
// $e->setTipo("A"); // Erro
// echo "Tipo pessoa: " . $e->getTipo(); // Erro



class Carro
{
    var string $_marca;
    var string $_modelo;
    var string $_cor;
    var string $_ano;

    public function setMarca(string $_marca): void
    {
        $this->_marca = $_marca;
    }
    public function getMarca(): string
    {
        return $this->_marca;
    }

    public function setModelo(string $_modelo): void
    {
        $this->_modelo = $_modelo;
    }
    public function getModelo(): string
    {
        return $this->_modelo;
    }

    public function setCor(string $_cor): void
    {
        $this->_cor = $_cor;
    }
    public function getCor(): string
    {
        return $this->_cor;
    }

    public function setAno(string $_ano): void
    {
        $this->_ano = $_ano;
    }
    public function getAno(): string
    {
        return $this->_ano;
    }
}
// $c = new Carro();
// $c->setMarca("Ford");
// $c->setModelo("Ranger");
// $c->setCor("Preto");
// $c->setAno("/23");
// var_dump($c);


require './resolusao.php';

$agencia = new Agencia("Bradesco");

$clienteJose = new Banco("Jose", $agencia);
$clientePedro = new Banco("Pedro", $agencia);
$clienteAgiota = new Banco("Agiota Fulano", $agencia);
$clienteAgiota->depositar(50000);
$clienteJose->depositar(1000);
$clientePedro->depositar(500);

$clienteJose->transferir($clientePedro, 200);
$clientePedro->transferir($clienteAgiota, 1000);
// $clienteAgiota->transferir($clientePedro, 5000);


echo "Agencia: {$clienteJose->agencia->nome}, {$clienteJose->clienteName}, R$: {$clienteJose->verSaldo()}\n";
echo "Agencia: {$clientePedro->agencia->nome},{$clientePedro->clienteName}, R$: {$clientePedro->verSaldo()}\n";
echo "Agencia: {$clienteAgiota->agencia->nome},{$clienteAgiota->clienteName}, R$: {$clienteAgiota->verSaldo()}\n";
