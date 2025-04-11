// Zmienna do przechowywania stanu tła
let isBackgroundDefault = true;

/**
 * Funkcja zmienia tło strony na inne obrazy w zależności od aktualnego stanu.
 */
function toggleBackground() {
    const bodyElement = document.getElementsByTagName('body')[0];

    if (isBackgroundDefault) {
        bodyElement.style.backgroundImage = 'url("img/R.png")';
        isBackgroundDefault = false;
    } else {
        bodyElement.style.backgroundImage = 'url("img/Poland_Houses_Sky_508076_1920x1080.png")';
        isBackgroundDefault = true;
    }
    console.log(`Background state: ${isBackgroundDefault}`);
}

/**
 * Funkcja oblicza koszt wycieczki na podstawie liczby osób, dni i standardu.
 */
function calculateTripCost() {
    const adultsCount = parseInt(document.getElementById('dorosli').value);
    const childrenCount = parseInt(document.getElementById('dzieci').value);
    const daysCount = parseInt(document.getElementById('dni').value);
    const tripStandard = document.getElementById('standard').value;

    let totalCost = 0;

    // Obliczanie kosztu w zależności od standardu wycieczki
    if (tripStandard === "regular") {
        totalCost = adultsCount * 200 * daysCount + childrenCount * 150 * daysCount;
    } else if (tripStandard === "VIP") {
        totalCost = adultsCount * 200 * daysCount * 1.5 + childrenCount * 150 * daysCount * 1.5;
    } else if (tripStandard === "All-inclusive") {
        totalCost = adultsCount * 200 * daysCount * 2 + childrenCount * 150 * daysCount * 2;
    }

    // Wyświetlenie wyniku na stronie
    document.getElementById('wynik').textContent = `Koszt wycieczki: ${totalCost} zł`;
}

/**
 * Funkcja wyświetla tekst obok obrazka na podstawie przekazanego parametru.
 * @param {string} text - Tekst do wyświetlenia.
 */
function displayTextNextToImage(text) {
    document.getElementById('tekstObok').innerHTML = text;
}