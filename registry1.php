<?php

	$connect = mysqli_connect('localhost', 'root', '', 'sim') or die(mysqli_error($connect)); //conecta a base de dados sim
	
	//Verifica se o user ja existe
	$query_user = 'SELECT Username FROM assistente WHERE Username = "'.$_POST["user"].'" 
				UNION
				SELECT Username FROM investigador WHERE Username = "'.$_POST["user"].'"
				UNION
				SELECT Username FROM utentes WHERE Username = "'.$_POST["user"].'"
				UNION
				SELECT Username FROM nutricionista WHERE Username = "'.$_POST["user"].'";';
				
	$get_user = mysqli_query($connect, $query_user) or die(mysqli_error($connect));
	$number = mysqli_num_rows($get_user);
	$username = $_POST["user"];
	
	if($number == 0){
		//Insere user
			// falta codificar a pass com MD5 é algo deste género: $pass = MD5($_POST["pass"]);
			switch ($_POST['usertype'])
						{
						case 'assistant' :
							$query_insert = 'INSERT INTO assistente(Nome, Username, Password, Email) VALUES ("'.$_POST["name"].'", "'.$_POST["user"].'", "'.$_POST["pass"].'", "'.$_POST["email"].'")';
							$insert = mysqli_query($connect, $query_insert) or die(mysqli_error($connect));
							echo "Registo com sucesso do Assistente $username";
							break;
							
						case 'investigator' :
							$query_insert = 'INSERT INTO investigador(Nome, Username, Password, Email) VALUES ("'.$_POST["name"].'", "'.$_POST["user"].'", "'.$_POST["pass"].'", "'.$_POST["email"].'")';
							$insert = mysqli_query($connect, $query_insert) or die(mysqli_error($connect));
							echo "Registo com sucesso do Investigador $username";
							break;

						case 'nutricionist' :
							$query_insert = 'INSERT INTO nutricionista(Nome, Username, Password, Email) VALUES ("'.$_POST["name"].'", "'.$_POST["user"].'", "'.$_POST["pass"].'", "'.$_POST["email"].'")';
							$insert = mysqli_query($connect, $query_insert) or die(mysqli_error($connect));
							echo "Registo com sucesso do Nutricionista $username";
							break;
						}
	}
	else { //caso o Utilizador já exista
			echo "Utilizador já existente";
			include 'showRegistry1.php';
	}






?>