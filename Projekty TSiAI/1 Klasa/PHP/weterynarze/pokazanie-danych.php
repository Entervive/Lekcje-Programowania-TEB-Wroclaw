<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Weterynarz - Twoje Dane</title>
</head>

<body>
    <p>
        <?php
        // Pobranie danych z formularza
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $telefon = $_POST['telefon'];
        $email = $_POST['email'];
        $imieZwierzaka = $_POST['imie_zwierzaka'];
        $gatunek = $_POST['gatunek'];
        $dataWizyty = $_POST['data_wizyty'];

        // Zapis danych do pliku
        // Otworzenie pliku lub dodanie do istniejącego
        $plikWizyt = fopen("wizyty.txt", "a");
        // Dane do zapisania w pliku
        $daneDoZapisania = "Imię i Nazwisko: $imie $nazwisko, Telefon: $telefon, E-Mail: $email, Imię Zwierzaka: $imieZwierzaka, Gatunek: $gatunek, Data Wizyty: $dataWizyty\n";
        // Zapisanie danych do pliku
        fwrite($plikWizyt, $daneDoZapisania);
        // Zamknięcie pliku
        fclose($plikWizyt);

        // Wyświetlenie danych
        echo "<strong>Oto Twoje dane:</strong><br><br>";
        echo "Imię i Nazwisko: $imie $nazwisko<br>";
        echo "Numer telefonu: $telefon<br>";
        // Sprawdzenie poprawności maila
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "E-Mail: Nie podałeś maila lub jest nieprawidłowy<br>";
        } else {
            echo "E-Mail: $email<br>";
        }
        echo "Imię Zwierzaka: $imieZwierzaka<br>";
        echo "Gatunek: $gatunek<br>";
        echo "Data Wizyty: $dataWizyty<br>";
        ?>
    </p>
    <!-- Link do powrotu do formularza -->
    <a href="wizyty.php">Pokaż wszystkie wizyty</a>
</body>

</html>