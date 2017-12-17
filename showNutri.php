<script>

	function disableAll(){
		for (var i = 0; i < 30; i++){
			if(document.getElementById(i).checked==false){
				document.getElementById(i).disabled==true;
			}
			else{document.getElementById(i).disabled==false;}
		}
				

</script>



<?php
$pageNumber = $_GET["pageNumber"]; /*número de paginação*/
$pageSize = $_GET["pageSize"]; /*número de utilizadores/linhas*/
$profile = $_GET["profile"];

$connect = mysqli_connect('localhost', 'root', '', 'sim') or die(mysqli_error($connect)); //liga a base de dados sim

?>

<table width="500px" height="350px" border="1" align="center" >
		<form method="POST" action="http://localhost/SIM/index.php?operacao=editNutri">
			<tr bgcolor="33FF33"> <!-- primeira linha com o nome das entradas -->
				<th> id </th>
				<th> Nutricionista </th>
				<th> Actividade </th>
				<th> Escolher </th>
			</tr>
			
			<tr>
			<?php
			for($n=($pageNumber - 1) * $pageSize; $n < $pageNumber * $pageSize; $n++) { /*n é o index*/
					
					$i=$n+1; //para começar a ir buscar useres a tabela a partir do ID 1
					$query_nid = 'SELECT * FROM nutricionista WHERE N_ID = "'.$i.'"'; //codigo SQL para seleccionar todas as informações com o ID i
					$get_nid = mysqli_query($connect, $query_nid) or die(mysqli_error($connect)); //executa o codigo anterior
					$nid_info = mysqli_fetch_array($get_nid); //guarda os resultados num vector
					$username=$nid_info['Username']; //Guarda o valor do nome completo
					//$gender=$nid_info['Gen']; //Guarda o valor do nome completo
					$date=$nid_info['Data de Registo']; //Guarda o valor da data de criação do utilizador
					$actv=$nid_info['Actividade'];
					$tipo=$nid_info['Tipo'];
					$nid=$nid_info['N_ID'];
					
					
						//executa várias vezes criando as várias linhas da lista de utilizadores
						echo "<tr>";
							echo "<td>";
								echo "$i";
							echo "</td>";
							
							echo "<td>";
								echo "$username";
							echo "</td>";
							
							echo "<td>";
								if($actv == 0){echo "Inactivo";}
								elseif($actv == 1){echo "Activo";}
							echo "</td>";
							
							echo "<td>";
							if($actv == 1){
								echo "<input type='checkbox' name='nutri' value='$nid' id='n$i' onclick='disableAll()'>";
							}
							elseif($actv == 1){
								echo "<input type='checkbox' name='nutri' value='$nid' id='n$i' disabled onclick='disableAll()'>";
							}
							echo "</td>";
							
						echo "</tr>";
					}
				?>
			</tr>
				
			<tr>
				<input type="hidden" name="profile" value= "<?php echo "$profile"?>" >
				<input type="Submit" name="Submit" value="Submit">
			</tr>
		</form>
	</table>