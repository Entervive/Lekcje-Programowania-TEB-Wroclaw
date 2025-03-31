let index = 1;
let indexmin = 1;
let indexmax = 7;
let obraz = document.getElementById('obraz');

function nastepne() {
    if (index < indexmax) {
        index++;
        obraz.src = index + '.jpg';
    } else {
        index = indexmin;
        obraz.src = index + '.jpg';
    }
}

function poprzednie() {
    if (index > indexmin) {
        index--;
        obraz.src = index + '.jpg';
    } else {
        index = indexmax;
        obraz.src = index + '.jpg';
    }
}