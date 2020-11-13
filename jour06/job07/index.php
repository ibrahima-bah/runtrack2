<?php 
	$tab=array[""];

	function bubblesort($tab,$croissant){
		if ($croissant == TRUE) {
			usort($tab, 'bubblesort');
			
		}
		else{
			rsort($tab);
		}
	}
	
	$tab=array["abc","ghi","def"];
	usort($tab, 'bubblesort');
	echo $tab;









 ?>