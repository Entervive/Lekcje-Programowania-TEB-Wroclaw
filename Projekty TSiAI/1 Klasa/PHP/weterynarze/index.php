<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">|
    <link rel="stylesheet" href="style.css">
    <title>Wizyta weteranyryjna</title>
</head>
<body>
    <h1>Umów swoją wizytę!</h1>
    <form method="POST" action="pokazanie-danych.php">
        <input name="imie" placeholder="Imie" type="text" id="imie_p" required><br>
        <input name="nazwisko" placeholder="Nazwisko"type="text" id="nazwisko_p" required><br>
        <input name="numer" placeholder="Numer telefonu" type="number" id="numer_p" required><br>
        <input name="mail" placeholder="E-Mail" type="email" id="email_p"><br>
        <input name="imie_z" placeholder="Imie Zwierzaka" type="text" id="imiez_p" required><br>
        <input name="gatunek" placeholder="Gatunek" type="text" id="gatunek_p" required><br>
        <input name="data" placeholder="Data Wizyty" type="date" id="data_p" required><br>
        <input name="submit" type="submit">
    </form>
</body>
</html>