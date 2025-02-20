let form = document.getElementById("form");
let fields = form.querySelectorAll("input[type=text]");
let button = form.querySelector("input[type=submit]");
let footer = document.getElementById('huh');
let lpr = document.getElementById('LP');
let bodyy = document.getElementById('nwm')
let header = document.getElementById('teksttttt')

let uniqueNumbers = [];
let container = document.getElementById('displaypytaniadis');
let los = 0
let Komunitkaty = ['&copf; Strona stworzona przez Super Ucznia!', 'Ciekawe kto zrobił tą stronę😅', 'Nie zazdroszczę wam pytań', 'To co na logikę?', 'Powodzenia bo nie wiem co innego życzyć', 'Modlitwa nie pomoże', 'AVE TEB!', 'ChatGPT: "co to był ten Limes', '"Historia się powtarza"', 'CHWILA, Pomarańcze!?', 'Nie podawaj się może będzie 1+'];
let questions = [];

let pytanie1 = document.getElementById('quest1');
let pytanie2 = document.getElementById('quest2');
let pytanie3 = document.getElementById('quest3');
let pytanie4 = document.getElementById('quest4');
let pytanie5 = document.getElementById('quest5');
let pytanie6 = document.getElementById('quest6');
let pytanie7 = document.getElementById('quest7');
let pytanie8 = document.getElementById('quest8');
let pytanie9 = document.getElementById('quest9');
let pytanie10 = document.getElementById('quest10');


document.addEventListener('DOMContentLoaded', function(){
    setInterval(losujKom, 30000)
    losujKom();
    console.log('Works!')
})

button.addEventListener("click", function(event) {
    event.preventDefault();
    questions = [];

    for (i = 0; i < fields.length; i++) {
        let field = fields[i];
        let value = field.value;
        questions.push(value);
    }
    
    lpr.style.display = 'inline-block';
    console.log(questions);
});

function losujKom(){
    console.log('realy works')
    footer.innerHTML = Komunitkaty[Math.floor(Math.random() * 7 * Array.length)];
}

function losujPytania(){
    header.innerText = "Wylosowane Pytania"
    container.innerHTML = '';
    uniqueNumbers = [];

    bodyy.style.width = '60%';
    container.style.display = 'block';
    form.style.display = 'none';
            
    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    while (uniqueNumbers.length < 4) {
        let randomNumber = getRandomInt(1, 10);  
        
        if (uniqueNumbers.indexOf(randomNumber) === -1) {
            uniqueNumbers.push(randomNumber);
        }
    }

    uniqueNumbers.sort(function(a, b){return a-b});

    for (i = 0; i < questions.length; i++) {
        var questionElement = document.createElement("p");
        questionElement.id = "quest" + (i + 1);
        questionElement.textContent = questions[i];
        container.appendChild(questionElement);
    }
    

    for (i = 0; i < uniqueNumbers.length; i++) {
        var number = uniqueNumbers[i];
        var questionId = "quest" + (number);
        var questionElement = document.getElementById(questionId);

        if(i == 0){
            questionElement.classList.add("animate__animated", 'animate__backOutLeft', 'animate__slower');
        }
        else if(i == 1){
            questionElement.classList.add("animate__animated", 'animate__backOutRight', 'animate__slower', 'animate__delay-1s');
        }
        else if(i == 2){
            questionElement.classList.add("animate__animated", 'animate__backOutLeft', 'animate__slower', 'animate__delay-2s');
        }
        else if(i == 3){
            questionElement.classList.add("animate__animated", 'animate__backOutRight', 'animate__slower', 'animate__delay-3s');
        }
    }


    setTimeout(dodajPrzyciski, 5000)
    setTimeout(usuwaniePytan, 5000)
    console.log("Wygenerowane unikalne liczby:", uniqueNumbers);
}

function usuwaniePytan(){
    for (i = 0; i < uniqueNumbers.length; i++) {
        var number = uniqueNumbers[i];
        var questionId = "quest" + (number);
        var questionElement = document.getElementById(questionId);

        if(i == 0){
            questionElement.style.display = 'none';
        }
        else if(i == 1){
            questionElement.style.display = 'none';
        }
        else if(i == 2){
            questionElement.style.display = 'none';
        }
        else if(i == 3){
            questionElement.style.display = 'none';
        }
    }
}

