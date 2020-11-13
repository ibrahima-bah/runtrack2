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
$reponse = $bdd->query('SELECT * FROM `etudiants` WHERE naissance BETWEEN "1989-01-02" AND "1999-12-31"');
// pour afficher la table salles avec nom et capacite
//while ($donnees = $reponse->fetch()) 
//{
	//print_r($donnees);
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
			<?php while ($donnees = $reponse->fetch(PDO::FETCH_ASSOC)) : ?>
			<tr>
				<th><?php echo $donnees['id']; ?></th>
				<th><?php echo $donnees['prenom']; ?></th>
				<th><?php echo $donnees['nom']; ?></th>
				<th><?php echo $donnees['naissance']; ?></th>
				<th><?php echo $donnees['sexe']; ?></th>
				<th><?php echo $donnees['email']; ?></th>
			
			</tr>
			
			<?php endwhile; ?>
		</tbody>
</table>		