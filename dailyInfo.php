<p>Aqui deverá fazer o registo diário da sua alimenta&ccedil;&atilde;o</p> <hr>

<table border="0">
	<tr>
		<th colspan="2">
			Alimentos Consumidos
		</th>
	</tr>
	<tr>
		<td align="right">
			<form>
			<input type="checkbox" name="milk" id="milk">
			</form>

			<script>
				function myFunction() {
					if (document.getElementById("checkbox").checked == true) {
			  			document.getElementById("amountMeals").disabled = false
			  		}
  			</script>
		</td>
		<td>
			Leite
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<form>
				<select name="amountMeals" id="amountMeals" disabled>	
					<option> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
			</form>
		</td>
	</tr>
	<tr>
		<td align="right">
			<form>
			<input type="checkbox" name="bread" id="bread">
			</form>
		</td>
		<td>
			Pão
		</td>
	</tr>
	<tr>
		<td align="right">
			<form>
			<input type="checkbox" name="egg" id="egg">
			</form>
		</td>
		<td>
			Ovos
		</td>

	</tr>
	<tr>
		<td align="right">
			<form>
			<input type="checkbox" name="fish" id="fish">
			</form>			
		</td>
		<td>
			Peixe
		</td>
	</tr>
	<tr>
		<td align="right">
			<form>
			<input type="checkbox" name="beef" id="beef">
			</form>			
		</td>
		<td>
			Vaca
		</td>
	</tr>
	<tr>
		<td align="right">
			<form>
			<input type="checkbox" name="chicken" id="chicken">
			</form>			
		</td>
		<td>
			Frango
		</td>		
	</tr>
	<tr>
		<td align="right">
			<form>
			<input type="checkbox" name="vegetable" id="vegetable">
			</form>			
		</td>
		<td>
			Vegetais
		</td>
	</tr>
	<tr>
		<td align="right">
			<form>
			<input type="checkbox" name="potato" id="potato" disabled>
			</form>			
		</td>
		<td>
			Batata
		</td>
	</tr>
	<tr>
		<td align="right">
			<form>
			<input type="checkbox" name="rice" id="rice">
			</form>			
		</td>
		<td>
			Arroz
		</td>
	</tr>
	<tr>
		<td align="right">
			<form>
			<input type="checkbox" name="fruit" id="fruit">
			</form>			
		</td>
		<td>
			Frutas
		</td>
	</tr>
	<br>
</table>

<table>
	<tr>
		<th colspan="2">
			Atividade Física
		</th>
	</tr>
	<tr>
		<td>
			Dura&ccedil;&atilde;o da corrida:
		</td>
		<td>
			<input type="text" name="exerciseduration">
		</td>
	</tr>
	<tr>
		<td>
			Velocidade m&eacute;dia:
		</td>
		<td>
			<input type="text" name="averagevelocity">
		</td>
	</tr>
</table>


<!-- sugestões
		a partir do momento em que o utilizador coloca a informação há um lock e para alterar é necessário clicar no botão "editar"-->