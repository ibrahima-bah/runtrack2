<!DOCTYPE html>
    <html lang="fr">
      <head>
        <title></title>
      </head>

 
      <body>
      		
            <form method="GET" action="">
              <input type="text" name="largeur" placeholder="largeur" />
              <input type="text" name="hauteur" placeholder="hauteur" />
              <input type="submit" name="submit" value="Confirmer"/>
              
            </form> 
            <br/> 
            <?php 
				        
  
  // Définition du tablau de points pour le polygone
  $points = array(
              60,  50,  // Point 1 (x, y)
              20,  240, // Point 2 (x, y)
              160,  230,  // Point 3 (x, y)
              );
  $pointsd=array(
              60,  50,  // Point 1 (x, y)
              180,  160, // Point 2 (x, y)
              160,  230,  // Point 3 (x, y)
              );
   
  // Création d'une image
  $image = @imagecreate(250, 250);
   
  // Alloue quelques couleurs
  $blanc   = imagecolorallocate($image, 255, 255, 255);
  $bleu = imagecolorallocate($image, 0, 0, 255);
  $bleud = imagecolorallocate($image, 0, 0, 205);
  // Remplit l'arrière-plan
  imagefilledrectangle($image, 0, 0, 249, 249,
  $blanc);
   
  // Dessine le polygone
  imagepolygon($image, $points, 3, $bleu);
  imagepolygon($image, $pointsd, 3, $bleud);
  // Affichage de l'image
  header('Content-type: image/png');
  imagepng($image);
  imagedestroy($image);
  
           
			      ?>      
      </body>
    </html>