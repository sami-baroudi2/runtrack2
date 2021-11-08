<?php
$str = "Preuve est faite que visages dévots et pieuses actions nous servent à enrober de sucre le Diable lui-même.";
$char = "e";
 function occurence($str , $char) {
     for  ($i=0; isset($str[$i]) ; $i++) {
         if ($str[$i] == $char) {
             $e++;

         }
     }
     return $e;
 }  
echo occurence ($str , $char);

?>
