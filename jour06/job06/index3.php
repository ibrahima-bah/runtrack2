<!DOCTYPE html>
<html>
	<head>
		<link rel = "preconnect" href = "https://fonts.gstatic.com">
		<link href = "https://fonts.googleapis.com/css2? family = Big + Shoulders + Stencil + Text & display = swap "rel =" feuille de style ">
		<title>Form</title>
		<link rel="stylesheet" type="text/css" href="style3.css">
	</head>
	<body>
		<form action="index.php" method="post">
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