<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="../IMG/logo.png">
    <meta name="author" content="Aleksander Staszków">
    <link rel="stylesheet" href="../style.css">
    <title>RadPlutUra</title>
</head>

<body>
    <?php
    include("header.php")
        ?>
    <main class="kontaktt">
        <div class="kontakt" style="padding: 0px; margin: 2px;">
            <h1 style="margin: inherit;">Potrzebujesz kontaktu?</h1>
            <h2 style="margin: inherit;">Potrzebujesz gwarancji?</h2>
            <h3 style="margin: inherit;">Potrzebujesz partnerstwa?</h3>
            <h4 style="margin: inherit;">Potrzebujesz reklamy?</h4>
            <h5 style="margin: inherit;">Potrzebujesz zwrotu?</h5>
            <h6 style="text-decoration: line-through; margin: inherit;">O ile przeżyjesz</h6>
            <h6 style="margin: inherit;">Damy ci go</h6><br><br>
        </div>
        <a href="mailto:ktos@radplutura.com">Wyślij maila!</a><br>
        <a href="tel:+0000000000">Zadzwoń +00 000 00 000</a><br><br>
        <h4>Lub napisz do nas w formularzu</h4>
        <form>
            Imię <input type="text" id="Imie"><br>
            Nazwisko <input type="text" id="Nazwisko"><br>
            Telefon <input type="number" id="Telefon"><br>
            E-Mail <input type="email" id="email"><br><br>
            Zdjęcie(Opcjonalne)<br> <input type="file" id="zdjecie"><br><br>
            Twoja wiadomość<br><br>
            <textarea></textarea><br>
            <input type="submit" value="Submit">
        </form>
    </main>
    <?php
    include("../footer.php")
        ?>
</body>

</html>