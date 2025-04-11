// Funkcja podświetlająca pole tekstowe (zdarzenie onfocus)
function highlightField(field) {
    field.style.backgroundColor = "yellow"; // Ustawienie tła na żółte
}

// Funkcja resetująca styl pola tekstowego (zdarzenie onblur)
function resetField(field) {
    field.style.backgroundColor = ""; // Przywrócenie domyślnego tła
}

// Funkcja zmieniająca kolor tła strony (zdarzenie onchange)
function changeBackgroundColor(color) {
    document.body.style.backgroundColor = color; // Zmiana koloru tła strony
}

// Funkcja zmieniająca kolor przycisku (zdarzenia onmousedown i onmouseup)
function changeButtonColor(button, color) {
    button.style.backgroundColor = color; // Zmiana koloru tła przycisku
}

// Funkcja walidująca adres e-mail (opcjonalna)
function validateEmail() {
    const emailField = document.getElementById("email");
    const email = emailField.value;

    // Prosta walidacja adresu e-mail
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert("Podaj poprawny adres e-mail!");
        emailField.focus();
    }
}

// Funkcja walidująca hasło (opcjonalna)
function validatePassword() {
    const passwordField = document.getElementById("password");
    const password = passwordField.value;

    // Sprawdzenie, czy hasło ma co najmniej 6 znaków
    if (password.length < 6) {
        alert("Hasło musi mieć co najmniej 6 znaków!");
        passwordField.focus();
    }
}

// Funkcja obsługująca przesłanie formularza
function handleSubmit(event) {
    event.preventDefault(); // Zapobiega domyślnemu przesłaniu formularza

    // Walidacja pól
    validateEmail();
    validatePassword();

    alert("Formularz został przesłany!");
}

// Dodanie obsługi zdarzenia submit do formularza
document.getElementById("interactiveForm").addEventListener("submit", handleSubmit);