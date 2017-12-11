<?php
	$connect = mysqli_connect('localhost', 'root', '', 'sim') or die(mysqli_error($connect)); //conecta a base de dados sim

		//Verifica se o user ja existe
	$query_id = "SELECT U_ID FROM utente WHERE Username LIKE '".$_SESSION['username']."'";
		//liga a query id à base de dados sim
	$result = mysqli_query($connect,$query_id) or die (mysqli_error($connect));
	$row = mysqli_fetch_array($result);
	$u_id = $row[0];

	$query_info = "SELECT Username, Password FROM utente WHERE U_ID = '".$u_id."'";
	$result_info = mysqli_query($connect, $query_info) or die (mysqli_error($connect));
	$row_info = mysqli_fetch_array($result_info);

	$username = $row_info[0];
	$password = $row_info[1];
?>
<table border="1">
	<th>Conta</th>
	<tr>
		<td>
			<table>
				<tr>
					<td>
						Utilizador: 
					</td>
					<td>
						<?php
							echo $username;
						?>
					</td>
				</tr>
				<tr>
					<td>
						Password: 
					</td>
					<td>
						<?php
							echo $password;
						?>
					</td>
				</tr>
		</table>
		</td>
	</tr>
</table>

<br>

<table border="1">
	<th>Conta</th>
	<tr>
		<td>
			<table>
				<tr>
					<td>
						Utilizador: 
					</td>
					<td>
						<?php
							echo $username;
						?>
					</td>
				</tr>
				<tr>
					<td>
						Password: 
					</td>
					<td>
						<input type="password" name="password">
						<?php
							$query_picture = "UPDATE utente SET Fotografia = 'Rua dos Bombeiros' WHERE Username LIKE '".$_SESSION['username']."'";
								//liga a query id à base de dados sim
							$result = mysqli_query($connect,$query_picture) or die (mysqli_error($connect));
						?>
					</td>
				</tr>
		</table>
		</td>
	</tr>
</table>