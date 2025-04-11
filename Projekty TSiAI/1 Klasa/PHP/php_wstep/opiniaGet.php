<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinia GET</title>
</head>

<body>
    <?php
    // Pobranie danych z formularza GET
    $uzytkownikNick = $_GET['nick'];
    $uzytkownikHaslo = $_GET['haslo'];
    $uzytkownikMail = $_GET['mail'];
    $uzytkownikOpinia = $_GET['opinia'];

    // Zapis opinii do pliku
    // Otwieramy plik w trybie dopisywania (a - append)
    $plikOpinie = fopen("opinie.txt", "a");
    // Dane do zapisania w pliku
    $opiniaDoZapisania = "\nMetoda GET\nNick: $uzytkownikNick\nHasło: $uzytkownikHaslo\nMail: $uzytkownikMail\nOpinia: $uzytkownikOpinia\nData: " . date('d/m/y H:i:s') . "\n";
    // Zapisujemy dane do pliku
    fwrite($plikOpinie, $opiniaDoZapisania);
    // Zamykamy plik
    fclose($plikOpinie);

    // Wyświetlenie potwierdzenia
    echo ("Twoja opinia została zapisana!<br><br>");
    echo ("Nick: $uzytkownikNick<br>");
    echo ("Hasło: $uzytkownikHaslo<br>");
    echo ("E-Mail: $uzytkownikMail<br>");
    echo ("Opinia: $uzytkownikOpinia<br>");
    ?>
</body>

</html>