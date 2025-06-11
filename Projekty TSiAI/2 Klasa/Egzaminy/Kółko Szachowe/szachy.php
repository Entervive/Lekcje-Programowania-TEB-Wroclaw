<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KÓŁKO SZACHOWE</title>
</head>

<body>
    <header>
        <h2>Koło szachowe<em>gambit piona</em></h2>
    </header>
    <aside>
        <h4>Polecane linki</h4>
        <ul>
            <li><a href="kw1.png">kwerenda1</a></li>
            <li><a href="kw2.png">kwerenda2</a></li>
            <li><a href="kw3.png">kwerenda3</a></li>
            <li><a href="kw4.png">kwerenda4</a></li>
        </ul>
        <img src="logo.png" alt="Logo koła">
    </aside>
    <main>
        <h3>Najlepsi gracze naszego koła</h3>
        <table>
            <tr>
                <th>Pozycja</th>
                <th>Pseudonim</th>
                <th>Tytuł</th>
                <th>Ranking</th>
                <th>Klasa</th>
            </tr>
            <?php
            $polaczenie = mysqli_connect('localhost', 'root', '', 'szachy');
            $kwerenda = "SELECT z.pseudonim, z.tytul, z.ranking, z.klasa FROM zawodnicy z WHERE z.ranking > 2787 ORDER BY z.ranking DESC;";
            $zapytanie = mysqli_query($polaczenie, $kwerenda);
            $pozycja = 1;

            while ($wynik = mysqli_fetch_row($zapytanie)) {
                echo "<tr>
                <td>$pozycja</td>
                <td>$wynik[0]</td>
                <td>$wynik[1]</td>
                <td>$wynik[2]</td>
                <td>$wynik[3]</td>
                </tr>";

                $pozycja++;
            }

            mysqli_close($polaczenie);
            ?>
        </table>
        <form action="szachy.php" method="POST">
            <input type="submit" value="Losuj nową parę graczy">
        </form>
        <?php
        $polaczenie = mysqli_connect('localhost', 'root', '', 'szachy');
        $kwerenda = "SELECT z.pseudonim, z.klasa FROM zawodnicy z ORDER BY RAND() LIMIT 2;";
        $zapytanie = mysqli_query($polaczenie, $kwerenda);

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            echo "<h4>";
            while ($wynik = mysqli_fetch_row($zapytanie)) {
                echo "$wynik[0] $wynik[1] ";
            }
            echo "</h4>";
        }

        mysqli_close($polaczenie);
        ?>
        <p>Legenda: AM - Absolutny Mistrz, SM - Szkolny Mistrz, PM - Mistrz Poziomu, KM - Mistrz Klasowy</p>
    </main>
    <footer>
        <p>Stronę wykonał: &copf; Aleksander Staszków</p>
    </footer>
</body>

</html>