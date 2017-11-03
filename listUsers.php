<?php
$pageNumber = $_GET["pageNumber"]; /*número de paginação*/
$pageSize = $_GET["pageSize"]; /*número de utilizadores/linhas*/

$link = mysqli_connect('localhost', 'root', '', 'SIM') or die(mysqli_error($link));

//$number = mysqli_num_rows($get_user);
?>

<table width="500px" height="350px" border="1" align="center" >
			<tr bgcolor="33FF33">
				<th> id </th>
				<th> Nome </th>
				<th> Data </th>
			</tr>
			<tr>
				<?php 
					for($n=($pageNumber - 1) * $pageSize; $n < $pageNumber * $pageSize; $n++) { /*n é o index*/
					
					$i=$n+1;
					$query_id = 'SELECT * FROM Users WHERE (ID = "'.$i.'")';
					$get_id = mysqli_query($link, $query_id) or die(mysqli_error($link));
					$id_info = mysqli_fetch_array($get_id);
					$name=$id_info['Name'];
					$date=$id_info['Creation_Date'];
						
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
	$png = $pageNumber + 1;
	$pnd = $pageNumber - 1;

	echo "<a href='http://localhost/SIM/index.php?operacao=listUsers&pageNumber=$pnd&pageSize=10'>Anterior </a>"; //voltar para trás em progresso

	echo "<a href='http://localhost/SIM/index.php?operacao=listUsers&pageNumber=$png&pageSize=10'>Próximos </a>";
?>

				<!-- ISTO IRÁ SER PRECISO 

					for($n=1; n < $pageSize; n++) { /*n é o index*/
						if(ceil($pageSize/$))
						}
						-->