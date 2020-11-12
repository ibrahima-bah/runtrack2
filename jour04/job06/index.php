<!DOCTYPE html>
    <html lang="fr">
      <head>
        <title></title>
      </head>

 
      <body>
      		
            <form method="GET" action="">
              <input type="text" name="nombre" placeholder="nombre" />
              <input type="submit" name="submit" value="Confirmer"/>
              
            </form> 
            <br/> 
            <?php 
				        if (isset($_GET['nombre']) AND $_GET['nombre']%2==0) {
                  echo "Nombre pair";
                }
                elseif (isset($_GET['nombre']) AND $_GET['nombre']%2!=0) {
                  echo "Nombre impair";
                }
					

				
			       ?>      
      </body>
    </html>