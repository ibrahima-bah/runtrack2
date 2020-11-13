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
$reponse = $bdd->query('SELECT SUM(superficie) FROM etage');
// pour afficher la table salles avec nom et capacite
//while ($donnees = $reponse->fetch()) 
//{
	//print_r($donnees);
//}
?>

<table border="2">
	<thead>
		<tr>
			<th>superficie_totale</th>
			
		</tr>
	</thead>
		<tbody>
			<?php while ($donnees = $reponse->fetch(PDO::FETCH_ASSOC)) : ?>
			<tr>
				<th><?php echo $donnees['SUM(superficie)']; ?></th>
				
			
			</tr>
			
			<?php endwhile; ?>
		</tbody>
</table>		