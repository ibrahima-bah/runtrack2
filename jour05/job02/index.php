<?php 

	function bonjour($jour){

		if (is_bool($jour) ==TRUE) {
			echo "Bonjour";
		}
		if (is_bool($jour) ==FALSE) {
			echo "Bonsoir";
		}
			
	}
	// test
	bonjour(2);
	echo '<br/>';
	bonjour(TRUE);


 ?>