<?php 

  echo $_GET['nom'];
  echo $_GET['prenom'];
  echo $_GET['email'];
  echo $_GET['password'];



?>





<!DOCTYPE html>
    <html lang="fr">
      <head>
        <title></title>
      </head>
      <body>
            <form method="GET" action="index.php">
              <label for="nom">Nom:</label> 
              <input type="text" name="nom">
              <label for="prenom">Prenom:</label> 
              <input type="text" name="prenom">
              <label for="Email">Email:</label> 
              <input type="text" name="email">
              <label for="password">Password:</label> 
              <input type="password" name="password">
              <input type="submit" value="Confirmer">

            </form>   
      </body>
    </html>