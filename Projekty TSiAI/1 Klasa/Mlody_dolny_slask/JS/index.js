let motto = document.getElementById('motto');
let nav = document.getElementById('nav_logo');
let speed = 50;
let i = 0;
let text = 'To, że działasz, robi różnicę!';
let obecny_motyw = document.getElementById('obecny_motyw');

document.addEventListener('DOMContentLoaded', function () {
    motto.innerText = '';
    setTimeout(typeWriter, 800);
})

function typeWriter(){
    if (i < text.length) {
        motto.innerHTML += text.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
    }
}

function toggleTheme() {
    const htmlElement = document.documentElement;
    const currentTheme = htmlElement.getAttribute('data-bs-theme');

    if (currentTheme === 'light') {
        htmlElement.setAttribute('data-bs-theme', 'dark');
        nav.src = 'Assets/IMG/logo_horizontal_white.png';
        obecny_motyw.classList.remove('fas', 'fa-sun');
        obecny_motyw.classList.add('fas', 'fa-moon');
    } else {
        htmlElement.setAttribute('data-bs-theme', 'light');
        nav.src = 'Assets/IMG/logo_horizontal_black.png';
        obecny_motyw.classList.remove('fas', 'fa-moon');
        obecny_motyw.classList.add('fas', 'fa-sun');
    }
}
