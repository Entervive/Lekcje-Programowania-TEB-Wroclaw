# Kino "Tytan"

## Opis projektu

Projekt przedstawia prostą aplikację internetową stworzoną w języku PHP, która umożliwia zarządzanie produktami w sklepie kina "Tytan". Aplikacja pozwala na wyświetlanie listy produktów oraz dodawanie nowych towarów do bazy danych.

## Funkcjonalności

1. **Strona główna (`index.php`)**:

   - Wyświetla listę produktów w formie tabeli.
   - Pobiera dane z bazy danych MySQL.
   - Prezentuje szczegóły każdego produktu, takie jak: ID, nazwa, cena, opis oraz zdjęcie.

2. **Dodawanie towarów (`dodajtowary.php`)**:

   - Formularz umożliwiający dodanie nowego produktu do bazy danych.
   - Dane produktu: nazwa, cena (zł i gr), opis, zdjęcie (nazwa pliku).
   - Walidacja danych wprowadzonych przez użytkownika.

3. **Nagłówek i stopka**:

   - Nagłówek (`header.php`) zawiera tytuł strony oraz linki nawigacyjne.
   - Stopka (`footer.php`) wyświetla autora projektu oraz aktualną datę.

4. **Stylizacja**:
   - Plik `style.css` definiuje wygląd strony, w tym tabel, formularzy i linków.

## Instrukcja uruchomienia

1. Skopiuj pliki projektu na serwer z obsługą PHP i MySQL (np. XAMPP, WAMP).
2. Utwórz bazę danych o nazwie `kinoaleksanderstaszkow` i tabelę `produkt`:
   ```sql
   CREATE TABLE produkt (
       ID INT AUTO_INCREMENT PRIMARY KEY,
       Nazwa VARCHAR(255) NOT NULL,
       Cena DECIMAL(10,2) NOT NULL,
       Opis TEXT NOT NULL,
       Foto VARCHAR(255) NOT NULL
   );
   ```
3. Skonfiguruj dane połączenia z bazą w plikach `index.php` i `dodajtowary.php`
   - Ustaw odpowiednie dane użytkownika, hasło, nazwę bazy danych i hosta.
4. Otwórz stronę w przeglądarce:
   - `index.html` - Wyświetla listę produktów
   - `dodajtowary.html` - Umożliwa dodawanie nowych produktów

## Przykładowe dane testowe

Możesz dodać przykładowe dane do tabeli `produkt` za pomocą poniższego zapytania SQL:

```sql
INSERT INTO produkt (Nazwa, Cena, Opis, Foto) VALUES
('Popcorn', 12.50, 'Świeży popcorn maślany', 'popcorn'),
('Cola', 8.00, 'Napój gazowany 0.5L', 'cola'),
('Bilet na film', 25.00, 'Bilet na dowolny seans', 'bilet');
```

## Autor

Projekt został stworzony przez Aleksandra Staszków.

## Uwagi

- Projekt jest przeznaczony do nauki i nie powinien być używany w środowisku produkcyjnym bez odpowiednich zabezpieczeń.
- Hasła i dane połączenia z bazą danych powinny być przechowywane w plikach konfiguracyjnych poza katalogiem publicznym.
