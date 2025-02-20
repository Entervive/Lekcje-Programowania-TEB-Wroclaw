<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Kino - Dodawanie Towaru</title>
</head>
<header>
    <?php
        require 'include/header.php';
    ?>
</header>
<body>
    <form action="<?php echo ($_SERVER['PHP_SELF']); ?>" method="POST">
        <input type="text" id="Nazwa" placeholder="Nazwa" name="Nazwa" required><br>
        <input type="number" id="Cenazl" placeholder="Cena(ZŁ)" name="Cenazl" required>
        <input type="number" id="Cenagr" placeholder="Cena(GR)" name="Cenagr" required><br>
        <input type="text" id="Opis" placeholder="Opis" name="Opis" required><br>
        <input type="text" id="Foto" placeholder="Zdjęcie" name="Foto" required><br>
        <input type="submit" value="Dodaj towar do bazy">
    </form>
    <?php
        if(isset($_POST["Nazwa"]) && isset($_POST["Cenagr"]) && isset($_POST["Cenazl"])  && isset($_POST["Opis"]) && isset($_POST["Foto"])) {
            $Nazwa = $_POST["Nazwa"];
            $CenaGR = $_POST["Cenagr"];
            $CenaZL = $_POST["Cenazl"];
            $Opis = $_POST["Opis"];
            $Foto = $_POST["Foto"];
            $Cena = $CenaZL . "." . $CenaGR;

            $uzytkownik = "aleksanderstaszkow1tsa";
            $haslo = "TebWroclaw";
            $bazadanych = "kinoaleksanderstaszkow";
            $serwer = "localhost";

            $polaczenie =  new mysqli($serwer, $uzytkownik, $haslo, $bazadanych);

            $zapytanie = "INSERT INTO produkt VALUES (NULL, '" . $Nazwa . "', '" . $Cena . "', '" . $Opis . "', '" . $Foto . "')";
            mysqli_query($polaczenie, $zapytanie);
            echo "Dodano Towar " . $Nazwa . "<br>";
            echo "Użyte zapytanie <br>" . $zapytanie;

            mysqli_close($polaczenie);
        }
    ?>
</body>
<footer>
    <?php
        require 'include/footer.php';
    ?>
</footer>
</html>