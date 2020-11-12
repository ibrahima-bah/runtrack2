<?php 

	echo $_POST['nom'];
	echo $_POST['Prenom'];
	echo $_POST['email'];
	echo $_POST['password'];


?> 


<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>formulaire</title>
	</head>
	<body>
		<form method="POST" action="index.php">
    		<table border>
        	<!-- première ligne du tableau-->
				<thead>
					<tr>
						<th>Argument</th>
						<th>Valeur</th>
				
					</tr>
				</thead>
				<tbody> <!-- Corps du tableau -->
			    	<tr>
				   		<td><label for="Nom">Nom</label></td>
				   		<td><input type="text" name="Nom" value="BAH" size="10" maxlength="10" autofocus/></td>
				   		
					</tr>
					<tr>
				   		<td><label for="Prenom">Prenom</label></td>
				   		<td><input type="text" name="Prenom" value="IBRAHIMA" size="10" maxlength="10"  autofocus/></td>
					</tr>
					<tr>
				   		<td><label for="password">Password</label></td>
				   		<td><input type="password" name="password" value="12345" size="10" maxlength="10"  autofocus/></td>
					</tr>
					<tr>
				   		<td><label for="email">Email</label></td>
				   		<td><input type="text" name="email" value="info@st.fr" size="10" maxlength="10"  autofocus/></td>
					</tr>
				</tbody>
			</table>
		</form>		
	</body>
</html>