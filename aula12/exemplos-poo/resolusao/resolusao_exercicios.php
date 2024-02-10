<?php

/*
  ### Exercício 01: Crie uma classe chamada Invoice que possa ser utilizado por
  uma loja de suprimentos de informática para representar uma fatura de um item
  vendido na loja. Uma fatura deve incluir as seguintes informações como
  atributos

  * número do item faturado,
  * descrição do item
  * quantidade comprada do item
  * preço unitário do item
  * Sua classe deve ter um construtor que inicialize os quatro atributos. Se a
  quantidade não for positiva, ela deve ser configurada como 0. Se o preço por
  item não for positivo ele deve ser configurado como 0.0. Forneça um método
  set e um método get para cada variável de instância. Além disso, forneça
  um método chamado getInvoiceAmount que calcula o valor da fatura (isso é,
  multiplica a quantidade pelo preço por item) e depois retorna o valor.

*/

use PSpell\Config;

class Invoice
{
  private int $codigoItemFaturado;
  private string $descricaoItem;
  private int $quantidadeItem;
  private float $valorUnitarioItem;

  // Método mágico
  public function __construct(int $codigoItemFaturado, string $descricaoItem, int $quantidadeItem, float $valorUnitarioItem)
  {
    $this->setCodigoItemFaturado($codigoItemFaturado);
    $this->setDescricaoItem($descricaoItem);
    $this->setQuantidadeItem($quantidadeItem);
    $this->setValorUnitarioItem($valorUnitarioItem);
  }

  public function setCodigoItemFaturado(int $codigoItemFaturado): void
  {
    $this->codigoItemFaturado = $codigoItemFaturado;
  }
  public function getCodigoItemFaturado(): int
  {
    return $this->codigoItemFaturado;
  }

  public function setDescricaoItem(string $descricaoItem): void
  {
    $this->descricaoItem = $descricaoItem;
  }
  public function getDescricaoItem(): string
  {
    return $this->descricaoItem;
  }

  public function setQuantidadeItem(string $quantidadeItem): void
  {
    $this->quantidadeItem = 0;

    if ($quantidadeItem > 0) {
      $this->quantidadeItem = $quantidadeItem;
    }
  }
  public function getQuantidadeItem(): string
  {
    return $this->quantidadeItem;
  }

  public function setValorUnitarioItem(float $valorUnitarioItem): void
  {
    $this->valorUnitarioItem = 0.0;

    if ($valorUnitarioItem > 0) {
      $this->valorUnitarioItem = $valorUnitarioItem;
    }
  }
  public function getValorUnitarioItem(): string
  {
    // printf("%.2f", $this->valorUnitarioItem);
    return number_format($this->valorUnitarioItem, 2, ',', '.');
    // return sprintf("%.2f", $this->valorUnitarioItem);
  }

  public function getInvoiceAmount(): string
  {
    // return sprintf("%.2f", $this->quantidadeItem * $this->valorUnitarioItem);
    return number_format($this->quantidadeItem * $this->valorUnitarioItem, 2); // 1.000,00
  }
}

// $iv = new Invoice(
//   546,
//   "Smartphone LG K20, Nova versão da Marca",
//   3,
//   1850.56
// );
// echo ("<p>Código: {$iv->getCodigoItemFaturado()}</p>");
// echo ("<p>Descrição: {$iv->getDescricaoItem()}</p>");
// echo ("<p>Quantidade: {$iv->getQuantidadeItem()}</p>");
// echo ("<p>Valor Unitário R$: {$iv->getValorUnitarioItem()}</p>");
// echo ("<p>Fatura: R$: {$iv->getInvoiceAmount()}</p>");


/**
 * 
 * ### Exercício 02: A fim de representar empregados em uma firma, crie uma classe chamada Empregado que inclui as três informações a seguir como atributos:

 * um primeiro nome
 * um sobrenome
 * um salário mensal.
 * Sua classe deve ter um construtor que inicializa os três atributos. Forneça um método set e get para cada atributo. Se o salário mensal não for positivo, configure-o como 0.0. Crie um método que exibe o salário anual e um que dê 10% de aumento no salário.
 * 
 */


