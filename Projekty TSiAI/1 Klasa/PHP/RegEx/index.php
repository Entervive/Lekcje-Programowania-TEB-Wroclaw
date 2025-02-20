<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bowlby+One+SC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>RegEx - Wstęp😢</title>
</head>
<body>
    <h1>Sprawdzanie haseł</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input type="password" placeholder="Wpisz swoje hasło" name="haslo" id="haslo"><br>
        <input name="submit" type="submit">
    </form>
    <?php
        $haslo = htmlspecialchars($_POST['haslo']);
        echo 'Twoje hasło ' . $haslo;
        $wielka_wzor = "/[A-Z]/";
        $mala_wzor = "/[a-z]/";
        $cyfra_wzor = "/[0-9]/";
        $znak_wzor = "/[\!\@\#\$\%\^\&\*\-\?]/";
        $dlugosc_wzor = "/.{10,}/";
        if (isset($_POST['haslo'])) {
            $wielka = preg_match($wielka_wzor, $haslo);
            $mala = preg_match($mala_wzor, $haslo);
            $cyfra = preg_match($cyfra_wzor, $haslo);
            $znak = preg_match($znak_wzor, $haslo);
            $dlugosc = preg_match($dlugosc_wzor, $haslo);
        }
    ?>
    <p>Wielka Litera <?php
        if($wielka == 1){
            echo '<i class="bi bi-check-lg"></i>';
        }
        else {
            echo '<i class="bi bi-exclamation-lg"></i>';
        }
    ?></p>
    <p>Mała Litera <?php 
        if($mala == 1){
            echo '<i class="bi bi-check-lg"></i>';
        }
        else {
            echo '<i class="bi bi-exclamation-lg"></i>';
        }
    ?></p>
    <p>Cyfra <?php
        if($cyfra == 1){
            echo '<i class="bi bi-check-lg"></i>';
        }
        else {
            echo '<i class="bi bi-exclamation-lg"></i>';
        }
    ?></p>
    <p>Znak <?php
        if($znak == 1){
            echo '<i class="bi bi-check-lg"></i>';
        }
        else {
            echo '<i class="bi bi-exclamation-lg"></i>';
        }
    ?></p>
    <p>Długość <?php
        if($dlugosc == 1){
            echo '<i class="bi bi-check-lg"></i>';
        }
        else {
            echo '<i class="bi bi-exclamation-lg"></i>';
        }
    ?></p>
</body>
</html>