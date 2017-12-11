<?php
	$connect = mysqli_connect('localhost', 'root', '', 'sim') or die(mysqli_error($connect)); //conecta a base de dados sim

		//Verifica se o user ja existe
	$query_id = "SELECT U_ID FROM utente WHERE Username LIKE '".$_SESSION['username']."'";
		//liga a query id à base de dados sim
	$result = mysqli_query($connect,$query_id) or die (mysqli_error($connect));
	$row = mysqli_fetch_array($result);
	$u_id = $row[0];

	$query_info = "SELECT Password, Morada, Tel, Email FROM utente WHERE U_ID = '".$u_id."'";
	$result_info = mysqli_query($connect, $query_info) or die (mysqli_error($connect));
	$row_info = mysqli_fetch_array($result_info);
	$password = $row_info[0];
	$address = $row_info[1];
	$cellphone = $row_info[2];
	$email = $row_info[3];
?>

<table>
	<th>Contactos</th>
	<tr>
		<td>
			<table border="0">
				<tr>
					<td>
						Morada: 
					</td>
					<td>
						<?php
							echo $address;
						?>
					</td>
				</tr>
				<tr>
					<td>
						Telemóvel: 
					</td>
					<td>
						<?php
							echo $cellphone;
						?>
					</td>
				</tr>
				</tr>
					<td>
						<br>E-mail: 
					</td>
					<td>
						<?php
							echo $email;
						?>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<br>

<table>
	<th>Contactos</th>
	<tr>
		<td>
			<table border="0">
				<form method="POST" action="http://localhost/SIM/index.php?operacao=editInfo">
				<tr>
					<td>
						Morada: 
					</td>
					<td>
						<input type="text" name="address">
						<?php
							$query_address = "UPDATE utente SET Morada = 'Rua dos Bombeiros' WHERE Username LIKE '".$_SESSION['username']."'";
								//liga a query id à base de dados sim
							$result = mysqli_query($connect,$query_address) or die (mysqli_error($connect));
						?>
					</td>
				</tr>
				<tr>
					<td>
						Telemóvel: 
					</td>
					<td>
						<input type="text" name="cellphone" maxlength="9">
						<?php
							$query_cellphone = "UPDATE utente SET Tel = '963456714' WHERE Username LIKE '".$_SESSION['username']."'"; //colocar no SET
								//liga a query id à base de dados sim
							$result = mysqli_query($connect,$query_cellphone) or die (mysqli_error($connect));
						?>
					</td>
				</tr>
				</tr>
					<td>
						<br>E-mail: 
					</td>
					<td>
						<input type="text" name="email">
						<?php
							$query_email = "UPDATE utente SET Email = 'jose' WHERE Username LIKE '".$_SESSION['username']."'"; //colocar no SET
								//liga a query id à base de dados sim
							$result = mysqli_query($connect,$query_email) or die (mysqli_error($connect));
						?>
					</td>
				</tr>
				
			</table>
		</td>
	</tr>
</table>

<input type="Submit" name="Submit" value="Submit">
<br>
</form>