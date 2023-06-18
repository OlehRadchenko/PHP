<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 1</title>
    <style>
        #lewy{
            width: 200px;
            height: 500px;
            float: left;
            text-align: center;
            border-top: 1px solid black;
            border-right: 1px solid black;
        }
        #prawy{
            float: left;
            width: 800px;
            height: 500px;
            border-top: 1px solid black;
        }
        #container{
            width: 1002px;
            height: 500px;
        }
    </style>
</head>
<body>
    <div id="container">
        <?php
        include('menu.php');
        ?>
        <div id="prawy">
        </div>
    </div>
</body>
</html>