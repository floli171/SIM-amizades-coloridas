<?php
$pageNumber = $_GET["pageNumber"]; /*número de paginação*/
$pageSize = $_GET["pageSize"]; /*número de utilizadores/linhas*/

$connect = mysqli_connect('localhost', 'root', '', 'sim') or die(mysqli_error($connect)); //liga a base de dados sim

//$number = mysqli_num_rows($get_user);
?>

<table width="500px" height="350px" border="1" align="center" >
			<tr bgcolor="33FF33"> <!-- primeira linha com o nome das entradas -->
				<th> id </th>
				<th> Nome </th>
				<th> Genero </th>
				<th> Data de Nascimento </th>
				<th> Morada </th>
				<th> Telefone </th>
				<th> C.S </th>
				<th> Peso </th>
				<th> Altura </th>
				<th> Email </th>
				<th> Actividade </th>
			</tr>
			<tr>
				<?php 
					for($n=($pageNumber - 1) * $pageSize; $n < $pageNumber * $pageSize; $n++) { /*n é o index*/
					
					$i=$n+1; //para começar a ir buscar useres a tabela a partir do ID 1
					$query_id = 'SELECT * FROM utente WHERE (U_ID = "'.$i.'")'; //codigo SQL para seleccionar todas as informações com o ID i
					$get_id = mysqli_query($connect, $query_id) or die(mysqli_error($connect)); //executa o codigo anterior
					$id_info = mysqli_fetch_array($get_id); //guarda os resultados num vector
					$name=$id_info['Nome']; //Guarda o valor do nome completo
					$gender=$id_info['Gen']; //Guarda o valor do nome completo
					$date=$id_info['DatadeNascimento']; //Guarda o valor da data de criação do utilizador
					$address=$id_info['Morada']; //Guarda o valor da Morada do utilizador
					$phone=$id_info['Tel']; //Guarda o valor do contacto telefónico do utilizador
					$cardnumber=$id_info['CS']; //Guarda o valor do número do cartão de saúde do utilizador
					$weight=$id_info['Peso']; //Guarda o valor do peso do utilizador
					$height=$id_info['Altura']; //Guarda o valor da daltura do utilizador
					$email=$id_info['Email']; //Guarda o valor do contacto de Email do utilizador
					$activity=$id_info['Actividade']; //Guarda o valor do tipo de atividade diária do utilizador
					
					
						//executa várias vezes criando as várias linhas da lista de utilizadores
						echo "<tr>";

							echo "<td>";
								echo "$i";
							echo "</td>";

							echo "<td>";
								echo "$name";
							echo "</td>";

							echo "<td>";
								echo "$gender";
							echo "</td>";
							
							echo "<td>";
								echo "$date";
							echo "</td>";
							
							echo "<td>";
								echo "$address";
							echo "</td>";
							
							echo "<td>";
								echo "$phone";
							echo "</td>";
							
							echo "<td>";
								echo "$cardnumber";
							echo "</td>";
							
							echo "<td>";
								echo "$weight";
							echo "</td>";
							
							echo "<td>";
								echo "$height";
							echo "</td>";
							
							echo "<td>";
								echo "$email";
							echo "</td>";
							
							echo "<td>";
								echo "$activity";
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