<?php
if (isset($_POST['zadanie'])) {
    $zdanie = $_POST['zadanie'];

    $slowa_zakazane = ["jabłko", "banan"];

    foreach ($slowa_zakazane as $slowo) {
        $zdanie = str_replace($slowo, '***', $zdanie);
    }

    echo $zdanie;
}
