/**
 * Klasa obsługująca efekt pisania na stronie.
 * @param {HTMLElement} element - Element HTML, w którym wyświetlany jest tekst.
 * @param {Array} textArray - Tablica tekstów do wyświetlenia.
 * @param {number} typingDelay - Opóźnienie między zmianami tekstu.
 */
class TypewriterEffect {
    constructor(element, textArray, typingDelay) {
        this.textArray = textArray;
        this.element = element;
        this.loopIndex = 0;
        this.typingDelay = parseInt(typingDelay, 10) || 2000;
        this.currentText = '';
        this.isDeleting = false;
        this.type();
    }

    type() {
        const currentIndex = this.loopIndex % this.textArray.length;
        const fullText = this.textArray[currentIndex];

        // Obsługa usuwania lub dodawania tekstu
        if (this.isDeleting) {
            this.currentText = fullText.substring(0, this.currentText.length - 1);
        } else {
            this.currentText = fullText.substring(0, this.currentText.length + 1);
        }

        // Wyświetlanie tekstu w elemencie
        this.element.innerHTML = `<span class="wrap">${this.currentText}</span>`;

        let typingSpeed = 200 - Math.random() * 100;
        if (this.isDeleting) typingSpeed /= 2;

        // Przełączanie między dodawaniem a usuwaniem tekstu
        if (!this.isDeleting && this.currentText === fullText) {
            typingSpeed = this.typingDelay;
            this.isDeleting = true;
        } else if (this.isDeleting && this.currentText === '') {
            this.isDeleting = false;
            this.loopIndex++;
            typingSpeed = 500;
        }

        setTimeout(() => this.type(), typingSpeed);
    }
}

// Inicjalizacja efektu pisania po załadowaniu strony
window.onload = () => {
    const elements = document.getElementsByClassName('typewrite');
    for (let element of elements) {
        const textArray = JSON.parse(element.getAttribute('data-type'));
        const typingDelay = element.getAttribute('data-period');
        if (textArray) {
            new TypewriterEffect(element, textArray, typingDelay);
        }
    }
};