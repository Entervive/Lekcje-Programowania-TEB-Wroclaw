<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="fav.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Wyszukiwarka miast</title>
</head>

<body>
    <header>
        <img src="baner.jpg" alt="Polska">
    </header>
    <main>
        <h1>Wyniki wyszukiwania miast z uwzględnieniem filtra:</h1>
        <?php
        $polaczenie = mysqli_connect('localhost', 'root', '', 'wykaz');

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['miasto'])) {
                $miasto = $_POST['miasto'];
                echo "<p class='filtr'>" . $miasto . "</p>";
                $zapytanie = mysqli_query($polaczenie, 'SELECT m.nazwa, w.nazwa FROM miasta m JOIN wojewodztwa w ON m.id_wojewodztwa = w.id WHERE m.nazwa LIKE' . '"' . $miasto . '%" ORDER BY m.nazwa ASC;');
                echo "<table>";
                echo "<tr>
                        <th>Miasto</th>
                        <th>Województwo</th>
                    </tr>";
                while ($wynik = mysqli_fetch_row($zapytanie)) {
                    echo "<tr>";
                    echo "<td>" . $wynik[0] . "</td>";
                    echo "<td>" . $wynik[1] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
        }

        mysqli_close($polaczenie)
            ?>
    </main>
    <aside class="lewyGorny">
        <h4>Podaj początek nazwy miasta</h4>
        <form action="index.php" method="POST">
            <input type="text" name="miasto" placeholder="np. Wrocław">
            <input type="submit" value="Szukaj">
        </form>
    </aside>
    <aside class="lewyDolny">
        <p>Egzamin INF.03</p>
        <p>Autor: XYZ</p>
    </aside>
</body>

</html>