<?php
	$Login = strip_tags($_POST['Login']); // On recup les infos de la variable 
	$Password = strip_tags($_POST['Password']);
	
	$query = $pdo->prepare('SELECT login,password FROM users WHERE login = "'.$Login.'"');
	$query->execute(array());
	$data = $query->fetch();
	
	if($data['login'] == $Login && $data['password'] == $Password){
		header('Location: mettre_login_employe.php');
	}
?>