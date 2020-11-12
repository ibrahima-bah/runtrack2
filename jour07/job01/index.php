<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="index.php" method="POST">
	<?php 
		session_start();
		if (isset($_POST['reset'])){
       		$_SESSION['nbvisites'] = 0;// initialisation
		
		}
		if(!isset($_SESSION['nbvisites'])){
			$_SESSION['nbvisites'] = 1; // incrementation du compteur;
		}
		else{
			$_SESSION['nbvisites']++ ;
		}

		echo $_SESSION['nbvisites'];
		
		
	?>
		
		<input type="submit" name="reset" value="Reset">
	</form>
</body>
</html>





