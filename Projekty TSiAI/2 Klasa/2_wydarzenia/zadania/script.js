window.onload = function() {
    alert("Formularz został załadowany!");
};

function zabawa(event) {
    event.target.style.border = "2px solid white";
}

function nieZabawanie(event) {
    event.target.style.border = "none";
}

let imie = document.getElementById("imie").value;
let email = document.getElementById('email').value;

function przeslij() {
    alert("Imię " + imie + "Email: " + email)
}

function stylowo(event) {
    event.target.style.backgroundColor = "red";
}

function nieStylowo(event) {
    event.target.style.backgroundColor = "";
}

function maslo(){
    alert("Czy twoje hasło ma minimum 8 znaków, znak specjalny, wielką i małą literę i cyfrę?")
}

function demencja(event) {
    event.target.style.backgroundColor = "red";
    event.target.style.color = "wheat";
    event.target.style.borderRadius = "10px"
}

function czystaDemencja(event) {
    event.target.style.backgroundColor = "";
    event.target.style.color = "";
    event.target.style.borderRadius = ""
}

function schizofremia() {
    let cialo = document.getElementsByTagName("body")
}