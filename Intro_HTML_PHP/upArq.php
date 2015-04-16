<!-- FTU = File to Upload-->
<?php
	$file = $_FILES['FTU'];
	$newName = $_REQUEST['title'];
	$oldName = $file['name'];
	$ext = "";
	$flag = 0;
	$i;
	for($i = 0; $i < strlen($oldName); $i++){
		if($oldName[$i] === '.') $flag = 1;
		if($flag === 1)
			$ext .= $oldName[$i];
	}

	$newName .= $ext; 

	if(isset($file)){
		if (move_uploaded_file($file['tmp_name'], "update/".$newName))
			echo "Arquivo Enviado";
		else 
			echo "Arquivo nao enviado <br />";
	}else{
		echo "ERROR(3569)";
	}
	
	/*if(isset($_FILES['FTU'])){
		if (move_uploaded_file($_FILES['FTU']['tmp_name'], "update/nome.md"))
			echo "Arquivo Enviado";
				$newName = $_REQUEST('title');
				echo $newName." 54546315";

		else 
			echo "Arquivo nao enviado";
	}else
		echo "Fazendo merda aí";*/
