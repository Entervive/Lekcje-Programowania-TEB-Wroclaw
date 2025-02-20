function Logowanie(){
    let username = document.getElementById("Login").value;
    let password = document.getElementById("Passwd").value;

    if(username.length >= 8 && password == "aaa"){
        wstawTresc(username);
    }
    else{
        alert("Błąd w logowaniu");
    }
}

function wstawTresc(username){
    document.getElementById("glownyPojemnik").innerHTML = "<main><h3>Witaj<span id='user'> </span></h3><br><section style='padding-top: 2px'>Oto twoje zdjecia</section></main>"
    document.getElementById("user").innerHTML = " " + username + "!";
    dodajKotki();
}
function dodajKotki() {
    let tresc = document.getElementById("glownyPojemnik");
    let pojemnikNaZdjecia = document.createElement("div");
    pojemnikNaZdjecia.style.display = "flex";
    pojemnikNaZdjecia.style.flexDirection = "row";
    pojemnikNaZdjecia.style.justifyContent = "center";
    let zdjecia = document.getElementById("zdjecia");
    let zdjeciaa = ["img/kot1.png", "img/kot2.png", "img/kot3.png"]
    for(i = 0; i < zdjeciaa.length; i++){
        let noweZdjecie = document.createElement("img");
        noweZdjecie.src = zdjeciaa[i];
        pojemnikNaZdjecia.appendChild(noweZdjecie);
        tresc.appendChild(pojemnikNaZdjecia);
    }
}