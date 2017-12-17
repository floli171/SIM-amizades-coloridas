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

	$id = $row_info['U_ID'];
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
	$actv = $row_info['Actividade'];

	$query_age = "SELECT TIMESTAMPDIFF(year, (SELECT DataDeNascimento FROM utente WHERE Username = '".$profile."'), CURDATE())";
	$result_age = mysqli_query($connect, $query_age) or die (mysqli_error($connect));
	$rows = mysqli_fetch_row($result_age);
	$age = $rows[0];

?>

<table border="1">
	<th>Informa&ccedil;&atilde;o Pessoal</th>
	<tr>
		<td>
			<table border="0">
				<form method="POST" action="http://localhost/SIM/index.php?operacao=editProfile">
				<?php
					if($_SESSION["authuser"] == 3){
						echo "<tr>";
							echo "<td>";
								echo "Utilizador: ";
						echo "</td>";
						echo "<td>";
							echo '<input type = "text" name="username" value="'.$id.'" disabled>';
						echo "</td>";
						echo "<td>";
							if($actv == 0){echo "Inactivo";}
								elseif($actv == 1){echo "Activo";}
						echo "</td>";
					}
					
					
					if($_SESSION["authuser"] != 3){
						echo "<tr>";
							echo "<td>";
								echo "Utilizador: ";
						echo "</td>";
						echo "<td>";
							echo '<input type = "text" name="username" value="'.$username.'" disabled>';
						echo "</td>";
						echo "<td>";
							if($actv == 0){echo "Inactivo";}
								elseif($actv == 1){echo "Activo";}
						echo "</td>";
					
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
					}
				?>
				<tr>
					<td>
						<p>Género</p>
					</td>
					<td>
						<input type="radio" name="gender" value="male" disabled checked>Masculino<br>
						<input type="radio" name="gender" value="female" disabled >Feminino<br>
					</td>
				</tr>
			<?php
				
				if($_SESSION["authuser"] == 2 || $_SESSION["authuser"] == 3){
					 	echo "<tr>";
					 	echo "<td>";
						echo "<p>Idade: </p>";
						echo "</td>";
						echo "<td>";
							echo '<input type = "text" name="date of birth" value= "'.$age.'" disabled>';
						echo "</td>";
						echo "</tr>";
				}
				else{
					echo "<tr>";
						echo "<td>";
							echo "<p>Data de Nascimento: </p>";
						echo "</td>";
						echo "<td>";
							echo '<input type = "text" name="date of birth" value="'.$dateofbirth.'" disabled>';
						echo "</td>";
					echo "</tr>";
				}
						
					
					if($_SESSION["authuser"] != 3){	
						
						echo "<tr>";
							echo "<td>";
								echo "Nome Completo: ";
							echo "</td>";
							echo "<td>";
								echo '<input type = "text" name="name" value="'.$name.'" disabled>';
							echo "</td>";
						echo "</tr>";
						
						echo "<tr>";
							echo "<td>";
								echo "Cart&atilde;o de Sa&uacute;de:";
							echo "</td>";
							echo "<td>";
								echo '<input type = "text" name="cardnumber" id="cardnumber" value="'.$CS.'" disabled>';
							echo "</td>";
						
							if($_SESSION["authuser"] == 1){
								echo "<td>";
									echo '<input type = "button" name="editar" value="editar" onclick="myFunction(\'cardnumber\')">';
								echo  "</td>";
							}
						echo "</tr>";
						
						echo "<tr>";
							echo "<td>";
								echo "Morada: ";
							echo "</td>";
							echo "<td>";
								echo '<input type = "text" name="address" id="address" value="'.$address.'" disabled>';
							echo "</td>";
					
							if($_SESSION["authuser"] == 1){
								echo "<td>";
									echo '<input type = "button" name="editar" value="editar" onclick="myFunction(\'address\')">';
								echo  "</td>";
							}
						echo "</tr>";
						
						echo "<tr>";
							echo "<td>";
								echo "Telemóvel: ";
							echo "</td>";
							echo "<td>";
								echo '<input type = "text" name="cellphone" id="cellphone" value="'.$cellphone.'" disabled>';
							echo "</td>";
					
							if($_SESSION["authuser"] == 1){
								echo "<td>";
									echo '<input type = "button" name="editar" value="editar" onclick="myFunction(\'cellphone\')">';
								echo  "</td>";
							}
						echo "</tr>";
						
						echo "<tr>";
							echo "<td>";
								echo "E-mail: ";
							echo "</td>";
							echo "<td>";
								echo '<input type = "text" name="email" id="email" value="'.$email.'" disabled>';
							echo "</td>";

							if($_SESSION["authuser"] == 1){
								echo "<td>";
									echo '<input type = "button" name="editar" value="editar" onclick="myFunction(\'email\')">';
								echo  "</td>";
							}
						echo "</tr>";
					}
				?>
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
				<?php
				
					if($_SESSION["authuser"] != 3){
						echo "<tr>";
						echo "<td>";
							echo "Fotografia:";
						echo "</td>";
						echo "<td>";
							echo '<input type = "file" name="picture" value="'.$pic.'" disabled>';
						echo "</td>";
						echo "</tr>";
					}
					
					if($_SESSION["authuser"] == 1){
						echo "<tr>";
						echo "<td>";
							echo '<input type = "submit" name="editar" value="submit">';
						echo "</td>";
					}
				?>
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
							
							else if(($_SESSION["authuser"] == 2) || ($_SESSION["authuser"] == 1)) {
								echo "<tr>";
								echo "<td>";
								//$year = date("Y");
								//$month = date("m");
								echo "<a href='http://localhost/SIM/index.php?operacao=showCalendar&profile=$id'> Consultar Alimenta&ccedil;&atilde;o de $username </a>";
								echo "</td>";
								echo "<td>";
							}
						?>
			</form>			
		</table>
		</td>
	</tr>
</table>