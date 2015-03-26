<?php

	$db = new PDO(' mysql:host=localhost; dbname=testdb; charset=utf8', 'username', 'password');
	$nome = $_POST['nome'];
	$user = $_POST['login'];
	$senha = $_POST['senha'];
	$email = $_POST['email'];

	echo $nome, $email, $user, $senha;
?>