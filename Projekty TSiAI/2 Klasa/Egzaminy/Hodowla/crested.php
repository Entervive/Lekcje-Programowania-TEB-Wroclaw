<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hodowla świnek morskich</title>
</head>

<body>
    <header>
        <h1>Hodowla świnek morskich - zamów śnikowe maluszki</h1>
    </header>
    <aside>
        <h3>Poznaj wszystkie rasy świnek morskich</h3>
        <ol>
            <?php
            $polaczenie = mysqli_connect('localhost', 'root', '', 'hodowla');
            $kwerenda = "SELECT r.rasa FROM rasy r;";
            $zapytanie = mysqli_query($polaczenie, $kwerenda);

            while ($wynik = mysqli_fetch_row($zapytanie)) {
                echo "<li>$wynik[0]</li>";
            }

            mysqli_close($polaczenie);
            ?>
        </ol>
    </aside>
    <nav>
        <a href="peruwianka.php">Rasa Peruwianka</a>
        <a href="american.php">Rasa american</a>
        <a href="crested.php">Rasa Crested</a>
    </nav>
    <main>
        <img src="crested.jpg" alt="Świnka morska rasy crested">
        <?php
        $polaczenie = mysqli_connect('localhost', 'root', '', 'hodowla');
        $kwerenda = "SELECT DISTINCT s.data_ur, s.miot, r.rasa FROM swinki s JOIN rasy r ON s.rasy_id = r.id WHERE r.id = 7;";
        $zapytanie = mysqli_query($polaczenie, $kwerenda);
        $wynik = mysqli_fetch_row($zapytanie);

        echo "<h2>Rasa: $wynik[2]</h2>
            <p>Data urodzenia: $wynik[0]</p>
            <p>Oznaczenie miotu: $wynik[1]</p>";

        mysqli_close($polaczenie);
        ?>
        <hr>
        <h3>Świnki w tym miocie</h3>
        <?php
        $polaczenie = mysqli_connect('localhost', 'root', '', 'hodowla');
        $kwerenda = "SELECT s.imie, s.cena, s.opis FROM swinki s JOIN rasy r ON s.rasy_id = r.id WHERE r.id = 7;";
        $zapytanie = mysqli_query($polaczenie, $kwerenda);

        while ($wynik = mysqli_fetch_row($zapytanie)) {
            echo "<h3>$wynik[0] - $wynik[1] zł</h3>
                <p>$wynik[2]</p>";
        }

        mysqli_close($polaczenie);
        ?>
    </main>

    <footer>
        <p>Stronę wykonał: &copf; Aleksander Staszków</p>
    </footer>
</body>

</html>