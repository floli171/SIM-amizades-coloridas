<?php
$pageNumber = $_GET["pageNumber"]; /*número de paginação*/
$pageSize = $_GET["pageSize"]; /*número de utilizadores/linhas*/

$connect = mysqli_connect('localhost', 'root', '', 'sim') or die(mysqli_error($connect)); //liga a base de dados sim

//$number = mysqli_num_rows($get_user);
?>

<table width="500px" height="350px" border="1" align="center" >
			<tr bgcolor="33FF33"> <!-- primeira linha com o nome das entradas -->
				<th> id </th>
				<?php
					if($_SESSION["authuser"] != 3){
						echo "<th> Nome de Utilizador </th>";
					}
				?>
				<th> Genero </th>
				<th> Data de Registo </th>
				<?php
					if($_SESSION["authuser"] == 4){
						echo "<th> Tipo de Utilizador </th>";
						echo "<th> Actividade </th>";
					}
				?>
			</tr>
			<tr>
				<?php 
					
				if($_SESSION["authuser"] == 2){
					
					$query_nid = 'SELECT N_ID FROM nutricionista WHERE Username = "'.$_SESSION["username"].'"'; //codigo SQL para seleccionar todas as informações com o ID i
					$get_nid = mysqli_query($connect, $query_nid) or die(mysqli_error($connect)); //executa o codigo anterior
					$nid_info = mysqli_fetch_array($get_nid); //guarda os resultados num vector
					$n_id=$nid_info['N_ID']; //Guarda o valor do nome completo
					
					for($n=($pageNumber - 1) * $pageSize; $n < $pageNumber * $pageSize; $n++) { /*n é o index*/
					
					$i=$n+1; //para começar a ir buscar useres a tabela a partir do ID 1
					$query_id = 'SELECT * FROM utente WHERE U_ID = "'.$i.'" AND N_ID = "'.$n_id.'"'; //codigo SQL para seleccionar todas as informações com o ID i
					$get_id = mysqli_query($connect, $query_id) or die(mysqli_error($connect)); //executa o codigo anterior
					$id_info = mysqli_fetch_array($get_id); //guarda os resultados num vector
					$username=$id_info['Username']; //Guarda o valor do nome completo
					$gender=$id_info['Gen']; //Guarda o valor do nome completo
					$date=$id_info['Data de Registo']; //Guarda o valor da data de criação do utilizador
					
					
						//executa várias vezes criando as várias linhas da lista de utilizadores
						echo "<tr>";
							echo "<td>";
								echo "$i";
							echo "</td>";
							
							echo "<td>";
								echo "<a href='http://localhost/SIM/index.php?operacao=showProfile&profile=$username'>$username</a>";
							echo "</td>";
							
							echo "<td>";
								echo "$gender";
							echo "</td>";
							
							echo "<td>";
								echo "$date";
							echo "</td>";
							
						echo "</tr>";
					}
				}
				
				
				if($_SESSION["authuser"] == 3){
					for($n=($pageNumber - 1) * $pageSize; $n < $pageNumber * $pageSize; $n++) { /*n é o index*/
					
					$i=$n+1; //para começar a ir buscar useres a tabela a partir do ID 1
					$query_id = 'SELECT * FROM utente WHERE (U_ID = "'.$i.'")'; //codigo SQL para seleccionar todas as informações com o ID i
					$get_id = mysqli_query($connect, $query_id) or die(mysqli_error($connect)); //executa o codigo anterior
					$id_info = mysqli_fetch_array($get_id); //guarda os resultados num vector
					$username=$id_info['Username']; //Guarda o valor do nome completo
					$gender=$id_info['Gen']; //Guarda o valor do nome completo
					$date=$id_info['Data de Registo']; //Guarda o valor da data de criação do utilizador
					
					
						//executa várias vezes criando as várias linhas da lista de utilizadores
						echo "<tr>";
							echo "<td>";
								echo "<a href='http://localhost/SIM/index.php?operacao=showProfile&profile=$username'>$i</a>";
							echo "</td>";
							
							echo "<td>";
								echo "$gender";
							echo "</td>";
							
							echo "<td>";
								echo "$date";
							echo "</td>";
							
						echo "</tr>";
					}
				}
				
				if($_SESSION["authuser"] == 4){
					
					for($n=($pageNumber - 1) * $pageSize; $n < $pageNumber * $pageSize; $n++) { /*n é o index*/
					
					$i=$n+1; //para começar a ir buscar useres a tabela a partir do ID 1
					$query_uid = 'SELECT * FROM utente WHERE U_ID = "'.$i.'"'; //codigo SQL para seleccionar todas as informações com o ID i
					$get_uid = mysqli_query($connect, $query_uid) or die(mysqli_error($connect)); //executa o codigo anterior
					$uid_info = mysqli_fetch_array($get_uid); //guarda os resultados num vector
					$username=$uid_info['Username']; //Guarda o valor do nome completo
					$gender=$uid_info['Gen']; //Guarda o valor do nome completo
					$date=$uid_info['Data de Registo']; //Guarda o valor da data de criação do utilizador
					$actv=$uid_info['Actividade'];
					$tipo=$uid_info['Tipo'];
					
					
						//executa várias vezes criando as várias linhas da lista de utilizadores
						echo "<tr>";
							echo "<td>";
								echo "$i";
							echo "</td>";
							
							echo "<td>";
								echo "<a href='http://localhost/SIM/index.php?operacao=showProfile&profile=$username'>$username</a>";
							echo "</td>";
							
							echo "<td>";
								echo "$gender";
							echo "</td>";
							
							echo "<td>";
								echo "$date";
							echo "</td>";
							
							echo "<td>";
								echo "$tipo";
							echo "</td>";
							
							echo "<td>";
								if($actv == 0){echo "Inactivo";}
								elseif($actv == 1){echo "Activo";}
							echo "</td>";
							
						echo "</tr>";
					}
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
					
					
						//executa várias vezes criando as várias linhas da lista de utilizadores
						echo "<tr>";
							echo "<td>";
								echo "$i";
							echo "</td>";
							
							echo "<td>";
								echo "<a href='http://localhost/SIM/index.php?operacao=showProfile&profile=$username'>$username</a>";
							echo "</td>";
							
							echo "<td>";
								echo "N/A";
							echo "</td>";
							
							echo "<td>";
								echo "$date";
							echo "</td>";
							
							echo "<td>";
								echo "$tipo";
							echo "</td>";
							
							echo "<td>";
								if($actv == 0){echo "Inactivo";}
								elseif($actv == 1){echo "Activo";}
							echo "</td>";
							
						echo "</tr>";
					}
					for($n=($pageNumber - 1) * $pageSize; $n < $pageNumber * $pageSize; $n++) { /*n é o index*/
					
					$i=$n+1; //para começar a ir buscar useres a tabela a partir do ID 1
					$query_iid = 'SELECT * FROM investigador WHERE I_ID = "'.$i.'"'; //codigo SQL para seleccionar todas as informações com o ID i
					$get_iid = mysqli_query($connect, $query_iid) or die(mysqli_error($connect)); //executa o codigo anterior
					$iid_info = mysqli_fetch_array($get_iid); //guarda os resultados num vector
					$username=$iid_info['Username']; //Guarda o valor do nome completo
					//$gender=$iid_info['Gen']; //Guarda o valor do nome completo
					$date=$iid_info['Data de Registo']; //Guarda o valor da data de criação do utilizador
					$actv=$iid_info['Actividade'];
					$tipo=$iid_info['Tipo'];
					
					
						//executa várias vezes criando as várias linhas da lista de utilizadores
						echo "<tr>";
							echo "<td>";
								echo "$i";
							echo "</td>";
							
							echo "<td>";
								echo "<a href='http://localhost/SIM/index.php?operacao=showProfile&profile=$username'>$username</a>";
							echo "</td>";
							
							echo "<td>";
								echo "N/A";
							echo "</td>";
							
							echo "<td>";
								echo "$date";
							echo "</td>";
							
							echo "<td>";
								echo "$tipo";
							echo "</td>";
							
							echo "<td>";
								if($actv == 0){echo "Inactivo";}
								elseif($actv == 1){echo "Activo";}
							echo "</td>";
							
						echo "</tr>";
					}
				}
				
				
				?>
			</tr>

			<tr>
				</tr>
			</table>

<?php
	$png = $pageNumber + 1; //indice da proxima pagina
	$pnd = $pageNumber - 1; //indice da pagina anterior

	echo "<a href='http://localhost/SIM/index.php?operacao=listUsers&pageNumber=$pnd&pageSize=10'>Anterior </a>"; //voltar para trás em progresso

	echo "<a href='http://localhost/SIM/index.php?operacao=listUsers&pageNumber=$png&pageSize=10'>Próximo </a>"; //andar para a frente em progresso
?>

				<!-- ISTO IRÁ SER PRECISO 

					for($n=1; n < $pageSize; n++) { /*n é o index*/
						if(ceil($pageSize/$))
						}
						-->