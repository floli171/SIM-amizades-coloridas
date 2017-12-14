<script>
	function myFunction(field) {
  			document.getElementById(field).disabled = false
  	}
</script>

<?php

	if($_SESSION['authuser']==1){
		$profile = $_SESSION["username"];
	}
	else{
		$profile = $_GET["profile"];
	}
	
	$connect = mysqli_connect('localhost', 'root', '', 'sim') or die(mysqli_error($connect)); //conecta a base de dados sim

	
		//Verifica se o user ja existe
	$query_info = "SELECT * FROM utente WHERE Username = '".$profile."'";
	$result_info = mysqli_query($connect, $query_info) or die (mysqli_error($connect));
	$row_info = mysqli_fetch_array($result_info);
	$name = $row_info['Nome'];
	$username = $row_info['Username'];
	$password = $row_info['Password'];
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
					<?php
						if($_SESSION["authuser"] == 1){
							echo "<tr>";
							echo "<td>";
							echo "Password"; 
							echo "</td>";
							echo "<td>";
							echo '<input type = "password" name="password" id="password" value="'.$password.'" disabled>';
							echo "</td>";
							echo "<td>";
							echo '<input type = "button" name="editar" value="editar" onclick="myFunction(\'password\')">';
							echo  "</td>";
							echo "</tr>";
						}
					?>
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
					<?php
						if($_SESSION["authuser"] == 1){
							echo "<td>";
							echo '<input type = "button" name="editar" value="editar" onclick="myFunction(\'cardnumber\')">';
							echo  "</td>";
						}
					?>
				</tr>
	<tr>
		<td>
				<tr>
					<td>
						Morada: 
					</td>
					<td>
						<input type = "text" name="address" id="address" value="<?php echo $address?>" disabled>
					</td>
					<?php
						if($_SESSION["authuser"] == 1){
							echo "<td>";
							echo '<input type = "button" name="editar" value="editar" onclick="myFunction(\'address\')">';
							echo  "</td>";
						}
					?>
				</tr>
				<tr>
					<td>
						Telemóvel: 
					</td>
					<td>
						<input type = "text" name="cellphone" id="cellphone" value="<?php echo $cellphone?>" disabled>
					</td>
					<?php
						if($_SESSION["authuser"] == 1){
							echo "<td>";
							echo '<input type = "button" name="editar" value="editar" onclick="myFunction(\'cellphone\')">';
							echo  "</td>";
						}
					?>
				</tr>
				</tr>
					<td>
						E-mail: 
					</td>
					<td>
						<input type = "text" name="email" id="email" value="<?php echo $email?>" disabled>
					</td>
					<?php
						if($_SESSION["authuser"] == 1){
							echo "<td>";
							echo '<input type = "button" name="editar" value="editar" onclick="myFunction(\'email\')">';
							echo  "</td>";
						}
					?>
				</tr>
				<tr>
					<td>
						Peso (kg): 
					</td>
					<td>
						<input type = "text" name="weight" id="weight" value="<?php echo $weight?>" disabled>
					</td>
					<?php
						if($_SESSION["authuser"] == 1){
							echo "<td>";
							echo '<input type = "button" name="editar" value="editar" onclick="myFunction(\'weight\')">';
							echo  "</td>";
						}
					?>
				</tr>
				<tr>
					<td>
						Altura (cm): 
					</td>
					<td>
						<input type = "text" name="height" id="height" value="<?php echo $height?>" disabled>
					</td>
					<?php
						if($_SESSION["authuser"] == 1){
							echo "<td>";
							echo '<input type = "button" name="editar" value="editar" onclick="myFunction(\'height\')">';
							echo  "</td>";
						}
					?>
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
						<input type = "submit" name="editar" value="submit">
					</td>
					<?php
						if($_SESSION["authuser"] == 1){
							echo "<td>";
							echo '<input type = "reset" name="reset" value="reset">';
							echo  "</td>";
						}
					?>
				</tr>
					<?php
							if($_SESSION["authuser"] == 4){
								echo "<tr>";
								echo "<td>";
								echo "<a href='http://localhost/SIM/index.php?operacao=dailyInfo&profile=$username'> Registar Atividade Diária de $username </a>";
								echo "</td>";
								echo "<td>";
							}
						?>
			</form>			
		</table>
		</td>
	</tr>
</table>