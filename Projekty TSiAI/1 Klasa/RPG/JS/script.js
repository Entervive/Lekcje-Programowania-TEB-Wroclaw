//Wartości
var Atak = 15;
let Atakmoc = 10;
let gwarantowanyAtak = 4;
let tura = true;
let oldEnemyNumber = 1;

var Hp = 100;
let maxHpE = 80;
var HpE = 80;
let maxHp = 100;
let przeciwnikMoc = 8;
let przeciwnikGwarantowany = 6;

let przeciwnikHeal = 5;
let przeciwnikHealMoc = 15;
let przeciwnikGwarantowanyHeal = 1;
let Heal = 5;
let Healmoc = 15;
let gwarantowanyHeal = 5;

let nowyHealMoc = 4;
let nowyGwarantowanyHeal = 5;

// let player = new Object
//player.hp = 50

let nowyAtakMoc = 5;
let nowyGwarantowanyAtak = 5;

let noweMaxHp = 110;

let tarcza = false;
let enemyTarcza = false;
let tarczaAtak = 0;
let enemyTarczaAtak = 0;

let wynikDisplay = document.getElementById('wynik');
var Komunitkaty = ['<p>O nie! Napotkałeś kogoś kto szuka walki</p>', '<p>Przeciwnik wyskakuje nagle z krzaka</p>', '<p>Szukasz swoich mikstur gdy nagle wpadasz w zasadzke!</p>'];
let upg = document.getElementById('up');
var sprite1 = document.getElementById('sprite1');
var sprite2 = document.getElementById('sprite2');
let infoo = document.getElementById('info');
let state = 'idle';
let enemyState = 'idle';
let attackAnim = 1;

let heroAtakAnim = 1;
let enemyDemage = 10;
let enemyZgon = false;

var sprite1Width = 180;
var sprite1Height = 180;
var sprite2Width = 150;
var sprite2Height = 150;

let totalFrames1 = 11;
let totalFrames2 = 8;

let currentFrame1 = 0;
let currentFrame2 = 0;

let enemyNumber = 1;
let score = 0;

//Akcje Bochater
function Atakk() {
    if(tura == true) {
        if(enemyTarcza == true){
            Atak = Math.floor((Math.random() * Atakmoc) + 1 + gwarantowanyAtak);
            heroAtakAnim = Math.floor((Math.random() * 2) + 1);
            tarczaAtak = (50 / 100) * Atak;
            tarczaAtak = Math.floor(tarczaAtak);
            HpE -= tarczaAtak;
            currentFrame1 = 0;
            state = 'fight';
            currentFrame2 = 0;
            enemyState = 'hit';
            console.log(Atak);
            atakbox.innerText = "Przeciwnik miał podniesioną tarcze zadajesz " + tarczaAtak + " swojemu przeciwnikowi!";
            tura = false
            enemyTarcza = false
            Update();
        }
        else if(enemyTarcza == false){
            Atak = Math.floor((Math.random() * Atakmoc) + 1 + gwarantowanyAtak);
            heroAtakAnim = Math.floor((Math.random() * 2) + 1);
            atakbox.innerText = "Zadałeś " + Atak + " swojemu przeciwnikowi!";
            HpE -= Atak;
            currentFrame2 = 0;
            enemyState = 'hit';
            currentFrame1 = 0;
            state = 'fight';
            tura = false
            Update();
        }
    }
}

function Def() {
    if(tura == true) {
        atakbox.innerText = "Podniosleś swoją tarczę przeciwnik, kiedy cię zatakuje zada ci mniej obrażeń."
        currentFrame1 = 0;
        state = 'hit';
        tarcza = true;
        tura = false;
        Update();
    }
}

function Heall() {
    if(tura == true) {
        if(maxHp <= Hp){
            tura = false;
            atakbox.innerText = "Masz już MAX swojego HP. Potka nie została użyta, ale tura tak :)";
        }
        else if(maxHp > Hp){
            Heal = Math.floor((Math.random() * Healmoc) + 3 + gwarantowanyHeal)
            atakbox.innerText = "Uleczyłeś się za " + Heal + '.';
            Hp += Heal;
            currentFrame1 = 0;
            state = 'healll';
            tura = false;
        }
        Update();
    }
}

