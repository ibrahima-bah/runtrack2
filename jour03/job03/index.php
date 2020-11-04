<?php 
	$str= "I'm sorry Dave I'm afraid I can'tdo that";
	$voyelle = "aeiouyAEIOUY";

	for ($i=0; isset($str[$i]) ; $i++) {
		for ($j=0; isset($voyelle[$j]) ; $j++) { 
			if ($str[$i] == $voyelle[$j]) {
				echo $str[$i];
			}
		}
	} 

		
?>