


<!DOCTYPE html>
    <html lang="fr">
    <head>
      <title></title>
    </head>
<?php 

    echo $_POST['nom'];
    echo $_POST['prenom'];
    echo $_POST['email'];
    echo $_POST['password'];
    

?>





    <body>
        <form method="POST" action="index.php">
            <label for="nom">Nom:</label> 
            <input type="text" name="nom"><br>
            <label for="prenom">Prenom:</label> 
            <input type="text" name="prenom"><br>
            <label for="Email">Email:</label> 
            <input type="text" name="email"><br>
            <label for="password">Password:</label> 
            <input type="password" name="password"><br>
            <input type="submit" value="Confirmer">
        </form>   
    </body>
</html>

