<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Weterynarz - Twoje Dane</title>
</head>
<body>
    <p>
    <?php
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $numer = $_POST['numer'];
        $mail = $_POST['mail'];
        $imie_z = $_POST['imie_z'];
        $gatunek = $_POST['gatunek'];
        $data = $_POST['data'];

        $plik_na_opinie_post = fopen("wizyty.txt", "a");
        $opinie_do_zapisania = ("<div>\n Imie i Nazwisko: $imie $nazwisko \nNumer telefonu: $numer \nE-Mail: $mail \nImie Zwierzaka: $imie_z \nGatunek: $gatunek \nData Wizyty: $data \n </div>") . date('d/m/y H:i:s') . ("\n");

        fwrite($plik_na_opinie_post, $opinie_do_zapisania);
        fclose($plik_na_opinie_post);

        echo("Oto twoje dane<br><br>");

        echo("Imie i Nazwiisko: $imie $nazwisko <br>");
        echo("Numer telefonu: $numer <br>");
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "E-Mail: Nie podałeś maila lub jest nie prawidłowy<br>";
        } else {
            echo("E-Mail: $mail <br>");
        }
        echo("Imie Zwierzaka: $imie_z <br>");
        echo("Gatunek: $gatunek <br>");
        echo("Data Wizyty: $data <br>");
    ?>
    </p>
    <a href="wizyty.php">Pokaż wszystkie wizyty</a>
</body>
</html>