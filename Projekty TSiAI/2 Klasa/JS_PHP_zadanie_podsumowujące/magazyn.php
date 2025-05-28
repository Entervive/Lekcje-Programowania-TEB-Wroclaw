<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Wyszukiwarka plików</title>
</head>

<body>
    <heaer
        style="display: flex;justify-content: center;flex-direction: column;align-items: center; margin-bottom: 2vh;">
        <h1>Stany magazynowe</h1>
        <form method="GET" action="magazyn.php">
            <label for="szukaj">Szukaj produktu:</label>
            <input type="text" id="wyszukiwanie" name="szukaj" oninput="sprawdzanieTekstu()"
                placeholder="Wpisz nazwę produktu...">
            <input type="submit" id="przycisk" onclick="zmiana()" value="Szukaj">
        </form>
    </heaer>
    <main>
        <fieldset>
            <?php
            $polaczenie = mysqli_connect("localhost", "root", "", "stany_magazynowe");

            if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['szukaj']) && !empty($_GET['szukaj'])) {
                $produkt = $_GET['szukaj'];
                echo "<legend>Wyniki wyszukiwania: $produkt</legend>";
                $kwerenda = "SELECT nazwa_tow, stan_mag, cena_jedn FROM stany_magazynowe WHERE nazwa_tow LIKE '%$produkt%' ORDER BY stan_mag ASC;;";
                $zapytanie = mysqli_query($polaczenie, $kwerenda);

                echo "<table style='text-align: center; width: 100%;'>
                    <tr>
                        <th style='border-bottom: 1px solid;border-right: 1px solid;'>Nazwa towaru</th>
                        <th style='border-bottom: 1px solid;border-right: 1px solid;'>Stan magaynowy</th>
                        <th style='border-bottom: 1px solid;border-right: 1px solid;'>Cena Jednostkowa</th>
                    </tr>";

                while ($wynik = mysqli_fetch_row($zapytanie)) {
                    echo "<tr>";
                    echo "<td>" . $wynik[0] . "</td>";
                    echo "<td>" . $wynik[1] . "</td>";
                    echo "<td>" . $wynik[2] . "</td>";
                    echo "</tr>";
                }

                if (mysqli_num_rows($zapytanie) == 0) {
                    echo "<caption style='margin-bottom: 2vh;'>Brak wyników dla produktu: $produkt</caption>";
                } else {
                    echo "<caption style='margin-bottom: 2vh;'>Znaleziono " . mysqli_num_rows($zapytanie) . " wyniki.</caption>";
                }

                echo "</table>";

                $plik = fopen("historia_wyszukiwania.txt", "a");
                fwrite($plik, "$produkt \n");
                fclose($plik);
                mysqli_close($polaczenie);
            } else {
                echo "<legend>Wprowadź nazwę produktu, aby wyszukać jego stan magazynowy.</legend>";
                echo "<p style='text-align: center;'>Brak wyników wyszukiwania.</p>";
            }
            ?>
        </fieldset>
        <p style="text-align: center;">Wpisz nazwę produktu, aby wyszukać jego stan magazynowy.</p>
        <footer style="text-align: center;">
            <p>&copf; Aleksander Staszków</p>
        </footer>
    </main>
    <script>
        function sprawdzanieTekstu() {
            let wartoscFormularza = document.getElementById("wyszukiwanie").value;
            let dlugoscTekstu = parseInt(wartoscFormularza.length);
            dlugoscTekstu = Math.pow(dlugoscTekstu, 2);

            let losowaWartosc = Math.floor(Math.random() * 3) + 1;

            let $kolor = "";

            if (dlugoscTekstu < 255) {
                if (losowaWartosc == 1) {
                    $kolor = "rgb(" + dlugoscTekstu + ", 255, 255)";
                } else if (losowaWartosc == 2) {
                    $kolor = "rgb(" + "255, " + dlugoscTekstu + ", 255)";
                } else {
                    $kolor = "rgb(" + "255, 255, " + dlugoscTekstu + ")";
                }
            } else {
                dlugoscTekstu = 255;

                if (losowaWartosc == 1) {
                    $kolor = "rgb(" + dlugoscTekstu + ", 255, 255)";
                } else if (losowaWartosc == 2) {
                    $kolor = "rgb(" + "255, " + dlugoscTekstu + ", 255)";
                } else {
                    $kolor = "rgb(" + "255, 255, " + dlugoscTekstu + ")";
                }
            }

            console.log($kolor);
            document.getElementById("przycisk").style.backgroundColor = $kolor;
        }
    </script>
</body>

</html>