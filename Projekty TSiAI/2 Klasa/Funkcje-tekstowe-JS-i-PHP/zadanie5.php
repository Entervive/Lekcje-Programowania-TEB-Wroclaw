<?php
// Sprawdzenie, czy formularz został wysłany
if (isset($_POST['sentence'])) {
    $sentence = $_POST['sentence'];

    // Usunięcie zbędnych spacji i poprawienie formatowania zdania
    $sentence = trim($sentence);
    $sentence = ucfirst(rtrim($sentence, '.') . '.');

    // Podzielenie zdania na słowa i policzenie ich liczby
    $words = explode(' ', $sentence);
    $wordCount = count($words);

    // Wyświetlenie sformatowanego zdania i liczby słów
    echo $sentence . "<br>";
    echo "Liczba słów: " . $wordCount;
}