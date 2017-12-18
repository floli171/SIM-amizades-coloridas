<?php

	$connect = mysqli_connect('localhost', 'root', '', 'sim') or die(mysqli_error($connect)); //conecta a base de dados sim
	
	$profile = $_GET["profile"];
	$month = $_GET["month"];
	$year = $_GET["year"];
	$day = $_GET["day"]-1;
	
	$query_info = 'SELECT * FROM comida_dia WHERE DAY(DataDeRegisto)='.$day.' AND MONTH(DataDeRegisto)='.$month.' AND YEAR(DataDeRegisto)='.$year.' AND U_ID = '.$profile.'';
	$result_info = mysqli_query($connect, $query_info) or die (mysqli_error($connect));
	$number = mysqli_num_rows($result_info);
	$row_info = mysqli_fetch_array($result_info);
	$date = $row_info['DataDeRegisto'];
	$cid = $row_info['C_ID'];
	$rec = $row_info['Recomendacao'];
	$leite = $row_info['Leite'];
	
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
	$nid = $row_info['N_ID'];

	$query_age = "SELECT TIMESTAMPDIFF(year, (SELECT DataDeNascimento FROM utente WHERE Username = '".$profile."'), CURDATE())";
	$result_age = mysqli_query($connect, $query_age) or die (mysqli_error($connect));
	$rows = mysqli_fetch_row($result_age);
	$age = $rows[0];
	
	include 'RULES.php';
	
	$CAL=$TEMPO*$VELOCIDADE*$PESO;
	
	if(isset($_POST["recomendation"])) {
		
		$query_recomendation = 'UPDATE comida_dia SET Recomendacao = "'.$_POST['recomendation'].'" WHERE C_ID = "'.$cid.'"';
		$insert_recomendation = mysqli_query($connect, $query_recomendation) or die (mysqli_error($connect));
		
	}

?>


<table width="500px" height="350px" align="center" >
			<?php
				
				if($number>0){
					echo "<tr>";
						echo "<p align = 'center'><b>Alimentacao de $name no dia $day-$month-$year: </b></p>";
					echo "</tr>";
					echo "<tr>";
						
					echo "</tr>";
					echo "<tr>";
						echo "<td align = 'center'>";
							if($class==0){
								echo "Atenção $username a sua dieta está <b>deficiente</b>! <br>
										Por favor coma mais, não se esqueça o corpo é o templo da mente!";
								echo "<br><br><b> Calorias Gastas em $day-$month-$year: </b><br> $CAL kcal";
							}
							if($class==1){
								echo "Parabéns $username! A sua dieta está <b>equilibrada</b>! <br>
										O seu corpo é saudável e a sua mente vigorosa!";
								echo "<br><br><b> Calorias Gastas em $day-$month-$year: </b><br> $CAL kcal";
							}
							if($class==2){
								echo "Cuidado $username! A sua dieta está <b>excessiva</b>! <br>
										Sabia que mais de metade da população acima dos 18 anos tem excesso de peso? <br>
										Seja diferente, seja original beba Sumol(r)";
								echo "<br><br><b> Calorias Gastas em $day-$month-$year: </b><br> $CAL kcal";
							}
						echo "</td>";
					echo "</tr>";

					echo "<tr>";
					
					if($_SESSION["authuser"]==1) {
						
						if($rec==null && $nid==null){
							echo "Por favor escolha um nutricionista ou peça ao assistente que atribua um nutricionista para receber recomendações em relação à sua dieta";
						}
						
						else if($rec==null && $nid!=null){
							echo "Ainda não foram feitas recomendações para a sua alimentação em $day-$month-$year";
						}
						
						else{
							$query_nutri = "SELECT * FROM nutricionista WHERE N_ID = '".$nid."'";
							$result_nutri = mysqli_query($connect, $query_nutri) or die (mysqli_error($connect));
							$nutri_info = mysqli_fetch_array($result_nutri);
							$nutri=$nutri_info['Username'];
							
							echo "Tem uma recomendação de $nutri:";
							echo "<br>";
							echo "<b>$rec</b>";
						}
					}
					
					else if($_SESSION["authuser"]==2) {
						
						if($rec!=null){
							echo "Já submeteu uma recomendação para a alimentação de $username neste dia";
							echo "<br><br>";
						}
						else{
							echo "Ainda não submeteu uma recomendação para a alimentação de $username neste dia";
							echo "<br><br>";
						}
						
						$day=$day+1;
						echo "<form method='POST' action='index.php?operacao=foodInfo&month=$month&day=$day&year=$year&profile=$profile'>";
						echo "<input type='text' name='recomendation'>";
						echo "<input type='submit' 'value='submit'>";
						echo "</form>";
					}
					
					echo "</tr>";
				}
				
				else{
					
					echo "Não há registos de alimentação de $username em $day-$month-$year";
				}
			?>
</table>