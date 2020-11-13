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
$reponse = $bdd->query('SELECT prenom, nom, naissance, sexe FROM `etudiants` WHERE sexe = "Femme" ');
// pour afficher la table salles avec nom et capacite
//while ($donnees = $reponse->fetch()) 
//{
	//print_r($donnees);
//}




?>

<table border="2">
	<thead>
		<tr>
			
			<th>prenom</th>
			<th>nom</th>
			<th>naissance</th>
			<th>sexe</th>
			
		</tr>
	</thead>
		<tbody>
			<?php while ($donnees = $reponse->fetch(PDO::FETCH_ASSOC)) : ?>
			<tr>
				
				<th><?php echo $donnees['prenom']; ?></th>
				<th><?php echo $donnees['nom']; ?></th>
				<th><?php echo $donnees['naissance']; ?></th>
				<th><?php echo $donnees['sexe']; ?></th>
			
			</tr>
			
			<?php endwhile; ?>
		</tbody>
</table>		