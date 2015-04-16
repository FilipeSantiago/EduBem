<?php
	$db = new PDO('mysql:host=localhost; dbname=forum', 'root', 'filipe');
	$titulo = 	$_POST['titulo'];;
	$corpo  = 	$_POST['corpo'];;
	$tags   = 	$_POST['tags'];;
	$userP;
	$date   = date('y/m/d');
	
	$insert = "insert into Post (titulo, corpo, data, userP) values (:titulo, :corpo, :date, :userP);";
	$q = $db->prepare($insert);
	$sucess1 = $q->execute(array(':titulo' => $titulo, ':corpo' => $corpo, ':date' => $date, ':userP' => $userP));


	if($sucess1){
		echo 'Postado';
	}
	else {
		//require('cadastroUsuario.html');
		echo '<br/> <center>  Favor Preencher todos os campos </center>'; 
	}
	$idPost = $db->query("SELECT MAX(idPost) as maxGroup From Post;");
	$test = $idPost->fetch(PDO::FETCH_ASSOC);
	$tag;
			for($i = 0; $j = strlen($tags), $i < $j; ++$i){
		$tag = '';
		if($tags[$i++] == '#'){
			$k = 0;
			while($tags[$i] != ' ' && $i < $j){
				$tag = $tag.$tags[$i++];
			}
			
			if(strlen($tag) >= 1){
				$insert2 = "insert into Tags (idPost, tag) values (:idPost, :tag);";
				$q2 = $db->prepare($insert2);
				$sucesso= $q2-> execute(array(':idPost' => $test['maxGroup'], ':tag' => $tag));
			}
		}
	}
?>
