## Aula 08 - Turma 06


## Onde estamos(cronograma-de-curso)?
- Avançamos no Desenvolvimento com PHP
- Avançamos com a sintaxe básica do PHP
- Avançamos com no conceito de HTML
- Atualmente estamos no primeiro projeto nivel 1 do curso
- Atualmente nossa turma recebeu uma demanda de mercado para desenvolver em paralelo
- o que veremos hoje? Conceito de CSS para HTML


## Nesta aula iremos aprender sobre o CSS

## O que é CSS
CSS (Cascading Style Sheets ou Folhas de Estilo em Cascata) é uma linguagem de estilo usada para descrever a apresentação de um documento escrito em HTML ou em XML (incluindo várias linguagens em XML como SVG, MathML ou XHTML). O CSS descreve como elementos são mostrados na tela, no papel, na fala ou em outras mídias.

CSS (Folhas de Estilo em Cascata) permite a você criar páginas web agradáveis, mas como isso funciona por baixo dos panos?

O CSS é uma linguagem para especificar como documentos são apresentados aos usuários — como eles são estilizados, dispostos etc.

Um documento é normalmente um arquivo texto estruturado usando uma linguagem de marcação — HTML é a linguagem de marcação mais comum, mas você também pode encontrar outras, como SVG ou XML.

Apresentar um documento para um usuário significa convertê-lo para um formato utilizável pelo seu público. Browsers, como Firefox, Chrome, ou Edge, são projetados para apresentar documentos visualmente, por exemplo, um uma tela de computador, projetor ou impressora.

### Quais as formas de injetar o CSS no HTML
1: **Inline**
o HTML é repleto de atributos que nos permite setar valores a eles, existe um
atributo para o css chamado de "style" ele recebe como valor regras css que
muda a forma como esse elemento html sera apresentado pelo browser

2: **Interno**
Este forma injeta o css através de uma tag HTML chama style onde dentro do
corpo dela injetamos os grupos de regras nos elemento HTML.

3: **Externo**
a terceira forma de injetar o CSS é por meio de arquivos externo com extensão .css
onde passamos o caminho desse arquivo e uma tag HTML "link" se encarrega de encontrar
este arquivo de trazer o css para o documento.


## CSS: Seletores
Em CSS, os seletores são usados para direcionar os elementos HTML em nossas páginas da web que queremos estilizar. Há uma grande variedade de seletores CSS disponíveis, permitindo uma precisão refinada ao selecionar os elementos a serem estilizados.

```css
/*
#id                 | #firstname  | Seleciona o elemento com id="firstname"
.class              | .intro      | Seleciona todos os elementos com class="intro"
element.class       | p.intro     | Seleciona apenas elementos <p> com class="intro"
*                   | *           | Seleciona todos os elementos
elemento            | p           | Seleciona todos os elementos <p>
element,element,..  | div, p      | Seleciona todos os elementos <div> e todos os elementos <p>
*/
```

### Qual a Sintaxe do CSS
O CSS é baseada em regras. Você define regras especificando grupos de estilo que devem ser aplicados para elementos particulares ou grupos de elementos no seu documento HTML.
A sintaxe é composta por um seletor seguindo por um par de chaves de abertura e fechamento e dentro das chave adicionamos as propriedades, abaixo temos um exmeplo

exemplo:
p { propriedade: valor; }


### Quais as formas de aplicar o CSS no documento HTML
Por exemplo de forma bem simples poderiamos mudar a cor do texto para vermelho e alinhar o texto ao centro da página, para isso é só aplicar uma propriedade **color** com o valor "red" e outra propriedade **text-align** com o valor "center", "left" ou "right"

```css
p {
  text-align: center;
  color: red;
}
```

### Como estilizar elementos HTML
seguindo as 3 (três) formas de injetar css no HTML:

Inline:

```html
<p style="color: red; text-align:center;">Meu Texto</p>
```

Externo:

```html
<html>
<head>
  <style>
    p {
      text-align: center;
      color: red;
    }
  </style>
</head>

<body>
  <p>Meu Texto</p>
</body>

</html>
```


Externo:

```html
<html>
<head>
  <link rel="stylesheet" href="my-stylesheet.css" />
</head>

<body>
  <p>Meu Texto</p>
</body>

</html>
```


## Exemplos de Propriedades CSS

### Text

```css
/* faz o alinhamento do texto ao centro */ 
h1 {
  text-align: center;
}

/* faz o alinhamento do texto a esquerda */ 
h2 {
  text-align: left;
}

/* faz o alinhamento do texto a direita */ 
h3 {
  text-align: right;
}

/* faz o alinhamento do texto de forma justificada */ 
p {
  text-align: justify;
}


/* aplica um conjunto de regras css em todos elementos HTML do documento */ 
* {
  color: red;
  text-decoration: underline;
  text-align: center;
  font-weight: bold;
}
```


### Margin x Padding
A propriedade margin faz o espacamento externo ao elemento aplicado essa propriedade o efeito disso é uma espaco entre os elementos adjacentes.
A propriedade padding aplica regras no espaçamento interno dos elementos.

```css
div {
  margin: 10px 20px 30px 40px;
  /* ou */
  margin-top: 10px;
  margin-right: 10px;
  margin-bottom: 10px;
  margin-left: 10px;
}

p {
  padding: 20px;
}

```

### width x height
Sempre que precisamos definir uma largura e uma altura de um elemento usamos as propriedade width para definir largura e height para definir a altura.

```css
div {
  width: 500px;
  height: 450px;
  background-color: black;
  color: white;
  font-weight: 700;
  text-align: justify;
}

```



<table>
  <thead>
    <tr>
      <th>Material de Referencia</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <ul>
          <li><a href="https://developer.mozilla.org/pt-BR/docs/Glossary/SVG">O que é SVG</a></li>
          <li><a href="https://developer.mozilla.org/pt-BR/docs/Glossary/XML">O que é XML</a></li>
          <li><a href="https://developer.mozilla.org/pt-BR/docs/Glossary/HTML">O que é HTML</a></li>
          <li><a href="https://developer.mozilla.org/pt-BR/docs/Glossary/CSS_Selector">Quais os Seletores do CSS</a></li>
          <li><a href="https://developer.mozilla.org/pt-BR/docs/Glossary/Property/CSS">O que são as properties do CSS</a></li>
          <li><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_backgrounds_and_borders">Propriedade background e border</a></li>
        </ul>
      </td>
   
    </tr>
  </tbody>

</table>