function dodajPrzyciski(){
    let odNowaLos = document.createElement('button');
    odNowaLos.innerText = 'Losuj Nowe Pytania!';
    odNowaLos.id = 'lnp';
    odNowaLos.style.display = 'inline-block';
    odNowaLos.setAttribute('onclick', 'losowanieOdNowa()');
    odNowaLos.type = 'button';
    odNowaLos.classList.add("animate__animated", 'animate__fadeIn', 'animate__slower');
    container.appendChild(odNowaLos);

    let przywrocPytania = document.createElement('button');
    przywrocPytania.innerText = 'Przywróć Pytania';
    przywrocPytania.id = 'pp';
    przywrocPytania.style.display = 'inline-block';
    przywrocPytania.setAttribute('onclick', 'przywrocPytania()');
    przywrocPytania.type = 'button';
    przywrocPytania.classList.add("animate__animated", 'animate__fadeIn', 'animate__slower');
    container.appendChild(przywrocPytania);

    let zmienPytania = document.createElement('button');
    zmienPytania.innerText = 'Zmień Pytania';
    zmienPytania.id = 'zp';
    zmienPytania.style.display = 'inline-block';
    zmienPytania.setAttribute('onclick', 'zmienPytania()');
    zmienPytania.type = 'button';
    zmienPytania.classList.add("animate__animated", 'animate__fadeIn', 'animate__slower');
    container.appendChild(zmienPytania);
}

function losowanieOdNowa(){

    for (i = 0; i < uniqueNumbers.length; i++) {
        var number = uniqueNumbers[i];
        var questionId = "quest" + (number);
        var questionElement = document.getElementById(questionId);

        if(i == 0){
            questionElement.classList.remove("animate__animated", 'animate__backOutLeft', 'animate__slower');
            questionElement.style.display = 'block';
            questionElement.classList.add("animate__animated", 'animate__backInLeft', 'animate__slower');
        }
        else if(i == 1){
            questionElement.classList.remove("animate__animated", 'animate__backOutRight', 'animate__slower', 'animate__delay-1s');
            questionElement.style.display = 'block';
            questionElement.classList.add("animate__animated", 'animate__backInRight', 'animate__slower', 'animate__delay-1s');
        }
        else if(i == 2){
            questionElement.classList.remove("animate__animated", 'animate__backOutLeft', 'animate__slower', 'animate__delay-2s');
            questionElement.style.display = 'block';
            questionElement.classList.add("animate__animated", 'animate__backInLeft', 'animate__slower', 'animate__delay-2s');
        }
        else if(i == 3){
            questionElement.classList.remove("animate__animated", 'animate__backOutRight', 'animate__slower', 'animate__delay-3s');
            questionElement.style.display = 'block';
            questionElement.classList.add("animate__animated", 'animate__backInRight', 'animate__slower', 'animate__delay-3s');
        }
    }



    losujPytania();
}

function przywrocPytania(){
    for (i = 0; i < uniqueNumbers.length; i++) {
        var number = uniqueNumbers[i];
        var questionId = "quest" + (number);
        var questionElement = document.getElementById(questionId);

        if(i == 0){
            questionElement.classList.remove("animate__animated", 'animate__backOutLeft', 'animate__slower');
            questionElement.style.display = 'block';
            questionElement.classList.add("animate__animated", 'animate__backInLeft', 'animate__slower');
        }
        else if(i == 1){
            questionElement.classList.remove("animate__animated", 'animate__backOutRight', 'animate__slower', 'animate__delay-1s');
            questionElement.style.display = 'block';
            questionElement.classList.add("animate__animated", 'animate__backInRight', 'animate__slower', 'animate__delay-1s');
        }
        else if(i == 2){
            questionElement.classList.remove("animate__animated", 'animate__backOutLeft', 'animate__slower', 'animate__delay-2s');
            questionElement.style.display = 'block';
            questionElement.classList.add("animate__animated", 'animate__backInLeft', 'animate__slower', 'animate__delay-2s');
        }
        else if(i == 3){
            questionElement.classList.remove("animate__animated", 'animate__backOutRight', 'animate__slower', 'animate__delay-3s');
            questionElement.style.display = 'block';
            questionElement.classList.add("animate__animated", 'animate__backInRight', 'animate__slower', 'animate__delay-3s');
        }
    }
}

function zmienPytania(){
    header.innerText = 'Losowanie Pytań Na Sprawdzian';
    lpr.style.display = 'none';
    form.style.display = 'block';
    bodyy.style.width = '100%';
    container.style.display = 'none';
}