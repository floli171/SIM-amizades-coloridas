<?php

	$profile = $_GET["profile"];
	$connect = mysqli_connect('localhost', 'root', '', 'sim') or die(mysqli_error($connect)); //conecta a base de dados sim

	
		//Verifica se o user ja existe
	$query_info = "SELECT * FROM utente WHERE U_ID = '".$profile."'";
	$result_info = mysqli_query($connect, $query_info) or die (mysqli_error($connect));
	$row_info = mysqli_fetch_array($result_info);
	$name = $row_info['Nome'];
	$username = $row_info['Username'];
	//$password = $row_info[2];
	$gen = $row_info['Gen'];
	$dateofbirth = $row_info['DataDeNascimento'];
	$address = $row_info['Morada'];
	$cellphone = $row_info['Tel'];
	$CS = $row_info['CS'];
	$weight = $row_info['Peso'];
	$height = $row_info['Altura'];
	$pic = $row_info['Fotografia'];
	$email = $row_info['Email'];
?>

<table border="1">
	<th>Informa&ccedil;&atilde;o Pessoal</th>
	<tr>
		<td>
			<table border="0">
				<tr>
					<td>
						<p>Género:</p>
					</td>
					<td>
						<?php
							echo $gen;
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
						Cart&atilde;o de Sa&uacute;de:
					</td>
					<td>
						<?php
							echo $CS;
						?>
					</td>
				</tr>
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
				<tr>
					<td>
						E-mail: 
					</td>
					<td>
						<?php
							echo $email;
						?>
					</td>
				</tr>
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
						<?php
							echo "<a href='http://localhost/SIM/index.php?operacao=dailyInfo&profile=$username'> Registar Atividade Diária de $username </a>";
						?>
						
					</td>
				</tr>
		</table>
		</td>
	</tr>
</table>