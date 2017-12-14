<?php
	$connect = mysqli_connect('localhost', 'root', '', 'sim') or die(mysqli_error($connect)); //conecta a base de dados sim

	
		//Verifica se o user ja existe
	$query_info = "SELECT * FROM utente WHERE Username = '".$_SESSION['username']."'";
	$result_info = mysqli_query($connect, $query_info) or die (mysqli_error($connect));
	$row_info = mysqli_fetch_array($result_info);
	$name = $row_info['Nome'];
	$username = $row_info['Username'];
	$password = $row_info['Password'];
	$gen = $row_info['Gen'];
	$dateofbirth = $row_info['DataDeNascimento'];
	$address = $row_info['Morada'];
	$cellphone = $row_info['Tel'];
	$CS = $row_info['CS'];
	$weight = $row_info['Peso'];
	$height = $row_info['Altura'];
	$pic = $row_info['Fotografia'];
	$email = $row_info['Email'];
		
	$info = array('password', 'address', 'email', 'cellphone', 'cardnumber', 'weight', 'height');
	$infosql = array('Password', 'Morada', 'Email', 'Tel', 'CS', 'Peso', 'Altura');
	$up=0;
	
	for($i=0; $i<7; $i++){
		if(isset($_POST[$info[$i]])){
			$info[$i] = $_POST[$info[$i]];
		}
		else{
			$info[$i] = 'N/a';
		}
	}
	
	for($i=0; $i<7; $i++){
		if((strcmp($info[$i], 'N/a')!=0 ) && ($i>2)){
			$info[$i] = (int)$info[$i];
			$query_update = 'UPDATE utente SET '.$infosql[$i].' = "'.$info[$i].'" WHERE Username = "'.$_SESSION['username'].'"';
			$update = mysqli_query($connect,$query_update) or die (mysqli_error($connect));
			$up = 1;
		}
		else if((strcmp($info[$i], 'N/a')!=0 ) && ($i<=2)){
			$query_update =  'UPDATE utente SET '.$infosql[$i].' = "'.$info[$i].'" WHERE Username = "'.$_SESSION['username'].'"';
			$update = mysqli_query($connect,$query_update) or die (mysqli_error($connect));
			$up = 1;
		}
	}
	
	if($up == 1){
		echo "Alteracao efectuada com sucesso dos campos: ";
		echo "<br>";
		for($i=0; $i<7; $i++){
			echo ''.$infosql[$i].' - > '.$info[$i].'';
			echo "<br>";
		}
	}
	else{
		echo "Por favor introduza valores válidos nos campos a alterar";
		echo "<br>";
		for($i=0; $i<7; $i++){
			echo ''.$info[$i].'';
			echo "<br>";
		}
	}
?>