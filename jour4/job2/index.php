<?php
if (isset($_GET['submit'])) {
    
}
$pseudo = $_GET ['pseudo'];
$password = $_GET['password'];
$date = $_GET['date'];

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job2</title>
    </head>
<body>
    <form action="index.php" method="GET">
        <label for="pseudo">Pseudo</label>

        <input type="text" name="pseudo"> </br></br>
        
        <label for="password">Mot de passe</label>
        
        <input type="password" name="password"> </br></br>
        
        <label for="date">Date de naissance</label>
        
        <input type="date" name="date"> </br>

        <input type="submit" name="Envoyer">



        <table style="margin-top : 5%;">
            <tr>
                <td>Argument</td>
                <td>Valeur</td>
            </tr>
            <tr>
                <td><?php echo 'pseudo'; ?></td>
                <td><?php echo $pseudo ; ?></td>
            </tr>           
            <tr>
                <td><?php echo 'password' ; ?></td>
                <td><?php echo $password ; ?></td>
            </tr>       
            <tr>
                <td><?php echo 'date' ?></td>
                <td><?php echo $date ?></td>
            </tr>       

    
</body>
</html>

