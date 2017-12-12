<table border="1">
	<th>Escolha o Utilizador a Remover</th>
	<tr>
		<td>
			<table border="0">
				<form method="POST" action="index.php?operacao=delete">
				
				<tr>
					<td>
						<p>Tipo de Utilizador</p>
					</td>
					<td>
						<input type="radio" name="usertype" value="assistente">Assistente<br>
						<input type="radio" name="usertype" value="investigador">Investigador<br>
						<input type="radio" name="usertype" value="nutricionista">Nutricionista<br>
						<input type="radio" name="usertype" value="utentes">Utente<br>
					</td>
				</tr>
				
				<!--
				<tr>
					<td>
						<br>E-mail: 
					</td>
					<td>
						<br><input type="E-mail" name="email">
					</td>
				</tr>
				-->
				
				<tr>
					<td>
						Utilizador: 
					</td>
					<td>
						<input type="text" name="user">
					</td>
				</tr>
		</table>
		</td>
	</tr>
</table>

<br><p><input type="Submit" name="Submit" value="Submit"></form></p>