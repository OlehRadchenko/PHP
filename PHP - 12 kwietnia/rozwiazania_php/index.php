<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kantor wymiany walut</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="content">
        <section id="naglowek">
            <img src="kantor.png" alt="logo_kantora">
        </section>
        <section id="navbar">
            <a href="kwerendy.txt">Kwerendy</a>
            <a href="grafika.jpg">Grafika</a>
        </section>
        <section id="main">
            <?php
                $db = mysqli_connect('localhost', 'root', '');
                mysqli_select_db($db, 'kantor');
                $data = date('Y-m-d');
                echo '<b>Kursy walut na dzień:</b> '.$data;
                $zapytanie = "SELECT nazwa, skrot, skup, sprzedaz FROM waluty, kursy WHERE waluty.id_waluta = kursy.id_waluta AND data='$data';";
                $wynik = mysqli_query($db, $zapytanie);
                echo '<table>
                <tr>
                    <th>Nazwa</th>
                    <th>Skrót</th>
                    <th>Skup</th>
                    <th>Sprzedaż</th>
                </tr>';
                while($linijka = $wynik -> fetch_assoc()){
                echo'
                <tr>
                    <td>'.$linijka['nazwa'].'</td>
                    <td>'.$linijka['skrot'].'</td>
                    <td>'.$linijka['skup'].'</td>
                    <td>'.$linijka['sprzedaz'].'</td>
                </tr>';
                }
                echo '</table>';
                mysqli_close($db);
            ?>
        </section>
        <section id="stopka">
            <h2>Ogólnopolski Próbny Egzamin Zawodowy E.14 - 2018</h2>
            <h3>Autor: Oleh Radchenko</h3>
        </section>
    </section>
</body>
</html>