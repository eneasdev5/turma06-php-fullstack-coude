// criar um elemento input com as informações para receber um number
// criar um elemento input com as caracteristicas de um button e adicionar um evento de click nele
// adicionar os elementos criados no elemento do documento selecionado

document.body.onload = function () {
  let inputForm = document.getElementById("ciButtonAddTel");
  inputForm.addEventListener("click", adcElemento);
};

let countTelefone = 2;

let addError = false;
let divRaizTelefones = document.getElementById("telefones");

function adcElemento() {
  if (countTelefone <= 3) {
    let newInTelefone = document.createElement("input"); // cria o element HTML, input
    newInTelefone.setAttribute("type", "number"); // adiciona atributo type no input
    newInTelefone.setAttribute("id", `ciTelefone${countTelefone}`); // adiciona atributo name no input
    newInTelefone.setAttribute("name", "cnTelefone[]"); // adiciona atributo name no input
    newInTelefone.setAttribute("placeholder", "(00) 00000-0000"); // adiciona atributo placeholder no input

    let newInButton = document.createElement("button"); // cria elemento HTML input
    newInButton.setAttribute("type", "button"); // adiciona atributo type no input
    newInButton.setAttribute("id", `ciButtonAddTel${countTelefone}`); // adiciona atributo id no input
    let newInButtonContent = document.createTextNode("Remover Telefone");
    newInButton.appendChild(newInButtonContent);
    newInButton.addEventListener("click", function (event) {
      divRaizTelefones.removeChild(newInButton.parentElement);
      countTelefone--;
    });
    let cxTelefones = document.createElement("div");

    cxTelefones.setAttribute("class", "layoutTelefone");
    console.log(cxTelefones.className);

    cxTelefones.appendChild(newInTelefone);
    cxTelefones.appendChild(newInButton);

    // div raiz
    divRaizTelefones.appendChild(cxTelefones);

    countTelefone++;
  }
}
