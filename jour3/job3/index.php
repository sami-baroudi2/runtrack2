<?php
$str = "I'm sorry Dave I'm afraid I can't do that.";
$Tabvoy = ['a','e','i','o','u','y','A','E','I','O','U','Y']; 

    //

    for ($index = 0; isset( $str[ $index ]) == true; $index++) // Pour chaque caractère de la chaîne "str" 
    {
        $CaractereStr = $str[ $index ]; 

        // Recherche si le caractère est dans la table des voyelles 
        for ( $indexVoyelle = 0; isset( $Tabvoy[ $indexVoyelle ]) == true; $indexVoyelle++) // Pour chaque voyelle du tableau Tabvoy
        {
              $Voyelle = $Tabvoy[ $indexVoyelle ];
              
            if ( $CaractereStr == $Voyelle ) {
                // C'est une voyelle
                echo $CaractereStr. ' ' ;//Affiche le caractère de str qui est une voyelle
                break ; // Sortie de boucle
               
            
            } 
        } /// fin Bcl Voyelle
        
        
    } // Fin 
?>
