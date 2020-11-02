<?php
	$boleen = true;
	$entier = 5 ;
	$float = 5.6;
	$string = "Hello";

	



?>
			<table border>
				<thead>
					<tr>
						<th>type</th>
						<th>nom</th>
						<th>valeur</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?php echo gettype($float); ?></td>
						<td><?php  echo "float"; ?></td>
						<td><?php echo $float;   ?></td>
					</tr>
					<tr>
						<td><?php echo gettype($entier); ?></td>
						<td><?php echo "entier"; ?></td>
						<td><?php echo $entier;  ?></td>
					</tr>
					<tr>
						<td><?php echo gettype($boleen); ?></td>
						<td><?php echo "boleen"; ?></td>
						<td><?php echo $boleen;  ?></td>
					</tr>
					<tr>
						<td><?php echo gettype($string); ?></td>
						<td><?php echo "string"; ?></td>
						<td><?php echo $string;  ?></td>
					</tr>
			
				</tbody>

			</table>		


