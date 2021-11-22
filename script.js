let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');

}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');

}

function validar(){
    var nome  = document.getElementById("nome");
    var num = document.getElementById("num")
    var email = document.getElementById("email");
    var date = document.getElementById("date");
    var enviar = document.getElementById("enviar").checked;

if (nome.value == "") {
alert("Nome não informado");
nome.focus();
return;
}
if (num.value == "") {
alert("numero não informado");
num.focus();
return;
}
if (email.value == "") {
alert("E-mail não informado");
email.focus();
return;
}
if (date.value == "") {
alert("Data não informado");
date.focus();
return;
}
alert("Formulário enviado!");

document.forms["frm_id"].reset();
nome.focus();

}