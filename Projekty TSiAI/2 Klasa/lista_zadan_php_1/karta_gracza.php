<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nick = htmlspecialchars($_POST['nick']);
    $haslo = $_POST['haslo'];
    $klasa = htmlspecialchars($_POST['klasa']);

    // Modyfikacja hasła
    $haslo = str_replace(range(0, 9), '#', $haslo);
    if (strlen($haslo) > 1) {
        $haslo = substr($haslo, -1) . substr($haslo, 1, -1) . substr($haslo, 0, 1);
    }
    if (strlen($haslo) > 2) {
        $haslo = substr($haslo, 0, 2) . substr($haslo, 3);
    }

    echo "<h2>Karta gracza</h2>";
    echo "Nick: $nick<br>";
    echo "Klasa postaci: $klasa<br>";
    echo "Hasło: $haslo<br>";
}
?>