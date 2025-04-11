<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rzuty kością</title>
    <link rel="stylesheet" href="kosci.css">
</head>

<body>
    <header>
        <h1>Symulator rzutów kością</h1>
    </header>
    <main>
        <section id="wyniki">
            <h2>Kliknij na kości, by nimi rzucić</h2>
            <h3>Zdobywasz punkt, gdy suma oczek wynosi 7</h3>
            <p>Wynik: <span id="wynik">2</span></p>
            <div id="kostki" onclick="losuj()">
                <img id="kosc1" src="assets/1.png" alt="Kość 1">
                <img id="kosc2" src="assets/1.png" alt="Kość 2">
            </div>
        </section>
        <aside>
            <h2>Zarejestruj gracza:</h2>
            <form method="post" action="index.php">
                <label for="imie">Imię:</label>
                <input type="text" id="imie" name="imie"><br>
                <label for="wiek">Wiek:</label>
                <input type="number" id="wiek" name="wiek" min="15">
                <button type="submit">Zarejestruj</button>
            </form>
            <?php
            $polaczenie = mysqli_connect("localhost", "root", "", "kosci");

            if (isset($_POST['imie']) && isset($_POST['wiek']) && !empty($_POST['imie']) && !empty($_POST['wiek'])) {
                $imie = $_POST['imie'];
                $wiek = $_POST['wiek'];
                $zapytanie = "INSERT INTO gracze (imie, wiek) VALUES ('$imie', $wiek)";
                mysqli_query($polaczenie, $zapytanie);
            }

            $wynik = mysqli_query($polaczenie, "SELECT * FROM gracze ORDER BY ID_gracza DESC LIMIT 1");
            $ostatni_gracz = mysqli_fetch_assoc($wynik);
            ?>
            <h3>Ostatni zarejestrowany gracz:</h3>
            <ul>
                <li>Imię: <?php echo $ostatni_gracz['imie'] ?? 'Brak'; ?></li>
                <li>Wiek: <?php echo $ostatni_gracz['wiek'] ?? 'Brak'; ?></li>
                <li>Data rejestracji: <?php echo $ostatni_gracz['data_rejestracji'] ?? 'Brak'; ?></li>
            </ul>
        </aside>
    </main>
    <footer>
        <h4>Symulator wykonał: Aleksander Staszków</h4>
    </footer>
    <script src="script.js"></script>
</body>

</html>