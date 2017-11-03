<?php

	$connect = mysqli_connect('localhost', 'root', '', 'mysql') or die(mysqli_error($connect));
	
	//Verifica se o user ja existe
	$query_user = 'SELECT Username FROM Users WHERE (Username = "'.$_POST["user"].'")';		
	$get_user = mysqli_query($connect, $query_user) or die(mysqli_error($connect));
	$number = mysqli_num_rows($get_user);
	$username = $_POST["user"];
	
	if($number == 0){
		//Insere user
			// falta codificar a pass com MD5 é algo deste género: $pass = MD5($_POST["pass"]);
			
			$query_insert = 'INSERT INTO users(Name, Username, Password) VALUES ("'.$_POST["name"].'", "'.$_POST["user"].'", "'.$_POST["pass"].'")';
			$insert = mysqli_query($connect, $query_insert) or die(mysqli_error($connect));
			echo "Registo com sucesso de $username";
	}
	else { //caso o Utilizador já exista
			echo "Utilizador já existente";
			include 'showRegistry.php';
	}






?>