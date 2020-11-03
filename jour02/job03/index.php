<?php  
	$nombre = -1;
	while ($nombre <= 99) {
			$nombre++;
		if ($nombre <=20  ){
		 	echo "<i> 	$nombre </i>";
		 	echo "<br/>";
		 	
		}
		elseif ($nombre >=25 && $nombre <=50){
		 	echo "<u> 	$nombre </u>";
		 	echo "<br/>";
		 	if ($nombre == 41) {
		 		echo 'La Plateforme_';
		 		echo '<br/>';
		 		$nombre=$nombre+1;

		 	}
		 }
		else{	
			echo $nombre .'<br/>';
		}
		
	}

?>