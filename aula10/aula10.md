## Curso Programação Full-Stack Com PHP
### Aula 10
O curso tem por objetivo forma pessoas no desenvolvimento de sistemas web
por meio das Tecnologias:
* PHP
* Mysql
* JavaScript
* HTML
* CSS, BootStrap5


### O que vimos na ultima Aula
* Fizemos uma revisão no primeiro projeto que faz a gestão de usuários
* Passamos pelos conceito introdutório sobre CSS
* Tirando Dúvidas



### O Que veremos na aula de Hoje
* vamos praticar alguns exemplos com php,html e css
* vamos conhecer algumas das particularidades do html, css
* Como estrutura minhas páginas HTML, Layout
* Variaveis SuperGlobais no PHP, $_GET, $_POST, $_SERVER
* Conhecendo as funções password_hash, password_verify
* Revisão do PHP:
  * Tipos Primitivos
  * funções/modulos
  * PDO



# Exemplos Práticos
* exemplos de Tags HTML
  * form, p,h1 ao h6, img, main, header, footer, table, nav, ul

* Exemplo com CSS
    |     Seletores     |   Exemplo   |                               Descrição                                             |
    | :--------------   | :---------- | :---------------------------------------------------------------------------------- |
    | div p             | div p       | Seleciona todos os elementos <p> dentro dos elementos <div>                         |
    | p                 | p           | Seleciona todos os elementos <p>                                                    |
    | id                | #firstname  | Seleciona o elemento com id="firstname"                                             |
    | .class            | .class      | Seleciona todos os elementos com class="intro"                                      |
    | *                 | *           | Selects all elements                                                                |
    | element > element | div > p     | Seleciona todos os elementos <p> onde o pai é um elemento <div>                     |
    | element + element | div + p     | Seleciona o primeiro elemento <p> colocado imediatamente após os elementos <div>    |
    | element ~ element | div ~ ul    | Seleciona todo elemento <ul> precedido por um elemento <p>                          |
    | [attribute]       | [target]    | Seleciona todos os elementos com um atributo de destino                             |
    |-------------------|-------------|-------------------------------------------------------------------------------------|
    | :active           | a:active         | Seleciona o link ativo                                                         |
    | :checked          | input:checked    | Seleciona todos os elementos <input> verificados                               |
    | :disabled         | input:disabled   | Selects every disabled <input> element                                         |
    | :first-child      | p:first-child    | Seleciona cada elemento <p> que é o primeiro filho de seu pai                  |
    | :hover            | a:hover          | Seleciona links ao passar o mouse                                              |
    | ::after           | p::after         | Insira algo após o conteúdo de cada elemento <p>                               |
    | ::before          | p::before        | Insira algo antes do conteúdo de cada elemento <p>                             |





  * Tags HTML
    - form, input
    Nesse exemplo pensando em contruir um formulário para realizar o login de
    usuários estruturamos nosso formulário html da seguinte forma

    ```html
    <form>
      <label for='login'>Usuário de Acesso</label>
      <input type='text' id='login' name='login' /> <br />

      <label for='senha'>Senha de Acesso</label>
      <input type='password' id='senha' name='senha' /> <br />

      <input type="submit" value="">
    </form>
    ```

    ```php
      // para saber qual o metodo de requisição foi enviado os dados do formulário
      echo $_SERVER['REQUEST_METHOD'];

      // para obter os dados vindo de um formulário por requisição GET
      echo $_GET['login'];
      echo $_GET['senha'];

      // para obter os dados vindo de um formulário por requisição POST
      echo $_POST['login'];
      echo $_POST['senha'];

      // implement of logic
    ```


  * Tags img, table, h1, p, section

  ```html
    <!-- tag section sempre uso quando quero estrtura um bloco de código html isso representa uma seção dentro da minha página web -->
    <section>
      conteúdo da seção
      aqui dentro vai todas as tag que desejo usar para estruturar minha seção
    </section>

    <!-- tag img como o nome da diz usamos para inserir imagens em nosso site -->
    <!-- esta tag possui dois atributo que temos que saber da sua existencia o src usado para informar onde a imagem que vamos inserir no documento esta, o atributo alt funciona como uma especie de texto alternativo, ele é usando quando o caminho da imagem não esta correto ou não possuir imagem no caminho passado no atributo src o texto alternativo irá aparece como uma descrição da imagem que deveria carregar outra função que esse atributo tem é ferente a acessibilidade pessoas que possui deficiencia visual utilizar o modo leutura para utilizar o smartphone então o assistente do dispositivo vai ler a descrição que esta no atributo alt e a pessoa saberá que imagem esta carregada ali -->
    <img src="caminho-da-imagem" alt="descrição-de-repesentação-da-imagem">
    <!-- tag table é usada para adicionar dados de forma tabelada entre linhas e colunas -->
    <table>
      <thead>
        <tr>
          <th>coluna 1</th>
          <th>coluna 2</th>
          <th>coluna 3</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>value 1</td>
          <td>value 2</td>
          <td>value 3</td>
        </tr>
      </tbody>
      <tfoot>
          <tr>
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
          </tr>
      </tfoot>
    </table>
    <!-- h1 usamos para gerar os titulos do documento html e a tag h1 vai ate h6 ou seja h1,h2,h3,h4,h5,h6 -->
    <h1>Lorem ipsum dolor sit amet,   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu . , sunt in culpa qui officia deserunt mollit anim id est laborum.</h1>
    <h2>Officia Deserunt Mollit anim id est laborum</h2>
    <h3>Fugiat Nulla Pariatur</h3>
    <h4>Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</h4>
    <h5>Consectetur adipisicing elit, sed do eiusmod tempor</h5>
    <h6>Excepteur sint occaecat cupidatat non proident</h6>

    <!-- tag p é uma tag que serve para adicionar um paragrafo ao nosso documento html -->
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

  ```

  * PHP - Variaveis SuperGlobais
    * $_GET - Um array associativo de variáveis passadas para o script atual via os parâmetros da URL (também conhecidos como query string).
    * $_POST - Um array associativo de variáveis passados para o script atual via método HTTP POST quando utilizado application/x-www-form-urlencoded ou multipart/form-data como valor do cabeçalho HTTP Content-Type na requisição.
    * $_SERVER -  é um array contendo informação como headers, caminhos, e outras informações do script.


```php
  var_dump($_GET);
  var_dump($_POST);
  var_dump($_SERVER);

```
















### Referências:
  * Css Seletores --> https://developer.mozilla.org/pt-BR/docs/Web/CSS/Reference#selectors
  * Css Tipo de Seletor Pseudo-class --> https://developer.mozilla.org/en-US/docs/Web/CSS/Pseudo-classes
  * Css Tipo de Seletor Pseudo-elemento --> https://developer.mozilla.org/en-US/docs/Web/CSS/Pseudo-elements
  * Variavel SuperGlobal GET --> https://www.php.net/manual/pt_BR/reserved.variables.get
  * Variavel SuperGlobal POST --> https://www.php.net/manual/pt_BR/reserved.variables.post.php
  * Variavel SuperGlobal SERVER --> https://www.php.net/manual/pt_BR/reserved.variables.server.php
  * Referências das principais variáveis Globais --> https://www.php.net/manual/pt_BR/language.variables.superglobals.php
  

  * fieldset https://www.w3schools.com/tags/tag_fieldset.asp
  * sanetize inputs --> https://www.php.net/manual/en/filter.filters.sanitize.php
  