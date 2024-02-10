### Exercício 01: Crie uma classe chamada Invoice que possa ser utilizado por uma loja de suprimentos de informática para representar uma fatura de um item vendido na loja. Uma fatura deve incluir as seguintes informações como atributos

* número do item faturado,
* descrição do item
* quantidade comprada do item
* preço unitário do item
* Sua classe deve ter um construtor que inicialize os quatro atributos. Se a quantidade não for positiva, ela deve ser configurada como 0. Se o preço por item não for positivo ele deve ser configurado como 0.0. Forneça um método set e um método get para cada variável de instância. Além disso, forneça um método chamado getInvoiceAmount que calcula o valor da fatura (isso é, multiplica a quantidade pelo preço por item) e depois retorna o valor.


### Exercício 02: A fim de representar empregados em uma firma, crie uma classe chamada Empregado que inclui as três informações a seguir como atributos:

* um primeiro nome
* um sobrenome
* um salário mensal.
* Sua classe deve ter um construtor que inicializa os três atributos. Forneça um método set e get para cada atributo. Se o salário mensal não for positivo, configure-o como 0.0. Crie um método que exibe o salário anual e um que dê 10% de aumento no salário.


### Exercício 03: Escreva uma classe Contador, que encapsule um valor usado para contagem de itens ou eventos. A classe deve oferecer métodos que devem:

* Zerar;
* Incrementar;
* Retornar o valor do contador.


### Exercício 04: Escreva uma classe Ponto2D que represente um ponto no plano cartensiano. Além dos atributos por você identificados, a classe deve oferecer os seguintes membros:

* Contrutor que permita a inicialização do ponto na origem ou em um local informado por parâmetros.
* Método para definir o local do ponto a partir de outro ponto;
* Método de comparação de pontos;
* Métodos de acesso getter e setter.
* Método que permita calcular a distância do ponto que recebe a mensagem para outro.
* Método que permita a criação de um novo ponto no mesmo local do ponto que recebeu a mensagem(clone).


### Exercício 05: Escreva uma classe que represente um circulo no plano cartesiano. Forneça os seguintes membros de classe:

* Um contrutor que incialize o ponto em um local por parâmetros ou na origem do espaço;
* Métodos getter e setter.
* Métodos de inflar e desinflar que respectivamente aumenta e diminuem o tamanho do circulo.
* Método para mover o circulo a partir de outro ponto ou para a origem do espaço.
* Método que retorna a àrea do círculo.


### Exercício 06: Crie uma classe para representar datas. Represente uma data usando três atributos: o dia, o mês, e o ano.

* Sua classe deve ter um construtor que inicializa os três atributos e verifica a validade dos valores fornecidos.
* Forneça um método set um get para cada atributo.
* Forneça o método date para retornar uma representação da data. Considere que a data deve ser formatada mostrando o dia, o mês e o ano separados por barra (/).
* Forneça uma operação para avançar uma data para o dia seguinte.



### Exercício 07 Traduza o seguinte conjunto de classes em um programa PHP.

a) Classe: Porta - Atributos: aberta, cor, dimensaoX, dimensaoY, dimensaoZ Métodos: void abre(), void fecha(), void pinta(String s).

b) Classe: Casa - Atributos: cor, porta1, porta2, porta3 Métodos: void pinta(String s), 
int totalDePortas() quantasPortasEstaoAbertas() int.

c) Classe: Edificio - Atributos: cor, totalDePortas, totalDeAndares, portas[] Métodos: void pinta(String s), int quantasPortasEstaoAbertas(), void adicionaPorta(Porta p), int totalDePortas(), void adicionarAndar(), int totalDeAndares().

d) As classes Casa e edifício ficaram muito parecidas. Crie a classe Imovel e coloque nela tudo, que a Casa e Edificio tem em comum. Faça Imovel superclasse de Casa e Edificio. 


### Exercício 08 Escreva uma classe que represente um país. Um país tem como atributos o seu nome, o nome da capital, sua dimensão em Km2 e uma lista de países com os quais ele faz fronteira. Represente a classe e forneça os seguintes construtores e métodos:

* Construtor que inicialize o nome, capital e a dimensão do país;
* Métodos de acesso (obter/get) para as propriedades indicadas no item (a);
* Um método que permita verificar se dois países são iguais. Dois países são iguais se tiverem o mesmo nome e a mesma capital.
* Um método que define quais outros países fazem fronteira (note que um país não pode fazer fronteira com ele mesmo);
* Um método que retorne a lista de países que fazem fronteira;
* Um método que receba um outro país como parâmetro e retorne uma lista de vizinhos comuns aos dois países.