<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job1</title>
</head>
<body>
    <form action="index.php" method="GET">
        <p>
            <label for="pseudo">Pseudo</label> : 
        <input type="pseudo" name="pseudo" required>
            </br></br>
        <label for="password">Mot de passe</label>
        <input type="password" name="password" required>
        </br></br>
        <input type="submit" name="Envoyer">
        
     </form>
    
</body>
</html>
<?php
$_GET= ['pseudo', 'password'];
                $variable = 0 ;
    for ( $i = 0 ; isset($_GET[$i]) ; $i++){
        $variable++;

}
echo $variable;
?>