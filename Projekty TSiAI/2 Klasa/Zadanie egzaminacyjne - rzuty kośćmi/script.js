function losuj() {
    let pierwszaKosc = Math.floor(Math.random() * 6) + 1;
    let drugaKosc = Math.floor(Math.random() * 6) + 1;

    document.getElementById("kosc1").src = `assets/${pierwszaKosc}.png`;
    document.getElementById("kosc2").src = `assets/${drugaKosc}.png`;

    let suma = pierwszaKosc + drugaKosc;
    document.getElementById("wynik").textContent = suma;

    let wynikiBlok = document.getElementById("wyniki");
    if (suma === 7) {
        wynikiBlok.style.backgroundColor = "green";
    } else {
        wynikiBlok.style.backgroundColor = "transparent";
    }
}