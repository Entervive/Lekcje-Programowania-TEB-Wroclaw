<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <form action="generuj.php" method="post">
        <label for="imie">Imię:</label><br>
        <input type="text" id="imie" name="imie"><br>

        <label for="poziom">Poziom:</label>
        <input type="number" id="poziom" name="poziom" min="1" max="20" value="1"><br>
        <label for="klasa">Klasa:</label>
        <select name="klasa" id="klasa">
            <option value="wojownik">Wojownik</option>
            <option value="mag">Mag</option>
            <option value="lotrzyk">Łotrzyk</option>
            <option value="paladyn">Paladyn</option>
        </select><br>
        <label for="plec">Płeć:</label><br>
        <input type="radio" id="plec" name="plec" value="mezczyzna"><br>
        <input type="radio" id="plec" name="plec" value="kobieta"><br>
        <input type="radio" id="plec" name="plec" value="neutralna"><br>
        <p>Sylwetka postaci:</p>
        <label for="sylwetkaMeska">Męska</label><br>
        <input type="radio" id="sylwetkaMeska" name="sylwetka" value="meska"><br>
        <label for="sylwetkaKobieta">Kobieca</label><br>
        <input type="radio" id="sylwetkaKobieta" name="sylwetka" value="kobieca"><br>
        <label for="sylwetkaNeutralna">Neutralna</label><br>
        <input type="radio" id="sylwetkaNeutralna" name="sylwetka" value="neutralna"><br>
        <section class="statblock">
            <section class="stat" id="hp"></section>
            <section class="stat" id="sila"></section>
            <section class="stat" id="zrecznosc"></section>
            <section class="stat" id="inteligencja"></section>
            <section class="stat" id="wytrzymalosc"></section>
            <section class="stat" id="charyzma"></section>
            <section class="stat" id="madrosc"></section>
            <section class="stat" onclick="losuj()">Losuj</section>
        </section>
        <input type="submit" value="Zapisz postać">
    </form>
</body>
<script>
    function losuj() {
        let hp = 0;
        let poziom = document.getElementById('poziom').value;
        let wybranaKlasa = document.getElementById('klasa').value;

        if (wybranaKlasa == 'wojownik') {
            klasa = 'Wojownik';
            hp = 10;
        } else if (wybranaKlasa == 'mag') {
            klasa = 'Mag';
            hp = 6;
        } else if (wybranaKlasa == 'lotrzyk') {
            klasa = 'Łotrzyk';
            hp = 8;
        } else if (wybranaKlasa == 'paladyn') {
            klasa = 'Paladyn';
            hp = 12;
        }

        if (poziom > 1) {
            for (let i = 1; i < poziom; i++) {
                if (wybranaKlasa == 'wojownik') {
                    hp += Math.floor(Math.random() * 10) + 1;
                } else if (wybranaKlasa == 'mag') {
                    hp += Math.floor(Math.random() * 6) + 1;
                } else if (wybranaKlasa == 'lotrzyk') {
                    hp += Math.floor(Math.random() * 8) + 1;
                } else if (wybranaKlasa == 'paladyn') {
                    hp += Math.floor(Math.random() * 12) + 1;
                }
            }
        }

        document.getElementById('hp').innerHTML = 'HP: ' + hp;

        let statystyki = losujStatystyki()
        document.getElementById('sila').innerHTML = 'Siła: ' + statystyki.sila;
        document.getElementById('zrecznosc').innerHTML = 'Zręczność: ' + statystyki.zrecznosc;
        document.getElementById('inteligencja').innerHTML = 'Inteligencja: ' + statystyki.inteligencja;
        document.getElementById('wytrzymalosc').innerHTML = 'Wytrzymałość: ' + statystyki.wytrzymalosc;
        document.getElementById('charyzma').innerHTML = 'Charyzma: ' + statystyki.charyzma;
        document.getElementById('madrosc').innerHTML = 'Mądrość: ' + statystyki.madrosc;

        function losujStatystyki() {
            let sila = Math.floor(Math.random() * 20) + 1;
            let zrecznosc = Math.floor(Math.random() * 20) + 1;
            let inteligencja = Math.floor(Math.random() * 20) + 1;
            let wytrzymalosc = Math.floor(Math.random() * 20) + 1;
            let charyzma = Math.floor(Math.random() * 20) + 1;
            let madrosc = Math.floor(Math.random() * 20) + 1;

            return ({
                sila: sila,
                zrecznosc: zrecznosc,
                inteligencja: inteligencja,
                wytrzymalosc: wytrzymalosc,
                charyzma: charyzma,
                madrosc: madrosc
            });
        }
    }
</script>

</html>