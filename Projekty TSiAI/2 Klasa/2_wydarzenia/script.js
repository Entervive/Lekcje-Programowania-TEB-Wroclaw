let textarea = document.getElementById('textarea1')
let display = document.getElementById('changeCountDisplay')
let letterCount = 0

function countChanges() {
    letterCount += 1
    display.innerText = letterCount
}

function changeColor(event) {
    event.target.style.backgroundColor = 'red';
}

function changeBack(event) {
    event.target.style.backgroundColor = 'green';
}
