<?php
$mysqli = new mysqli('localhost', 'root', '', 'pogoda');

if ($mysqli->connect_error) {
    die("Błąd połączenia: " . $mysqli->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $miasto = $mysqli->real_escape_string($_POST['miasto']);
    $query = "SELECT * FROM pomiar WHERE miasto = '$miasto'";
    $result = $mysqli->query($query);

    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Data</th><th>Temperatura</th><th>Opady</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>{$row['id']}</td><td>{$row['data']}</td><td>{$row['temperatura']}</td><td>{$row['opady']}</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Brak danych dla wybranego miasta.";
    }
}

$mysqli->close();
?>