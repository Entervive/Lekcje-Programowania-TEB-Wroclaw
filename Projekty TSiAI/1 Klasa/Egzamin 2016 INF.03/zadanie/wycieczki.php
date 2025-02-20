<?php
    $db = new mysqli("localhost", "root", "", "biuro");
    $zap1 = "SELECT wycieczki.id, wycieczki.dataWyjazdu, wycieczki.cel, wycieczki.cena FROM wycieczki WHERE wycieczki.dostepna = 1;";
    $wynik = mysqli_query($db, $zap1);
?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl4.css">
    <title>Wycieczki po Europie</title>
</head>
<body>
    <section class="banner">
        <h1>BIURO TURYSTYCZNE</h1>
    </section>
    <section class="dane">
        <h3>Wycieczki na które są wolne miejsca<h3>
            <ul>
                <?php
                        while($row = mysqli_fetch_row($wynik)){
                            echo '<li>' . $row[0] . ". dnia " . $row[1] . " jedziemy do " . $row[2] . " cena: " . $row[3] . '</li>';
                        }
                ?>
            </ul>
    </section>
    <section class="bloki">
        <h2>Bestsellery</h2>
        <table>
            <tr>
                <td>Wenecja</td>
                <td>Kwiecień</td>
            </tr>
            <tr>
                <td>Londyn</td>
                <td>Lipiec</td>
            </tr>
            <tr>
                <td>Rzym</td>
                <td>Wrześień</td>
            <tr>
        </table>
    </section>
    <section class="midle">
        <h2>Nasze zdjęcia</h2>
        <?php
            $zap2 = "SELECT zdjecia.nazwaPliku, zdjecia.podpis FROM `zdjecia` ORDER BY podpis DESC;";
            $wynik2 = mysqli_query($db, $zap2);
            while($row = mysqli_fetch_row($wynik2)){
                echo "<img src='" . $row[0] . "' alt='" . $row[1] . "'>";
            }
            mysqli_close($db);  
        ?>
    </section>
    <section class="bloki">
        <h2>Skontaktuj się</h2>
        <a href="mailto:turysta@wycieczki.pl">napisz do nas</a>
        <p>telefon: 111222333</p>
    </section>
</body>
<footer class="banner">
        <p>Stronę wykonał: Aleksander Staszków</p>
</footer>
</html>