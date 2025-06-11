<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Galeria</title>
</head>

<body>
    <header>
        <h1>Zdjęcia</h1>
    </header>
    <aside>
        <h2>Tematy zdjęć</h2>
        <ol>
            <li>Zwierzęta</li>
            <li>Krajobrazy</li>
            <li>Miasta</li>
            <li>Przyroda</li>
            <li>Samochody</li>
        </ol>
    </aside>
    <main>
        <?php
        $polaczenie = mysqli_connect('localhost', 'root', '', 'galeria');
        $kwerenda = "SELECT z.plik, z.tytul, z.polubienia, a.imie, a.nazwisko FROM zdjecia z JOIN autorzy a ON z.autorzy_id = a.id ORDER BY a.nazwisko ASC;";
        $zapytanie = mysqli_query($polaczenie, $kwerenda);

        while ($wiersz = mysqli_fetch_row($zapytanie)) {
            echo "<div>
            <img src='$wiersz[0]' alt='zdjęcie'>
            <h3>$wiersz[1]</h3>";

            if ($wiersz[2] > 40) {
                echo "<p>Autor: $wiersz[3] $wiersz[4]. <br>
                Wiele osób polubiło ten obraz</p>";
            } else {
                echo "<p>Autor: $wiersz[3] $wiersz[4]</p>";
            }

            echo "<a href='$wiersz[0]' download>Pobierz</a>
            </div>";
        }

        mysqli_close($polaczenie);
        ?>
    </main>
    <aside>
        <h2>Najbardziej lubiane</h2>
        <?php
        $polaczenie = mysqli_connect('localhost', 'root', '', 'galeria');
        $kwerenda = "SELECT z.tytul, z.plik FROM zdjecia z WHERE z.polubienia >= 100;";
        $zapytanie = mysqli_query($polaczenie, $kwerenda);

        while ($wiersz = mysqli_fetch_row($zapytanie)) {
            echo "<img src='$wiersz[1]' alt='$wiersz[0]'>";
        }

        mysqli_close($polaczenie);
        ?>
        <strong>Zobacz wszystkie nasze zdjęcia</strong>
    </aside>
    <footer>
        <h5>Stronę wykonał: &copf; Aleksander Staszków</h5>
    </footer>
</body>

</html>