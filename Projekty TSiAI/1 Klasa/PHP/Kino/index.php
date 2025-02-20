<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Kino</title>
</head>
<header>
    <?php
        require 'include/header.php';
    ?>
</header>
<body>
    <main>
        <?php
            $uzytkownik = "aleksanderstaszkow1tsa";
            $haslo = "TebWroclaw";
            $bazadanych = "kinoaleksanderstaszkow";
            $serwer = "localhost";

            $polaczenie =  new mysqli($serwer, $uzytkownik, $haslo, $bazadanych);

            if(!$polaczenie) {
                die("Błąd połączenia z bazą danych" . mysqli_connect_error());
            }
            else {
                echo "Witamy w sklepie kina Tytan";
            }

            $zapytanie = "SELECT * FROM produkt";
            $wynik = mysqli_query($polaczenie, $zapytanie);

            echo "<br>";
            echo "<table>
                    <tr>
                        <td>ID towaru</td>
                        <td>Nazwa towaru</td>
                        <td>Cena towaru</td>
                        <td>Opis towaru</td>
                        <td>Zdjęcie towaru</td>
                    <tr>
                ";
            
            while ($wiersz = mysqli_fetch_assoc($wynik)) {
                echo "<tr>";
                echo "<td>" . $wiersz["ID"] . "</td>";
                echo "<td>" . $wiersz["Nazwa"] . "</td>";
                echo "<td>" . $wiersz["Cena"] . "</td>";
                echo "<td>" . $wiersz["Opis"] . "</td>";
                echo "<td> <img src='IMG/" . $wiersz["Foto"] . ".jpg'> </td>";
                echo "</tr>";
            }

            echo "</table>";
            mysqli_close($polaczenie);
        ?>
    </main>
</body>
<footer>
    <?php
        require 'include/footer.php';
    ?>
</footer>
</html>