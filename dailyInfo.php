<p>Aqui deverá fazer o registo diário da sua alimenta&ccedil;&atilde;o</p> <hr>

<script>
	function myFunction(food, portion) {
		if (document.getElementById(food).checked == true) {
  			document.getElementById(portion).disabled = false
  		}
  	}
</script>

<table border="0">
	<tr>
		<th colspan="2">
			Alimentos Consumidos
		</th>
	</tr>
	<tr>
		<td align="right">
			<form>
			<input type="checkbox" name="milk" id="milk" onclick="myFunction('milk', 'portionMilk')">
			</form>
		</td>
		<td>
			Leite
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<form>
				<select name="portionMilk" id="portionMilk" disabled>	
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
			<input type="checkbox" name="bread" id="bread" onclick="myFunction('bread', 'portionBread')">
			</form>
		</td>
		<td>
			Pão
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<form>
				<select name="portionBread" id="portionBread" disabled>	
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
			<input type="checkbox" name="egg" id="egg" onclick="myFunction('egg', 'portionEgg')">
			</form>
		</td>
		<td>
			Ovos
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<form>
				<select name="portionEgg" id="portionEgg" disabled>	
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
			<input type="checkbox" name="fish" id="fish" onclick="myFunction('fish', 'portionFish')">
			</form>			
		</td>
		<td>
			Peixe
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<form>
				<select name="portionFish" id="portionFish" disabled>	
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
			<input type="checkbox" name="beef" id="beef" onclick="myFunction('beef', 'portionBeef')">
			</form>			
		</td>
		<td>
			Vaca
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<form>
				<select name="portionBeef" id="portionBeef" disabled>	
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
			<input type="checkbox" name="chicken" id="chicken" onclick="myFunction('chicken', 'portionChicken')">
			</form>			
		</td>
		<td>
			Frango
		</td>		
	</tr>
	<tr>
		<td colspan="2">
			<form>
				<select name="portionChicken" id="portionChicken" disabled>	
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
			<input type="checkbox" name="vegetable" id="vegetable" onclick="myFunction('vegetable', 'portionVegetable')">
			</form>			
		</td>
		<td>
			Vegetais
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<form>
				<select name="portionVegetable" id="portionVegetable" disabled>	
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
			<input type="checkbox" name="potato" id="potato" onclick="myFunction('potato', 'portionPotato')">
			</form>			
		</td>
		<td>
			Batata
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<form>
				<select name="portionPotato" id="portionPotato" disabled>	
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
			<input type="checkbox" name="rice" id="rice" onclick="myFunction('rice', 'portionRice')">
			</form>			
		</td>
		<td>
			Arroz
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<form>
				<select name="portionRice" id="portionRice" disabled>	
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
			<input type="checkbox" name="fruit" id="fruit" onclick="myFunction('fruit', 'portionFruit')">
			</form>			
		</td>
		<td>
			Frutas
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<form>
				<select name="portionFruit" id="portionFruit" disabled>	
					<option> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
			</form>
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