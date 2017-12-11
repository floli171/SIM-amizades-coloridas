<?php

	$connect = mysqli_connect('localhost', 'root', '', 'sim') or die(mysqli_error($connect)); //conecta a base de dados sim
	
	//Verifica se o user ja existe
	$query_user = 'SELECT Username FROM assistente WHERE Username = "'.$_POST["user"].'" 
				UNION
				SELECT Username FROM investigador WHERE Username = "'.$_POST["user"].'"
				UNION
				SELECT Username FROM utente WHERE Username = "'.$_POST["user"].'"
				UNION
				SELECT Username FROM nutricionista WHERE Username = "'.$_POST["user"].'";';
				
	$get_user = mysqli_query($connect, $query_user) or die(mysqli_error($connect));
	$number = mysqli_num_rows($get_user);
	$username = $_POST["user"];
	
	if($number == 0){
			$fotografia=addslashes(file_get_contents($_FILES["fileToUpload"] ['tmp_name']));
		//Insere user
			// falta codificar a pass com MD5 é algo deste género: $pass = MD5($_POST["pass"]);
			
			$query_insert = 'INSERT INTO utente(Nome, Username, Password, Gen, DataDeNascimento, Morada, Tel, CS, Peso, Altura, Fotografia, Email) VALUES ("'.$_POST["name"].'", "'.$_POST["user"].'", "'.$_POST["pass"].'", "'.$_POST["gender"].'", "'.$_POST["year"].'-'.$_POST["month"].'-'.$_POST["day"].'", "'.$_POST["address"].'", "'.$_POST["phone"].'", "'.$_POST["cardnumber"].'", "'.$_POST["weight"].'", "'.$_POST["height"].'",  "$fotografia", "'.$_POST["email"].'" )';
			$insert = mysqli_query($connect, $query_insert) or die(mysqli_error($connect));
			echo "Registo com sucesso de $username"; 
	}
	else { //caso o Utilizador já exista
			echo "Utilizador já existente";
			include 'showRegistry.php';
	}






?>