//Akcje Enemy
function enemyTuraa(){
    enemyTuraWybor = Math.floor((Math.random() * 3) + 1);
    console.log(enemyTuraWybor);
    if(tura == false){
        if(enemyTuraWybor == 1){
            //Atak
            if(tarcza == true){
                if(enemyNumber == 4){
                    attackAnim = Math.floor((Math.random() * 2) + 1)
                    currentFrame2 = 0;
                    enemyState = 'attack'
                }
                else if(enemyNumber == 3){
                    attackAnim = Math.floor((Math.random() * 2) + 1)
                    currentFrame2 = 0;
                    enemyState = 'attack' 
                }
                else if(enemyNumber == 1){
                    attackAnim = Math.floor((Math.random() * 4) + 1)
                    currentFrame2 = 0;
                    enemyState = 'attack'
                }
                enemyDemage = Math.floor((Math.random() * przeciwnikMoc) + przeciwnikGwarantowany);
                enemyTarczaAtak = (50 / 100) * enemyDemage;
                enemyTarczaAtak = Math.floor(enemyTarczaAtak);
                Hp -= enemyTarczaAtak;
                tura = true;
                tarcza = false;
                atakbox.innerText = "Miałeś podniesioną tarczę. Przeciwnik zadaje ci " + enemyTarczaAtak + ' obrażeń';
                Update();
            }
            else if(tarcza == false){
                enemyState = 'attack'
                enemyDemage = Math.floor((Math.random() * przeciwnikMoc) + przeciwnikGwarantowany);
                Hp -= enemyDemage;
                currentFrame2 = 0;
                tura = true;
                atakbox.innerText = "Przeciwnik zadaje ci " + enemyDemage + ' obrażeń';
                Update();
            }
        }
        else if(enemyTuraWybor == 2){
            //Def
            if(enemyTarcza == true){
                if(tarcza == true){
                    if(enemyNumber == 4){
                        attackAnim = Math.floor((Math.random() * 2) + 1)
                        currentFrame2 = 0;
                        enemyState = 'attack'
                    }
                    else if(enemyNumber == 3){
                        attackAnim = Math.floor((Math.random() * 2) + 1)
                        currentFrame2 = 0;
                        enemyState = 'attack' 
                    }
                    else if(enemyNumber == 1){
                        attackAnim = Math.floor((Math.random() * 4) + 1)
                        currentFrame2 = 0;
                        enemyState = 'attack'
                    }
                    enemyDemage = Math.floor((Math.random() * przeciwnikMoc) + przeciwnikGwarantowany);
                    enemyTarczaAtak = (50 / 100) * enemyDemage;
                    enemyTarczaAtak = Math.floor(enemyTarczaAtak);
                    Hp -= enemyTarczaAtak;
                    tura = true;
                    tarcza = false;
                    atakbox.innerText = "Miałeś podniesioną tarczę. Przeciwnik zadaje ci " + enemyTarczaAtak + ' obrażeń';
                    Update();
                }
                else if(tarcza == false){
                    enemyState = 'attack'
                    enemyDemage = Math.floor((Math.random() * przeciwnikMoc) + przeciwnikGwarantowany);
                    Hp -= enemyDemage;
                    currentFrame2 = 0;
                    tura = true;
                    atakbox.innerText = "Przeciwnik zadaje ci " + enemyDemage + ' obrażeń';
                    Update();
                }
            }
            else if(enemyTarcza == false){
                enemyTarcza = true;
                tura = true;
                atakbox.innerText = "Przeciwnik podnośi swoją tarcze. Przy twoim następnym ataku zadasz mu mniej obrażeń."
                Update();
            }
        }
        else if(enemyTuraWybor == 3){
            //Heal
            przeciwnikHeal = Math.floor((Math.random() * przeciwnikHealMoc) + przeciwnikGwarantowanyHeal);
            if(HpE >= maxHpE){
                if(tarcza == true){
                    if(enemyNumber == 4){
                        attackAnim = Math.floor((Math.random() * 2) + 1)
                        currentFrame2 = 0;
                        enemyState = 'attack'
                    }
                    else if(enemyNumber == 3){
                        attackAnim = Math.floor((Math.random() * 2) + 1)
                        currentFrame2 = 0;
                        enemyState = 'attack' 
                    }
                    else if(enemyNumber == 1){
                        attackAnim = Math.floor((Math.random() * 4) + 1)
                        currentFrame2 = 0;
                        enemyState = 'attack'
                    }
                    enemyDemage = Math.floor((Math.random() * przeciwnikMoc) + przeciwnikGwarantowany);
                    enemyTarczaAtak = (50 / 100) * enemyDemage;
                    enemyTarczaAtak = Math.floor(enemyTarczaAtak);
                    Hp -= enemyTarczaAtak;
                    tura = true;
                    tarcza = false;
                    atakbox.innerText = "Miałeś podniesioną tarczę. Przeciwnik zadaje ci " + enemyTarczaAtak + ' obrażeń';
                    Update();
                }
                else if(tarcza == false){
                    enemyState = 'attack'
                    enemyDemage = Math.floor((Math.random() * przeciwnikMoc) + przeciwnikGwarantowany);
                    Hp -= enemyDemage;
                    currentFrame2 = 0;
                    tura = true;
                    atakbox.innerText = "Przeciwnik zadaje ci " + enemyDemage + ' obrażeń';
                    Update();
                }
                Update();
            }
            else if(HpE < maxHpE){
                HpE += przeciwnikHeal;
                currentFrame2 = 0;
                enemyState = 'healing';
                atakbox.innerText = "Przeciwnik wyciąga swoją miksture. Dzięki niej leczy się za " + przeciwnikHeal + ' punktów';
                tura = true;
                Update();
            }
        }
    }
}
function newEnemy(){
    enemyState = 'idle';
    score += 1;
    oldEnemyNumber = enemyNumber;
    enemyNumber = Math.floor((Math.random() * 3) + 1);
    if(oldEnemyNumber == enemyNumber){
        enemyNumber = 2;
    }
    if(score == 2){
        przeciwnikMoc = 8;
        przeciwnikGwarantowany = 6;
        przeciwnikHealMoc = 10;
        przeciwnikGwarantowanyHeal = 5;
        maxHpE = 80;
        HpE = 80;
    }
    else if(score == 3){
        przeciwnikMoc = 12;
        przeciwnikGwarantowany = 2;
        przeciwnikHealMoc = 20;
        przeciwnikGwarantowanyHeal = 5;
        maxHpE = 120;
        HpE = 120;
    }
    else if(score == 6){
        przeciwnikMoc = 10;
        przeciwnikGwarantowany = 4;
        przeciwnikHealMoc = 15;
        przeciwnikGwarantowanyHeal = 5;
        maxHpE = 100;
        HpE = 100;
    }
    else if(score == 8){
        przeciwnikMoc = (Math.floor(Math.random() * 15) + 5);
        przeciwnikGwarantowany = Math.floor(Math.random() * 10);
        przeciwnikHealMoc = (Math.floor(Math.random() * 25) + 5);
        przeciwnikGwarantowanyHeal = Math.floor(Math.random() * 10);
        maxHpE = (Math.floor(Math.random() * 150) + 50);
        HpE = maxHpE;
    }
    else if(score == 10){
        enemyNumber = 4;
        przeciwnikMoc = 20;
        przeciwnikGwarantowany = 10;
        przeciwnikHealMoc = 30;
        przeciwnikGwarantowanyHeal = 10;
        maxHpE = 200;
        HpE = 200;
    }
    else if(score == 11){
        window.location.replace('end.html')
    }
    Update();
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
    Hp += 25;
    upg.style.display = 'block';
    upg.style.opacity = '1';
    upg.style.top = '33%';
    nowyGwarantowanyAtak = Math.floor((Math.random() * 2) + 1);
    nowyAtakMoc = nowyAtakMoc + nowyGwarantowanyAtak;
    nowyGwarantowanyHeal = Math.floor((Math.random() * 2) + 1);
    nowyHealMoc = nowyHealMoc + nowyGwarantowanyHeal
    Update();
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
    noweMaxHp += 10;
    atakbox.innerText = "Ulepszasz swoje HP. Wynosi one teraz " + Hp + '.';
    ulepszeniaBack();
    Update();
}

