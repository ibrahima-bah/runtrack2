<!--<!DOCTYPE html>
<html>
<head>
	<title>jeu du morpion</title>
</head>
<body>
	<table width="30%" border =4>
		<tr>
			<td width="33%"><input type="submit" name="" value="-" align="center" valign="center"></td>
			<td width="33%"><input type="submit" name="" value="-" align="center"></td>
			<td width="33%"><input type="submit" name="" value="-" align="center"></td>
		</tr>
		<tr>
			<td width="33%"><input type="submit" name="" value="-" align="center"></td>
			<td width="33%"><input type="submit" name="" value="-" align="center"></td>
			<td width="33%"><input type="submit" name="" value="-" align="center"></td>
		</tr>
		<tr>
			<td width="33%"><input type="submit" name="" value="-" align="center"></td>
			<td width="33%"><input type="submit" name="" value="-" align="center"></td>
			<td width="33%"><input type="submit" name="" value="-" align="center"></td>
		</tr>
	</table>
</body>
</html>-->
<!---code a voir car non fait par moi il me servira d'inspiration */-->


<?php


session_start();
function table_case($joueur_case = false, $position = false, $joueur_actuel = false) {
    if(!$position && !$joueur_actuel && $joueur_case) {
        if($joueur_case == 1) {
            return '<img src="" alt="O"/>';
        }
        elseif($joueur_case == 2) {
            return '<img src="j2.png" alt="X"/>';
        }
        else {
            return false;
        }
    }
    elseif($position && $joueur_actuel) {
        return '<a href="?joueur='.$joueur_actuel.'&case='.$position.'"><img src="jx.png" alt="_"/></a>';
    }
    else {
        return '<img src="jx.png" alt="_"/>';
    }
}
function joueur_suivant($joueur) {
    if($joueur == 1) {
        return 2;
    }
    elseif($joueur == 2) {
        return 1;
    }
}
function table_case_partie_finie($ligne, $colonne) {
        echo '<td>';
        if($_SESSION['morpion 3x3']['tableau'][$ligne][$colonne] == table_case(null, $ligne.','.$colonne, $_SESSION['morpion 3x3']['joueur_actuel'])) {
            echo table_case();
        }
        else {
            echo $_SESSION['morpion 3x3']['tableau'][$ligne][$colonne];
        }
        echo '</td>';
}

