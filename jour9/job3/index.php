<?php

$bdd = mysqli_connect('localhost' , 'root', '', 'jour08') ; 
$req = mysqli_query($bdd, "SELECT prenom , nom , naissance , sexe  FROM etudiants WHERE sexe = 'femme' ") ; 
$res = mysqli_fetch_all($req) ; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead >
        <tr>
            <td>prenom</td>
            <td>Nom</td>
            <td>Date de naissance<td>
            <td>Sexe<td>
        </tr>
        </thead>
    <tbody>
<?php
//Boucle pour créer le tableau HTML qui contient les valeurs

foreach ($res as $key => $value) {
    echo "<tr>";
   foreach ($value as $key2 => $value2) {
       
       echo "<td>" . $value2 . "</td>"; 
       
   }
   echo "</tr>";
}

?>
        </tbody>
    </table>
</body>
</html>