function ulepszAtk(){
    Healmoc += nowyHealMoc;
    gwarantowanyAtak += nowyGwarantowanyAtak;
    atakbox.innerHTML = "Ulepszasz swoje ostrze.<br> Będziesz zadawał swoim przeciwnikom teraz <span>" + gwarantowanyAtak + '</span>-<span>' + Healmoc + '</span>.'
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
    infoo.innerHTML = 'Ulepszasz pojemność twoich mikstur.<br> Będziesz leczył się więcej o około ' + '<span>' + (gwarantowanyHeal + nowyGwarantowanyHeal) + '</span>' + '-' + '<span>' + (Healmoc + nowyHealMoc) + '</span>' + '<br> lub maksymalne leczenie ' + '<span>' + nowyMaxHeal + '</span>' + '.';
}

function infoHp(){
    infoo.style.opacity = '1';
    upg.style.width = '500px';
    upg.style.height = '200px';
    upg.style.left = '32%'
    infoo.innerHTML = 'Ulepszasz swoje maksymalne HP.<br> Jednocześnie leczysz się do maksymalnego zdrowia.<br> Twoje zdrowie wzrasta o <span> 10 </span> punktów.';
}

function infoAtk(){
    let nowyAtakMax = nowyGwarantowanyAtak + nowyAtakMoc;
    infoo.style.opacity = '1';
    upg.style.width = '500px';
    upg.style.height = '200px';
    upg.style.left = '32%'
    infoo.innerHTML = 'Ulepszysz swoją broń.<br> będziesz zadawał pomiędzy <span>' + (gwarantowanyAtak + nowyGwarantowanyAtak) + '</span>-<span>' + (Atakmoc + nowyAtakMoc) + '</span>obrażeń' + '<br> lub maksymalny atak <span>' + nowyAtakMax + '</span>.';
}

