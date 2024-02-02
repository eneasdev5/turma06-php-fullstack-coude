Aula sobre Programação Orientada a objetos



### O que veremos neste material
- Conceito Orientação a objetos
- Objetos
- Classes
- Atributos
- Métodos
- Herança
- Visibilidade
    - Public(publico)
    - Private(privado)
    - Protected(protegido)
- Polimorfismo
- Abstratração




### Orientação a Objetos:

A orientação a objetos também denotada por OO consiste, no desenvolvimento de uma estratégia em que os
sistemas devem ser construídos baseados em uma coleção de componentes reusáveis conhecidos como objetos, cujas características
fundamentais são:

* Objetos possuem dados;
* Objetos manipulam dados e fazem coisas.


### Objeto:
Objeto consiste na entidade que
se deseja generalizar (torná-la uma classe) e pode ser, por exemplo,
uma pessoa, um lugar, um evento, um conceito, um relatório, uma
tela, enfim qualquer coisa real.


### Classe:
A classe como a abstração de um
objeto, ou seja, é um modelo a partir do qual os objetos podem ser
criados.

Enquanto um objeto representa algo que existe no mundo real,
uma classe é a generalização deste, mostrando quais devem ser suas
características (dados) e quais as suas capacidades (funcionalidades).

```php
/*  
    Uma Classe no PHP deve ser definida da seguinte forma:

    class nome_classe {
        Atributos
        Metodos
    }
*/
```

Para se instanciar (criar um objeto a partir de uma classe existente)
uma classe no PHP, deve-se utilizar a instrução new seguida do nome da
classe e, se for necessário, os parâmetros exigidos no método de construção
da classe.

Dentro dos métodos da classe foram utilizados a variável
$this para referenciar a própria classe e este deve ser o procedimento
para referenciar a própria classe em seus métodos e atributos.


### Atributo:
Atributo consiste em cada uma das peças de dados de uma classe, ou
seja, a coleção de atributos representa o que uma classe sabe (os dados
que a classe possui). Em termos de programação, os atributos são as
variáveis que definimos para a classe e que são utilizadas apenas na
classe.

### Método:
os métodos definem o que as
classes sabem fazer, ou seja, os métodos podem alterar os atributos e
realizar funções inerentes à classe (como incluir um novo funcionário,
alterar seu salário, etc.). Em termos de programação pode-se pensar
em métodos como funções na classe, as quais podem retornar dados (o
salário do funcionário) ou não conforme suas características funcionais.

* Vamos fazer um exemplo de uma classe em Linguagem PHP:

Você vai criar uma classe chamada Aluno, tendo como atributos as variáveis
$ra, $nome, $curso e os métodos getCurso() e setCurso() que devem retorna e
armazenar os cursos do aluno, respectivamente.



### Herança
No desenvolvimento de sistemas, dos mais simples aos mais complexos,
frequentemente são construídas classes que muitas vezes são similares
a outras já existentes, as quais compartilham parte de suas definições
com atributos e métodos.

O uso da herança é utilizado para reaproveitar os atributos e métodos
de uma classe em outra, alterando somente o que é particular da nova classe.

Herança, é a capacidade de uma classe herdar os atributos e métodos
de uma outra classe (chamamos de superclasse a classe mãe, aquela que
fornece os atributos e métodos à subclasse que os herda).

#### Momento de práticar:
Você deve criar uma classe chamada cliente, e duas subclasses uma chamada pessoa_fisica e outra pessoa_juridica, na subclasse pessoa_fisica um atributo cpf deve ser criado e na subclasse pessoa_juridica um atributo cnpj deve ser criado.



### Visibilidade/Encapsulamento de atributos e métodos
Os métodos e atributos de uma classe no PHP, podem ser definidos como privativos
(private), públicos (public) e protegidos (protected).
Cada um dos tipos definem como o atributo ou método se comporta perante a
classe, subclasses e o restante do sistema.

Visibilidade Public:
Um atributo ou método definido como public (público) torna-o
acessível em qualquer lugar da classe, de suas subclasses, bem
como em qualquer parte dos scripts que contêm a classe.


```php
class pessoa {
    public $nome;
}

$p = new pessoa();
$p->nome= 'pedro Santos';

echo "Olá, {$p->nome}";

```

### Protected:
Atributos ou métodos definidos como protected (protegido) são visíveis
pela classe que os criou e por suas subclasses (classes que herdam a
classe principal), porém não são acessíveis fora deste contexto (fora da
classe principal ou suas subclasses, por exemplo, no script que contém
a definição da classe).

```php
class Pessoa {
  public $_nome;
  public $_ano_nascimento;
  public $_endereco;
  protected $_telefone;
}

class Estudante extends Pessoa {
  public $_curso;
  public function verDocumento(): void {
    $texto = "Nome: $this->_nome";
    $texto = "Ano de Nascimento: {$this->_ano_nascimento}";
    $texto = "Endereço: {$this->_endereco}";
    $texto = "Telefone: {$this->_telefone}";
    echo $texto;
  }
}

$e = new Estudante();
$e->_nome='Jose Silva';
$e->_ano_nascimento=1945;
$e->_endereco='Rua C, 265';
$e->_telefone='11 95555-5555';
$e->verDocumento();

```


### Private:
Os atributos e os métodos definidos como private (privativo) são
visíveis apenas na classe que os criou, ou seja, subclasses ou o script
que contêm a classe não podem acessar esses atributos ou métodos.


```php
class Pessoas {
  private $_tipo;
  protected $_nome;
  protected $_endereco;
  protected $_telefone;
}

class Estudante extends Pessoas {
  protected $_curso;
}

$e = new Estudante();
$e->_tipo = "A"; // Erro
echo $e->_tipo; // Erro
```




Desenvolva uma classe chamada Carro, esta classe possui os atributos $_marca,
$_modelo, $_cor e $_ano, os métodos para atribuir os valores para os
atributos setMarca(), setModelo(), setcor(), setAno() e os métodos para
obter os valores dos atributos getMarca(), getModelo(), getCor(), getAno()
e getCarro().



Exercicio 02
Desenvolva um exercicio que simula uma agencia bancaria então crie as
seguintes classes

Agencia(Nome)
Banco(clienteName, saldo, agencia){
    sacar(valor)
    depositar(valor)
    transferir(clienteDestino, valor)
}


Por padrão, utiliza-se os métodos com nomenclatura
iniciada com set para atribuição de valores para os atributos e os
métodos com nomenclatura iniciada com get para recuperar os valores
dos atributos.


### Construtor e destruidor de classes

O construtor, referenciado no PHP como __construct(), é uma função
definida na classe e que é executada sempre que o objeto é criado
(isto é, sempre que a classe é instanciada).

O destruidor da classe, que é definido através da função __destruct(),
é executado sempre que o objeto for destruído, seja explícita ou
implicitamente (por exemplo, no término do script que utilizava a classe)



Recaptulando:
- Orientação a Objetos
- Classes
- Objetos
- Atributos
- Métodos
- Herança
- Encapsulamento

Link:
- https://www.dio.me/articles/pilares-de-poo-em-java
