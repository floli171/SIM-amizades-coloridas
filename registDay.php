<?php

	$connect = mysqli_connect('localhost', 'root', '', 'sim') or die(mysqli_error($connect)); //conecta a base de dados sim
	
	//busca o ID e Username do utilizador
	//$user = $_SESSION["username"];
	
	if($_SESSION['authuser']==1){
		$profile = $_SESSION["username"];
	}
	else{
		$profile = $_POST["username"];
	}
	
	
	$query_uid = 'SELECT U_ID, Username FROM utente WHERE Username = "'.$profile.'"';
	$get_uid = mysqli_query($connect, $query_uid) or die(mysqli_error($connect));
	$u_id = mysqli_fetch_array($get_uid);
	$u = $u_id["Username"];
	$id = $u_id["U_ID"];
	
	$month=date("m");
	$year=date("Y");
	$day=date("d");
	$query_info = 'SELECT DataDeRegisto FROM comida_dia WHERE DAY(DataDeRegisto)='.$day.' AND MONTH(DataDeRegisto)='.$month.' AND YEAR(DataDeRegisto)='.$year.' AND U_ID = '.$id.'';
	$result_info = mysqli_query($connect, $query_info) or die (mysqli_error($connect));
	$number = mysqli_num_rows($result_info);
	$row_info = mysqli_fetch_array($result_info);
	$date = $row_info['DataDeRegisto'];
	
	$today=date("Y-m-d");
	$foods = array('portionMilk', 'portionBread', 'portionEgg', 'portionFish', 'portionBeef', 'portionChicken', 'portionVegetable', 'portionPotato', 'portionRice', 'portionFruit', 'portionOther');
	
	for($i=0; $i<10; $i++){
		if(isset($_POST[$foods[$i]])){
			$foods[$i] = $_POST[$foods[$i]];
		}
		else{
			$foods[$i] = 0;
		}
	}
	$T = (int)$_POST["exerciseduration"]; 
	$V = (int)$_POST["averagevelocity"];
	$A = $_POST["exercisetype"];
	
	if($number==0){
		$query_insert = 'INSERT INTO comida_dia(U_ID, Leite, Pao, Ovos, Peixe, Vaca, Frango, Vegetais, Batata, Arroz, Fruta, Actividade, T, V, DataDeRegisto) VALUES ("'.$id.'", "'.$foods[0].'", "'.$foods[1].'", "'.$foods[2].'", "'.$foods[3].'", "'.$foods[4].'", "'.$foods[5].'", "'.$foods[6].'", "'.$foods[7].'", "'.$foods[8].'", "'.$foods[9].'", "'.$A.'", "'.$T.'", "'.$V.'", "'.$today.'")';
		$insert = mysqli_query($connect, $query_insert) or die(mysqli_error($connect));
		echo "Registo com sucesso da alimentação de $u no dia $today";
	}
	
	else{
		echo "Já registou a sua alimentação hoje por favor volte amanhã";
	}
	
	/*if(isset($_POST["typeOther"])){
		
		$query_addOther = 'ALTER TABLE comida_dia ADD "'.$_POST['typeOther'].'" INT NOT NULL AFTER "Fruta";'
		$addOther = mysqli_query($connect, $query_addOther);
		$last_C_ID = mysqli_inset_id($connect);
		$query_update = 'UPDATE comida_dia SET "'.$_POST['typeOther'].'" WHERE C_ID = "'.$last_C_ID.'"';
	}*/
		






?>