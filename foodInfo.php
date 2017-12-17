<?php

	$profile = $_GET["profile"];
	$month = $_GET["month"];
	$year = $_GET["year"];
	$day = $_GET["day"]-1;
	//$date="";
	
	$connect = mysqli_connect('localhost', 'root', '', 'sim') or die(mysqli_error($connect)); //conecta a base de dados sim
	
		//Verifica se o user ja existe
	$query_info = "SELECT * FROM utente WHERE U_ID = '".$profile."'";
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
	
	include 'RULES.php';

?>


<table width="500px" height="350px" align="center" >
			<?php
					echo "<tr>";
						echo "<p align = 'center'><b>Alimentacao de $name no dia $day-$month-$year: </b></p>";
					echo "</tr>";
					
					echo "<tr>";
						echo "<td align = 'center'>";
							if($class==0){
								echo "Atenção $username a sua dieta está <b>deficiente</b>! <br>
										Por favor coma mais, não se esqueça o corpo é o templo da mente!";
								echo "<br><br><b> Calorias Gastas em $day-$month-$year: </b><br> $ACTI_FISICA kcal";
							}
							if($class==1){
								echo "Parabéns $username! A sua dieta está <b>equilibrada</b>! <br>
										O seu corpo é saudável e a sua mente vigorosa!";
								echo "<br><br><b> Calorias Gastas em $day-$month-$year: </b><br> $ACTI_FISICA kcal";
							}
							if($class==2){
								echo "Cuidado $username! A sua dieta está <b>excessiva</b>! <br>
										Sabia que mais de metade da população acima dos 18 anos tem excesso de peso? <br>
										Seja diferente, seja original beba Sumol(r)";
								echo "<br><br><b> Calorias Gastas em $day-$month-$year: </b><br> $ACTI_FISICA kcal";
							}
						echo "</td>";
					echo "</tr>";

					echo "<tr>";

					if(isset($_SESSION["authuser"])) {

						if($_SESSION["authuser"]==2) {
							echo "<form action='POST' action='index.php?operacao=foodinfo.php'>";
							echo "<input type='text' name='recomendation'value=$recomendation>";
							echo "</form>";
							$query_recomendation = 'UPDATE `comida_dia` SET `Recomendacao`= "Deve comer mais proteína branca (frango)" WHERE C_ID = ';
						}
					}
					echo "</tr>";
			?>
</table>