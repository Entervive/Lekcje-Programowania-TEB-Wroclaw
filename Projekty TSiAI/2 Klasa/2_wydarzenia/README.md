# Zdarzenia JS

## Opis projektu

Projekt **Zdarzenia JS** to zbiór przykładów i ćwiczeń związanych z obsługą zdarzeń w JavaScript. Zawiera interaktywne elementy, takie jak formularze, przyciski, zmiana kolorów, oraz inne funkcjonalności, które demonstrują wykorzystanie zdarzeń w przeglądarce.

### Pliki główne

- **`index.html`**  
  Główna strona projektu, zawierająca sekcje z przykładami zdarzeń, takich jak `onload`, `onmousedown`, `onmouseup`, itp.

- **`script.js`**  
  Skrypt JavaScript obsługujący zdarzenia, takie jak zmiana koloru przycisków (`changeColor`, `changeBack`) oraz licznik zmian w polu tekstowym (`countChanges`).

- **`style.css`**  
  Plik stylów CSS definiujący wygląd strony.

- **`fox.jpg`**  
  Obrazek używany w przykładzie zdarzenia `onload`.

- **`zadanie.html`**  
  Strona z dodatkowymi zadaniami do wykonania.

### Folder `zadania`

- **`zadania/index.html`**  
  Formularz z polami tekstowymi, przyciskami i innymi elementami interaktywnymi. Obsługuje zdarzenia, takie jak `onfocus`, `onblur`, `onchange`, `onmousedown`, `onmouseup`.

- **`zadania/script.js`**  
  Skrypt JavaScript obsługujący zdarzenia w formularzu, takie jak zmiana koloru strony (`schizofremia`), przesyłanie danych (`przeslij`), oraz resetowanie stylów (`czystaDemencja`).

- **`zadania/style.css`**  
  Plik stylów CSS dla formularza w folderze `zadania`.

## Funkcjonalności

- **Zmiana koloru przycisków**  
  Przyciski zmieniają kolor na czerwony po naciśnięciu (`onmousedown`) i wracają do zielonego po zwolnieniu (`onmouseup`).

- **Licznik zmian w polu tekstowym**  
  Funkcja `countChanges` zlicza zmiany wprowadzone w polu tekstowym i wyświetla ich liczbę.

- **Formularz interaktywny**  
  Formularz w `zadania/index.html` obsługuje zdarzenia, takie jak:

  - `onfocus` i `onblur` dla pól tekstowych.
  - `onchange` dla wyboru koloru.
  - `onmousedown` i `onmouseup` dla przycisków.

- **Zdarzenie `onload`**  
  Wyświetla alert po załadowaniu obrazka `fox.jpg`.

## Jak uruchomić projekt?

1. Otwórz plik `index.html` w przeglądarce, aby zobaczyć główną stronę projektu.
2. Przejdź do `zadania/index.html`, aby przetestować formularz interaktywny.
3. Edytuj pliki `script.js` lub `zadania/script.js`, aby dodać własne zdarzenia i funkcjonalności.

## Autor

Zadanie został rozwiązane przez **Aleksandra Staszków**. Wstęp i treść zadania przygotowane przez **Pana Adama Kwiatkowskiego** w ramach nauki JavaScript i obsługi zdarzeń w przeglądarce.
