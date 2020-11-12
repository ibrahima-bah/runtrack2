<!DOCTYPE html>
<html>
<head>
	<title>formulaire de connexion</title>
</head>
<body>
	<form action="index.php" method="POST">
	<?php 
		setcookie("prenom",$_POST['prenom']);

		if (isset($_POST['deco']))	 {
			$_COOKIE['prenom'] = "";
				
		}
		
		if(isset($_POST['connexion'])){
			$_COOKIE['prenom'] = $_POST['prenom']; // chargement du compteur par le prenom.;
			}
			 // affichage du prenom.
		if (isset($_COOKIE['prenom']) AND ($_COOKIE['prenom'] == "bah"))	 {
			echo 'bonjour' .' ' .$_COOKIE['prenom'] .'!';
				
		}





	?>	
		<input type="text" name="prenom" placeholder="entre un prenom:">
		<input type="submit" name="connexion" value="connexion">
		<input type="submit" name="deco" value="deconnexion">
		
	</form>
</body>
</html>