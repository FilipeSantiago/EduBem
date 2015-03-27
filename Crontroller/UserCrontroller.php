	<?php

		$db = new PDO('mysql:host=localhost; dbname=forum', 'root', 'filipe');
		$nome = $_POST['nome'];
		$user = $_POST['login'];
		$senha = $_POST['senha'];
		$email = $_POST['email'];
		$date = date('y/m/d');
		$blop = NULL;
		$insert = "Insert into usuario(user, senha, nome, email, foto, cadastro) values (:user, :senha, :nome, :email, :blop, :date);";
		$q = $db->prepare($insert);
		$sucess = $q->execute(array(':user' => $user, ':senha' => $senha, ':nome' => $nome, ':email' => $email, ':blop' => $blop, ':date' => $date));
		if($sucess){
			 require('View/login.html');
			 echo '<br /> <center> Cadastro efetuado com sucesso </center>';
		}
		else {
			require('View/cadastroUsuario.html');
			echo '<br/> <center>  Login ja em uso </center>'; 
		}
		
	?>