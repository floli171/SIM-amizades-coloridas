<?php
$pageNumber = $_GET["pageNumber"]; /*número de paginação*/
$pageSize = $_GET["pageSize"]; /*número de utilizadores/linhas*/

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
						echo "<tr>";

							echo "<td>";
								echo "$n";
							echo "</td>";

							echo "<td>";
								echo "";
							echo "</td>";

							echo "<td>";
								echo "";
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
	$pnd = $png -1;

	echo "<a href='http://localhost/SIM/index.php?operacao=listUsers&pageNumber=$pnd&pageSize=10'>Anterior </a>"; //voltar para trás em progresso

	echo "<a href='http://localhost/SIM/index.php?operacao=listUsers&pageNumber=$png&pageSize=10'>Próximos </a>";
?>

				<!-- ISTO IRÁ SER PRECISO 

					for($n=1; n < $pageSize; n++) { /*n é o index*/
						if(ceil($pageSize/$))
						}
						-->