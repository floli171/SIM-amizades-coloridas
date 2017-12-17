<?php
		$profile = $_GET["profile"];
		$today=date("Y-m-d");
		$yesterday=date("Y-m-d", strtotime("-1 days"));
		$daybefore=date("Y-m-d", strtotime("-2 days"));
?>

<table border="0" id="food">
	<tr>
		<th colspan="2" align = "center">
			Alimentos Consumidos nos últimos 3 dias
		</th>
	</tr>
	<br>
	<tr>
		<td align="center" colspan = "3">
			<form method="POST" action="index.php?operacao=firstSub&username=$profile">
			<b>Leite</b>
		</td>
	</tr>
	<tr>
		<td> <?php echo "$daybefore" ?> </td>
		<td> <?php echo "$yesterday" ?> </td>
		<td> <?php echo "$today" ?> </td>
	</tr>
	<tr>
		<td>
				<select name="portionMilk" id="portionMilk">	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
		<td>
				<select name="portionMilk1" id="portionMilk1">	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
		<td>
				<select name="portionMilk2" id="portionMilk2">	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
	</tr>
	
	<tr>
		<td align="center" colspan = "3">
			<b>Pão</b>
		</td>
	</tr>
	<tr>
		<td> <?php echo "$daybefore" ?> </td>
		<td> <?php echo "$yesterday" ?> </td>
		<td> <?php echo "$today" ?> </td>
	</tr>
	<tr>
		<td>
				<select name="portionBread" id="portionBread" >	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
		<td>
				<select name="portionBread1" id="portionBread1" >	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
		<td>
				<select name="portionBread2" id="portionBread2" >	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
	</tr>
	<tr>
		<td align="center" colspan = "3">
			<b>Ovos</b>
		</td>
	</tr>
	<tr>
		<td> <?php echo "$daybefore" ?> </td>
		<td> <?php echo "$yesterday" ?> </td>
		<td> <?php echo "$today" ?> </td>
	</tr>
	<tr>
		<td>
				<select name="portionEgg" id="portionEgg" >	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
		<td>
				<select name="portionEgg1" id="portionEgg1" >	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
		<td>
				<select name="portionEgg2" id="portionEgg2" >	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
	</tr>
	<tr>
		<td align="center" colspan = "3">
			<b>Peixe</b>
		</td>
	</tr>
	<tr>
		<td> <?php echo "$daybefore" ?> </td>
		<td> <?php echo "$yesterday" ?> </td>
		<td> <?php echo "$today" ?> </td>
	</tr>
	<tr>
		<td>
				<select name="portionFish" id="portionFish">	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
		<td>
				<select name="portionFish1" id="portionFish1">	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
		<td>
				<select name="portionFish2" id="portionFish2">	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
	</tr>
	<tr>
		<td align="center" colspan = "3">
			<b>Vaca</b>
		</td>
	</tr>
	<tr>
		<td> <?php echo "$daybefore" ?> </td>
		<td> <?php echo "$yesterday" ?> </td>
		<td> <?php echo "$today" ?> </td>
	</tr>
	<tr>
		<td>
				<select name="portionBeef" id="portionBeef" >	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
		<td>
				<select name="portionBeef1" id="portionBeef1" >	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
		<td>
				<select name="portionBeef2" id="portionBeef2" >	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
	</tr>
	<tr>
		<td align="center" colspan = "3">
			<b>Frango</b>
		</td>
	</tr>
	<tr>
		<td> <?php echo "$daybefore" ?> </td>
		<td> <?php echo "$yesterday" ?> </td>
		<td> <?php echo "$today" ?> </td>
	</tr>
	<tr>
		<td>
				<select name="portionChicken" id="portionChicken">	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
		<td>
				<select name="portionChicken1" id="portionChicken1">	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
		<td>
				<select name="portionChicken2" id="portionChicken2">	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
	</tr>
	<tr>
		<td align="center" colspan = "3">
			<b>Vegetais</b>
		</td>
	</tr>
	<tr>
		<td> <?php echo "$daybefore" ?> </td>
		<td> <?php echo "$yesterday" ?> </td>
		<td> <?php echo "$today" ?> </td>
	</tr>
	<tr>
		<td>
				<select name="portionVegetable" id="portionVegetable">	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
		<td>
				<select name="portionVegetable1" id="portionVegetable1">	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
		<td>
				<select name="portionVegetable2" id="portionVegetable2">	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
	</tr>
	<tr>
		<td align="center" colspan = "3">
			<b>Batata</b>
		</td>
	</tr>
	<tr>
		<td> <?php echo "$daybefore" ?> </td>
		<td> <?php echo "$yesterday" ?> </td>
		<td> <?php echo "$today" ?> </td>
	</tr>
	<tr>
		<td>
				<select name="portionPotato" id="portionPotato">	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
		<td>
				<select name="portionPotato1" id="portionPotato1">	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
		<td>
				<select name="portionPotato2" id="portionPotato2">	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
	</tr>
	<tr>
		<td align="center" colspan = "3">
			<b>Arroz</b>
		</td>
	</tr>
	<tr>
		<td> <?php echo "$daybefore" ?> </td>
		<td> <?php echo "$yesterday" ?> </td>
		<td> <?php echo "$today" ?> </td>
	</tr>
	<tr>
		<td>
				<select name="portionRice" id="portionRice">	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
		<td>
				<select name="portionRice1" id="portionRice1">	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
		<td>
				<select name="portionRice2" id="portionRice2">	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
	</tr>
	<tr>
		<td align="center" colspan = "3">
			<b>Fruta</b>
		</td>
	</tr>
	<tr>
		<td> <?php echo "$daybefore" ?> </td>
		<td> <?php echo "$yesterday" ?> </td>
		<td> <?php echo "$today" ?> </td>
	</tr>
	<tr>
		<td>
				<select name="portionFruit" id="portionFruit">	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
		<td>
				<select name="portionFruit1" id="portionFruit1">	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
		<td>
				<select name="portionFruit2" id="portionFruit2">	
					<option value="0"> - Porção - </option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
		</td>
	</tr>
</table>

<table>
	<tr>
		<th colspan="2">
			Atividade Física - <?php echo "$daybefore" ?>
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
	<tr>
		<th colspan="2">
			Atividade Física - <?php echo "$yesterday" ?>
		</th>
	</tr>
	<tr>
		<td>
			Tipo de exercício:
		</td>
		<td>
			<select name="exercisetype1">	
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
			<input type="number" name="exerciseduration1" value="0">
		</td>
	</tr>
	<tr>
		<td>
			Velocidade m&eacute;dia:
		</td>
		<td>
			<input type="number" name="averagevelocity1" value="0">
		</td>
	</tr>
	<tr>
		<th colspan="2">
			Atividade Física - <?php echo "$today" ?>
		</th>
	</tr>
	<tr>
		<td>
			Tipo de exercício:
		</td>
		<td>
			<select name="exercisetype2">	
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
			<input type="number" name="exerciseduration2" value="0">
		</td>
	</tr>
	<tr>
		<td>
			Velocidade m&eacute;dia:
		</td>
		<td>
			<input type="number" name="averagevelocity2" value="0">
		</td>
	</tr>
</table>
	<input type = "hidden" name = "username" value = '<?php echo "$profile" ?>'>
<p><input type="Submit" id="submit" value="Submit" ></p></form></p>
