<?php
	$connect = mysqli_connect('localhost', 'root', '', 'sim') or die(mysqli_error($connect)); //conecta a base de dados sim

		//Verifica se o user ja existe
	$query_id = "SELECT U_ID FROM utente WHERE Username LIKE '".$_SESSION['username']."'";
		//liga a query id à base de dados sim
	$result = mysqli_query($connect,$query_id) or die (mysqli_error($connect));
	$row = mysqli_fetch_array($result);
	$u_id = $row[0];

	$query_info = "SELECT Peso, Altura, Fotografia FROM utente WHERE U_ID = '".$u_id."'";
	$result_info = mysqli_query($connect, $query_info) or die (mysqli_error($connect));
	$row_info = mysqli_fetch_array($result_info);

	$weight = $row_info[0];
	$height = $row_info[1];
	$pic = $row_info[2];

?>
<table border="1">
	<th>Dados</th>
	<tr>
		<td>
			<table>	
				<tr>
					<td>
						Peso (kg): 
					</td>
					<td>
						<?php
							echo $weight;
						?>
					</td>
				</tr>
				<tr>
					<td>
						Altura (cm): 
					</td>
					<td>
						<?php
							echo $height;
						?>
					</td>
				</tr>
				<tr>
					<td>
						Fotografia:
					</td>
					<td>
						<?php
							echo $pic;
						?>
					</td>
				</tr>
				</tr>
			</table>
		</td>
	</tr>
</table>
<br>
<table border="1">
	<th>Dados</th>
	<tr>
		<td>
			<table border="0">	
				<form method="POST" action="http://localhost/SIM/index.php?operacao=editInfo">
				<tr>
					<td>
						Peso (kg): 
					</td>
					<td>
						<input type="text" name="weight" maxlength="3">
						<?php
							$query_weight = "UPDATE utente SET Peso = '85' WHERE Username LIKE '".$_SESSION['username']."'";
								//liga a query id à base de dados sim
							$result = mysqli_query($connect,$query_weight) or die (mysqli_error($connect));
						?>
					</td>
				</tr>
				<tr>
					<td>
						Altura (cm): 
					</td>
					<td>
						<input type="text" name="height" maxlength="3" value="<?php echo $height?>">
						<?php
							$query_height = "UPDATE utente SET Altura = '173' WHERE Username LIKE '".$_SESSION['username']."'";
								//liga a query id à base de dados sim
							$result = mysqli_query($connect,$query_height) or die (mysqli_error($connect));
						?>
					</td>
				</tr>
				<tr>
					<td>
						Fotografia:
					</td>
					<td>
						<input type="file" name="picture">
						<?php
							$query_picture = "UPDATE utente SET Fotografia = 'Rua dos Bombeiros' WHERE Username LIKE '".$_SESSION['username']."'";
								//liga a query id à base de dados sim
							$result = mysqli_query($connect,$query_picture) or die (mysqli_error($connect));
						?>
					</td>
				</tr>
				</tr>
			</form>
			</table>
		</td>
	</tr>
</table>