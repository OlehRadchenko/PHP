<?php
if(!empty($_POST['pole_tekstowe']) && isset($_POST['pole_tekstowe'])){
    $db = @mysqli_connect('localhost','root','','grupa1');
    if($db){
        $rok = $_POST['pole_tekstowe'];
        $zapytanie = "SELECT * FROM filmy,rezyserzy WHERE filmy.IDRezysera=rezyserzy.IDRezysera AND rok_prod='$rok';";
        $wynik = mysqli_query($db,$zapytanie);
        if(mysqli_num_rows($wynik) != 0){
            echo '
            <br>
            <table>
            <tr>
            <th>Tytuł filmu</th>
            <th>Nazwisko reżysera</th>
            <th>Gatunek</th>
            <th>Rok produkcji</th>
            </tr>
            ';
            while($wiersz = $wynik->fetch_assoc()){
                echo '
                <tr>
                <td>'.$wiersz['Tytul'].'</td>
                <td>'.$wiersz['Nazwisko'].'</td>
                <td>'.$wiersz['Gatunek'].'</td>
                <td>'.$wiersz['Rok_prod'].'</td>
                </tr>
                ';
            }
            echo '</table>';
            mysqli_close($db);
        }else{
            echo 'W naszej bazie danych nie ma filmu o wskazanym roku produkcji!';
        }
    }else{
        echo 'Nie udało się połączyć z bazą danych';
    }
}
?>