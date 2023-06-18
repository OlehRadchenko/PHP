<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        table, th, td{
            text-align: center;
            border: 1px black solid;
        }
        table{
            margin: 0 auto;
        }
    </style>
</head>
<body>
   <?php
       $db = mysqli_connect('localhost','root','','grupa1');
       $query = "SELECT * FROM filmy;";
       $result = mysqli_query($db, $query);
       echo '<table>
       <tr>
       <th>Tytuł filmu</th>
       <th>Rok produkcji</th>
       </tr>
       ';
       while($row = $result -> fetch_assoc()){
           echo '
           <tr>
           <td><b>'.$row['Tytul'].'</b></td>
           <td>'.$row['Rok_prod'].'</td>
           </tr>
           ';
       }
       echo '</table>';
       mysqli_close($db);
   ?>
</body>
</html>