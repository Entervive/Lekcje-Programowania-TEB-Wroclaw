// Plik JS do strony fanowskiej Star Trek
var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

// Dodanie efektu pisania
TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
    }

    setTimeout(function() {
    that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
    document.getElementById("obrazjeden").classList.add("imgtwo");
    document.getElementById("tekstdoobrazu").innerHTML = "Napęd Warp";
    document.getElementById("tekstpodobraz").innerHTML = "Napęd Warp umożliwia statkom kosmicznym podróżowanie z prędkością nadświetlną. Wykorzystuje zjawisko pola warp, które wygiębia przestrzeń-czas wokół statku.";
    document.getElementById("tekstdoobrazu").style.left = "5%";
    document.getElementById("tekstpodobraz").style.left = "5%";
    document.querySelector(".preloader").style.display = "none";
};

// Animacja strzałki
function swapClasses(){
    document.getElementById("arrrrrow").classList.remove("animate__animated", "animate__fadeIn", "animate__delay-2s");
    document.getElementById("arrrrrow").classList.add("arrow", "bounce");
}

setTimeout(swapClasses, 2000)

// Funkcje obsługujące najechanie na różne obrazy
function na1(){
    document.getElementById("obrazjeden").classList.add("imgtwo");
    document.getElementById("tekstdoobrazu").innerHTML = "Napęd Warp";
    document.getElementById("tekstpodobraz").innerHTML = "Napęd Warp umożliwia statkom kosmicznym podróżowanie z prędkością nadświetlną. Wykorzystuje zjawisko pola warp, które wygiębia przestrzeń-czas wokół statku.";
    document.getElementById("tekstdoobrazu").style.left = "5%";
    document.getElementById("tekstpodobraz").style.left = "5%";

    if(document.getElementById("obrazjeden").classList.contains("imgtwo") || document.getElementById("obraztrzy").classList.contains("imgtwo") || document.getElementById("obrazcztery").classList.contains("imgtwo")){
        document.getElementById("obrazdwa").classList.remove("imgtwo");
    }
    if(document.getElementById("obrazjeden").classList.contains("imgtwo") || document.getElementById("obrazdwa").classList.contains("imgtwo") || document.getElementById("obrazcztery").classList.contains("imgtwo")){
        document.getElementById("obraztrzy").classList.remove("imgtwo");
    }
    if(document.getElementById("obrazjeden").classList.contains("imgtwo") || document.getElementById("obraztrzy").classList.contains("imgtwo") || document.getElementById("obrazdwa").classList.contains("imgtwo")){
        document.getElementById("obrazcztery").classList.remove("imgtwo");
    }
}
function na2(){
    document.getElementById("obrazdwa").classList.add("imgtwo");
    document.getElementById("tekstdoobrazu").innerHTML = "Skanery";
    document.getElementById("tekstpodobraz").innerHTML = "Skanery wykrywają i identyfikują obiekty w przestrzeni. Wykorzystują radar, telewizję, sondy i detektory promieniowania.";
    document.getElementById("tekstdoobrazu").style.left = "13%";
    document.getElementById("tekstpodobraz").style.left = "13%";

    if(document.getElementById("obrazdwa").classList.contains("imgtwo") || document.getElementById("obraztrzy").classList.contains("imgtwo") || document.getElementById("obrazcztery").classList.contains("imgtwo")){
        document.getElementById("obrazjeden").classList.remove("imgtwo");
    }
    if(document.getElementById("obrazjeden").classList.contains("imgtwo") || document.getElementById("obrazdwa").classList.contains("imgtwo") || document.getElementById("obrazcztery").classList.contains("imgtwo")){
        document.getElementById("obraztrzy").classList.remove("imgtwo");
    }
    if(document.getElementById("obrazjeden").classList.contains("imgtwo") || document.getElementById("obraztrzy").classList.contains("imgtwo") || document.getElementById("obrazdwa").classList.contains("imgtwo")){
        document.getElementById("obrazcztery").classList.remove("imgtwo");
    }
}
function na3(){
    document.getElementById("obraztrzy").classList.add("imgtwo");
    document.getElementById("tekstdoobrazu").innerHTML = "Holodeck";
    document.getElementById("tekstpodobraz").innerHTML = "Holodeck tworzy realistyczne symulacje rzeczywistości. Wykorzystuje generator holografiki i system symulacji.    ";
    document.getElementById("tekstdoobrazu").style.left = "21%";
    document.getElementById("tekstpodobraz").style.left = "21%";

    if(document.getElementById("obrazdwa").classList.contains("imgtwo") || document.getElementById("obraztrzy").classList.contains("imgtwo") || document.getElementById("obrazcztery").classList.contains("imgtwo")){
        document.getElementById("obrazjeden").classList.remove("imgtwo");
    }
    if(document.getElementById("obrazjeden").classList.contains("imgtwo") || document.getElementById("obraztrzy").classList.contains("imgtwo") || document.getElementById("obrazcztery").classList.contains("imgtwo")){
        document.getElementById("obrazdwa").classList.remove("imgtwo");
    }
    if(document.getElementById("obrazjeden").classList.contains("imgtwo") || document.getElementById("obraztrzy").classList.contains("imgtwo") || document.getElementById("obrazdwa").classList.contains("imgtwo")){
        document.getElementById("obrazcztery").classList.remove("imgtwo");
    }
}

function na4(){
    document.getElementById("obrazcztery").classList.add("imgtwo");
    document.getElementById("tekstdoobrazu").innerHTML = "Transporter";
    document.getElementById("tekstpodobraz").innerHTML = "Transporter przenosi ludzi i przedmioty z jednego miejsca do drugiego. Wykorzystuje analizator i syntetyzator.    ";
    document.getElementById("tekstdoobrazu").style.left = "29%";
    document.getElementById("tekstpodobraz").style.left = "29%";

    if(document.getElementById("obrazdwa").classList.contains("imgtwo") || document.getElementById("obraztrzy").classList.contains("imgtwo") || document.getElementById("obrazcztery").classList.contains("imgtwo")){
        document.getElementById("obrazjeden").classList.remove("imgtwo");
    }
    if(document.getElementById("obrazjeden").classList.contains("imgtwo") || document.getElementById("obraztrzy").classList.contains("imgtwo") || document.getElementById("obrazcztery").classList.contains("imgtwo")){
        document.getElementById("obrazdwa").classList.remove("imgtwo");
    }
    if(document.getElementById("obrazjeden").classList.contains("imgtwo") || document.getElementById("obrazdwa").classList.contains("imgtwo") || document.getElementById("obrazcztery").classList.contains("imgtwo")){
        document.getElementById("obraztrzy").classList.remove("imgtwo");
    }
}