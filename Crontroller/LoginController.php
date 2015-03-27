<?php

	$db = new PDO('mysql:host=localhost; dbname=forum', 'root', 'filipe');
	$login = $_POST['login'];
	$senha = $_POST['senha'];

	$query = $db->query("SELECT senha From usuario Where user = $login;");
	if(strcmp($senhaR ,$senha)){
		echo 'Issaê mermau';
	}else{
		require('View/login.html');
		echo '<center> Senha incorreta </center>'
	}
?>