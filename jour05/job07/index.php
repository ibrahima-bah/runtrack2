<!DOCTYPE html>
    <html lang="fr">
      <head>
        <meta charset="utf-8">
        <title></title>
      </head>

 
      <body>
      		
            <form method="POST" action="">
              <input type="text" name="str" placeholder="str" />
              <select name="fonction">
                <option value="gras" name="gras">gras</option>
                <option value="cesar" name="cesar">cesar</option>
                <option value="decalage" name="decalage">decalage</option>
              </select>
              <input type="submit" name="submit" value="Confirmer"/>
              
            </form> 
            <br/> 
            <?php 
                /// gras
                 function gras ($str){
                  $str = $_POST['str'];
                  if (isset($_POST['str']) AND isset($_POST['fonction']) AND $_POST['fonction'] == "gras") {
                    echo ucwords('<b>.$str</b>');
                    
                  }
                
                 }
                  gras("bonjour");
                 
				      
                //$chaine_texte = 'Bonjour [soleil] !!';
    
  //$chaine_texte = preg_replace("#\[([^]]*)\]#", "<b>\\1</b>", $chaine_texte);
 
  //echo $chaine_texte;
  
  
           
			      ?>      
      </body>
    </html>