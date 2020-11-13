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
$reponse = $bdd->query('SELECT * FROM salles INNER JOIN etage ON etage.id = salles.id_etage');
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
			<th>nom</th>
			<th>id_etage</th>
			<th>capacite</th>
			<th>numero</th>
			<th>superficie</th>
			
		</tr>
	</thead>
		<tbody>
			<?php while ($donnees = $reponse->fetch(PDO::FETCH_ASSOC)) : ?>
			<tr>
				
				<th><?php echo $donnees['id']; ?></th>
				<th><?php echo $donnees['nom']; ?></th>
				<th><?php echo $donnees['id_etage']; ?></th>
				<th><?php echo $donnees['capacite']; ?></th>
				<th><?php echo $donnees['numero']; ?></th>
				<th><?php echo $donnees['superficie']; ?></th>
				
			</tr>
			
			<?php endwhile; ?>
		</tbody>
</table>