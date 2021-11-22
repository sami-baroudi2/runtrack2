<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "" method = "POST">
        <label for = "str">STR</label>
        <input type = "text" name = "str"><br><br>
        <label for = "fonction">Fonction</label>
            <select name  = "fonction">
                <option>Gras</option>
                <option>Cesar</option>
                <option>Plateforme</option>
            </select>
    </form>
</body>
</html>
<?php
foreach ($_POST as $key => $value) {
    if ($key == "str") { 
        $text = $value;
    }
    elseif ($key == "fonction") {
        $fonction = $value ; 
        }
}
function gras($str) {
$alphabet="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    for ($i=0; $str[$i]; $i++) { 
        for ($j=0; isset($alphabet[$j]) && isset($str[$i]) ; $j++) { 
            if ($str[$i] == $alphabet[$j] && isset($str[$i])){
                echo "<b>" ; 
                while (isset($str[$i]) && $str[$i]!== " ") {
                    echo $str[$i];
                    $i++;
                    break;
                }
                echo "</b>";
            }
            if (!isset($alphabet[$j]) && isset($str[$i])) {
                while (isset($str[$i]) && $str[$i]!== " "){
                    echo $str[$i];
                    $i++;
                    break;
                }
                echo " ";
            }
        }
    
    }



}
if(isset($fonction)){
    if($fonction=="Gras"){
        echo gras($text);
    }
}