<p>Aqui deverá fazer o registo diário da sua alimenta&ccedil;&atilde;o</p> <hr>

<script>
	function myFunction(food, portion) {
		if (document.getElementById(food).checked == true) {
  			document.getElementById(portion).disabled = false
  		}
  	}
</script>

<?php
	$connect = mysqli_connect('localhost', 'root', '', 'sim') or die(mysqli_error($connect)); //conecta a base de dados sim

		//Verifica se o user ja existe
	$query_id = "SELECT U_ID FROM utente WHERE Username LIKE '".$_SESSION['username']."'";
		//liga a query id à base de dados sim
	$result = mysqli_query($connect,$query_id) or die (mysqli_error($connect));
	$row = mysqli_fetch_array($result);
	$u_id = $row[0];

	$query_info = "SELECT * FROM utente WHERE U_ID = '".$u_id."'";
	$result_info = mysqli_query($connect, $query_info) or die (mysqli_error($connect));
	$row_info = mysqli_fetch_array($result_info);
	$name = $row_info[0];
	$username = $row_info[1];
	$password = $row_info[2];
	$gen = $row_info[3];
	$dateofbirth = $row_info[4];
	$address = $row_info[5];
	$cellphone = $row_info[6];
	$CS = $row_info[7];
	$weight = $row_info[8];
	$height = $row_info[9];
	$pic = $row_info[10];
	$email = $row_info[11];
?>




<table border="1">
	<th>Informa&ccedil;&atilde;o Pessoal</th>
	<tr>
		<td>
			<table border="0">
				<form method="POST" action="index.php?operacao=editInfo">
				<tr>
					<td>
						<p>Género</p>
					</td>
					<td>
						<input type="radio" name="gender" value="<?php echo $height?>">
						<?php
							$query_height = "UPDATE utente SET Altura = '173' WHERE Username LIKE '".$_SESSION['username']."'";
								//liga a query id à base de dados sim
							$result = mysqli_query($connect,$query_height) or die (mysqli_error($connect));
						?>
					</td>
				</tr>
				<tr>
					<td>
						<p>Data de Nascimento: </p>
					</td>
					<td>
						<?php
							echo $dateofbirth;
						?>
					</td>
				</tr>
				<tr>
					<td>
						Nome Completo: 
					</td>
					<td>
						<?php
							echo $name;
						?>
					</td>
				</tr>
				<tr>
					<td>
						Cart&atilde;o de Sa&uacute;de:
					</td>
					<td>
						<?php
							echo $CS;
						?>
					</td>
				</tr>
				</form>
			</table>
		</td>
	</tr>
</table>

<table border="1">
	<th>Contactos | <a href="http://localhost/SIM/index.php?operacao=editContact">editar</a></th>
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
<table border="1">
	<th>Dados | <a href="http://localhost/SIM/index.php?operacao=editData">editar</th>
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
<table border="1">
	<th>Conta | <a href="http://localhost/SIM/index.php?operacao=editAccount">editar</th>
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