if(isset($_GET['nouvelle_partie'])) {
    unset($_SESSION['morpion 3x3']);
    header('Location: index.php');
}
if(!isset($_SESSION['morpion 3x3']['partie_commencee'])) {
    $_SESSION['morpion 3x3']['partie_commencee'] = true;
    $_SESSION['morpion 3x3']['partie_finie'] = false;
    $_SESSION['morpion 3x3']['gagnant'] = false;
    $_SESSION['morpion 3x3']['joueur_actuel'] = 1;
    $_SESSION['morpion 3x3']['tableau'] = array(
    1 => array(1 => table_case(null, '1,1', $_SESSION['morpion 3x3']['joueur_actuel']), 2 => table_case(null, '1,2', $_SESSION['morpion 3x3']['joueur_actuel']), 3 => table_case(null, '1,3', $_SESSION['morpion 3x3']['joueur_actuel'])), 
    2 => array(1 => table_case(null, '2,1', $_SESSION['morpion 3x3']['joueur_actuel']), 2 => table_case(null, '2,2', $_SESSION['morpion 3x3']['joueur_actuel']), 3 => table_case(null, '2,3', $_SESSION['morpion 3x3']['joueur_actuel'])), 
    3 => array(1 => table_case(null, '3,1', $_SESSION['morpion 3x3']['joueur_actuel']), 2 => table_case(null, '3,2', $_SESSION['morpion 3x3']['joueur_actuel']), 3 => table_case(null, '3,3', $_SESSION['morpion 3x3']['joueur_actuel'])));
    header('Location: index.php');
}
if(isset($_GET['joueur'], $_GET['case'])) {
    $joueur = $_GET['joueur'];
    $case = $_GET['case'];
    list($ligne, $colonne) = explode(',', $case);
    $_SESSION['morpion 3x3']['tableau'][$ligne][$colonne] = table_case($joueur);
    $_SESSION['morpion 3x3']['joueur_actuel'] = joueur_suivant($joueur);
    for($i = 1, $temoin = 0; $i <= 3; $i++) {
        for($u = 1; $u <= 3; $u++) {
            if($_SESSION['morpion 3x3']['tableau'][$i][$u] == table_case(null, $i.','.$u, joueur_suivant($_SESSION['morpion 3x3']['joueur_actuel']))) { 
                $_SESSION['morpion 3x3']['tableau'][$i][$u] = table_case(null, $i.','.$u, $_SESSION['morpion 3x3']['joueur_actuel']);
                $temoin++;
            }
        }
    }
    if($temoin == 0) {
        $_SESSION['morpion 3x3']['partie_finie'] = true;
    }
    header('Location: index.php');
}
$j1 = table_case(1);
$j2 = table_case(2);
if(
($_SESSION['morpion 3x3']['tableau'][1][1] == $j1 && $_SESSION['morpion 3x3']['tableau'][1][2] == $j1 && $_SESSION['morpion 3x3']['tableau'][1][3] == $j1) ||
($_SESSION['morpion 3x3']['tableau'][2][1] == $j1 && $_SESSION['morpion 3x3']['tableau'][2][2] == $j1 && $_SESSION['morpion 3x3']['tableau'][2][3] == $j1) ||
($_SESSION['morpion 3x3']['tableau'][3][1] == $j1 && $_SESSION['morpion 3x3']['tableau'][3][2] == $j1 && $_SESSION['morpion 3x3']['tableau'][3][3] == $j1) ||
($_SESSION['morpion 3x3']['tableau'][1][1] == $j1 && $_SESSION['morpion 3x3']['tableau'][2][1] == $j1 && $_SESSION['morpion 3x3']['tableau'][3][1] == $j1) ||
($_SESSION['morpion 3x3']['tableau'][1][2] == $j1 && $_SESSION['morpion 3x3']['tableau'][2][2] == $j1 && $_SESSION['morpion 3x3']['tableau'][3][2] == $j1) ||
($_SESSION['morpion 3x3']['tableau'][1][3] == $j1 && $_SESSION['morpion 3x3']['tableau'][2][3] == $j1 && $_SESSION['morpion 3x3']['tableau'][3][3] == $j1) ||
($_SESSION['morpion 3x3']['tableau'][1][1] == $j1 && $_SESSION['morpion 3x3']['tableau'][2][2] == $j1 && $_SESSION['morpion 3x3']['tableau'][3][3] == $j1) ||
($_SESSION['morpion 3x3']['tableau'][1][3] == $j1 && $_SESSION['morpion 3x3']['tableau'][2][2] == $j1 && $_SESSION['morpion 3x3']['tableau'][3][1] == $j1)) {
    $_SESSION['morpion 3x3']['gagnant'] = 'le gagnant est le joueur 1';
    $_SESSION['morpion 3x3']['partie_finie'] = true;
}
elseif(
($_SESSION['morpion 3x3']['tableau'][1][1] == $j2 && $_SESSION['morpion 3x3']['tableau'][1][2] == $j2 && $_SESSION['morpion 3x3']['tableau'][1][3] == $j2) ||
($_SESSION['morpion 3x3']['tableau'][2][1] == $j2 && $_SESSION['morpion 3x3']['tableau'][2][2] == $j2 && $_SESSION['morpion 3x3']['tableau'][2][3] == $j2) ||
($_SESSION['morpion 3x3']['tableau'][3][1] == $j2 && $_SESSION['morpion 3x3']['tableau'][3][2] == $j2 && $_SESSION['morpion 3x3']['tableau'][3][3] == $j2) ||
($_SESSION['morpion 3x3']['tableau'][1][1] == $j2 && $_SESSION['morpion 3x3']['tableau'][2][1] == $j2 && $_SESSION['morpion 3x3']['tableau'][3][1] == $j2) ||
($_SESSION['morpion 3x3']['tableau'][1][2] == $j2 && $_SESSION['morpion 3x3']['tableau'][2][2] == $j2 && $_SESSION['morpion 3x3']['tableau'][3][2] == $j2) ||
($_SESSION['morpion 3x3']['tableau'][1][3] == $j2 && $_SESSION['morpion 3x3']['tableau'][2][3] == $j2 && $_SESSION['morpion 3x3']['tableau'][3][3] == $j2) ||
($_SESSION['morpion 3x3']['tableau'][1][1] == $j2 && $_SESSION['morpion 3x3']['tableau'][2][2] == $j2 && $_SESSION['morpion 3x3']['tableau'][3][3] == $j2) ||
($_SESSION['morpion 3x3']['tableau'][1][3] == $j2 && $_SESSION['morpion 3x3']['tableau'][2][2] == $j2 && $_SESSION['morpion 3x3']['tableau'][3][1] == $j2)) {
    $_SESSION['morpion 3x3']['gagnant'] = 'le gagnant est le joueur 2';
    $_SESSION['morpion 3x3']['partie_finie'] = true;
}
elseif($_SESSION['morpion 3x3']['partie_finie'] == true) {
    $_SESSION['morpion 3x3']['gagnant'] = 'il n\'y a pas de vainqueur';
}
?>

