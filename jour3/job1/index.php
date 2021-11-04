<?php
$tab = [200, 204, 173, 98 , 171 , 404 , 459];

/*echo "</br>".$tab[0]. ' '."Paire";
echo "</br>".$tab[1]. ' ' ."Paire";
echo "</br>".$tab[2]. ' ' ."Impaire";
echo "</br>".$tab[3]. ' ' ."Paire";
echo "</br>".$tab[4]. ' ' ."Impaire";
echo "</br>".$tab[5]. ' ' ."Paire";
echo "</br>".$tab[6]. ' ' ."Impaire";*/

foreach ($tab  as $value) {
    if ($value%2 == 0) {
        echo $value.' '. 'Paire'.'</br>';
    }
    else {
        echo $value.' '.'Impaire'.'</br>';
    }
   
}
?>