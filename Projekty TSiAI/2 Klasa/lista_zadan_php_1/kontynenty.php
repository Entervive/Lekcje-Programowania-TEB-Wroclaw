<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kontynent = $_POST['kontynent'];
    $animowany = isset($_POST['animowany']);

    $plik = strtolower($kontynent) . ($animowany ? '.gif' : '.jpg');
    echo "<h2>Wybrano: $kontynent</h2>";
    echo "<img src='images/$plik' alt='$kontynent'>";
}
?>