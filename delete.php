<?php

	$connect = mysqli_connect('localhost', 'root', '', 'sim') or die(mysqli_error($connect)); //conecta a base de dados sim
	
	//Verifica se o user ja existe
	$query_user = 'SELECT Username, Tipo FROM assistente WHERE Username = "'.$_POST["user"].'" 
				UNION
				SELECT Username, Tipo FROM investigador WHERE Username = "'.$_POST["user"].'"
				UNION
				SELECT Username, Tipo FROM utentes WHERE Username = "'.$_POST["user"].'"
				UNION
				SELECT Username, Tipo FROM nutricionista WHERE Username = "'.$_POST["user"].'";';
				
	$get_user = mysqli_query($connect, $query_user) or die(mysqli_error($connect));
	$number = mysqli_num_rows($get_user);
	$user = mysqli_fetch_array($get_user);
	$username = $_POST["user"];
	$type = $user['Tipo'];
	$c = strcmp($type, $_POST["usertype"]);
	
	if($number == 0){
		//Insere user
			// falta codificar a pass com MD5 é algo deste género: $pass = MD5($_POST["pass"]);
			echo "Utilizador não existente";
			include 'showDelete.php';
	}
	else { 				//caso o Utilizador já exista
			if(strcmp($type, $_POST["usertype"]) != 0)
			{
				echo "Não existe um utilizador desse tipo com esse nome";
				echo "$c";
				include 'showDelete.php';
			}
			else
			{
				$query_delete = 'DELETE FROM '.$_POST["usertype"].' WHERE Username = "'.$_POST["user"].'"';
				$delete = mysqli_query($connect, $query_delete) or die(mysqli_error($connect));
				echo "Eliminado $type $username";
			}
	}
	






?>