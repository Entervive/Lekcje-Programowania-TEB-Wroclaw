<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bowlby+One+SC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>RegEx - Wstęp</title>
</head>

<body>
    <h1>Sprawdzanie haseł</h1>
    <!-- Formularz do wprowadzenia hasła -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="password" placeholder="Wpisz swoje hasło" name="passwordInput" id="passwordInput"><br>
        <input name="submitButton" type="submit" value="Sprawdź">
    </form>

    <?php
    // Sprawdzenie, czy formularz został przesłany
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['passwordInput'])) {
        // Pobranie i zabezpieczenie hasła
        $userPassword = htmlspecialchars($_POST['passwordInput']);

        // Wyświetlenie wprowadzonego hasła
        echo '<p>Twoje hasło: ' . $userPassword . '</p>';

        // Definicje wzorców RegEx
        $patternUppercase = "/[A-Z]/"; // Wielka litera
        $patternLowercase = "/[a-z]/"; // Mała litera
        $patternDigit = "/[0-9]/";     // Cyfra
        $patternSpecialChar = "/[\!\@\#\$\%\^\&\*\-\?]/"; // Znak specjalny
        $patternLength = "/.{10,}/";  // Minimalna długość 10 znaków
    
        // Sprawdzanie hasła za pomocą funkcji preg_match
        $containsUppercase = preg_match($patternUppercase, $userPassword);
        $containsLowercase = preg_match($patternLowercase, $userPassword);
        $containsDigit = preg_match($patternDigit, $userPassword);
        $containsSpecialChar = preg_match($patternSpecialChar, $userPassword);
        $isValidLength = preg_match($patternLength, $userPassword);

        // Funkcja pomocnicza do wyświetlania ikon
        function renderValidationIcon($isValid)
        {
            if ($isValid) {
                return '<i class="bi bi-check-lg"></i>'; // Ikona "check"
            } else {
                return '<i class="bi bi-exclamation-lg"></i>'; // Ikona "exclamation"
            }
        }
        ?>
        <!-- Wyświetlanie wyników walidacji -->
        <p>Wielka Litera: <?php echo renderValidationIcon($containsUppercase); ?></p>
        <p>Mała Litera: <?php echo renderValidationIcon($containsLowercase); ?></p>
        <p>Cyfra: <?php echo renderValidationIcon($containsDigit); ?></p>
        <p>Znak Specjalny: <?php echo renderValidationIcon($containsSpecialChar); ?></p>
        <p>Długość (min. 10 znaków): <?php echo renderValidationIcon($isValidLength); ?></p>
    <?php } ?>
</body>

</html>