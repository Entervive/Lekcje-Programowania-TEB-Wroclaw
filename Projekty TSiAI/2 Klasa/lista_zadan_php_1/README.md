# Lista zadań PHP

## Opis projektu

Ten projekt zawiera zestaw zadań powtórzeniowych z języka PHP, które mają na celu utrwalenie umiejętności programowania w tym języku. Zadania obejmują różne aspekty PHP, takie jak obsługa formularzy, praca z bazą danych MySQL, ciasteczka, pętle i manipulacja danymi.

## Wymagania

- **XAMPP** lub inny serwer lokalny obsługujący PHP i MySQL.
- Baza danych `pogoda` (Niedostępna teraz na githubie🥹).
- Pliki projektu umieszczone w katalogu `htdocs` serwera XAMPP.

## Struktura projektu

- `lista_zadan_php.php` - Główny plik projektu zawierający wszystkie zadania.
- `liczby.php` - Obsługa formularza z zadania 1.
- `karta_gracza.php` - Obsługa formularza z zadania 3.
- `kontynenty.php` - Obsługa formularza z zadania 4.
- `rejestracja.php` - Obsługa formularza z zadania 5.
- `wyswietl_rejestracje.php` - Wyświetlanie zgłoszeń z zadania 5.
- `pomiary.php` - Wyświetlanie danych pomiarowych z zadania 6.
- `dodaj_pomiar.php` - Obsługa dodawania pomiarów z zadania 7.
- `wojewodztwa.php` - Wyświetlanie województw i temperatur z zadania 9.
- `losowy_pomiar.php` - Wyświetlanie losowego pomiaru z zadania 10.

## Instrukcja uruchomienia

1. Skopiuj wszystkie pliki projektu do katalogu `htdocs` w folderze instalacyjnym XAMPP.
2. Uruchom serwer Apache i MySQL w panelu sterowania XAMPP.
3. Zaimportuj bazę danych `pogoda` do MySQL za pomocą phpMyAdmin.
4. Otwórz przeglądarkę i przejdź do adresu `http://localhost/nazwa_folderu_projektu/lista_zadan_php.php`.

## Opis zadań

### Zadanie 1

Formularz umożliwiający podanie trzech liczb i wyświetlenie największej z nich.

### Zadanie 2

Pętla `while` generująca 20 liczb ciągu Fibonacciego.

### Zadanie 3

Formularz generujący "kartę gracza" na podstawie podanych danych.

### Zadanie 4

Formularz z opcjami `radio` i `checkbox`, wyświetlający obraz lub animację w zależności od wyboru.

### Zadanie 5

Formularz rejestracyjny dla mechanika samochodowego, zapisujący dane do pliku tekstowego.

### Zadanie 6

Formularz z listą miast z bazy danych oraz wyświetlanie danych pomiarowych dla wybranego miasta.

### Zadanie 7

Formularz umożliwiający dodanie wpisu do tabeli `pomiar` z walidacją danych.

### Zadanie 8

Skrypt sprawdzający, czy użytkownik był już na stronie, wykorzystując ciasteczka.

### Zadanie 9

Wyświetlanie województw w kolejności alfabetycznej oraz najwyższej zanotowanej temperatury.

### Zadanie 10

Wyświetlanie losowego wpisu z tabeli `pomiar` co 3 sekundy oraz licznik odświeżeń strony.

## Uwagi

- Upewnij się, że baza danych `pogoda` zawiera odpowiednie tabele i dane.
- W razie problemów z połączeniem z bazą danych, sprawdź konfigurację serwera MySQL i dane logowania w plikach PHP.

## Autor

- Aleksander Staszków
