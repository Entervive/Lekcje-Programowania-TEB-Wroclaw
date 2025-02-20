<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Weterynarz - Wszystkie Wizyty</title>
</head>
<body>
    <div>
        <?php
            $lista = fopen("wizyty.txt", "r");
            
            while(!feof($lista)) {
                echo fgets($lista) . "<br>";
            }

            fclose($lista);
        ?>
    </div>
    <a href="index.php">Powrót</a>
</body>
</html>