<?php

echo '    <header>
        <table>
            <tr>
                <td><img src="../IMG/logo.png" style="width: 96px; height: 96px;"></td>
                <td style="font-size: 22px;">Poczuj ten smak <b style="color: greenyellow;">rad</b>-ości</td>
            </tr>
            ';

if (isset($_COOKIE["ciastko"])) {
    echo ("<tr><td>Witaj ponownie</td>");
} else {
    echo ("<td>Dzień dobry! Strona sklepu używa ciasteczek</td></tr>");
    setcookie("ciastko", time() + 2 * 60 * 60);
}
;

echo '
        </table>
    </header>';

echo '<nav>
    <ul>
        <a href="../index.php">
            <li>Strona Główna</li>
        </a>
        <a href="produkty.php">
            <li>Produkty</li>
        </a>
        <a href="onas.php">
            <li>O nas</li>
        </a>
        <a href="kontakt.php">
            <li>Kontakt</li>
        </a>
        <a href="koszyk.php">
            <li>Koszyk</li>
        </a>
';

if (isset($_SESSION['koszyk'])) {
    echo ("<a href='reset.php'>
            <li>Reset</li>
        </a>    </ul>
</nav>");
}
;

