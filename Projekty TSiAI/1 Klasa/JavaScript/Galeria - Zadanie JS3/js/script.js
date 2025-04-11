// Tablica przechowująca ścieżki do zdjęć
let zdj = ["img/zdj1.jpg", "img/zdj2.jpg", "img/zdj3.jpg", "img/zdj4.jpg", "img/zdj5.jpg"];
let zdjnr = 1; // Numer aktualnie wyświetlanego zdjęcia
let galeria = document.getElementById("Galeria"); // Pobranie elementu galerii

// Funkcja uruchamiana po załadowaniu strony
window.onload = function() {
    // Wyświetlenie pierwszego zdjęcia w galerii
    galeria.innerHTML = "<img src='" + zdj[zdjnr - 1] + "'>";
}

// Funkcja zmieniająca zdjęcie w galerii
function zmiana(kierunek) {
    switch (kierunek) {
        case "Lewo":
            // Jeśli aktualne zdjęcie to pierwsze, przejdź do ostatniego
            if (zdjnr === 1) {
                zdjnr = zdj.length;
            } else {
                zdjnr--; // Przejdź do poprzedniego zdjęcia
            }
            break;
        case "Prawo":
            // Jeśli aktualne zdjęcie to ostatnie, przejdź do pierwszego
            if (zdjnr === zdj.length) {
                zdjnr = 1;
            } else {
                zdjnr++; // Przejdź do następnego zdjęcia
            }
            break;
    }
    // Wyświetlenie nowego zdjęcia w galerii
    galeria.innerHTML = "<img src='" + zdj[zdjnr - 1] + "'>";
}