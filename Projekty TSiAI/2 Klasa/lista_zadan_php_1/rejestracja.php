<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = htmlspecialchars($_POST['data']);
    $marka = htmlspecialchars($_POST['marka']);
    $model = htmlspecialchars($_POST['model']);
    $rocznik = htmlspecialchars($_POST['rocznik']);
    $silnik = htmlspecialchars($_POST['silnik']);
    $usterka = htmlspecialchars($_POST['usterka']);

    $dane = "Data zgłoszenia: $data\nMarka: $marka\nModel: $model\nRocznik: $rocznik\nTyp silnika: $silnik\nOpis usterki: $usterka\n";
    $separator = "===============\n";

    file_put_contents('rejestracja.txt', $dane . $separator, FILE_APPEND);

    echo "Zgłoszenie zostało zapisane.";
}
?>