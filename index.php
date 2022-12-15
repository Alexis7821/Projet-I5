<?php
	require('parametres.php');
	require('Head.php');
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
		<div class="entreprise">
			<h1>Bienvenue sur le site de MagicIndustries</h1>
			<p>La solution réseau la plus magique qui existe !</p>
			<img src="logo.png">
		</div>
		<div class="access">
			<input id="btn_access" type="button" value="Acces employés" onclick="self.location.href='employe.php'">
		</div>
    </body>
</html>