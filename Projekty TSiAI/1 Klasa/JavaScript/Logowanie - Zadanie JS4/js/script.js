// Funkcja obsługująca logowanie
function Logowanie() {
    // Pobranie wartości z pól formularza
    let username = document.getElementById("Login").value;
    let password = document.getElementById("Passwd").value;

    // Sprawdzenie poprawności danych logowania
    if (username.length >= 8 && password === "aaa") {
        wstawTresc(username); // Wywołanie funkcji wstawiającej treść
    } else {
        alert("Błąd w logowaniu. Upewnij się, że login ma co najmniej 8 znaków, a hasło to 'aaa'.");
    }
}

// Funkcja wstawiająca treść po zalogowaniu
function wstawTresc(username) {
    // Zmiana zawartości głównego pojemnika
    document.getElementById("glownyPojemnik").innerHTML = `
        <main>
            <h3>Witaj<span id='user'></span></h3>
            <br>
            <section style='padding-top: 2px'>Oto twoje zdjęcia:</section>
        </main>`;
    document.getElementById("user").innerText = " " + username + "!";
    dodajKotki(); // Wywołanie funkcji dodającej zdjęcia
}

// Funkcja dodająca zdjęcia kotków
function dodajKotki() {
    let tresc = document.getElementById("glownyPojemnik"); // Pobranie głównego pojemnika
    let pojemnikNaZdjecia = document.createElement("div"); // Tworzenie kontenera na zdjęcia
    pojemnikNaZdjecia.style.display = "flex";
    pojemnikNaZdjecia.style.flexDirection = "row";
    pojemnikNaZdjecia.style.justifyContent = "center";

    // Tablica z adresami zdjęć
    let zdjeciaa = ["img/kot1.png", "img/kot2.png", "img/kot3.png"];

    // Pętla dodająca zdjęcia do kontenera
    for (let i = 0; i < zdjeciaa.length; i++) {
        let noweZdjecie = document.createElement("img"); // Tworzenie elementu <img>
        noweZdjecie.src = zdjeciaa[i]; // Ustawienie źródła obrazka
        pojemnikNaZdjecia.appendChild(noweZdjecie); // Dodanie obrazka do kontenera
    }

    // Dodanie kontenera do głównego pojemnika
    tresc.appendChild(pojemnikNaZdjecia);
}