<table border="1">
	<th>Escolha o Utilizador a Remover</th>
	<tr>
		<td>
			<table border="0">
				<form method="POST" action="index.php?operacao=delete">
				
				<tr>
					<td>
						<p>Tipo de Utilizador</p>
					</td>
					<td>
						<input type="radio" name="usertype" value="assistente">Assistente<br>
						<input type="radio" name="usertype" value="investigador">Investigador<br>
						<input type="radio" name="usertype" value="nutricionista">Nutricionista<br>
						<input type="radio" name="usertype" value="utente">Utente<br>
					</td>
				</tr>
				
				<!--
				<tr>
					<td>
						<br>E-mail: 
					</td>
					<td>
						<br><input type="E-mail" name="email">
					</td>
				</tr>
				-->
				
				<tr>
					<td>
						Utilizador: 
					</td>
					<td>
						<input type="text" name="user">
					</td>
				</tr>
		</table>
		</td>
	</tr>
</table>

<?php

	if(isset($_POST['desatribuir'])){
		
		$connect = mysqli_connect('localhost', 'root', '', 'sim') or die(mysqli_error($connect)); //conecta a base de dados sim
		
		if($_POST["desatribuir"] == 1){		
			$query_nutri = "SELECT * FROM nutricionista WHERE Username = '".$_GET["user"]."'";
			$result_nutri = mysqli_query($connect, $query_nutri) or die (mysqli_error($connect));
			$nutri_info = mysqli_fetch_array($result_nutri);
			$nid=$nutri_info['N_ID'];
		
			$query_update = 'UPDATE utente SET N_ID = null WHERE N_ID = '.$nid.'';
			$update = mysqli_query($connect, $query_update);
			echo "Nutricionista desatribuido dos utentes";
		}	
	}
?>

<br><p><input type="Submit" name="Submit" value="Submit"></form></p>