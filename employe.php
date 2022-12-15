<?php
	include 'parametres.php';
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Projet I5 - MagicIndustries</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'> <!-- Style des icones -->
		<script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script> <!-- js des icones -->
	</head>
    <body>
		<div class="connexion">
			<form id="Form_connexion" method="post">
				<div class="infos">
					<div class="icon">
						<i class='bx bxs-user'></i>					
					</div>
					<input id="login" placeholder="Login" name="Login" type="text" > <!-- Mail -->
				</div>
				<div class="infos">
					<div class="icon">
						<i class='bx bxs-lock'></i>					
					</div>
					<input id="password" placeholder="Password" name="Password" type="password"> <!-- Mdp -->
				</div>
				<input id="btn_connexion" type="submit" value="Se connecter"></input> <!-- Bouton de validation -->
				<?php require ('check_user.php');?>
			</form>
		</div>		
    </body>
</html>