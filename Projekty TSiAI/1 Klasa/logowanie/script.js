let login = document.getElementById("nazwa");
let haslo = document.getElementById("haslo");
let robot = document.getElementById("robot");

function next(currentStep, nextStep) {
    let cur = document.getElementById(currentStep);
    let next = document.getElementById(nextStep);

    if(login.value == "") {
        alert("Nic nie wpisałeś w logowaniu :(");
    } else if (currentStep == "2" && haslo.value == "") {
        alert("Podaj te hasło co?")
    }
    else if(currentStep == "3" && !robot.checked) {
        alert("Czyli jesteś robotem???")
    }
    else {
        cur.classList.replace("aktywne", "nieaktywne")
        next.classList.replace("nieaktywne", "aktywne")
        updateWartosci();
    }
}

function updateWartosci(){
    let witaj = document.getElementById("witaj");

    witaj.innerText = "Witaj " + login.value;
}
