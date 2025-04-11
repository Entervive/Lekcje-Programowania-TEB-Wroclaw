// Zmienna przechowująca stan przycisków
let isLiked = false;
let isDisliked = false;

/**
 * Funkcja obsługująca kliknięcia przycisków "Lubię to" i "Nie lubię".
 * @param {boolean} like - True, jeśli kliknięto "Lubię to", False dla "Nie lubię".
 */
function toggleLike(like) {
    if (like) {
        // Obsługa kliknięcia "Lubię to"
        if (!isLiked) {
            document.getElementById('thumbs-up').innerHTML = getThumbsUpFilledIcon();
            document.getElementById('thumbs-down').innerHTML = getThumbsDownIcon();
            isLiked = true;
            isDisliked = false;
        } else {
            document.getElementById('thumbs-up').innerHTML = getThumbsUpIcon();
            isLiked = false;
        }
    } else {
        // Obsługa kliknięcia "Nie lubię"
        if (!isDisliked) {
            document.getElementById('thumbs-down').innerHTML = getThumbsDownFilledIcon();
            document.getElementById('thumbs-up').innerHTML = getThumbsUpIcon();
            isDisliked = true;
            isLiked = false;
        } else {
            document.getElementById('thumbs-down').innerHTML = getThumbsDownIcon();
            isDisliked = false;
        }
    }
}

// Funkcje zwracające ikony SVG
function getThumbsUpIcon() {
    return `<svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" fill="white" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16"><path d="..."></path></svg>`;
}

function getThumbsUpFilledIcon() {
    return `<svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" fill="white" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16"><path d="..."></path></svg>`;
}

function getThumbsDownIcon() {
    return `<svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" fill="white" class="bi bi-hand-thumbs-down" viewBox="0 0 16 16"><path d="..."></path></svg>`;
}

function getThumbsDownFilledIcon() {
    return `<svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" fill="white" class="bi bi-hand-thumbs-down-fill" viewBox="0 0 16 16"><path d="..."></path></svg>`;
}