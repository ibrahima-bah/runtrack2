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
       		$_SESSION['prenom'] = "";// initialisation
		
		}

		if (isset($_POST['valider'])) {
			$_SESSION['prenom'] = $_POST['prenom'];
			
		}
		echo $_SESSION['prenom'];
		echo "<br/>";





	 ?>	
		<input type="text" name="prenom">
		<input type="submit" name="valider" value="valider">
		<input type="submit" name="reset" value="reset">
	</form>
</body>
</html>