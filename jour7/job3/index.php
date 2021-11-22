<?php 

session_start();
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
    <form action ="index.php" method="POST">
        <label for="prenom">Prenom</label>
        <input type="text" name="prenom">

<?php


?>
    <input type="submit" name="envoyer"> <br><br>
    <input type="submit" name="reset" value="reset">

    </form>
</body>
</html>
<?php 

?>