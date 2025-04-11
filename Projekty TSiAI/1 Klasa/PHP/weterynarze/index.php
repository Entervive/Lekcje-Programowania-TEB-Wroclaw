<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Umów Wizytę u Weterynarza</title>
</head>

<body>
    <h1>Umów swoją wizytę!</h1>
    <form method="POST" action="pokazanie-danych.php">
        <!-- Formularz do wprowadzania danych -->
        <input name="imie" placeholder="Imię" type="text" id="imie_p" required><br>
        <input name="nazwisko" placeholder="Nazwisko" type="text" id="nazwisko_p" required><br>
        <input name="telefon" placeholder="Numer telefonu" type="number" id="telefon_p" required><br>
        <input name="email" placeholder="E-Mail" type="email" id="email_p"><br>
        <input name="imie_zwierzaka" placeholder="Imię Zwierzaka" type="text" id="imie_zwierzaka_p" required><br>
        <input name="gatunek" placeholder="Gatunek" type="text" id="gatunek_p" required><br>
        <input name="data_wizyty" placeholder="Data Wizyty" type="date" id="data_wizyty_p" required><br>
        <input type="submit" value="Zarezerwuj Wizytę">
    </form>
</body>

</html>