let tekst = document.createElement("p");

function kup(){
    tekst.innerText = "Niestety, ale nie da się kupić :("
    tekst.style.color = "red";
    let pojemnik = document.getElementById("tak");
    pojemnik.appendChild(tekst);
}