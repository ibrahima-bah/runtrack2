<?php 
	try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=jour08;charset=utf8', 'root', 'root');
    
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer


// On récupère tout le contenu de la etudiants
$reponse = $bdd->query('SELECT * FROM `etudiants`');

//while ($donnee = $reponse->fetch()) {
	//print_r($donnee);
//}


?>




<table border="2">
	<thead>
		<tr>
			<th>id</th>
			<th>prenom</th>
			<th>nom</th>
			<th>naissance</th>
			<th>sexe</th>
			<th>email</th>

		</tr>
	</thead>
		<tbody>
			<?php while ($donnee = $reponse->fetch(PDO::FETCH_ASSOC)) : ?>
			<tr>
				<th><?php echo $donnee['id']; ?></th>
				<th><?php echo $donnee['prenom']; ?></th>
				<th><?php echo $donnee['nom']; ?></th>
				<th><?php echo $donnee['naissance']; ?></th>
				<th><?php echo $donnee['sexe']; ?></th>
				<th><?php echo $donnee['email']; ?></th>
			</tr>
			
			<?php endwhile; ?>
		</tbody>
</table>		
		
	
</table>


