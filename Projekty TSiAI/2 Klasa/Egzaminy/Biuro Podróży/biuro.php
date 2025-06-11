<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl9.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poznaj Europę</title>
</head>

<body>
    <header>
        <h1>BIURO PODRÓŻY</h1>
    </header>
    <aside>
        <h2>Promocje</h2>
        <table>
            <tr>
                <td>Warszawa</td>
                <td>od 600 zł</td>
            </tr>
            <tr>
                <td>Wenecja</td>
                <td>od 1200 zł</td>
            </tr>
            <tr>
                <td>Paryż</td>
                <td>od 1200 zł</td>
            </tr>
        </table>
    </aside>
    <main>
        <h2>W tym roku jedziemy do...</h2>
        <?php
        $polaczenie = mysqli_connect('localhost', 'root', '', 'podroze');
        $kwerenda = "SELECT z.nazwaPliku, z.podpis FROM zdjecia z ORDER BY z.podpis ASC;";
        $zapytanie = mysqli_query($polaczenie, $kwerenda);

        while ($wynik = mysqli_fetch_row($zapytanie)) {
            echo "<img src='$wynik[0]' alt='$wynik[1]'>";
        }

        mysqli_close($polaczenie)
            ?>
    </main>
    <aside>
        <h2>Kontakt</h2>
        <a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
        <p>telefon: 444555666</p>
    </aside>
    <section>
        <h3>W poprzednich latach byliśmy...</h3>
        <ol>
            <?php
            $polaczenie = mysqli_connect('localhost', 'root', '', 'podroze');
            $kwerenda = "SELECT w.cel, w.dataWyjazdu FROM wycieczki w WHERE w.dostepna = 0;";
            $zapytanie = mysqli_query($polaczenie, $kwerenda);

            while ($wynik = mysqli_fetch_row($zapytanie)) {
                echo "<li>Dnia $wynik[1] pojechaliśmy do $wynik[0]</li>";
            }

            mysqli_close($polaczenie)
                ?>
        </ol>
    </section>
    <footer>
        <p>Stronę wykonał: &copf; Aleksander Staszków</p>
    </footer>
</body>

</html>