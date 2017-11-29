<!-- Registar Nutricionista/Investigador -->

<table border="1">
	<th>Ficha de Registo</th>
	<tr>
		<td>
			<table border="0">
				<form method="POST" action="index.php?operacao=registry1">
				
				<tr>
					<td>
						<p>Tipo de Utilizador</p>
					</td>
					<td>
						<input type="radio" name="usertype" value="assistant">Assistente<br>
						<input type="radio" name="usertype" value="investigator">Investigador<br>
						<input type="radio" name="usertype" value="nutricionist">Nutricionista<br>
					</td>
				</tr>
				
				<tr>
					<td>
						Nome Completo: 
					</td>
					<td>
						<input type="text" name="name">
					</td>
				</tr>
				<tr>
					<td>
						<br>E-mail: 
					</td>
					<td>
						<br><input type="E-mail" name="email">
					</td>
				</tr>
				<tr>
					<td>
						Utilizador: 
					</td>
					<td>
						<input type="text" name="user">
					</td>
				</tr>
				<tr>
					<td>
						Password: 
					</td>
					<td>
						<input type="password" name="pass">
					</td>
				</tr>
		</table>
		</td>
	</tr>
</table>

<br><p><input type="Submit" name="Submit" value="Submit"></form></p>

