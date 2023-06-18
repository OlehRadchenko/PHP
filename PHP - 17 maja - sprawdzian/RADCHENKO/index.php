<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>FILMOTEKA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="content">
        <section id="baner">
            <h1 id="tytul">FILMOTEKA</h1>
        </section>
        <section id="panel_lewy">
            <h1>Filmy:</h1>
            <ol>
                <?php
                include("skrypt1.php")
                ?>
            </ol>
            <h1>Reżyserzy:</h1>
            <ol>
                <?php
                include("skrypt2.php")
                ?>
            </ol>
        </section>
        <section id="panel_srodkowy">
            <form method="post">
                <input type="number" name="pole_tekstowe">
                <input type="submit" value="rok produkcji">
            </form>
            <section id="tabelka">
                <?php
                include("skrypt3.php")
                ?>
            </section>
        </section>
        <section id="panel_prawy">
            <h2>Do pobrania</h2>
            <ul type="square">
                <li><a href="baza/kwerendy.txt">kwerendy</a></li>
                <li><a href="baza/a.png">zrzut a)</a></li>
                <li><a href="baza/b.png">zrzut b)</a></li>
                <li><a href="baza/c.png">zrzut c)</a></li>
                <li><a href="baza/d.png">zrzut d)</a></li>
            </ul>
        </section>
        <section id="stopka">
            <p>Autor strony: Radchenko</p>
        </section>
    </section>
</body>
</html>