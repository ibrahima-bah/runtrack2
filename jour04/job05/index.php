<!DOCTYPE html>
    <html lang="fr">
      <head>
        <title>conexion</title>
      </head>

 
      <body>
      		<!---<p class="erreur"><?php  echo $erreur; ?></p><p class="confirmer"><?php echo $confirmer; ?></p>-->
            <form method="POST" action="">
              <input type="text" name="username" placeholder="username" />
              <input type="text" name="mdp" placeholder="password" />
              <input type="submit" name="submit" value="Confirmer"/>
            </form> 
            <br/> 
            <?php 
				if (isset($_POST['mdp']) AND $_POST['mdp'] == "RAMBO" AND isset($_POST['username']) AND $_POST['username'] == "jonh" ) {
					echo "c'est ma guerre";
				}
				elseif (isset($_POST['mdp']) AND $_POST['mdp'] != "RAMBO" AND isset($_POST['username']) AND $_POST['username'] != "jonh" ) {
					echo "Votre pire cauchemar";
				}
					

				
			?>      
				
				
      </body>
    </html>