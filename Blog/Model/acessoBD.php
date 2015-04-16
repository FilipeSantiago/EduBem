<?php

	function inserePost ($db, $titulo, $corpo, $data, $usuario, $tags){
		$id;
		$result = $db->exec("INSERT INTO usuario (titulo, corpo, data, usuario) VALUES($id, $titulo, $corpo, $data, $usuario)");

		for($i = 0; $j = strlen($tags)), $i < $j; ++$i){
			$tag;
			if(tags{$i} == '#'){
				$k = 0;
				while(tags{$i} != ' ' && tags{$i} != '#'){
					tag{$k++} = tags{$i++};
				}
				$result = $db->exec("INSERT INTO Tags(idPost, tag) VALUES($id, $tag)");
			}
		}

	}

	function insereUser($db, $nome, $email, $usuario, $senha, $foto, $data, $tags){
		$id;
		$result = $db->exec("INSERT INTO post (nome, email, foto, cadastro, user, senha) VALUES($id, $nome, $email, $foto, $data, $usuario, $senha)");
	}


?>