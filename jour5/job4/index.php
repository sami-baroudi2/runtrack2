<?php
if (isset($_POST['submit']));
function calcule($a , $operation , $b) {


    if ($operation=="+") {
        return $a + $b;
    }
    elseif ($operation == '-') {
        return $a - $b;
    }
    elseif ($operation == '*') {
        return $a * $b;
    }
    elseif ($operation == '/') {
        return $a / $b;
    }
    elseif ($operation == '%') {
        return $a % $b;
    }
   
}
echo calcule($_POST['Nombrea'] , $_POST['operation'] , $_POST['Nombreb']);




?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job4</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="text" name="Nombrea">
        <select name="operation">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value ="*">x</option>
            <option value="/">/</option>
            <option value="%">%</option>
        </select>
        <input type="text" name="Nombreb">
        <input type="submit" name="calculer">



    </form>
    
</body>
</html>