class Empregado
{
  public string $primeiroNome;
  public string $sobrenome;
  public float $salario;

  public function __construct(string $primeiroNome, $sobrenome,  float $salario)
  {
    $this->setPrimeiroNome($primeiroNome);
    $this->setSobrenome($sobrenome);
    $this->setSalario($salario);
  }

  public function showSalarioAnual(): float
  {
    return $this->salario * 12;
  }

  public function showSalarioAnualCom10DeAumento(): float
  {
    $anual = $this->salario * 12;
    $aumento = $anual * 0.10;
    return $anual + $aumento;
  }

  public function setSalario(float $salario)
  {
    $this->salario = $salario > 0 ? $salario : floatval(0);
  }
  public function getSalario(): float
  {
    return $this->salario;
  }


  public function setPrimeiroNome(string $nome)
  {
    $this->primeiroNome = $nome;
  }
  public function getPrimeiroNome(): string
  {
    return $this->primeiroNome;
  }


  public function setSobrenome(string $sobrenome)
  {
    $this->sobrenome = $sobrenome;
  }
  public function getSobrenome(): string
  {
    return $this->sobrenome;
  }
}


// $emp = new Empregado("Thiago", "Silva", 15000);
// $salarioAnual = number_format($emp->showSalarioAnual(), 2);
// echo "<p>Salário Anual R$: {$salarioAnual}</p>";
// $salarioAnualComAumento = number_format($emp->showSalarioAnualCom10DeAumento(), 2);
// echo "<p>Salário Anual Com 10% R$: {$salarioAnualComAumento}</p>";


/* 


### Exercício 03: Escreva uma classe Contador, que encapsule um valor usado para contagem de itens ou eventos. A classe deve oferecer métodos que devem:

* Zerar;
* Incrementar;
* Retornar o valor do contador.

*/

class Contador
{
  private int $contador;
  public int $increment;

  public function __construct()
  {
    $this->increment = 0;
    $this->contador = 0;
  }


  public function getContador(): int
  {
    return $this->increment;
  }

  public function RetornarvalorDoContador()
  {
    $this->increment = $this->contador;
  }

  public function Zerar()
  {
    if ($this->increment > $this->contador)
      $this->increment--;
  }

  public function Incrementar($turbo = 0)
  {
    if ($turbo == 0) {
      if ($this->increment >= $this->contador)
        $this->increment++;
      return;
    }
    for ($r = 1; $r <= $turbo; $r++)
      $this->Incrementar();
  }
}


// $c = new Contador;

// $c->Incrementar(50000);

// for ($r = 1000000; $r > 80; $r--)
//   $c->Zerar();

// // $c->RetornarvalorDoContador();

// echo '<p>Contador: ' . $c->getContador() . '</p>';




/* 
  ### Exercício 04: Escreva uma classe Ponto2D que represente um ponto no plano cartensiano. Além dos atributos por você identificados, a classe deve oferecer os seguintes membros:

  * Contrutor que permita a inicialização do ponto na origem ou em um local informado por parâmetros.
  * Método para definir o local do ponto a partir de outro ponto;
  * Método de comparação de pontos;
  * Métodos de acesso getter e setter.
  * Método que permita calcular a distância do ponto que recebe a mensagem para outro.
  * Método que permita a criação de um novo ponto no mesmo local do ponto que recebeu a mensagem(clone).

*/

class Ponto2D
{

  public int $ladoY;
  public int $ladoX;

  public function area(): int
  {
    return $this->ladoY * $this->ladoX;
  }

  public function __construct()
  {
    // inicialização do atributos
  }

  public function defineLocalDePonto()
  {
  }
  public function comparacaoDePonto()
  {
  }


  public function __set($key, $value)
  {
  }
  public function __get($key)
  {
  }
}


$p = new Ponto2D();
$p->ladoX = 5;
$p->ladoY = 2;
var_dump($p->area());
var_dump($p);

// echo phpinfo();