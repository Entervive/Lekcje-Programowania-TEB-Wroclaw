<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista zadań PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Lista zadań powtórzeniowych PHP</h1>
        <h2>Ważne! Ponieważ korzystamy z języka PHP, pamiętaj o pakiecie XAMPP i uruchomieniu usług Apache i phpMyAdmin
            oraz umieszczeniu plików z rozwiązaniami zadań w odpowiednim katalogu w folderze htdocs XAMPPa.</h2>
    </header>
    <main>
        <section>
            <h2>Zadanie 1</h2>
            <p>Stwórz formularz, w którym użytkownik ma podać 3 liczby.</p>
            <p>Po przesłaniu formularza ma zostać pokazana największa z tych trzech liczb.</p>
            <form method="POST" action="liczby.php">
                <label for="liczba1">Liczba 1:</label>
                <input type="number" id="liczba1" name="liczba1" required><br><br>
                <label for="liczba2">Liczba 2:</label>
                <input type="number" id="liczba2" name="liczba2" required><br><br>
                <label for="liczba3">Liczba 3:</label>
                <input type="number" id="liczba3" name="liczba3" required><br><br>
                <input type="submit" value="Oblicz największą liczbę">
            </form>
        </section>

        <section>
            <h2>Zadanie 2</h2>
            <p>Napisz pętlę "while", która wypisze na stronie 20 kolejnych liczb z ciągu Fibbonaciego - dwa pierwsze
                elementy to 1, a każdy następny element jest sumą dwóch poprzednich. (1, 1, 2, 3, 5, 8, 13,...) </p>
            <?php
            $x = 0;
            $y = 1;
            $count = 0;

            while ($count < 20) {
                echo "$x ";
                $temp = $x + $y;
                $x = $y;
                $y = $temp;
                $count++;
            }
            ?>
        </section>

        <section>
            <h2>Zadanie 3</h2>
            <p>Stwórz formularz przesyłający dane metoda bezpieczną. Ma posiadać pola na nick, hasło oraz listę typu
                "select", z trzema opcjami: "Wojownik", "Mag" i "Łotrzyk". </p>
            <p>Przesłanie formularza ma wygenerować "kartę gracza", na której jest napisany jego nick i wybrana klasa
                postaci.</p>
            <p>Hasło należy wypisać w nowej linijce, ale zamieniając miejscami jego pierwszą i ostatnią literę, usuwając
                z niego znak na trzeciej pozycji, a także, jeżeli pojawi się w nim liczba, należy zastąpić ją znakiem
                "#".</p>
            <form method="POST" action="karta_gracza.php">
                <label for="nick">Nick:</label>
                <input type="text" id="nick" name="nick" required><br><br>
                <label for="haslo">Hasło:</label>
                <input type="password" id="haslo" name="haslo" required><br><br>
                <label for="klasa">Klasa postaci:</label>
                <select id="klasa" name="klasa">
                    <option value="Wojownik">Wojownik</option>
                    <option value="Mag">Mag</option>
                    <option value="Łotrzyk">Łotrzyk</option>
                </select><br><br>
                <input type="submit" value="Generuj kartę gracza">
            </form>
        </section>

        <section>
            <h2>Zadanie 4</h2>
            <p>Stwórz formularz, w którym będą trzy pola typu "radio" oraz jedno pole typu "checkbox".</p>
            <p>Pola typu "radio" mają mieć etykiety "Europa", "Azja", "Australia". Pole typu "checkbox" ma mieć etykietę
                "animowany?"</p>
            <p>W zależności od wybranych opcji, użytkownik powinien zobaczyć obraz lub animację .gif, nawiązującą do
                wybranego kontynentu.</p>
            <form method="POST" action="kontynenty.php">
                <label><input type="radio" name="kontynent" value="Europa" required> Europa</label><br>
                <label><input type="radio" name="kontynent" value="Azja"> Azja</label><br>
                <label><input type="radio" name="kontynent" value="Australia"> Australia</label><br>
                <label><input type="checkbox" name="animowany" value="1"> Animowany?</label><br><br>
                <input type="submit" value="Pokaż obraz">
            </form>
        </section>

        <section>
            <h2>Zadanie 5</h2>
            <p>Stwórz formularz rejestracyjny dla mechanika samochodowego. Potrzebne będą pola: data zgłoszenia (pole
                typu "date"), marka, model, rocznik, typ silnika (skorzystaj z pól typu "radio") oraz opis usterki (pole
                "textarea" - to nie jest input!).</p>
            <p>Po rejestracji, skrypt powinien otwierać (albo tworzyc nowy) plik .txt o nazwie "rejestracja" i
                umieszczać w nim wpisane dane w nowych linijkach ("tekstowy" znak przenoszący do nowej linii to \n).
                Każda rejestracja ma być oddzielona znakami "============="</p>
            <p>Następnie stwórz podstronę, na której te rejestracje zostaną wypisane pod sobą.</p>
            <form method="POST" action="rejestracja.php">
                <label for="data">Data zgłoszenia:</label>
                <input type="date" id="data" name="data" required><br><br>
                <label for="marka">Marka:</label>
                <input type="text" id="marka" name="marka" required><br><br>
                <label for="model">Model:</label>
                <input type="text" id="model" name="model" required><br><br>
                <label for="rocznik">Rocznik:</label>
                <input type="number" id="rocznik" name="rocznik" required><br><br>
                <p>Typ silnika:</p>
                <label><input type="radio" name="silnik" value="Benzyna" required> Benzyna</label><br>
                <label><input type="radio" name="silnik" value="Diesel"> Diesel</label><br>
                <label><input type="radio" name="silnik" value="Elektryczny"> Elektryczny</label><br><br>
                <label for="usterka">Opis usterki:</label><br>
                <textarea id="usterka" name="usterka" rows="4" cols="50" required></textarea><br><br>
                <input type="submit" value="Zarejestruj">
            </form>
            <a href="wyswietl_rejestracje.php">Wyświetl rejestracje</a>
        </section>

        <section>
            <h2>Ważne! Do wykonania następnych zadań potrzebna będzie baza danych "pogoda", do pobrania z dysku
                sieciowego.</h2>
        </section>

        <section>
            <h2>Zadanie 6</h2>
            <p>Stwórz skrypt, który najpierw stworzy pole formularza typu "select", w którym jako opcje do wybrania
                pojawią się nazwy miast z tabeli "miasto".</p>
            <p>Następnie stwórz skrypt, który wyświetli wszystkie dane pomiarowe z tego wybranego miasta w formie
                tabeli.</p>
            <?php
            $mysqli = new mysqli('localhost', 'root', '', 'pogoda');

            if ($mysqli->connect_error) {
                die("Błąd połączenia: " . $mysqli->connect_error);
            }

            $query = "SELECT nazwa FROM miasto";
            $result = $mysqli->query($query);

            echo '<form method="POST" action="pomiary.php">';
            echo '<label for="miasto">Wybierz miasto:</label>';
            echo '<select id="miasto" name="miasto">';
            while ($row = $result->fetch_assoc()) {
                echo '<option value="' . htmlspecialchars($row['nazwa']) . '">' . htmlspecialchars($row['nazwa']) . '</option>';
            }
            echo '</select><br><br>';
            echo '<input type="submit" value="Pokaż dane">';
            echo '</form>';

            $mysqli->close();
            ?>
        </section>

        <section>
            <h2>Zadanie 7</h2>
            <p>Stwórz formularz, który pozwoli dodać do tabeli "pomiar" wpis. Zapewnij, że użytkownik może wpisać tylko
                wartości z odpowiednich zakresów (np. czy nie próbuje dodać wpisu do miasta, którego ID nie istnieje,
                albo czy nie próbuje dodać opadów z wartością ujemną, itd.)</p>
            <form method="POST" action="dodaj_pomiar.php">
                <label for="miasto_id">ID miasta:</label>
                <input type="number" id="miasto_id" name="miasto_id" required><br><br>
                <label for="data">Data pomiaru:</label>
                <input type="date" id="data" name="data" required><br><br>
                <label for="temperatura">Temperatura:</label>
                <input type="number" id="temperatura" name="temperatura" step="0.1" required><br><br>
                <label for="opady">Opady (mm):</label>
                <input type="number" id="opady" name="opady" step="0.1" min="0" required><br><br>
                <input type="submit" value="Dodaj pomiar">
            </form>
        </section>

        <section>
            <h2>Zadanie 8</h2>
            <p>Stwórz skrypt, który sprawdzi, czy użytkownik już wcześniej był na tej stronie - wykorzystaj mechanizm
                ciasteczek.</p>
            <p>Jeżeli to pierwsza wizyta, wyświetl na stronie napis "Chwileczkę, zbieram dane pogodowe. Wróc za chwilę."
            </p>
            <p>Jeżeli to kolejna wizyta, strona wyświetli napis "Witaj ponownie, oto znalezione pomiary:", a pod spodem,
                w formie tabeli, średnie pomiary pogodowe z podziałem na kolejne dni.</p>
            <?php
            if (!isset($_COOKIE['odwiedziny'])) {
                setcookie('odwiedziny', '1', time() + 3600); // Ciasteczko ważne przez godzinę
                echo "Chwileczkę, zbieram dane pogodowe. Wróć za chwilę.";
            } else {
                echo "Witaj ponownie, oto znalezione pomiary:";
                // Nie chce mi się robić tabeli
            }
            ?>
        </section>

        <section>
            <h2>Zadanie 9</h2>
            <p>Pobierz z tabeli "miasto" wszystkie województwa w kolejności alfabetycznej. Następnie wyświetl ich nazwy
                z wielkich liter, tylko trzy pierwsze znaki.</p>
            <p>Obok nich wyświetl najwyższą zanotowaną temperaturę w tym mieście.</p>
            <?php
            $mysqli = new mysqli('localhost', 'root', '', 'pogoda');

            if ($mysqli->connect_error) {
                die("Błąd połączenia: " . $mysqli->connect_error);
            }

            $query = "SELECT DISTINCT wojewodztwo FROM miasto ORDER BY wojewodztwo ASC";
            $result = $mysqli->query($query);

            if ($result->num_rows > 0) {
                echo "<table border='1'>";
                echo "<tr><th>Województwo</th><th>Najwyższa temperatura</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    $wojewodztwo = strtoupper(substr($row['wojewodztwo'], 0, 3));
                    $subquery = "SELECT MAX(temperatura) AS max_temp FROM pomiar 
                     JOIN miasto ON pomiar.miasto_id = miasto.id 
                     WHERE miasto.wojewodztwo = '{$row['wojewodztwo']}'";
                    $subresult = $mysqli->query($subquery);
                    $max_temp = $subresult->fetch_assoc()['max_temp'] ?? 'Brak danych';
                    echo "<tr><td>$wojewodztwo</td><td>$max_temp</td></tr>";
                }
                echo "</table>";
            } else {
                echo "Brak danych o województwach.";
            }

            $mysqli->close();
            ?>
        </section>

        <section>
            <h2>Zadanie 10</h2>
            <p>Co 3 sekundy wyświetlaj losowo wybrany wpis z tabeli "pomiar" (odświeżaj stronę co 3 sekundy, wysyłając
                odpowiednie zapytanie).</p>
            <p>W ciasteczku przechowuj, ile razy strona się odświeżała i wyświetlaj tę informację gdzieś poniżej.</p>
            <?php
            $mysqli = new mysqli('localhost', 'root', '', 'pogoda');

            if ($mysqli->connect_error) {
                die("Błąd połączenia: " . $mysqli->connect_error);
            }

            // Licznik odświeżeń
            if (!isset($_COOKIE['odswiezenia'])) {
                setcookie('odswiezenia', 1, time() + 3600);
                $odswiezenia = 1;
            } else {
                $odswiezenia = $_COOKIE['odswiezenia'] + 1;
                setcookie('odswiezenia', $odswiezenia, time() + 3600);
            }

            // Pobieranie losowego wpisu
            $query = "SELECT * FROM pomiar ORDER BY RAND() LIMIT 1";
            $result = $mysqli->query($query);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                echo "<h2>Losowy pomiar</h2>";
                echo "ID: {$row['id']}<br>";
                echo "Data: {$row['data']}<br>";
                echo "Temperatura: {$row['temperatura']}<br>";
                echo "Opady: {$row['opady']}<br>";
            } else {
                echo "Brak danych w tabeli pomiar.";
            }

            echo "<p>Strona została odświeżona $odswiezenia razy.</p>";

            $mysqli->close();
            ?>

            <script>
                setTimeout(() => {
                    window.location.reload();
                }, 3000);
            </script>
        </section>
    </main>
</body>

</html>