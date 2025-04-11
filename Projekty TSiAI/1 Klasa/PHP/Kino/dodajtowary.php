<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Kino - Dodawanie Towaru</title>
</head>
<header>
    <?php
    // Wczytanie nagłówka strony
    require 'include/header.php';
    ?>
</header>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <!-- Formularz dodawania nowego towaru -->
        <input type="text" id="Nazwa" placeholder="Nazwa" name="Nazwa" required><br>
        <input type="number" id="CenaZL" placeholder="Cena (ZŁ)" name="CenaZL" required>
        <input type="number" id="CenaGR" placeholder="Cena (GR)" name="CenaGR" required><br>
        <input type="text" id="Opis" placeholder="Opis" name="Opis" required><br>
        <input type="text" id="Foto" placeholder="Zdjęcie (nazwa pliku)" name="Foto" required><br>
        <input type="submit" value="Dodaj towar do bazy">
    </form>
    <?php
    // Sprawdzenie, czy formularz został wysłany
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (!empty($_POST["Nazwa"]) && !empty($_POST["CenaZL"]) && !empty($_POST["CenaGR"]) && !empty($_POST["Opis"]) && !empty($_POST["Foto"])) {
            // Pobranie danych z formularza
            $productName = $_POST["Nazwa"];
            $priceZL = $_POST["CenaZL"];
            $priceGR = $_POST["CenaGR"];
            $description = $_POST["Opis"];
            $photo = $_POST["Foto"];
            $price = $priceZL . "." . $priceGR;

            // Dane do połączenia z bazą danych
            $dbUser = "aleksanderstaszkow1tsa";
            $dbPassword = "TebWroclaw";
            $dbName = "kinoaleksanderstaszkow";
            $dbHost = "localhost";

            // Nawiązanie połączenia z bazą danych
            $connection = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

            // Przygotowanie zapytania SQL do dodania produktu
            $query = $connection->prepare("INSERT INTO produkt (Nazwa, Cena, Opis, Foto) VALUES (?, ?, ?, ?)");
            $query->bind_param("ssss", $productName, $price, $description, $photo);

            // Wykonanie zapytania
            if ($query->execute()) {
                echo "Dodano towar: " . htmlspecialchars($productName) . "<br>";
            } else {
                echo "Błąd podczas dodawania towaru: " . $connection->error;
            }

            // Zamknięcie połączenia z bazą danych
            $query->close();
            $connection->close();
        }
    }
    ?>
</body>
<footer>
    <?php
    // Wczytanie stopki strony
    require 'include/footer.php';
    ?>
</footer>

</html>