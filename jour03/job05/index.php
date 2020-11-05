<?php
	$ma_chaine = "On n est pas le meilleur quand on le croit mais quand on le sait";
	$dic = array($voyelles =>'' ,$consonne =>'' );
	$voyelles = "aeouiy";
	$consonne = "bcdfghjklmnpqrstvwxz ";
	$nbr_voyelles = 0;
	$nbr_consonne = 0;
	$j = 0;
	$i = 0;
	do {
		if (strpos($voyelles, strtolower($ma_chaine[$i])) !== false) {
			$nbr_voyelles++;
		}
		$i++;
		} while ($i < strlen($ma_chaine));
	
	do {
		if (strpos($consonne, strtolower($ma_chaine[$j])) !== false) {
			$nbr_consonne++;
		}
		$j++;
		} while ($j < strlen($ma_chaine));
	


?>
<table border>
				<thead>
					<tr>
						<th>consonne</th>
						<th>voyelles</th>
						
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?php echo $nbr_consonne .'<br/>';  ?></td>
						<td><?php echo $nbr_voyelles .'<br/>'; ?></td>
						
					</tr>
					
			
				</tbody>

			</table>		