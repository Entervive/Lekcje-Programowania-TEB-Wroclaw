<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WOLONTARIAT SZKOLNY</title>
</head>

<body>
    <header>
        <h1>KONKURS - WOLONTARIAT SZKOLNY</h1>
    </header>
    <main>
        <h3>Konkursowe nagrody</h3>
        <button onclick="location.reload()">Losuj nowe nagrody</button>
        <table>
            <tr>
                <th>Nr</th>
                <th>Nazwa</th>
                <th>Opis</th>
                <th>Wartość</th>
            </tr>
            <?php
            $polaczenie = mysqli_connect('localhost', 'root', '', 'konkurs');
            $kwerenda = "SELECT n.nazwa, n.opis, n.cena FROM nagrody n ORDER BY RAND() LIMIT 5;";
            $zapytanie = mysqli_query($polaczenie, $kwerenda);
            $numer = 1;

            while ($wynik = mysqli_fetch_row($zapytanie)) {
                echo "<tr>
                <td>$numer</td>
                <td>$wynik[0]</td>
                <td>$wynik[1]</td>
                <td>$wynik[2]</td>
                </tr>";

                $numer++;
            }

            mysqli_close($polaczenie);
            ?>
        </table>
    </main>
    <aside>
        <img src="puchar.png" alt="Puchar dla wolontariusza">
        <h4>Polecane linki</h4>
        <ul>
            <li><a href="kw1.png">KWERENDA 1</a></li>
            <li><a href="kw2.png">KWERENDA 2</a></li>
            <li><a href="kw3.png">KWERENDA 3</a></li>
            <li><a href="kw4.png">KWERENDA 4</a></li>
        </ul>
    </aside>
    <footer>
        <p>Numer zdającego: &copf; Aleksander Staszków</p>
    </footer>
</body>

</html>