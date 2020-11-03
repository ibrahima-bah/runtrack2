<?php 
/*----- fonction d'un nombre premier--*/

function affichePremiers($nombre){
        echo "Les nombres premiers entre 0 et ".$nombre." sont : " .'<br/>';
        $negatif = false;
        if($nombre<0){
            $negatif = true;
            $nombre = -$nombre;
        }
        //On prend chaque nombre entre 2 et n (0 et 1 n'étant pas premier)
        for($i=2;$i<=$nombre;$i++){
            $nbDiv = 0;//Et on compte le nombre de diviseur    
            for($j=1;$j<=$i;$j++){
                if($i%$j==0){
                    $nbDiv++;            
                }
            }
            if($nbDiv == 2){
    //Un nombre premier est un chiffre qui ne possède que 2 diviseur (1 et
    // lui-même)
                if($negatif){
                    echo "-";
                }
                echo $i.'<br/>';
            }
        }
    }
?>

	   
                                
<?php
    affichePremiers(1000);

    // AFFICHE
    // Les nombres premiers entre 0 et 50 sont :
    // 2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47
?>