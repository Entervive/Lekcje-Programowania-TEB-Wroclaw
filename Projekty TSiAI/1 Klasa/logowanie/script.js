// Pobranie referencji do elementów formularza
let usernameField = document.getElementById("username");
let passwordField = document.getElementById("password");
let robotCheckbox = document.getElementById("robot-check");

/**
 * Funkcja przechodzi do następnego kroku formularza.
 * @param {number} currentStep - Numer aktualnego kroku.
 * @param {number} nextStep - Numer następnego kroku.
 */
function navigateToStep(currentStep, nextStep) {
    let currentStepElement = document.getElementById(`step${currentStep}`);
    let nextStepElement = document.getElementById(`step${nextStep}`);

    // Walidacja danych w zależności od kroku
    if (currentStep === 1 && usernameField.value.trim() === "") {
        alert("Proszę wpisać nazwę użytkownika.");
        return;
    }
    if (currentStep === 2 && passwordField.value.trim() === "") {
        alert("Proszę wpisać hasło.");
        return;
    }
    if (currentStep === 3 && !robotCheckbox.checked) {
        alert("Proszę potwierdzić, że nie jesteś robotem.");
        return;
    }

    // Przejście do następnego kroku
    currentStepElement.classList.replace("active", "inactive");
    nextStepElement.classList.replace("inactive", "active");

    // Aktualizacja wiadomości powitalnej
    if (nextStep === 2) {
        updateWelcomeMessage();
    }
}

/**
 * Funkcja aktualizuje wiadomość powitalną na podstawie nazwy użytkownika.
 */
function updateWelcomeMessage() {
    let welcomeMessageElement = document.getElementById("welcome-message");
    welcomeMessageElement.innerText = `Witaj, ${usernameField.value}!`;
}