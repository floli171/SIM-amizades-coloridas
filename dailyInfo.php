<p>Aqui deverá fazer o registo diário da sua alimenta&ccedil;&atilde;o</p> <hr>

<script>
	function myFunction(food, portion) {
		if (document.getElementById(food).checked == true) {
  			document.getElementById(portion).disabled = false;
  		}
		else if(document.getElementById(food).checked == false) {
  			document.getElementById(portion).disabled = true;
  		}
  	}
	
	function checkboxes(food, portion) {
		
		if(document.getElementById('checkall').checked == true){
			if(document.getElementById(food).checked == false) {
				document.getElementById(portion).disabled = false;
				document.getElementById(food).checked = true;
			}
		}
		else{
			if(document.getElementById(food).checked == true) {
  			document.getElementById(portion).disabled = true;
			document.getElementById(food).checked = false;
			}
		}
  	}
	
	function checkAll(food1, food2, food3, food4, food5, food6, food7, food8, food9, food10, portion1, portion2, portion3, portion4, portion5, portion6, portion7, portion8, portion9, portion10) {

		var foods = [food1, food2, food3, food4, food5, food6, food7, food8, food9, food10];
		var portions = [portion1, portion2, portion3, portion4, portion5, portion6, portion7, portion8, portion9, portion10];

		for (var i = 0; i < foods.length; i++) {
			checkboxes(foods[i], portions[i]);
		}
	}
	
	function addFood(){
		
		var f = document.createElement("input");
		var t = document.getElementById('typeOther').value;
		f.setAttribute('type', "checkbox");
		f.setAttribute('name', t);
		
		/*var p = document.createElement('select');
		var opt1 = document.createElement('option');
		opt0.text=" - Porção - ";
		opt0.value="0";
		p.appendChild(opt0);
		/*var opt1 = document.createElement('option');
		opt1.text="1";
		opt1.setAttribute('value', "1");
		p.appendChild(opt1);
		var opt2 = document.createElement('option');
		opt2.setAttribute('text', "2");
		opt2.setAttribute('value', "2");
		p.appendChild(opt2);
		var opt3 = document.createElement('option');
		opt3.setAttribute('text', "3");
		opt3.setAttribute('value', "3");
		p.appendChild(opt3);*/
		
		var table = document.getElementById("food");
		var row1 = table.insertRow(21);
		var cell1_0 = row1.insertCell(0);
		var cell1_1 = row1.insertCell(1);
		var row2 = table.insertRow(22);
		var cell2_0 = row2.insertCell(0);
		var t = document.getElementById('typeOther').value;
		
		cell1_0.setAttribute('align', "right");
		cell2_0.setAttribute('align', "right");
		cell1_1.innerHTML = t;
		cell1_0.appendChild(f);
		cell2_0.appendChild(p);
		
		
		
		
	}
</script>

<?php

	if($_SESSION['authuser']==4){
		$profile = $_GET["profile"];
	}
	else{
		$profile = 0;
	}
?>

<table border="0" id="food">
	<tr>
		<th colspan="2">
			Alimentos Consumidos
		</th>
	</tr>
	<tr>
		<td align="right">
			<form method="POST" action="index.php?operacao=registDay&username=$profile">
			
			<input type="checkbox" name="milk" id="milk" onclick="myFunction('milk', 'portionMilk')">
		</td>
		<td>
			Leite
		</td>
		<td>
			 
		</td>
		<td>
			<input type="checkbox" id="checkall" onclick="checkAll('milk', 'bread', 'egg', 'fish', 'beef', 'chicken', 'vegetable', 'potato', 'rice', 'fruit', 'portionMilk', 'portionBread', 'portionEgg', 'portionFish', 'portionBeef', 'portionChicken', 'portionVegetable', 'portionPotato', 'portionRice', 'portionFruit')"> Selecionar tudo
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
	<tr>
		<td align="right">
			<input type="checkbox" name="other" id="other" onclick="myFunction('other', 'addOther'); myFunction('other', 'typeOther')">	
		</td>
		<td>
			Outro: <input type="text" name="typeOther" id="typeOther" disabled>
		</td>
	</tr>
	<tr>
		<td>
			<input type="button" name="addOther" value="Adicionar" id="addOther" onclick="addFood()" disabled>
		</td>
		
		<!--<td colspan="2">
				<select name="portionOther" id="portionOther" disabled>	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>-->
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
			Tipo de exercício:
		</td>
		<td>
			<select name="exercisetype">	
					<option value="running">Corrida</option>
					<option value="swimming">Nata&ccedil;&atilde;o</option>
					<option value="cycling">Ciclismo</option>
		</td>
	</tr>
	<tr>
		<td>
			Dura&ccedil;&atilde;o do exercício:
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
	<input type = "hidden" name = "username" value = '<?php echo "$profile" ?>'>
<p><input type="Submit" id="submit" value="Submit" ></p></form></p>


<!-- sugestões
		a partir do momento em que o utilizador coloca a informação há um lock e para alterar é necessário clicar no botão "editar"-->