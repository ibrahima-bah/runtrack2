<?php 
	$input = array(200,204,173,98,171,404,459);
	foreach ($input as $key => $value) {
		echo $value. '<br/>';
		if ($value%2 == 0) {
			echo $value. " "."est pair <br/>";
			
		}
		else{
			echo $value." "."est impair <br/>";
		}
	}
	
	
?>	

