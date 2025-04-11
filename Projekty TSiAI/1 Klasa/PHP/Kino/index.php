<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Kino</title>
</head>
<header>
    <?php
    // Wczytanie nagłówka strony
    require 'include/header.php';
    ?>
</header>

<body>
    <main>
        <?php
        // Dane do połączenia z bazą danych
        $dbUser = "aleksanderstaszkow1tsa";
        $dbPassword = "TebWroclaw";
        $dbName = "kinoaleksanderstaszkow";
        $dbHost = "localhost";

        // Nawiązanie połączenia z bazą danych
        $connection = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

        // Sprawdzenie połączenia
        if ($connection->connect_error) {
            die("Błąd połączenia z bazą danych: " . $connection->connect_error);
        } else {
            echo "Witamy w sklepie kina Tytan";
        }

        // Zapytanie SQL pobierające dane o produktach
        $query = "SELECT * FROM produkt";
        $result = $connection->query($query);

        // Wyświetlenie tabeli z danymi produktów
        echo "<br>";
        echo "<table>
                    <tr>
                        <th>ID towaru</th>
                        <th>Nazwa towaru</th>
                        <th>Cena towaru</th>
                        <th>Opis towaru</th>
                        <th>Zdjęcie towaru</th>
                    </tr>";

        // Iteracja po wynikach zapytania
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row["ID"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["Nazwa"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["Cena"]) . " zł</td>";
            echo "<td>" . htmlspecialchars($row["Opis"]) . "</td>";
            echo "<td><img src='IMG/" . htmlspecialchars($row["Foto"]) . ".jpg' alt='Zdjęcie produktu'></td>";
            echo "</tr>";
        }

        echo "</table>";

        // Zamknięcie połączenia z bazą danych
        $connection->close();
        ?>
    </main>
</body>
<footer>
    <?php
    // Wczytanie stopki strony
    require 'include/footer.php';
    ?>
</footer>

</html>