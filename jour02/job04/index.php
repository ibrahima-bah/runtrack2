<?php  
	$nombre = 0;
	while ($nombre <= 99) {
			$nombre++;
		if ($nombre%3 == 0 AND $nombre%5 == 0) {
		 	echo 'FizzBuzz';
		 	echo '<br/>';
		 	$nombre=$nombre+1;

		 	}	
		if ($nombre%3 == 0  ){
		 	echo 'Fizz';
		 	echo "<br/>";
		 	
		}
		elseif ($nombre%5 == 0){
		 	echo 'Buzz';
		 	echo "<br/>";
		
		 }
		else{	
			echo $nombre .'<br/>';
		}
		
	}

?>