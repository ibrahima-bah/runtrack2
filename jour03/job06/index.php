<?php 
		// utilisons la foction strrev
	//$str = "Les choses que l'on possede finissent par nous posseder";
	//echo strrev($str);
	/// creons une fonction

	
	function mb_strrev($str){
    	$chaine = '';
    	for ($i = mb_strlen($str); $i>=0; $i--) {
        	$chaine .= mb_substr($str, $i, 1);
   		 }
    	return $chaine;
}

	echo mb_strrev("Les choses que l'on possede finissent par nous posseder"); 


?>

