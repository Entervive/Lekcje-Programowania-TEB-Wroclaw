<?php
if (file_exists('rejestracja.txt')) {
    $zawartosc = file_get_contents('rejestracja.txt');
    echo nl2br($zawartosc);
} else {
    echo "Brak zgłoszeń.";
}
?>