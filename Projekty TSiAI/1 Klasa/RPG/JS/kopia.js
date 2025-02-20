//Wartości
var Atak = 15;
let Atakmoc = 16;
let gwarantowanyAtak = 0;
let tura = true;

var Hp = 100;
var HpE = 100;
let maxHp = 100;

let Heal = 5;
let Healmoc = 12;
let gwarantowanyHeal = 0;

let nowyHealMoc = 10;
let nowyGwarantowanyHeal = 5;

let nowyAtakMoc = 16;
let nowyGwarantowanyAtak = 5;

let noweMaxHp = 120;

var Komunitkaty = ['<p>O nie! Napotkałeś kogoś kto szuka walki</p>', '<p>Przeciwnik wyskakuje nagle z krzaka</p>', '<p>Szukasz swoich mikstur gdy nagle wpadasz w zasadzke!</p>'];
let upg = document.getElementById('up');
var sprite1 = document.getElementById('sprite1');
var sprite2 = document.getElementById('sprite2');
let infoo = document.getElementById('info');
let state = 'idle';
let enemyState = 'idle';

let enemyDemage = 10;
let enemyZgon = false;

var sprite1Width = 180;
var sprite1Height = 180;
var sprite2Width = 150;
var sprite2Height = 150;

var totalFrames1 = 11;
var totalFrames2 = 8;

var currentFrame1 = 0;
var currentFrame2 = 0;

//Akcje
function Atakk() {
    if(tura == true) {
        Atak = Math.floor(Math.random() * Atakmoc + gwarantowanyAtak);
        atakbox.innerText = "Zadałeś " + Atak + " swojemu przeciwnikowi!";
        HpE -= Atak;
        state = 'fight';
        currentFrame1 = 0;
        tura = false
        Update();
    }
}

function Def() {
    if(tura == true) {
        atakbox.innerText = "Podniosleś swoją tarczę przeciwnik zada ci mniej obrażeń."
        state = 'hit';
        currentFrame1 = 0;
        tura = false;
        Update();
    }
}

function Heall() {
    if(tura == true) {
        if(maxHp >= Hp){
            tura = false;
            atakbox.innerText = "Masz już MAX swojego HP. Potka nie została użyta."

        }
        else if(maxHp < Hp){
            Heal = Math.floor(Math.random() * Healmoc + gwarantowanyHeal)
            atakbox.innerText = "Uleczyłeś się za " + Heal;
            Hp += Heal;
            state = 'healll';
            currentFrame1 = 0;
            tura = false;
        }
        Update();
    }
}

//Komunitkaty
function Komunitkatyy() {
    var atakbox = document.getElementById("atakbox");
    atakbox.innerHTML = Komunitkaty[Math.floor(Math.random() * 3 * Array.length)];
}

//Ulepszenia
function Ulepszenia() {
    upg.style.display = 'none';
}

function ulepszeniaCall(){
    upg.style.display = 'block';
    upg.style.opacity = '1';
    upg.style.top = '33%';
    nowyGwarantowanyAtak = math.floor(math.random() * 5);
    nowyAtakMoc = nowyAtakMoc + nowyGwarantowanyAtak;
    nowyGwarantowanyHeal = math.floor(math.random() * 5);
    nowyHealMoc = nowyHealMoc + nowyGwarantowanyHeal
}

function ulepszeniaBack(){
    upg.style.display = 'none';
    upg.style.opacity = '0';
    upg.style.top = '13%';
}

function ulepszHeal(){
    Healmoc += nowyHealMoc;
    gwarantowanyHeal += nowyGwarantowanyHeal;
    atakbox.innerHTML = 'Ulepszasz pojemność swoich mikstur.<br> Będziesz się teraz leczył około <span>' + gwarantowanyHeal + '</span>-<span>' + Healmoc + "</span>."
    ulepszeniaBack();
    Update();
}

function ulepszHp(){
    Hp = noweMaxHp;
    maxHp = noweMaxHp
    noweMaxHp += 20;
    atakbox.innerText = "Ulepszasz swoje HP. Wynosi one teraz " + Hp + '.';
    ulepszeniaBack();
    Update();
}

function ulepszAtk(){
    Healmoc += nowyHealMoc;
    gwarantowanyAtak += nowyGwarantowanyAtak;
    atakbox.innerHTML = "Ulepszasz swoje ostrze.<br> Będziesz zadawał swoim przeciwnikom teraz <span>" + gwarantowanyAtak + '</span>-<span>' + Healmoc + '</span>'
    ulepszeniaBack();
    Update();
}

//info ulepszenia
function info(){
    infoo.style.opacity = '0';
    infoo.innerHTML = '';
    upg.style.width = '250px';
    upg.style.height = '125px';
    upg.style.left = '42%'
}

function infoHeal(){
    let nowyMaxHeal = nowyGwarantowanyHeal + nowyHealMoc;
    infoo.style.opacity = '1';
    upg.style.width = '500px';
    upg.style.height = '200px';
    upg.style.left = '32%'
    infoo.innerHTML = 'Ulepszasz pojemność twoich mikstur.<br> Będziesz leczył się więcej o około ' + '<span>' + nowyGwarantowanyHeal + '</span>' + '-' + '<span>' + nowyHealMoc + '</span>' + '<br> lub maksymalne leczenie ' + '<span>' + nowyMaxHeal + '</span>' + '.';
}

