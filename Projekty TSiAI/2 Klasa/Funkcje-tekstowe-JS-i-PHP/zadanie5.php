<?php
if (isset($_POST['zadanie'])) {
    $zdanie = $_POST['zadanie'];

    $zdanie = trim($zdanie);
    $zdanie = ucfirst(rtrim($zdanie, '.') . '.');

    $slowa = explode(' ', $zdanie);
    $ilosc_slow = count($slowa);

    echo $zdanie . "<br>";
    echo "Liczba słów: " . $ilosc_slow;
}