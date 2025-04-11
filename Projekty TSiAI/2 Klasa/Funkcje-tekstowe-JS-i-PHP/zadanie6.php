<?php
// Sprawdzenie, czy formularz został wysłany
if (isset($_POST['sentence'])) {
    $sentence = $_POST['sentence'];

    // Lista słów zakazanych
    $forbiddenWords = ["jabłko", "banan"];

    // Zamiana słów zakazanych na ***
    foreach ($forbiddenWords as $word) {
        $sentence = str_replace($word, '***', $sentence);
    }

    // Wyświetlenie przetworzonego zdania
    echo $sentence;
}