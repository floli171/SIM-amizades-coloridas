<?php
	$connect = mysqli_connect('localhost', 'root', '', 'sim') or die(mysqli_error($connect)); //conecta a base de dados sim

	$profile=$_POST['profile'];
	$nid=$_POST['nutri'];
	
		//Verifica se o user ja existe
	$query_info = "SELECT Username FROM nutricionista WHERE N_ID = '".$nid."'";
	$result_info = mysqli_query($connect, $query_info) or die (mysqli_error($connect));
	$row_info = mysqli_fetch_array($result_info);
	$nutri=$row_info['Username'];
	
	
	if(isset($nid)){
			$query_update = 'UPDATE utente SET N_ID = "'.$nid.'" WHERE Username = "'.$profile.'"';
			$update = mysqli_query($connect,$query_update) or die (mysqli_error($connect));
			echo "Excelente escolha! $nutri está ao seu dispor e juntos irão descobrir a dieta equilibrada ideal para si";
		}
		else{
			echo "Por favor escolha um Nutricionista <a href='http://localhost/SIM/index.php?operacao=showNutri&pageNumber=1&pageSize=10&profile=$profile'>aqui</a>";
			echo "<br>";
			echo "<br>";
			echo "<a href='http://localhost/SIM/index.php?operacao=showLogin'> Ignorar </a>";
		}
	
?>