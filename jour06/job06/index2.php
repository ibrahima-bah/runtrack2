<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet"  href="http://fonts.googleapis.com/css?family=Crete+Round">

		<title>Form</title>
		<link rel="stylesheet" type="text/css" href="style2.css">
	</head>
	<body>
		<form action="index3.php" method="post">
		<ul>
			<li>
				<label for="name">Nom</label>
				<input type="text" name="user_name">
			</li>
			<li>
				<label for="mail">E-mail:</label>
				<input type="email" name="email">
			</li>
			<li>
				<select name="style" id="">
					<option>style1</option>
					<option>style2</option>
					<option>style3</option>
				</select>
			</li>
			<li>
				<button type="submit" name="envoyer">Valider</button>
			</li>
		</ul>	

		</form>
	</body>
</html>