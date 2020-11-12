<?php 

	function occurences($str,$char){
		echo '<b>"' . $str . '"</b> contient <b>' . substr_count($str, $char) . '</b> fois le caractère <b>' . $char . '</b>';
		
	}

	//test
	occurences("fonce" , "eo");
	echo "<br>";
	occurences("fonce" , "a");
	echo "<br>";
	occurences("fonce" , "b");
	echo "<br>";
	occurences("fonce" , "d");
	echo "<br>";
	occurences("fonce" , "n");


 ?>