//Update
function Update() {
    wynikDisplay.innerHTML = '<p>Wynik ' + score + '<p>';
    let HpEx = document.getElementById("przeciwnikHp");
    let Hpx = document.getElementById("bochaterHp");
    
    if(HpE <= 99){
       HpEx.style.right = "19.6%";      
    }
    else if(HpE <= 9){
        Hpx.style.right = "20%"
    }
    else if(HpE >= 100){
        HpEx.style.right = "19.2%";
    }

    if(Hp <= 99){
        Hpx.style.left = "19%"
    }
    else if(Hp <= 9){
        Hpx.style.left = "19.4%"
    }
    else if(Hp >= 100){
        Hpx.style.left = "18.7%"
    }
    if(HpE <= 0){
        currentFrame2 = 0;
        enemyState = 'dead';
        enemyZgon = true;
        tura = true;
        HpE = 100;
        ulepszeniaCall();
    }
    else if(HpE > maxHpE){
        HpE = maxHpE;
    }
    if(Hp > maxHp){
        Hp = maxHp;
    }
    if(enemyNumber == 1){
        sprite2.style.right = '10%';
        sprite2.style.top = '43%';
    }
    if(enemyNumber == 2){
        sprite2.style.right = '15%';
        sprite2.style.top = '50%';
    }
    if(enemyNumber == 3){
        sprite2.style.top = '25%';
        sprite2.style.right = '4%'
    }
    if(enemyNumber == 4){
        sprite2.style.top = '38%';
        sprite2.style.right = '12%';
    }

    Hpx.innerText = Hp;
    HpEx.innerText = HpE;

    setTimeout(enemyTuraa, 3000)
}

//Start
document.addEventListener('DOMContentLoaded', function () {
    Ulepszenia();
    Komunitkatyy();
    animateBochater();
    animateEnemy();
    Update();

    currentFrame1 = updateSprite(sprite1, currentFrame1, totalFrames1, sprite1Width, sprite1Height, 'Assets/Bochater/Idle.png', false);

    let audio = document.getElementById("audio");

    if (audio.paused) {
        audio.play();
    } else {
        audio.pause();
    }
})

