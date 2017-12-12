<?php

	$connect = mysqli_connect('localhost', 'root', '', 'sim') or die(mysqli_error($connect)); //conecta a base de dados sim
	
	//busca o ID e Username do utilizador
	$user = $_SESSION["username"];
	$query_uid = 'SELECT U_ID, Username FROM utente WHERE Username = "'.$_SESSION["username"].'" ';
	$get_uid = mysqli_query($connect, $query_uid) or die(mysqli_error($connect));
	$u_id = mysqli_fetch_array($get_uid);
	$u = $u_id["Username"];
	$i = $u_id["U_ID"];
	$T = (int)$_POST["exerciseduration"]; 
	$V = (int)$_POST["averagevelocity"]; 
	$query_insert = 'INSERT INTO comida_dia(U_ID, Leite, Pao, Ovos, Peixe, Vaca, Frango, Vegetais, Batata, Arroz, Fruta, T, V) VALUES ("'.$i.'", "'.$_POST["portionMilk"].'", "'.$_POST["portionBread"].'", "'.$_POST["portionEgg"].'", "'.$_POST["portionFish"].'", "'.$_POST["portionBeef"].'", "'.$_POST["portionChicken"].'", "'.$_POST["portionVegetable"].'", "'.$_POST["portionPotato"].'", "'.$_POST["portionRice"].'", "'.$_POST["portionFruit"].'", "'.$T.'", "'.$V.'")';
	$insert = mysqli_query($connect, $query_insert) or die(mysqli_error($connect));
	echo "Registo com sucesso da alimentação de $u";






?>