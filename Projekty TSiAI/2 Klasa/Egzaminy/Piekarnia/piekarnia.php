<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIEKARNIA</title>
</head>

<body>
    <img src="wypieki.png" alt="Produkty naszej piekarni">
    <nav>
        <a href="kw1.png">KWERENDA 1</a><a href="kw2.png">KWERENDA 2</a><a href="kw3.png">KWEREENDA 3</a><a
            href="kw4.png">KWERENDA 4</a>
    </nav>
    <header>
        <h1>WITAMY</h1>
        <h4>NA STRONIE PIEKARNI</h4>
        <p>Od 31 lat oferujemy najwyższej jakości pieczywo. Naturalnie świeże, naturalnie smaczne. Pieczemy wyłącznie
            wypieki na naturalnym zakwasie bez polepszaczy i zagęstników. Korzystamy wyłącznie z najlepszych ziaren
            pochodzących z ekologicznych upraw położonych w rejonach zgierskim i ozorkowskim.</p>
    </header>
    <main>
        <h4>Wybierz rodzaj wypieków</h4>
        <form action="piekarnia.php" method="POST">
            <select name="rodzaj">
                <?php
                $polaczenie = mysqli_connect('localhost', 'root', '', 'piekarnia');
                $kwerenda = "SELECT DISTINCT w.Rodzaj FROM wyroby w ORDER BY w.Rodzaj DESC;";
                $zapytanie = mysqli_query($polaczenie, $kwerenda);

                while ($wynik = mysqli_fetch_row($zapytanie)) {
                    echo "<option value='$wynik[0]'>$wynik[0]</option>";
                }

                mysqli_close($polaczenie);
                ?>
            </select>
            <input type="submit" value="Wybierz">
        </form>
        <table>
            <tr>
                <th>Rodzaj</th>
                <th>Nazwa</th>
                <th>Gramatura</th>
                <th>Cena</th>
            </tr>
            <?php
            $polaczenie = mysqli_connect('localhost', 'root', '', 'piekarnia');

            if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['rodzaj'])) {
                $rodzaj = $_POST['rodzaj'];
                $kwerenda = "SELECT w.Rodzaj, w.Nazwa, w.Gramatura, w.Cena FROM wyroby w WHERE w.Rodzaj = '$rodzaj';";
                $zapytanie = mysqli_query($polaczenie, $kwerenda);

                while ($wynik = mysqli_fetch_row($zapytanie)) {
                    echo "<tr>
                    <td>$wynik[0]</td>
                    <td>$wynik[1]</td>
                    <td>$wynik[2]</td>
                    <td>$wynik[3]</td>
                    </tr>";
                }
            }

            mysqli_close($polaczenie);
            ?>
        </table>
    </main>
    <footer>
        <p>Autor: &copf; Aleksander Staszków</p>
        <p>Data: 8.06.2025</p>
    </footer>
</body>

</html>