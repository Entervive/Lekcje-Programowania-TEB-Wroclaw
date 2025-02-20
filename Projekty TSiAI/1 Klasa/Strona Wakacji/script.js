let lubieifbardziejodcase = 0;

function zmien() {
    let cialo = document.getElementsByTagName('body')[0];

    if(lubieifbardziejodcase == 0){
        cialo.style.backgroundImage = 'url("img/R.png")';
        lubieifbardziejodcase = 1;
        console.log(lubieifbardziejodcase)
    }
    else if(lubieifbardziejodcase == 1){
        cialo.style.backgroundImage = 'url("img/Poland_Houses_Sky_508076_1920x1080.png")';
        lubieifbardziejodcase = 0;
        console.log(lubieifbardziejodcase)
    }
}

function obliczKoszt() {
    const dorosli = parseInt(document.getElementById('dorosli').value);
    const dzieci = parseInt(document.getElementById('dzieci').value);
    const dni = parseInt(document.getElementById('dni').value);
    const standard = document.getElementById('standard').value;

    let koszt = 0;

    if (standard === "regular") {
        koszt = dorosli * 200 * dni + dzieci * 150 * dni;
    } else if (standard === "VIP") {
        koszt = dorosli * 200 * dni * 1.5 + dzieci * 150 * dni * 1.5;
    } else if (standard === "All-inclusive") {
        koszt = dorosli * 200 * dni * 2 + dzieci * 150 * dni * 2;
    }

    document.getElementById('wynik').textContent = `Koszt wycieczki: ${koszt} zł`;
}

function pw(str){
    document.getElementById('tekstObok').innerHTML = str;
}