function infoHp(){
    infoo.style.opacity = '1';
    upg.style.width = '500px';
    upg.style.height = '200px';
    upg.style.left = '32%'
    infoo.innerHTML = 'Ulepszasz swoje maksymalne HP.<br> Jednocześnie leczysz się do maksymalnego zdrowia.<br> Twoje zdrowie wzrasta o <span> 20 </span> punktów.';
}

function infoAtk(){
    let nowyAtakMax = nowyGwarantowanyAtak + nowyAtakMoc;
    infoo.style.opacity = '1';
    upg.style.width = '500px';
    upg.style.height = '200px';
    upg.style.left = '32%'
    infoo.innerHTML = 'Ulepszysz swoją broń.<br> będziesz zadawał pomiędzy <span>' + nowyGwarantowanyAtak + '</span>-<span>' + nowyAtakMoc + '</span>obrażeń' + '<br> lub maksymalny atak <span>' + nowyAtakMax + '</span>.';
}

//Update
function Update() {
    let HpEx = document.getElementById("przeciwnikHp");
    let Hpx = document.getElementById("bochaterHp");

    Hpx.innerText = Hp;
    HpEx.innerText = HpE;
    
    if(HpE <= 99){
       HpEx.style.right = "19.6%";      
    }
    else if(HpE >= 100){
        HpEx.style.right = "19.2";
    }

    if(Hp <= 99){
        Hpx.style.left = "19%"
    }
    else if(Hp >= 100){
        Hpx.style.left = "18.7%"
    }
    if(HpE <= 0){
        enemyZgon = true;
        tura = true;
        HpE = 100;
        ulepszeniaCall();
    }
    if(Hp > maxHp){
        Hp = maxHp;
    }
}

//Start
document.addEventListener('DOMContentLoaded', function () {
    Ulepszenia();
    Komunitkatyy();
    animateSprites();
    Update();

    currentFrame1 = updateSprite(sprite1, currentFrame1, totalFrames1, sprite1Width, sprite1Height, 'Assets/Bochater/Idle.png', false);

    var audio = document.getElementById("audio");

    if (audio.paused) {
        audio.play();
    } else {
        audio.pause();
    }
})

//Sprity
function animateSprites() {
    setInterval(function () {
        //Gracz
        if(state == 'idle') {
            currentFrame1 = updateSprite(sprite1, currentFrame1, totalFrames1, sprite1Width, sprite1Height, 'Assets/Bochater/Idle.png', false);
            currentFrame2 = updateSprite(sprite2, currentFrame2, totalFrames2, sprite2Width, sprite2Height, 'Assets/Enemy/Medieval_Warrior_Pack/Sprites/Idle.png', false);
        }
        else if(state == 'fight') {
            currentFrame1 = updateSprite(sprite1, currentFrame1, 7, sprite1Width, sprite1Height, 'Assets/Bochater/Attack1.png', false);
            currentFrame2 = updateSprite(sprite2, currentFrame2, totalFrames2, sprite2Width, sprite2Height, 'Assets/Enemy/Medieval_Warrior_Pack/Sprites/Idle.png', false);
            if (currentFrame1 === totalFrames1 - 1) {
                currentFrame1 = 0;
                state = 'idle';
            }
        }
        else if(state == 'hit') {
            currentFrame1 = updateSprite(sprite1, currentFrame1, 4, sprite1Width, sprite1Height, 'Assets/Bochater/hit.png', false);
            currentFrame2 = updateSprite(sprite2, currentFrame2, totalFrames2, sprite2Width, sprite2Height, 'Assets/Enemy/Medieval_Warrior_Pack/Sprites/Idle.png', false);
            if (currentFrame1 === totalFrames1 - 1) {
                currentFrame1 = 0;
                state = 'idle';
            }
        }
        else if(state == 'healll') {
            currentFrame1 = updateSprite(sprite1, currentFrame1, 3, sprite1Width, sprite1Height, 'Assets/Bochater/heal.png', false);
            currentFrame2 = updateSprite(sprite2, currentFrame2, totalFrames2, sprite2Width, sprite2Height, 'Assets/Enemy/Medieval_Warrior_Pack/Sprites/Idle.png', false);
            if (currentFrame1 === totalFrames1 - 1) {
                currentFrame1 = 0;
                state = 'idle';
            }
        }
        if (currentFrame2 === totalFrames2 - 1) {
            state = 'idle';
        }
    }, 100);
}

function updateSprite(sprite, currentFrame, totalFrames, width, height, imagePath) {
    var newPosition = -currentFrame * width;
    sprite.style.backgroundPosition = newPosition + 'px 0';

    sprite.style.width = width + 'px';
    sprite.style.height = height + 'px';

    sprite.style.backgroundImage = 'url(' + imagePath + ')';

    return (currentFrame + 1) % totalFrames;
}