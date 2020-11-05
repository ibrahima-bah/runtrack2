<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>formulaire</title>
	</head>
	<body>
		<form action="" method="GET" >
			<label for="">Nom:</label>
			<input type="text" name="nom" value="BAH">
			<label for="">Prenom:</label>
			<input type="text" name="Prenom" value=" IBRAHIMA">
			<label for="">Password:</label>
			<input type="email" name="nom" value="hj@i.fr">
			<input type="password" name="password">
			<input type="submit" value="Confirmer">
			
		</form>
	</body>
</html>



<?php 

if (isset($_GET['nom'])) {
	echo "bonjour" . $_GET['nom'];
}


 ?>