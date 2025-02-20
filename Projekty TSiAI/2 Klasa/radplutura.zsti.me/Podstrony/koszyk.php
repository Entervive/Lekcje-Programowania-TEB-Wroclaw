<?php
session_start();

if (!isset(($_SESSION['koszyk']))) {
    $_SESSION['koszyk'] = [];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_produktu = $_POST['id_produktu'];
    $nazwa = $_POST['nazwa'];
    $img = $_POST['img'];
    $cena = $_POST['cena'];

    $produktZnaleziony = false;
    foreach ($_SESSION['koszyk'] as &$produkt) {
        if ($produktp['id_produktu'] === $id_produktu) {
            $produkt['ilosc'] += 1;
            $produktZnaleziony = true;
            break;
        }
    }

    if (!$produktZnaleziony) {
        $_SESSION['koszyk'][] = [
            'id_produktu' => $id_produktu,
            'nazwa' => $nazwa,
            'img' => $img,
            'cena' => $cena,
            'ilosc' => 1
        ];
    }

    header("Location: produkty.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="../IMG/logo.png">
    <meta name="author" content="Aleksander Staszków">
    <link rel="stylesheet" href="../style.css">
    <title>RadPlutUra</title>
</head>

<body>
    <?php
    include("header.php")
        ?>
    <main>
        <h2>Twój koszyk</h2>
        <?php
        if (empty($_SESSION['koszyk'])) {
            echo "<p> Twój koszyk jest pusty </p>";
        } else {
            echo "<table>
                <tr>
                    <th>Nazwa produktu</th>
                    <th>Cena</th>
                    <th>Ilość</th>
                    <th>Łączna Cena</th>
                </tr>";

            $suma = 0;
            foreach ($_SESSION["koszyk"] as $produkt) {
                $lacznacena = $produkt['ilosc'] * $produkt['cena'];
                $suma += $lacznacena;
                echo "<tr>
                        <td>{$produkt['nazwa']}</td>
                        <td>{$produkt['cena']}</td>
                        <td>{$produkt['ilosc']}</td>
                        <td>{$lacznacena} zł </td>
                    </tr>";
            }

            echo "</table>";
            echo "<p><strong>Łączna kwota: $suma zł</strong></p>";
        }
        ?>
    </main>
    <?php
    include("../footer.php")
        ?>
</body>

</html>