//Sprity
function animateBochater() {
    setInterval(function () {
        //Gracz
        if(state == 'idle') {
            currentFrame1 = updateSprite(sprite1, currentFrame1, 11, sprite1Width, sprite1Height, 'Assets/Bochater/Idle.png');
            totalFrames1 = 11;
        }
        else if(state == 'fight') {
            if(heroAtakAnim = 1){
                currentFrame1 = updateSprite(sprite1, currentFrame1, 7, sprite1Width, sprite1Height, 'Assets/Bochater/Attack1.png');
                totalFrames1 = 7;
                console.log('currentFrame1:', currentFrame1, 'totalFrames1:', totalFrames1);
                if (currentFrame1 === totalFrames1 - 1) {
                    console.log('currentFrame1:', currentFrame1, 'totalFrames1:', totalFrames1);
                    currentFrame1 = 0;
                    state = 'idle';
                }
            }
            else if(heroAtakAnim = 2){
                currentFrame1 = updateSprite(sprite1, currentFrame1, 7, sprite1Width, sprite1Height, 'Assets/Bochater/Attack2.png');
                totalFrames1 = 7;
                if (currentFrame1 === totalFrames1 - 1) {
                    console.log('currentFrame1:', currentFrame1, 'totalFrames1:', totalFrames1);
                    currentFrame1 = 0;
                    state = 'idle';
                }
            }
        }
        else if(state == 'hit') {
            currentFrame1 = updateSprite(sprite1, currentFrame1, 4, sprite1Width, sprite1Height, 'Assets/Bochater/hit.png');
            totalFrames1 = 4;
            if (currentFrame1 === totalFrames1 - 1) {
                currentFrame1 = 0;
                state = 'idle';
            }
        }
        else if(state == 'healll') {
            currentFrame1 = updateSprite(sprite1, currentFrame1, 3, sprite1Width, sprite1Height, 'Assets/Bochater/heal.png');
            totalFrames1 = 3;
            if (currentFrame1 === totalFrames1 - 1) {
                currentFrame1 = 0;
                state = 'idle';
            }
        }
        else if(state == 'dead'){
            currentFrame1 = updateSprite(sprite1, currentFrame1, 11, sprite1Width, sprite1Height, 'Assets/Bochater/Death.png');
            totalFrames1 = 11;
        }
    }, 100);
}
function animateEnemy(){
    setInterval(function (){
        //enemy
        if(enemyState == 'idle'){
            if(enemyNumber == 1){
                currentFrame2 = updateSprite(sprite2, currentFrame2, totalFrames2, sprite2Width, sprite2Height, 'Assets/Enemy/Medieval_Warrior_Pack/Sprites/Idle.png');
                totalFrames2 = 8;
            }
            else if(enemyNumber == 2){
                currentFrame2 = updateSprite(sprite2, currentFrame2, 10, 100, 100, 'Assets/Enemy/Huntress/Sprites/Character/Idle.png')
                totalFrames2 = 10;
            }
            else if(enemyNumber == 3){
                currentFrame2 = updateSprite(sprite2, currentFrame2, 8, 250, 250, 'Assets/Enemy/Evil_Wizard/Sprites/Idle.png')
                totalFrames2 = 8;
            }
            else if(enemyNumber == 4){
                currentFrame2 = updateSprite(sprite2, currentFrame2, 6, 155, 155, 'Assets/Enemy/Medieval_King_Pack/Idle.png')
                totalFrames2 = 6;
            }
        }
        else if(enemyState == 'attack'){
            if(enemyNumber == 1){
                if(attackAnim == 1){
                    currentFrame2 = updateSprite(sprite2, currentFrame2, 4, sprite2Width, sprite2Height, 'Assets/Enemy/Medieval_Warrior_Pack/Sprites/Attack1.png');
                    totalFrames2 = 4;
                    if (currentFrame2 === totalFrames2 - 1) {
                        currentFrame2 = 0;
                        enemyState = 'idle';
                    }
                }
                else if(attackAnim == 2){
                    currentFrame2 = updateSprite(sprite2, currentFrame2, 4, sprite2Width, sprite2Height, 'Assets/Enemy/Medieval_Warrior_Pack/Sprites/Attack2.png');
                    totalFrames2 = 4;
                    if (currentFrame2 === totalFrames2 - 1) {
                        currentFrame2 = 0;
                        enemyState = 'idle';
                    }
                }
                else if(attackAnim == 3){
                    currentFrame2 = updateSprite(sprite2, currentFrame2, 4, sprite2Width, sprite2Height, 'Assets/Enemy/Medieval_Warrior_Pack/Sprites/Attack3.png');
                    totalFrames2 = 4;
                    if (currentFrame2 === totalFrames2 - 1) {
                        currentFrame2 = 0;
                        enemyState = 'idle';
                    }
                }
                else if(attackAnim == 4){
                    currentFrame2 = updateSprite(sprite2, currentFrame2, 4, sprite2Width, sprite2Height, 'Assets/Enemy/Medieval_Warrior_Pack/Sprites/Attack4.png');
                    totalFrames2 = 4;
                    if (currentFrame2 === totalFrames2 - 1) {
                        currentFrame2 = 0;
                        enemyState = 'idle';
                    }
                }
            }
            else if(enemyNumber == 2){
                currentFrame2 = updateSprite(sprite2, currentFrame2, 10, 100, 100, 'Assets/Enemy/Huntress/Sprites/Character/Attack.png')
                totalFrames2 = 10;
                if (currentFrame2 === totalFrames2 - 1) {
                    currentFrame2 = 0;
                    enemyState = 'idle';
                }
            }
            else if(enemyNumber == 3){
                attackAnim = Math.floor((Math.random() * 4) + 1)
                if(attackAnim == 1){
                    currentFrame2 = updateSprite(sprite2, currentFrame2, 8, 250, 250, 'Assets/Enemy/Evil_Wizard/Sprites/Attack1.png')
                    totalFrames2 = 8;
                    if (currentFrame2 === totalFrames2 - 1) {
                        currentFrame2 = 0;
                        enemyState = 'idle';
                    }
                }
                else if(attackAnim == 2){
                    currentFrame2 = updateSprite(sprite2, currentFrame2, 8, 250, 250, 'Assets/Enemy/Evil_Wizard/Sprites/Attack2.png')
                    totalFrames2 = 8;
                    if (currentFrame2 === totalFrames2 - 1) {
                        currentFrame2 = 0;
                        enemyState = 'idle';
                    }
                }
            }
            else if(enemyNumber == 4){
                if(attackAnim == 1){
                    currentFrame2 = updateSprite(sprite2, currentFrame2, 6, 155, 155, 'Assets/Enemy/Medieval_King_Pack/Attack_1.png')
                    totalFrames2 = 6;
                    if (currentFrame2 === totalFrames2 - 1) {
                        currentFrame2 = 0;
                        enemyState = 'idle';
                    }
                }
                else if(attackAnim == 2){
                    currentFrame2 = updateSprite(sprite2, currentFrame2, 6, 155, 155, 'Assets/Enemy/Medieval_King_Pack/Attack_2.png')
                    totalFrames2 = 6;
                    if (currentFrame2 === totalFrames2 - 1) {
                        currentFrame2 = 0;
                        enemyState = 'idle';
                    }
                }
            }
        }
        else if(enemyState == 'hit'){
            console.log('huh');
            if(enemyNumber == 1){
                currentFrame2 = updateSprite(sprite2, currentFrame2, 4, sprite2Width, sprite2Height, 'Assets/Enemy/Medieval_Warrior_Pack/Sprites/Hit.png');
                totalFrames2 = 4;
                if (currentFrame2 === totalFrames2 - 1) {
                    currentFrame2 = 0;
                    enemyState = 'idle';
                }
            }
            else if(enemyNumber == 2){
                currentFrame2 = updateSprite(sprite2, currentFrame2, 3, 100, 100, 'Assets/Enemy/Huntress/Sprites/Character/Hit.png')
                totalFrames2 = 3;
                if (currentFrame2 === totalFrames2 - 1) {
                    currentFrame2 = 0;
                    enemyState = 'idle';
                }
            }
            else if(enemyNumber == 3){
                currentFrame2 = updateSprite(sprite2, currentFrame2, 3, 250, 250, 'Assets/Enemy/Evil_Wizard/Sprites/Hit.png')
                totalFrames2 = 3;
                if (currentFrame2 === totalFrames2 - 1) {
                    currentFrame2 = 0;
                    enemyState = 'idle';
                }
            }
            else if(enemyNumber == 4){
                console.log('currentFrame1:', currentFrame1, 'totalFrames1:', totalFrames1);
                currentFrame2 = updateSprite(sprite2, currentFrame2, 4, 155, 155, 'Assets/Enemy/Medieval_King_Pack/Hit.png')
                totalFrames2 = 4;
                if (currentFrame2 === totalFrames2 - 1) {
                    currentFrame2 = 0;
                    enemyState = 'idle';
                }
            }
        }
        else if(enemyState == 'dead'){
            if(enemyNumber == 1){
                console.log(enemyState)
                currentFrame2 = updateSprite(sprite2, currentFrame2, 6, sprite2Width, sprite2Height, 'Assets/Enemy/Medieval_Warrior_Pack/Sprites/Death.png', false);
                totalFrames2 = 6;
                if (currentFrame2 === totalFrames2 - 1) {
                    enemyState = 'idle';
                    currentFrame2 = 0;
                    newEnemy();
                }
            }
            else if(enemyNumber == 2){
                currentFrame2 = updateSprite(sprite2, currentFrame2, 10, 100, 100, 'Assets/Enemy/Huntress/Sprites/Character/Death.png', false)
                totalFrames2 = 10;
                if (currentFrame2 === totalFrames2 - 1) {
                    enemyState = 'idle';
                    currentFrame2 = 0;
                    newEnemy();
                }
            }
            else if(enemyNumber == 3){
                currentFrame2 = updateSprite(sprite2, currentFrame2, 7, 250, 250, 'Assets/Enemy/Evil_Wizard/Sprites/Hit.png', false)
                totalFrames2 = 7;
                if (currentFrame2 === totalFrames2 - 1) {
                    enemyState = 'idle';
                    currentFrame2 = 0;
                    newEnemy();
                }
            }
            else if(enemyNumber == 4){
                currentFrame2 = updateSprite(sprite2, currentFrame2, 11, 155, 155, 'Assets/Enemy/Medieval_King_Pack/Death.png', false)
                totalFrames2 = 11;
                if (currentFrame2 === totalFrames2 - 1) {
                    enemyState = 'idle';
                    currentFrame2 = 0;
                    newEnemy();
                }
            }
        }
        else if(enemyState = 'healing'){
            if(enemyNumber == 1){
                currentFrame2 = updateSprite(sprite2, currentFrame2, 4, sprite2Width, sprite2Height, 'Assets/Enemy/Medieval_Warrior_Pack/Sprites/heal.png');
                totalFrames2 = 4;
                if (currentFrame2 === totalFrames2 - 1) {
                    currentFrame2 = 0;
                    enemyState = 'idle';
                }
            }
            else if(enemyNumber == 2){
                currentFrame2 = updateSprite(sprite2, currentFrame2, 3, 100, 100, 'Assets/Enemy/Huntress/Sprites/Character/Heal.png')
                totalFrames2 = 3;
                if (currentFrame2 === totalFrames2 - 1) {
                    currentFrame2 = 0;
                    enemyState = 'idle';
                }
            }
            else if(enemyNumber == 3){
                currentFrame2 = updateSprite(sprite2, currentFrame2, 4, 250, 250, 'Assets/Enemy/Evil_Wizard/Sprites/Heal.png')
                totalFrames2 = 4;
                if (currentFrame2 === totalFrames2 - 1) {
                    currentFrame2 = 0;
                    enemyState = 'idle';
                }
            }
            else if(enemyNumber == 4){
                currentFrame2 = updateSprite(sprite2, currentFrame2, 4, 155, 155, 'Assets/Enemy/Medieval_King_Pack/Heal.png')
                totalFrames2 = 4;
                if (currentFrame2 === totalFrames2 - 1) {
                    currentFrame2 = 0;
                    enemyState = 'idle';
                }
            }
        }
    }, 150);
}
function deadEnemy(){
    setInterval( function (){
        
    })
}

function updateSprite(sprite, currentFrame, totalFrames, width, height, imagePath) {
    var newPosition = -currentFrame * width;
    sprite.style.backgroundPosition = newPosition + 'px 0';

    sprite.style.width = width + 'px';
    sprite.style.height = height + 'px';

    sprite.style.backgroundImage = 'url(' + imagePath + ')';

    return (currentFrame + 1) % totalFrames;
}