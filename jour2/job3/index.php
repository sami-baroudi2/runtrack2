<?php
$number=0;
while ($number<=99):
    $number++;
    if ($number<=20){
        echo "</br>"."<i>".$number."</i>";
    }
    elseif ($number==42) {
        echo "</br>"."LaPlateforme_";
    }
    elseif ($number>=25 && $number<=50){
        echo "</br>"."<u>".$number."</u>";
    }
    elseif ($number>=20){
        echo "</br>".$number;
    }
    elseif ($number>=50) {
        echo "</br>".$number;
    }
endwhile
?>