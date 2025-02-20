let teksty = [
    "Świetnie!",
    "Kto gra główną rolę?",
    "Lubisz filmy Tego reżysera?",
    "Będę 10 minut wcześniej",
    "Może kupimy sobie popcorn?",
    "Ja wolę Colę",
    "Zaproszę jeszcze Grześka",
    "Tydzień temu też byłem w kinie na Diunie",
    "Ja funduję bilety"
];

function wyslijWiadomosc() {
    let chatBox = document.getElementById("chat");
    let tekst = document.getElementById("wiadomosc").value;

    let nowaWypowiedz = document.createElement("div");
    nowaWypowiedz.className = "Jolka wypowiedz";

    let img = document.createElement("img");
    img.src = "Jolka.jpg";

    let p = document.createElement("p");
    p.innerText = tekst;

    nowaWypowiedz.appendChild(img);
    nowaWypowiedz.appendChild(p);
    chatBox.appendChild(nowaWypowiedz);

    document.getElementById("wiadomosc").value = "";
    nowaWypowiedz.scrollIntoView();
}

function generujOdpowiedz() {
    let chatBox = document.getElementById("chat");
    let indeks = Math.floor(Math.random() * 8);
    
    let nowaWypowiedz = document.createElement("div");
    nowaWypowiedz.className = "Krzysiek wypowiedz";
    
    let img = document.createElement("img");
    img.src = "Krzysiek.jpg";
    
    let p = document.createElement("p");
    p.innerText = teksty[indeks];
    
    nowaWypowiedz.appendChild(img);
    nowaWypowiedz.appendChild(p);
    chatBox.appendChild(nowaWypowiedz);
    
    nowaWypowiedz.scrollIntoView();
}
