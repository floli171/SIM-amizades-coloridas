	<?php
	$connect = mysqli_connect('localhost', 'root', '', 'sim') or die(mysqli_error($connect)); //conecta a base de dados sim

	$query_user = 'SELECT Username, Tipo FROM assistente WHERE Username = "'.$_SESSION["username"].'" 
				UNION
				SELECT Username, Tipo FROM investigador WHERE Username = "'.$_SESSION["username"].'"
				UNION
				SELECT Username, Tipo FROM utente WHERE Username = "'.$_SESSION["username"].'"
				UNION
				SELECT Username, Tipo FROM nutricionista WHERE Username = "'.$_SESSION["username"].'";';

	$get_user = mysqli_query($connect, $query_user) or die(mysqli_error($connect));
	$number = mysqli_num_rows($get_user);
	$row_info = mysqli_fetch_array($get_user);

	$username = $row_info['Username'];
	$tipo = $row_info['Tipo'];


switch ($tipo)
	{
	case 'assistente' :
		$query_updateActivity = 'UPDATE assistente SET Actividade = "1" WHERE Username = "'.$_SESSION["username"].'"';
		$updateActivity = mysqli_query($connect, $query_updateActivity) or die(mysqli_error($connect));
		$_SESSION["authuser"]=4;
		break;
		
	case 'investigador' :
		$query_updateActivity = 'UPDATE investigador SET Actividade = "1" WHERE Username = "'.$_SESSION["username"].'"';
		$updateActivity = mysqli_query($connect, $query_updateActivity) or die(mysqli_error($connect));
		$_SESSION["authuser"]=3;
		break;

	case 'nutricionista' :
		$query_updateActivity = 'UPDATE nutricionista SET Actividade = "1" WHERE Username = "'.$_SESSION["username"].'"';
		$updateActivity = mysqli_query($connect, $query_updateActivity) or die(mysqli_error($connect));
		$_SESSION["authuser"]=2;
		break;

	case 'utente' :
		$query_updateActivity = 'UPDATE utente SET Actividade = "1" WHERE Username = "'.$_SESSION["username"].'"';
		$updateActivity = mysqli_query($connect, $query_updateActivity) or die(mysqli_error($connect));
		$_SESSION["authuser"]=1;
		break;
	}


	echo "Bem-vindo(a) de volta $username!";
	?>