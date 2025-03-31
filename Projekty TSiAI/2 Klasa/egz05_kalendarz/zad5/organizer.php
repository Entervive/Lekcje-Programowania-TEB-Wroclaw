<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl5.css">
    <title>Sierpniowy kalendarz</title>
</head>

<body>
    <header>
        <h1>Organizer: SIERPIEŃ</h1>
    </header>
    <header>
        <form action="organizer.php" method="POST">
            <label for="wydarzenie">Zapisz wydarzenie:</label>
            <input for="wydarzenie" name="wydarzenie" id="wydarzenie" type="text">
            <input type="submit" value="OK">
        </form>
        <?php
        $con = mysqli_connect('localhost', 'root', '', 'kalendarz');

        if (isset($_POST['wydarzenie'])) {
            $wydarzenie = $_POST['wydarzenie'];
            $zapIns = 'UPDATE zadania SET wpis ="' . $wydarzenie . '"WHERE zadania.dataZadania = "2020-08-09";';
            mysqli_query($con, $zapIns);
        }

        mysqli_close($con);
        ?>
    </header>
    <header id="header3"><img src="logo2.png" alt="sierpień"></header>
    <main>
        <?php
        $con = mysqli_connect('localhost', 'root', '', 'kalendarz');
        $zap = 'SELECT z.dataZadania, z.wpis FROM zadania z WHERE z.miesiac = "sierpien";';
        $wynik = mysqli_query($con, $zap);

        while ($wiersz = mysqli_fetch_row($wynik)) {
            echo '<section> <h5>' . $wiersz[0] . '</h5><p>' . $wiersz[1] . '</p></section>';
        }

        mysqli_close($con);
        ?>
    </main>
    <footer>
        <p>Stronę wykonał: &copf;Aleksander Staszków</p>
    </footer>
</body>

</html>