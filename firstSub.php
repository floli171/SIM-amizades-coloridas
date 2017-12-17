<?php

	$connect = mysqli_connect('localhost', 'root', '', 'sim') or die(mysqli_error($connect)); //conecta a base de dados sim
	
	//busca o ID e Username do utilizador
	//$user = $_SESSION["username"];
	
	$profile = $_POST["username"];
	
	$today=date("Y-m-d");
	$yesterday=date("Y-m-d", strtotime("-1 days"));
	$daybefore=date("Y-m-d", strtotime("-2 days"));
	
	$foods = array('portionMilk', 'portionBread', 'portionEgg', 'portionFish', 'portionBeef', 'portionChicken', 'portionVegetable', 'portionPotato', 'portionRice', 'portionFruit', 'portionOther');
	$foods1 = array('portionMilk1', 'portionBread1', 'portionEgg1', 'portionFish1', 'portionBeef1', 'portionChicken1', 'portionVegetable1', 'portionPotato1', 'portionRice1', 'portionFruit1', 'portionOther1');
	$foods2 = array('portionMilk2', 'portionBread2', 'portionEgg2', 'portionFish2', 'portionBeef2', 'portionChicken2', 'portionVegetable2', 'portionPotato2', 'portionRice2', 'portionFruit2', 'portionOther2');
	
	
	for($i=0; $i<10; $i++){
		if(isset($_POST[$foods[$i]])){
			$foods[$i] = $_POST[$foods[$i]];
		}
		else{
			$foods[$i] = 0;
		}
		if(isset($_POST[$foods1[$i]])){
			$foods1[$i] = $_POST[$foods1[$i]];
		}
		else{
			$foods1[$i] = 0;
		}
		if(isset($_POST[$foods2[$i]])){
			$foods2[$i] = $_POST[$foods2[$i]];
		}
		else{
			$foods2[$i] = 0;
		}
	}
	
	
	$query_uid = 'SELECT U_ID, Username FROM utente WHERE Username = "'.$profile.'"';
	$get_uid = mysqli_query($connect, $query_uid) or die(mysqli_error($connect));
	$u_id = mysqli_fetch_array($get_uid);
	$u = $u_id["Username"];
	$i = $u_id["U_ID"];
	$T = (int)$_POST["exerciseduration"]; 
	$V = (int)$_POST["averagevelocity"];
	$A = $_POST["exercisetype"];
	$T1 = (int)$_POST["exerciseduration1"]; 
	$V1 = (int)$_POST["averagevelocity1"];
	$A1 = $_POST["exercisetype1"];
	$T2 = (int)$_POST["exerciseduration2"]; 
	$V2 = (int)$_POST["averagevelocity2"];
	$A2 = $_POST["exercisetype2"];
	$query_insert = 'INSERT INTO comida_dia(U_ID, Leite, Pao, Ovos, Peixe, Vaca, Frango, Vegetais, Batata, Arroz, Fruta, Actividade, T, V, DataDeRegisto) VALUES ("'.$i.'", "'.$foods[0].'", "'.$foods[1].'", "'.$foods[2].'", "'.$foods[3].'", "'.$foods[4].'", "'.$foods[5].'", "'.$foods[6].'", "'.$foods[7].'", "'.$foods[8].'", "'.$foods[9].'", "'.$A.'", "'.$T.'", "'.$V.'", "'.$daybefore.'")';
	$query_insert1 = 'INSERT INTO comida_dia(U_ID, Leite, Pao, Ovos, Peixe, Vaca, Frango, Vegetais, Batata, Arroz, Fruta, Actividade, T, V, DataDeRegisto) VALUES ("'.$i.'", "'.$foods1[0].'", "'.$foods1[1].'", "'.$foods1[2].'", "'.$foods1[3].'", "'.$foods1[4].'", "'.$foods1[5].'", "'.$foods1[6].'", "'.$foods1[7].'", "'.$foods1[8].'", "'.$foods1[9].'", "'.$A1.'", "'.$T1.'", "'.$V1.'", "'.$yesterday.'")';
	$query_insert2 = 'INSERT INTO comida_dia(U_ID, Leite, Pao, Ovos, Peixe, Vaca, Frango, Vegetais, Batata, Arroz, Fruta, Actividade, T, V, DataDeRegisto) VALUES ("'.$i.'", "'.$foods2[0].'", "'.$foods2[1].'", "'.$foods2[2].'", "'.$foods2[3].'", "'.$foods2[4].'", "'.$foods2[5].'", "'.$foods2[6].'", "'.$foods2[7].'", "'.$foods2[8].'", "'.$foods2[9].'", "'.$A2.'", "'.$T2.'", "'.$V2.'", "'.$today.'")';
	$insert = mysqli_query($connect, $query_insert) or die(mysqli_error($connect));
	$insert1 = mysqli_query($connect, $query_insert1) or die(mysqli_error($connect));
	$insert2 = mysqli_query($connect, $query_insert2) or die(mysqli_error($connect));
	
	echo "Registo com sucesso da alimentação dos últimos 3 dias $u";
	echo "<br><br>";
	echo "<b> Agora pode escolher o seu nutricionista </b>";
	echo "<br><br><br>";
	echo "<a href='http://localhost/SIM/index.php?operacao=showNutri&pageNumber=1&pageSize=10&profile=$profile'> Escolher o meu nutricionista </a>";
	echo "<br>";
	echo "<br>";
	echo "<a href='http://localhost/SIM/index.php?operacao=home'> Não obrigado (neste caso será lhe atribuido um Nutricionista pelo Administrador do sistema) </a>";
		






?>