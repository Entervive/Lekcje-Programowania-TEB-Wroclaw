let x = document.getElementById("howw");
let y = document.getElementById("opcje");
let z = document.getElementById("mainbox");
let v = document.getElementById('text');

function how() {
    x.style.display = 'block';
    y.style.display = 'none';
    z.style.width = '600px';
    z.style.height = '500px'
    v.style.display = 'block';
    z.classList.add('animate__animated', 'animate__fadeIn', 'animate__slower');
}

function back() {
    z.style.width = '400px';
    z.style.height = '200px'
    x.style.display = 'none';
    y.style.display = 'block';
    v.style.display = 'none';
    z.classList.remove('animate__animated', 'animate__fadeIn', 'animate__slower');
}
