<?php

	$connect = mysqli_connect('localhost', 'root', '', 'sim') or die(mysqli_error($connect)); //conecta a base de dados sim
	
	//Verifica se o user ja existe
	$query_user = 'SELECT Username, Tipo FROM assistente WHERE Username = "'.$_POST["user"].'" 
				UNION
				SELECT Username, Tipo FROM investigador WHERE Username = "'.$_POST["user"].'"
				UNION
				SELECT Username, Tipo FROM utente WHERE Username = "'.$_POST["user"].'"
				UNION
				SELECT Username, Tipo FROM nutricionista WHERE Username = "'.$_POST["user"].'";';
				
	$get_user = mysqli_query($connect, $query_user) or die(mysqli_error($connect));
	$number = mysqli_num_rows($get_user);
	$user = mysqli_fetch_array($get_user);
	$username = $_POST["user"];
	$type = $user['Tipo'];
	$c = strcmp($type, $_POST["usertype"]);	
	
	if($number == 0){
	
			echo "Utilizador não existente";
			include 'showDelete.php';
	}
	else { 				//caso o Utilizador já exista
			if(strcmp($type, $_POST["usertype"]) != 0)
			{
				echo "Não existe um utilizador desse tipo com esse nome";
				include 'showDelete.php';
			}
			else
			{
				$query_activity = 'SELECT Actividade FROM '.$tipo.' WHERE Username = '.$username.'';
				$get_activity = mysqli_query($connect, $query_activity);
				$info = mysqli_fetch_array($get_activity);
				$activity = $info['Actividade'];
				
				if($activity == 1){
					$query_disable = 'UPDATE '.$type.' SET Actividade = 0 WHERE Username = "'.$username.'"';
					$disable = mysqli_query($connect, $query_disable) or die(mysqli_error($connect));
					echo "Desactivado $type $username";
				}
				
				else{
					echo "$type $username já foi desactivado";
				}

				
				if(strcmp($type,'nutricionista')==0){
				
					echo "Está a desactivar um utilizador do tipo nutricionista deseja desatribuir também os seus utentes?";
					echo "<form method='POST' action='index.php?operacao=showDelete&user=$username&Tipo=$type'>";
					echo "<input type='radio' name='desatribuir' value='1'>Sim";
					echo "<input type='radio' name='desatribuir' value='0'>Não";
					echo "<input type='submit' 'value='submit'>";
					echo "</form>";
				
				}
			}
	}
	






?>