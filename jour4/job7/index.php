<?php
/*Faire un formulaire avec deux input text ayant comme nom “largeur” et
“hauteur” et un bouton submit.
Vous devez créer un algorithme qui dessine une maison telle que si Avec
largeur =10 et hauteur = 5, l’algorithme affiche
                        /\
                       /__\
                      /____\
                     /______\
                    /________\
                    |        |
                    |        |
                    |        |
                    |        |
                    |________|*/


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job7</title>
</head>
<body>
    <form action="index.php" method="POST">

    <label for="largeur">Largeur</label>
    <input type="text" name="largeur"> </br></br>
    <label for="hauteur">Hauteur</label>
    <input type="text" name="hauteur">
    <input type="submit" name="submit">
    
</body>
</html>