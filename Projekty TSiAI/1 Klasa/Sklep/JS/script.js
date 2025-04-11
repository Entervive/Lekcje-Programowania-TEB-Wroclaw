// Tworzy element tekstowy, który będzie wyświetlany po kliknięciu przycisku
let komunikat = document.createElement("p");

// Funkcja wyświetlająca komunikat o braku możliwości zakupu
function wyswietlKomunikatZakupu() {
    komunikat.innerText = "Niestety, ale nie da się kupić :(";
    komunikat.style.color = "red";

    // Pobranie elementu, w którym wyświetlany będzie komunikat
    let kontenerKomunikatu = document.getElementById("kontener-komunikatu");
    kontenerKomunikatu.appendChild(komunikat);
}