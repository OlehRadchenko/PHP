<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>APLIKACJA WEBOWA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="content">
        <header>
            <h1>APLIKACJA WEBOWA</h1>
        </header>
        <aside id="lewo">

        </aside>
        <section id="center_main">
            <section id="center">
                
                <iframe src="skrypt0.php" frameborder="0" name="skrypty">

                </iframe>
            </section>
            <footer>
                <b>Oleh Radchenko - klasa: 3P - 2023-06-07</b>
            </footer>
        </section>
        <aside id="prawo">
            <h1>Ilość filmów:</h1>
            <?php
            $db = mysqli_connect("localhost","root","","grupa1");
            $query = "SELECT COUNT(*) FROM filmy;";
            $result = mysqli_query($db, $query);
            while($row = $result -> fetch_assoc()){
                echo '<h1>'.$row['COUNT(*)'].'</h1>';
            }
            mysqli_close($db);
            ?>
            <ul>
                <li><a href="skrypt1.php" target="skrypty">skrypt 1</a></li>
                <li><a href="skrypt2.php" target="skrypty">skrypt 2</a></li>
                <li><a href="skrypt3.php" target="skrypty">skrypt 3</a></li>
            </ul>
        </aside>
        
    </section>
</body>
</html>