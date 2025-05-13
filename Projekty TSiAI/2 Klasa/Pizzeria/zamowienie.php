<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pizzeria - Zamówienie</title>
</head>

<body>
    <header>
        <h1>Pizzeria Salmonela - Podsumowanie</h1>
        <img src="pizza.png" alt="Pizza" id="pizzaLogo">
    </header>
    <main style="width: 100% !important;">
        <?php
        if (isset($_POST['imie']) && isset($_POST['nazwisko']) && isset($_POST['rodzaj']) && isset($_POST['rozmiar']) && isset($_POST['extraSer'])) {
            $imie = htmlspecialchars($_POST['imie']);
            $nazwisko = htmlspecialchars($_POST['nazwisko']);
            $rodzaj = htmlspecialchars($_POST['rodzaj']);
            $rozmiar = htmlspecialchars($_POST['rozmiar']);
            $extraSer = htmlspecialchars($_POST['extraSer']);

            echo "<h2>Podsumowanie zamówienia</h2>";
            echo "<p>Imię: $imie</p>";
            echo "<p>Nazwisko: $nazwisko</p>";
            echo "<p>Rodzaj pizzy: $rodzaj</p>";
            echo "<p>Rozmiar pizzy: $rozmiar</p>";
            echo "<p>Dodatkowy ser: $extraSer</p>";

            $plik = fopen("orders.txt", "a");
            $plik = fwrite($plik, "Pizza $rodzaj, $rozmiar. Extra ser? $extraSer. Zamówienie odbierze $imie $nazwisko.\n");
        } else {
            echo "<h2>Błąd zamówienia</h2>";
        }
        ?>
        <a href="pizzeria.php" style="margin-top: 10px;">Powrót do formularza zamówienia</a>
    </main>
    <footer>
        <p>Stworozne przez: Aleksander Staszków</p>
        <button onclick="obrocPlacek()" style="margin-bottom: 10px;">Obróc placek</button><br>
    </footer>
    <script src="script.js"></script>
</body>

</html>