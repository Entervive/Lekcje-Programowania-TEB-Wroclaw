<?php
if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['nazwisko'] && $_POST['imie'] && $_POST['funkcja'] && $_POST['mail']) {
    $polaczenie = mysqli_connect('localhost', 'root', '', 'zdobywcy');

    $nazwisko = $_POST['nazwisko'];
    $imie = $_POST['imie'];
    $funkcja = $_POST['funkcja'];
    $mail = $_POST['mail'];

    $kwerenda = "INSERT INTO osoby (nazwisko, imie, funkcja, email) VALUES ('$nazwisko', '$imie', '$funkcja', '$mail');";
    $zapytanie = mysqli_query($polaczenie, $kwerenda);

    mysqli_close($polaczenie);
}
?>
<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZDOBYWCY GÓR</title>
</head>

<body>
    <header>
        <h1>Klub zdobywców gór polskich</h1>
    </header>
    <nav>
        <a href="kw1.png">kwerenda1</a>
        <a href="kw2.png">kwerenda2</a>
        <a href="kw3.png">kwerenda3</a>
        <a href="kw4.png">kwerenda4</a>
    </nav>
    <aside>
        <img src="logo.png" alt="logo zdobywcy">
        <h3>razem z nami:</h3>
        <ul>
            <li>wyjazdy</li>
            <li>szkolenia</li>
            <li>rekreacja</li>
            <li>wypoczynek</li>
            <li>wyzwania</li>
        </ul>
    </aside>
    <main>
        <h2>Dołącz do naszego zespołu!</h2>
        <p>Wpisz swoje dane do formularza:</p>
        <form action="zdobywcy.php" method="POST">
            <label for="nazwisko">Nazwisko: </label>
            <input type="text" name="nazwisko" id="nazwisko">
            <label for="imie">Imię: </label>
            <input type="text" name="imie" id="imie">
            <label for="funkcja">Funkcja: </label>
            <select name="funkcja" id="funkcja">
                <option value="uczestnik">uczestnik</option>
                <option value="przewodnik">przewodnik</option>
                <option value="zaopatrzeniowiec">zaopatrzeniowiec</option>
                <option value="organizator">organizator</option>
                <option value="ratownik">ratownik</option>
            </select>
            <label for="mail">Email: </label>
            <input type="email" name="mail" id="mail">
            <input type="submit" value="Dodaj">
        </form>
        <table>
            <tr>
                <th>Nazwisko</th>
                <th>Imię</th>
                <th>Funkcja</th>
                <th>Email</th>
            </tr>
            <?php
            $polaczenie = mysqli_connect('localhost', 'root', '', 'zdobywcy');
            $kwerenda = "SELECT o.nazwisko, o.imie, o.funkcja, o.email FROM osoby o;";
            $zapytanie = mysqli_query($polaczenie, $kwerenda);

            while ($wynik = mysqli_fetch_row($zapytanie)) {
                echo "<tr>
                <td>$wynik[0]</td>
                <td>$wynik[1]</td>
                <td>$wynik[2]</td>
                <td>$wynik[3]</td>
                </tr>";
            }

            mysqli_close($polaczenie);
            ?>
        </table>
    </main>
    <footer>
        <p>Stronę wykonał: &copf; Aleksander Staszków</p>
    </footer>
</body>

</html>