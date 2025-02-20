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
        <div class="produkty">

            <?php
            $conn = new mysqli("localhost", "root", "", "radplutura");
            $zap = "SELECT * FROM `produkty`";

            $wynik = mysqli_query($conn, $zap);

            while ($wiersz = mysqli_fetch_assoc($wynik)) {
                echo '<div>';
                echo '<img src="' . $wiersz["img"] . '" alt="' . $wiersz["img"] . '">';
                echo '<h2>' . $wiersz["nazwa"] . "</h2>";
                echo '<p>' . $wiersz["opis"] . "</p>";
                echo '<form method="POST" action="koszyk.php">
                <input type="hidden" name="id_produktu" value="' . $wiersz["id_produktu"] . ' " >' . '
                <input type="hidden" name="nazwa" value="' . $wiersz["nazwa"] . ' " >' . '
                <input type="hidden" name="cena" value="' . $wiersz["cena"] . ' " >' . '
                <input type="hidden" name="img" value="' . $wiersz["img"] . ' " >' . '
                <button type="submit">Kup</button>
                        </form>';
                echo '</div>';
            }
            ;
            ?>
        </div>
    </main>
    <?php
    include("../footer.php")
        ?>
</body>

</html>