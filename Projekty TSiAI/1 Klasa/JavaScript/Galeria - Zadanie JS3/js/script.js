let zdj = ["img/zdj1.jpg", "img/zdj2.jpg", "img/zdj3.jpg", "img/zdj4.jpg", "img/zdj5.jpg"];
let zdjnr = 1;
let galeria = document.getElementById("Galeria");
let Lewo;
let Prawo;

window.onload = function(){
    galeria.innerHTML = "<img src='img/zdj" + zdjnr + ".jpg'>";
}

function zmiana(kirerunek){
    switch(kirerunek){
        case "Lewo":
            if(zdjnr == 1){
                zdjnr = 5;
                galeria.innerHTML = "<img src='img/zdj" + zdjnr + ".jpg'>";
            }
            else{
                zdjnr--;
                galeria.innerHTML = "<img src='img/zdj" + zdjnr + ".jpg'>";
            }
            break;
        case "Prawo":
            if(zdjnr == 5){
                zdjnr = 1;
                galeria.innerHTML = "<img src='img/zdj" + zdjnr + ".jpg'>";
            }
            else{
                zdjnr++;
                galeria.innerHTML = "<img src='img/zdj" + zdjnr + ".jpg'>";
            }
            break;
    }
}
