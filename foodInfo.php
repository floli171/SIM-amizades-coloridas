<?php

	$profile = $_GET["profile"];
	
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

	$query_age = "SELECT TIMESTAMPDIFF(year, (SELECT DataDeNascimento FROM utente WHERE Username = '".$profile."'), CURDATE())";
	$result_age = mysqli_query($connect, $query_age) or die (mysqli_error($connect));
	$rows = mysqli_fetch_row($result_age);
	$age = $rows[0];

?>


<table width="500px" height="350px" border="1" align="center" >
			<tr>
				<?php
					echo "<td>";
					echo "$profile";
					echo "</td>";
				?>
			</tr>
</table>