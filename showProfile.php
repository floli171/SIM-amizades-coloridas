<script>
	function myFunction(field) {
  			document.getElementById(field).disabled = false
  	}
</script>

<?php

	$profile = $_SESSION["username"];
	$connect = mysqli_connect('localhost', 'root', '', 'sim') or die(mysqli_error($connect)); //conecta a base de dados sim

	
		//Verifica se o user ja existe
	$query_info = "SELECT * FROM utente WHERE Username = '".$profile."'";
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
				<form method="POST" action="http://localhost/SIM/index.php?operacao=editProfile">
				<tr>
					<td>
						<p>Género</p>
					</td>
					<td>
						<input type="radio" name="gender" value="male" disabled checked>Masculino<br>
						<input type="radio" name="gender" value="female" disabled >Feminino<br>
					</td>
				</tr>
				<tr>
					<td>
						<p>Data de Nascimento: </p>
					</td>
					<td>
						<input type = "text" name="date of birth" value="<?php echo $dateofbirth?>" disabled>
					</td>
				</tr>
				<tr>
					<td>
						Utilizador: 
					</td>
					<td>
						<input type = "text" name="username" value="<?php echo $username?>" disabled>
					</td>
				</tr>
				<tr>
					<td>
						Nome Completo: 
					</td>
					<td>
						<input type = "text" name="name" value="<?php echo $name?>" disabled>
					</td>
				</tr>
				<tr>
					<td>
						Cart&atilde;o de Sa&uacute;de:
					</td>
					<td>
						<input type = "text" name="cardnumber" id="cardnumber" value="<?php echo $CS?>" disabled>
					</td>
					<td>
						<input type = "button" name="editar" value="editar" onclick="myFunction('cardnumber')">
					</td>
				</tr>
	<tr>
		<td>
				<tr>
					<td>
						Morada: 
					</td>
					<td>
						<input type = "text" name="date of birth" id="address" value="<?php echo $address?>" disabled>
					</td>
					<td>
						<input type = "button" name="editar" value="editar" onclick="myFunction('address')">
					</td>
				</tr>
				<tr>
					<td>
						Telemóvel: 
					</td>
					<td>
						<input type = "text" name="cellphone" id="cellphone" value="<?php echo $cellphone?>" disabled>
					</td>
					<td>
						<input type = "button" name="editar" value="editar" onclick="myFunction('cellphone')">
					</td>
				</tr>
				</tr>
					<td>
						<br>E-mail: 
					</td>
					<td>
						<input type = "text" name="email" id="email" value="<?php echo $email?>" disabled>
					</td>
					<td>
						<input type = "button" name="editar" value="editar" onclick="myFunction('email')">
					</td>
				</tr>
				<tr>
					<td>
						Peso (kg): 
					</td>
					<td>
						<input type = "text" name="weight" id="weight" value="<?php echo $weight?>" disabled>
					</td>
					<td>
						<input type = "button" name="editar" value="editar" onclick="myFunction('weight')">
					</td>
				</tr>
				<tr>
					<td>
						Altura (cm): 
					</td>
					<td>
						<input type = "text" name="height" id="height" value="<?php echo $height?>" disabled>
					</td>
					<td>
						<input type = "button" name="editar" value="editar" onclick="myFunction('height')">
					</td>
				</tr>
				<tr>
					<td>
						Fotografia:
					</td>
					<td>
						<input type = "file" name="picture" value="<?php echo $pic?>" disabled>
					</td>
				</tr>
				<tr>
					<td>
						<input type = "submit" name="editar" value="submit" disabled>
					</td>
					<td>
						<input type = "reset" name="reset" value="reset">
					</td>
				</tr>
		</table>
		</td>
	</tr>
</table>