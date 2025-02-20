<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl3.css">
    <title>Hurtownia spożywcza</title>
</head>
<body>
    <header>
        <h1>Hurtownia Spożywcza</h1>
    </header>
    <main>
        <h2>Opinie naszych klientów</h2>
        <?php
            $baza = new mysqli("localhost", "root", "", "hurtownia");
            $kw3 = "SELECT k.zdjecie, k.imie, o.opinia FROM klienci k JOIN opinie o on k.id = o.Klienci_id WHERE k.Typy_id = 2 OR k.Typy_id = 3;";

            $wynik = mysqli_query($baza, $kw3);

            while($wiersz = mysqli_fetch_assoc($wynik)) {
                echo '<div>';
                echo '<img src="zad3/' . $wiersz["zdjecie"] . '" alt="klient">';
                echo '<blockquote>' . $wiersz["opinia"] . "</blockquote>";
                echo '<h4>' . $wiersz["imie"] . "</h4>";
                echo '</div>';
            }
            
        ?>
    </main>
    <footer>
        <h3>Współpracują z nami</h3>
        <a href="http://sklep.pl/">Sklep 1</a>
    </footer>
    <footer>
        <h3>Nasi top klienci</h3>
        <ol>
            <?php
                $baza = new mysqli("localhost", "root", "", "hurtownia");
                $kw1 = "SELECT imie, nazwisko, punkty FROM klienci ORDER BY punkty DESC LIMIT 3;";

                $wynik = mysqli_query($baza, $kw1);

                while($wiersz = mysqli_fetch_assoc($wynik)){
                    echo "<li>";
                    echo $wiersz["imie"] . ", " .  $wiersz["nazwisko"] . ", " . $wiersz["punkty"] . " pkt.";
                    echo "</li>";
                }
            ?>
        </ol>
    </footer>
    <footer>
        <h3>Skontaktuj się</h3>
        <p>telefon: 111222333</p>
    </footer>
    <footer>
        <h3>Autor: Aleksander Staszków</h3>
    </footer>
</body>
</html>