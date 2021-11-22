<?php
$bdd  =mysqli_connect("localhost" , "root" , "","jour08"); 
//Connection à la base de donnée
$req = mysqli_query($bdd , "SELECT nom, capacity FROM salles");
//Requête du tableau étudiants présent dans la base 
$res = mysqli_fetch_all($req);
//Requète des valeurs pour le tableau etudiants




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
            <td>Nom</td>
            <td>Capacité</td>
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