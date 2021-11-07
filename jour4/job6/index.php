<?php 
 
if ($_GET['nombre'] %2 == 1 ) {
    echo $_GET['nombre'] . ' ' .' Est impaire!';
  
}  
else {
    echo $_GET['nombre'] . ' ' . 'Est paire!';
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job6</title>
</head>
<body>
    <form action ="index.php" method="GET">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre"> </br>
        <input type="submit" name="submit">
    </form>
    
</body>
</html>
