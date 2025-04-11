<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Największa liczba</title>
</head>

<body>
    <header>
        <h1>Największa liczba</h1>
    </header>
    <main>
        <section
            style="height: 84.5vh; display: flex; flex-direction: column; justify-content: center; align-items: center;">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $liczba1 = $_POST['liczba1'];
                $liczba2 = $_POST['liczba2'];
                $liczba3 = $_POST['liczba3'];

                $najwieksza = max($liczba1, $liczba2, $liczba3);

                echo "<p>Największa liczba to: $najwieksza</p>";
            }
            ?>
            <a href="lista_zadan_php.php">Powrót</a>
        </section>
    </main>
</body>

</html>