<?php
$pageNumber = $_GET["pageNumber"]; /*número de paginação*/
$pageSize = $_GET["pageSize"]; /*número de utilizadores/linhas*/

$connect = mysqli_connect('localhost', 'root', '', 'mysql') or die(mysqli_error($connect)); //liga a base de dados sql

//$number = mysqli_num_rows($get_user);
?>

<table width="500px" height="350px" border="1" align="center" >
			<tr bgcolor="33FF33"> <!-- primeira linha com o nome das entradas -->
				<th> id </th>
				<th> Nome </th>
				<th> Data </th>
			</tr>
			<tr>
				<?php 
					for($n=($pageNumber - 1) * $pageSize; $n < $pageNumber * $pageSize; $n++) { /*n é o index*/
					
					$i=$n+1; //para começar a ir buscar useres a tabela a partir do ID 1
					$query_id = 'SELECT * FROM Users WHERE (ID = "'.$i.'")'; //codigo SQL para seleccionar todas as informações com o ID i
					$get_id = mysqli_query($connect, $query_id) or die(mysqli_error($connect)); //executa o codigo anterior
					$id_info = mysqli_fetch_array($get_id); //guarda os resultados num vector
					$name=$id_info['Name']; //Guarda o valor do nome completo
					$date=$id_info['Creation_Date']; //Guarda o valor da data de criação do utilizador
						
						//executa várias vezes criando as várias linhas da lista de utilizadores
						echo "<tr>";

							echo "<td>";
								echo "$i";
							echo "</td>";

							echo "<td>";
								echo "$name";
							echo "</td>";

							echo "<td>";
								echo "$date";
							echo "</td>";
						echo "</tr>";
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