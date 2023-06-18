<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>FILMOTEKA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="main">
        <header></header>
        <section id="left">
            <h1>Filmy:</h1>
            <ol start="4">
            <?php
            include("skrypt1.php");
            ?>
            </ol>
            <h3>Reżyserzy z nazwiskiem zawierającym literę "i":</h3>
            <ol>
            <?php
            include("skrypt2.php");
            ?>
            </ol>
        </section>
        <section id="center">
            <form action="skrypt3.php" method="POST">
                <input type="number" name="ile"><input type="submit" value="Ile filmów">
            </form>
        </section>
        <section id="right">
            <h2>Do pobrania</h2>
            <ul>
                <li class="prawo"><a href="baza/kwerendy.txt">kwerendy</a></li>
                <li class="prawo"><a href="baza/a.png">zrzut a)</a></li>
                <li class="prawo"><a href="baza/b.png">zrzut b)</a></li>
                <li class="prawo"><a href="baza/c.png">zrzut c)</a></li>
                <li class="prawo"><a href="baza/d.png">zrzut d)</a></li>
            </ul>
        </section>
        <footer>
            <p>Autor strony: Oleh Radchenko 3P</p>
        </footer>
    </section>
</body>
</html>