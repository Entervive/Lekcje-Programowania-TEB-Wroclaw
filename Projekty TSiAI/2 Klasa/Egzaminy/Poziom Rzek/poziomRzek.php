<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Poziom rzek</title>
</head>

<body>
    <header><img src="obraz1.png" alt="Mapa Polski"></header>
    <header>
        <h1>Rzeki w województwie dolnośląskim</h1>
    </header>
    <nav>
        <form method="POST" action="poziomRzek.php">
            <input type="radio" name="stan" id="wszystkie" value="Wszystkie">
            <label for="stan" class="formatowanieTekstu">Wszystkie</label>
            <input type="radio" name="stan" id="stanOstrzegawczy" value="ponadOstrzegawczy">
            <label for="stanOstrzgawczy" class="formatowanieTekstu">Ponad stan ostrzegawczy</label>
            <input type="radio" name="stan" id="stanAlarmowy" value="ponadAlarmowy">
            <label for="stanAlarmowy" class="formatowanieTekstu">Ponad stan alarmowy</label>
            <input type="submit" value="Pokaż">
        </form>
    </nav>
    <main>
        <h3>Stany na dzień 2022-05-05</h3>
        <table>
            <tr>
                <th>Wodomierz</th>
                <th>Rzeka</th>
                <th>ostrzegawczy</th>
                <th>Alarmowy</th>
                <th>Aktualny</th>
            </tr>
            <?php
            $polaczzenie = mysqli_connect('localhost', 'root', '', 'rzeki');

            if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['stan'])) {
                $stan = $_POST['stan'];

                if ($stan == "ponadAlarmowy") {
                    $kwerenda = "SELECT w.nazwa, w.rzeka, w.stanOstrzegawczy, w.stanAlarmowy, p.stanWody FROM wodowskazy w JOIN pomiary p ON w.id = p.wodowskazy_id WHERE p.dataPomiaru = '2022-05-05' AND p.stanWody > w.stanAlarmowy;";
                    $zapytanie = mysqli_query($polaczzenie, $kwerenda);

                    while ($wiersz = mysqli_fetch_row($zapytanie)) {
                        echo "<tr>
                        <td>$wiersz[0]</td>
                        <td>$wiersz[1]</td>
                        <td>$wiersz[2]</td>
                        <td>$wiersz[3]</td>
                        <td>$wiersz[4]</td>
                        </tr>";
                    }
                } else if ($stan == "ponadOstrzegawczy") {
                    $kwerenda = "SELECT w.nazwa, w.rzeka, w.stanOstrzegawczy, w.stanAlarmowy, p.stanWody FROM wodowskazy w JOIN pomiary p ON w.id = p.wodowskazy_id WHERE p.dataPomiaru = '2022-05-05' AND p.stanWody > w.stanOstrzegawczy;";
                    $zapytanie = mysqli_query($polaczzenie, $kwerenda);

                    while ($wiersz = mysqli_fetch_row($zapytanie)) {
                        echo "<tr>
                        <td>$wiersz[0]</td>
                        <td>$wiersz[1]</td>
                        <td>$wiersz[2]</td>
                        <td>$wiersz[3]</td>
                        <td>$wiersz[4]</td>
                        </tr>";
                    }
                } else {
                    $kwerenda = "SELECT w.nazwa, w.rzeka, w.stanOstrzegawczy, w.stanAlarmowy, p.stanWody FROM wodowskazy w JOIN pomiary p ON w.id = p.wodowskazy_id WHERE p.dataPomiaru = '2022-05-05';";
                    $zapytanie = mysqli_query($polaczzenie, $kwerenda);

                    while ($wiersz = mysqli_fetch_row($zapytanie)) {
                        echo "<tr>
                        <td>$wiersz[0]</td>
                        <td>$wiersz[1]</td>
                        <td>$wiersz[2]</td>
                        <td>$wiersz[3]</td>
                        <td>$wiersz[4]</td>
                        </tr>";
                    }
                }
            }

            mysqli_close($polaczzenie)
                ?>
        </table>
    </main>
    <aside>
        <h3>Informacje</h3>
        <ul>
            <li>Brak ostrzeżen o burzach z gradem</li>
            <li>Smog w mieście Wrocław</li>
            <li>Silny wiatr w Karkonoszach</li>
        </ul>
        <h3>Średnie stany wód</h3>
        <?php
        $polaczzenie = mysqli_connect('localhost', 'root', '', 'rzeki');
        $kwerenda = 'SELECT p.dataPomiaru, AVG(p.stanWody) FROM pomiary p GROUP BY p.dataPomiaru;';
        $zapytanie = mysqli_query($polaczzenie, $kwerenda);

        while ($wiersz = mysqli_fetch_row($zapytanie)) {
            echo "<p>$wiersz[0]: $wiersz[1]</p>";
        }

        mysqli_close($polaczzenie)
            ?>
        <a href="https://komunikaty.pl">Dowiedz się więcej</a>
        <img src="obraz2.jpg" alt="rzeka">
    </aside>
    <footer>
        <p>Stronę wykonał: &copf; Aleksander Staszków</p>
    </footer>
</body>

</html>