<?php 
//Pourquoi pas GET ? Tout simplement parce que ça s'affiche dans la barre URL et que niveau sécurité c'est top-top... 
isset($_POST['submit']);

if ($_POST['pseudo'] == 'John') {
   
    
    if ($_POST['password'] == 'Rambo') {
        echo 'C’est pas ma guerre'; 
  
 
}
    else {
        echo 'Votre pire
        cauchemar';
        }
}
else {
    echo 'Votre pire
    cauchemar';
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job5</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="pseudo">Username</label>
        <input type="pseudo" name="pseudo"> </br></br>

        <label for="password">Password</label>
        <input type="password" name="password"></br></br>

        <input type="submit" name="submit">
    </form>

    
</body>
</html>
