# Web MySQL Integration

Prosty projekt strony internetowej z integracją bazy danych MySQL, umożliwiający zarządzanie użytkownikami, kategoriami, dostawcami, produktami, zamówieniami i recenzjami (operacje CRUD).

## Wymagania

- Serwer z PHP (np. XAMPP, WAMP)
- MySQL
- Przeglądarka internetowa

## Konfiguracja bazy danych

1. Uruchom MySQL i wykonaj skrypt z pliku `create_database.sql`, aby utworzyć bazę danych `users_db` oraz tabele: `users`, `categories`, `suppliers`, `products`, `orders`, `reviews`.
2. W pliku `db_connection.php` dostosuj dane dostępowe (`$username`, `$password`) do swojego środowiska MySQL.

## Struktura projektu

- `create_database.sql` - Skrypt SQL do tworzenia bazy danych, tabel i przykładowych danych.
- `db_connection.php` - Skrypt PHP do połączenia z bazą danych.
- `index.php` - Główna strona internetowa z front-endem i back-endem.

## Działanie

- **Użytkownicy**: Dodawanie, aktualizacja, usuwanie i wyświetlanie użytkowników.
- **Kategorie**: Zarządzanie kategoriami produktów.
- **Dostawcy**: Zarządzanie dostawcami produktów.
- **Produkty**: Dodawanie, aktualizacja, usuwanie i wyświetlanie produktów z powiązanymi kategoriami i dostawcami.
- **Zamówienia**: Zarządzanie zamówieniami z powiązanymi użytkownikami i produktami.
- **Recenzje**: Dodawanie, aktualizacja, usuwanie i wyświetlanie recenzji produktów.

## Uruchomienie

1. Umieść pliki w folderze serwera (np. `htdocs` w XAMPP).
2. Uruchom serwer i otwórz `index.php` w przeglądarce (np. `http://localhost/index.php`).

## Bezpieczeństwo

- Użyto prepared statements w PHP, aby zapobiec SQL injection.
- Foreign key constraints w bazie danych zapewniają integralność danych (np. nie można usunąć kategorii, jeśli istnieją powiązane produkty).
