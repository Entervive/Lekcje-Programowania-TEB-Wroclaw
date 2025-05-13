<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pizzeria</title>
</head>

<body>
    <header>
        <h1>Pizzeria Salmonela</h1>
        <img src="pizza.png" id="pizzaLogo" style="transition: all 0.5s ease;" alt="Pizza">
    </header>
    <aside>
        <dl>
            <strong>Nasze smaki</strong>
            <dt>Margherita</dt>
            <dd>Ser, pomidory, bazylia</dd>
            <dt>Capricciosa</dt>
            <dd>Ser, pieczarki, szynka, karczochy</dd>
            <dt>Hawajska</dt>
            <dd>Ser, szynka, ananas</dd>
        </dl>
        <blockquote>
            Super pizza polecam ~Aneta
        </blockquote>
        <blockquote>
            Najlepsza pizza w mieście ~Krzysiek
        </blockquote>
        <blockquote>
            Pizza z pieca, pycha! ~Marta
        </blockquote>
    </aside>
    <main>
        <form method="post" action="zamowienie.php">
            <fieldset>
                <legend>Złóż zamówienie</legend>
                <label for="imie">Imię:</label>
                <input type="text" id="imie" name="imie" required><br>
                <label for="nazwisko">Nazwisko:</label>
                <input type="text" id="nazwisko" name="nazwisko" required><br>
                <label for="rodzaj">Rodzaj pizzy:</label>
                <select id="rodzaj" name="rodzaj">
                    <option value="margherita">Margherita</option>
                    <option value="capricciosa">Capricciosa</option>
                    <option value="hawajska">Hawajska</option>
                </select><br>
                <label for="rozmiar_mala">Mała pizza</label>
                <input type="radio" id="rozmiar_mala" name="rozmiar" value="mala"><br>
                <label for="rozmiar_srednia">Średnia pizza</label>
                <input type="radio" id="rozmiar_srednia" name="rozmiar" value="srednia" checked><br>
                <label for="rozmiar_duza">Duża pizza</label>
                <input type="radio" id="rozmiar_duza" name="rozmiar" value="duza"><br>
                <label for="extraSer">Dodatkowy ser</label>
                <input type="checkbox" id="extraSer" name="extraSer" value="tak"><br>
                <input type="submit" value="Zamów" style="margin-top: 10px;"><br><br>
                <label for="reset">Resetuj formularz</label><br>
                <input type="reset" id="reset" name="reset" value="Reset"><br>
            </fieldset>
        </form>
    </main>
    <footer>
        <p>Stworozne przez: Aleksander Staszków</p>
        <button onclick="obrocPlacek()" style="margin-bottom: 10px;">Obróc placek</button><br>
    </footer>
    <script src="script.js"></script>
</body>

</html>