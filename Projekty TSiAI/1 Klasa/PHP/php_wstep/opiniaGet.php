<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nick = $_GET['nick'];
        $haslo = $_GET['haslo'];
        $mail = $_GET['mail'];
        $opinie = $_GET['opinia'];

        $plik_na_opinie_post = fopen("opinie.txt", "a");
        $opinie_do_zapisania = ("\n Metoda GET \n Nazwa: $nick \n Hasło: $haslo \n Mail: $mail \n Opinia: $opinie \n Data: ") . date('d/m/y H:i:s') . ("\n");

        fwrite($plik_na_opinie_post, $opinie_do_zapisania);
        fclose($plik_na_opinie_post);

        echo("Twoja opinia została zapisana<br><br>");

        echo("Nick użytkownika $nick <br>");
        echo("Hasło użytkownika $haslo <br>");
        echo("E-Mail użytkownika $mail <br>");
        echo("Opinia użytkownika $opinie <br>")
    ?>
</body>
</html>