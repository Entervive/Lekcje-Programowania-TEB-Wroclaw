<?php
$mysqli = new mysqli('localhost', 'root', '', 'pogoda');

if ($mysqli->connect_error) {
    die("Błąd połączenia: " . $mysqli->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $miasto_id = (int) $_POST['miasto_id'];
    $data = $mysqli->real_escape_string($_POST['data']);
    $temperatura = (float) $_POST['temperatura'];
    $opady = (float) $_POST['opady'];

    // Walidacja danych
    $query = "SELECT id FROM miasto WHERE id = $miasto_id";
    $result = $mysqli->query($query);

    if ($result->num_rows > 0 && $opady >= 0) {
        $insert = "INSERT INTO pomiar (miasto_id, data, temperatura, opady) VALUES ($miasto_id, '$data', $temperatura, $opady)";
        if ($mysqli->query($insert)) {
            echo "Pomiar został dodany.";
        } else {
            echo "Błąd podczas dodawania pomiaru: " . $mysqli->error;
        }
    } else {
        echo "Nieprawidłowe dane. Sprawdź ID miasta lub wartość opadów.";
    }
}

$mysqli->close();
?>