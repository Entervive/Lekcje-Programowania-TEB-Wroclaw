# Sprawdzanie Haseł za pomocą RegEx

## Opis projektu

Ten projekt został stworzony w celu nauki podstawowych zasad walidacji haseł przy użyciu wyrażeń regularnych (RegEx) w języku PHP. Aplikacja pozwala użytkownikowi wprowadzić hasło i sprawdza, czy spełnia ono określone kryteria bezpieczeństwa.

## Funkcjonalności

- Formularz do wprowadzania hasła.
- Walidacja hasła za pomocą wyrażeń regularnych:
  - Obecność co najmniej jednej wielkiej litery.
  - Obecność co najmniej jednej małej litery.
  - Obecność co najmniej jednej cyfry.
  - Obecność co najmniej jednego znaku specjalnego (np. `!`, `@`, `#`).
  - Minimalna długość hasła: 10 znaków.
- Wyświetlanie wyników walidacji za pomocą ikon:
  - ✅ - warunek spełniony.
  - ❗ - warunek niespełniony.

## Technologie

- **PHP**: Logika aplikacji.
- **HTML**: Struktura strony.
- **CSS**: Stylizacja (z wykorzystaniem zewnętrznego pliku `style.css`).
- **Bootstrap Icons**: Ikony do wizualizacji wyników walidacji.

## Jak uruchomić projekt?

1. Skopiuj pliki projektu na serwer obsługujący PHP (np. XAMPP, WAMP).
2. Otwórz plik `index.php` w przeglądarce.
3. Wprowadź hasło w formularzu i kliknij "Sprawdź".
4. Wyniki walidacji zostaną wyświetlone na stronie.

## Struktura projektu

- `index.php` - główny plik aplikacji.
- `style.css` - plik stylów CSS.
- `README.md` - dokumentacja projektu.

## Przykładowe kryteria walidacji

- **Hasło:** `Test123!@#`

  - Wielka litera: ✅
  - Mała litera: ✅
  - Cyfra: ✅
  - Znak specjalny: ✅
  - Długość: ✅

- **Hasło:** `abc`
  - Wielka litera: ❗
  - Mała litera: ✅
  - Cyfra: ❗
  - Znak specjalny: ❗
  - Długość: ❗

## Autor

Projekt wykonany przez **Aleksander Staszków**.

## Licencja

Projekt dostępny na licencji MIT. Możesz go dowolnie modyfikować i udostępniać.
