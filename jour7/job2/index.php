<?php
setcookie("nbvisites" , time()+5000) ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

<?php
$_COOKIE["nbvisites"];
if (isset($_COOKIE["nbvisites"])) 
{
    setcookie ("nbvisites", $_COOKIE["nbvisites"] + 1 , time() +3600*24);
} 
else
 {
    $_COOKIE["nbvisites"] = 0;
}

echo 'Il y a eu avant reset : ' . $_COOKIE["nbvisites"] . ' visites';
?>
<input type="submit" name="reset" value="reset">
<?php
if (isset($_POST['reset'])) 

{
    setcookie("nbvisites");
}
?>
    </form>
</body>
</html>
