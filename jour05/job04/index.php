<?php
	function calcule($a,$operation,$b){
		if ($operation == '+') {
			$valeur = $a. '+' .$b;
			echo $a+$b;
		}
		if ($operation == '-') {
			$valeur = $a. '-' .$b;
			echo $a-$b;
		}
		if ($operation == '*') {
			$valeur = $a. '*' .$b;
			echo $a*$b;
		}
		if ($operation == '/') {
			$valeur = $a. '/' .$b;
			echo $a/$b;
		}
		if ($operation == '%') {
			$valeur = $a. '%' .$b;
			echo $a%$b;
		}

	}
	

// test
	$valeur =calcule(5,'+',1);
	echo $valeur;
	echo "<br>";
	$valeur =calcule(5,'-',1);
	echo $valeur;
	echo "<br>";
	$valeur =calcule(5,'*',1);
	echo $valeur;
	echo "<br>";
	$valeur =calcule(5,'/',1);
	echo $valeur;
	echo "<br>";
	$valeur =calcule(5,'%',1);
	echo $valeur;



?>