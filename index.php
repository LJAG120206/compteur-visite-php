<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de visite</title>
</head>
<body>
    <h3>Compteur : 
        <?php
            $open = fopen('compteur.txt','r+');
            $value = fgets($open);
            $value++;
            fseek($open, 0);
            fputs($open, $value);
            fclose($open);
            print $value;
        ?>
    </h3>
    <button><a href="index.php">Rafraichir la page</a></button>
</body>
</html>