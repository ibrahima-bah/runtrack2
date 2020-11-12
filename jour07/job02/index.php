<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="index.php" method="POST">



<?php 

	
	setcookie("nbvisites",1);
	
	if (isset($_POST['reset'])){
	       	$_COOKIE['nbvisites'] = 0;// initialisation
			
		}
	if(!isset($_COOKIE['nbvisites'])){
			$_COOKIE['nbvisites']; // incrementation du compteur;
		}
	else{
			$valeur = $_COOKIE['nbvisites'] ;
			$valeur++;
			setcookie('nbvisites' , $valeur);
		}

	echo $_COOKIE['nbvisites'];
		
	

	
?>
		<input type="submit" name="reset" value="Reset">
	</form>
</body>
</html>