<!--
## Morpion 3x3 en PHP ##
## ((très) mal) Codé par : Boris Christ ##
## Mail : Boris.Christ@Laposte.net ##
## Website : http://Goliathletueur.free.fr ##
## Contactez-moi par mail si problème ##
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
    <title>Morpion 3x3</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <style>
    #quitter {float:right;}
    h1 {font-size:120%;}
    p {font-size:90%;}
    h1, p {font-family:verdana;}
    a {color:black;}
    .morpion {border-collapse:collapse;}
    .morpion td {border:1px solid black;}
    img {border:none;}
    </style>
</head>

<body>
<div id="quitter"><a href="../"><img src="quitter.png"/></a></div>
<h1>Morpion 3x3</h1>
<?php
if($_SESSION['morpion 3x3']['partie_finie'] == true) {
    ?>
    <p>La partie est terminée, et <?php echo $_SESSION['morpion 3x3']['gagnant']; ?>. <a href="?nouvelle_partie">Cliquez ici</a> si vous désirez commencer une nouvelle partie.</p>
    <?php
    
}
else {
    ?>
    <p>La partie a commencé. C'est au joueur <?php echo $_SESSION['morpion 3x3']['joueur_actuel']; ?> de jouer. <a href="?nouvelle_partie">Cliquez ici</a> si vous désirez commencer une nouvelle partie.</p>
    <?php
}
?>
<hr style="margin-bottom:2%; margin-top:2%;"/>
<?php
if($_SESSION['morpion 3x3']['partie_finie']) {
    ?>
    <table class="morpion">
    <tr>
        <?php
        table_case_partie_finie(1,1);
        table_case_partie_finie(1,2);
        table_case_partie_finie(1,3);
        ?>
    </tr>
    <tr>
        <?php
        table_case_partie_finie(2,1);
        table_case_partie_finie(2,2);
        table_case_partie_finie(2,3);
        ?>
    </tr>
    <tr>
        <?php
        table_case_partie_finie(3,1);
        table_case_partie_finie(3,2);
        table_case_partie_finie(3,3);
        ?>
    </tr>
    </table>
    <?php
}
else {
    ?>
    <table class="morpion">
    <tr>
        <td><?php echo $_SESSION['morpion 3x3']['tableau'][1][1]; ?></td>
        <td><?php echo $_SESSION['morpion 3x3']['tableau'][1][2]; ?></td>
        <td><?php echo $_SESSION['morpion 3x3']['tableau'][1][3]; ?></td>
    </tr>
    <tr>
        <td><?php echo $_SESSION['morpion 3x3']['tableau'][2][1]; ?></td>
        <td><?php echo $_SESSION['morpion 3x3']['tableau'][2][2]; ?></td>
        <td><?php echo $_SESSION['morpion 3x3']['tableau'][2][3]; ?></td>
    </tr>
    <tr>
        <td><?php echo $_SESSION['morpion 3x3']['tableau'][3][1]; ?></td>
        <td><?php echo $_SESSION['morpion 3x3']['tableau'][3][2]; ?></td>
        <td><?php echo $_SESSION['morpion 3x3']['tableau'][3][3]; ?></td>
    </tr>
    </table>
    <?php
}
?>
</body>
</html>
