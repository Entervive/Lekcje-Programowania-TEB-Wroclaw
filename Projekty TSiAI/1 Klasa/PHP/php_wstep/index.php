<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Star Trek</h1>
    </header>
    <div class="cyk"></div>
    <main>
        <?php

            $tytul = "Star Trek: Into Darkness";
            $rok = 2013;
            $aktorzy = array('Chris Pine', 'Zachary Quinto', 'Benedict Cumberbatch');
            $zdjecie = array('https://m.media-amazon.com/images/M/MV5BMTM4OTQ4NTU3NV5BMl5BanBnXkFtZTcwNjEwNDU0OQ@@._V1_QL75_UX280_CR0,24,280,280_.jpg', 'https://m.media-amazon.com/images/M/MV5BMjQ4NDQ2MmYtODY3OS00MjE1LTk4ZjktNTE2OGQ1NmZhNzgyXkEyXkFqcGdeQXVyMjQwMDg0Ng@@._V1_QL75_UX280_CR0,24,280,280_.jpg', 'https://m.media-amazon.com/images/M/MV5BMjE0MDkzMDQwOF5BMl5BanBnXkFtZTgwOTE1Mjg1MzE@._V1_QL75_UX280_CR0,17,280,280_.jpg');

            echo("<h2>Strona o filmie $tytul</h2>");

            if($rok < 2000) {
                echo('<p>Film pochodzi XX wieku<p>');
            }
            else {
                echo('<p>Film pochodzi z XXI wieku</p>');
            }

            echo('<p>Główne role grają tam</p><br>');
        ?>
        <div class="galeria">
            <?php
                for ($i=0; $i<count($aktorzy); $i++) { 
                    echo("<div><h2>$aktorzy[$i]</h2> <img style='width: 150px; height:150px;' src='$zdjecie[$i]' alt='$aktorzy[i]'></div>");
                }
            ?>
        </div>
        <section>
            <h4>Opinie o filmie(Metoda Get)</h4>
            <form method="GET" action="opiniaGet.php">
                <input name="nick" placeholder="Nick" type="text" id="nick" required><br>
                <input name="haslo" placeholder="Hasło"type="password" id="haslo" required><br>
                <input name="mail" placeholder="E-Mail" type="email" id="email" required><br>
                <input name="opinia" placeholder="Twoja Opinia" type="text" id="opinia" required><br>
                <input name="submit" type="submit">
            </form>
        </section>
        <section>
            <h4>Opinie o filmie(Metoda Post)</h4>
            <form method="POST" action="opiniaPost.php">
                <input name="nick" placeholder="Nick" type="text" id="nick_p" required><br>
                <input name="haslo" placeholder="Hasło"type="password" id="haslo_p" required><br>
                <input name="mail" placeholder="E-Mail" type="email" id="email_p" required><br>
                <input name="opinia" placeholder="Twoja Opinia" type="text" id="opinia_p" required><br>
                <input name="submit" type="submit">
            </form>
        </section>
    </main>
    <div class="cyk"></div>
    <footer>
            &copf; Aleksander Staszków 1TSA
    </footer>
</body>
</html>