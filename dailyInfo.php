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
			<form method="POST" action="index.php?operacao=registDay">
			
			<input type="checkbox" name="milk" id="milk" onclick="myFunction('milk', 'portionMilk')">
		</td>
		<td>
			Leite
		</td>
	</tr>
	<tr>
		<td colspan="2">
				<select name="portionMilk" value="0" id="portionMilk" disabled>	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
	</tr>
	<tr>
		<td align="right">
			<input type="checkbox" name="bread" id="bread" onclick="myFunction('bread', 'portionBread')">
		</td>
		<td>
			Pão
		</td>
	</tr>
	<tr>
		<td colspan="2">
				<select name="portionBread" id="portionBread" disabled>	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
	</tr>
	<tr>
		<td align="right">
			<input type="checkbox" name="egg" id="egg" onclick="myFunction('egg', 'portionEgg')">
		</td>
		<td>
			Ovos
		</td>
	</tr>
	<tr>
		<td colspan="2">
				<select name="portionEgg" id="portionEgg" disabled>	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
	</tr>
	<tr>
		<td align="right">
			<input type="checkbox" name="fish" id="fish" onclick="myFunction('fish', 'portionFish')">		
		</td>
		<td>
			Peixe
		</td>
	</tr>
	<tr>
		<td colspan="2">
				<select name="portionFish" id="portionFish" disabled>	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
	</tr>
	<tr>
		<td align="right">
			<input type="checkbox" name="beef" id="beef" onclick="myFunction('beef', 'portionBeef')">		
		</td>
		<td>
			Vaca
		</td>
	</tr>
	<tr>
		<td colspan="2">
				<select name="portionBeef" id="portionBeef" disabled>	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
	</tr>
	<tr>
		<td align="right">
			<input type="checkbox" name="chicken" id="chicken" onclick="myFunction('chicken', 'portionChicken')">	
		</td>
		<td>
			Frango
		</td>		
	</tr>
	<tr>
		<td colspan="2">
				<select name="portionChicken" id="portionChicken" disabled>	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
	</tr>
	<tr>
		<td align="right">
			<input type="checkbox" name="vegetable" id="vegetable" onclick="myFunction('vegetable', 'portionVegetable')">		
		</td>
		<td>
			Vegetais
		</td>
	</tr>
	<tr>
		<td colspan="2">
				<select name="portionVegetable" id="portionVegetable" disabled>	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
	</tr>
	<tr>
		<td align="right">
			<input type="checkbox" name="potato" id="potato" onclick="myFunction('potato', 'portionPotato')">		
		</td>
		<td>
			Batata
		</td>
	</tr>
	<tr>
		<td colspan="2">
				<select name="portionPotato" id="portionPotato" disabled>	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
	</tr>
	<tr>
		<td align="right">
			<input type="checkbox" name="rice" id="rice" onclick="myFunction('rice', 'portionRice')">		
		</td>
		<td>
			Arroz
		</td>
	</tr>
	<tr>
		<td colspan="2">
				<select name="portionRice" id="portionRice" disabled>	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
	</tr>
	<tr>
		<td align="right">
			<input type="checkbox" name="fruit" id="fruit" onclick="myFunction('fruit', 'portionFruit')">	
		</td>
		<td>
			Frutas
		</td>
	</tr>
	<tr>
		<td colspan="2">
				<select name="portionFruit" id="portionFruit" disabled>	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
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
			<input type="number" name="exerciseduration" value="0">
		</td>
	</tr>
	<tr>
		<td>
			Velocidade m&eacute;dia:
		</td>
		<td>
			<input type="number" name="averagevelocity" value="0">
		</td>
	</tr>
</table>

<br><p><input type="Submit" name="Submit" value="Submit"></p></form>

<!-- sugestões
		a partir do momento em que o utilizador coloca a informação há um lock e para alterar é necessário clicar no botão "editar"-->