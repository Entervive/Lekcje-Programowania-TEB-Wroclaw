<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Weterynarz - Wszystkie Wizyty</title>
</head>

<body>
    <div>
        <?php
        // Odczytanie i wyświetlenie wszystkich wizyt z pliku
        $plikWizyt = fopen("wizyty.txt", "r");
        // Sprawdzenie, czy plik został otwarty poprawnie
        while (!feof($plikWizyt)) {
            // Wczytanie linii z pliku
            $linia = fgets($plikWizyt);
            // Sprawdzenie, czy linia nie jest pusta 
            if (!empty(trim($linia))) {
                // Wyświetlenie linii
                echo htmlspecialchars($linia) . "<br>";
            }
        }
        // Zamknięcie pliku
        fclose($plikWizyt);
        ?>
    </div>
    <a href="index.php">Powrót</a>
</body>

</html>