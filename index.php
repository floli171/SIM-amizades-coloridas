<?php
session_start();
if(isset($_GET["operacao"])) {
	if($_GET["operacao"] == 'verifyLogin') {
		
		//variáveis do utilizador inseridas no formulário de login
		$_SESSION["authuser"]=0;
		$_SESSION["username"]=$_POST["user"];
		$_SESSION["userpass"]=$_POST["pass"];
		
		$connect = mysqli_connect('localhost', 'root', '', 'sim') or die(mysqli_error($connect)); //liga a base de dados com o nome sim
		
		/*if($link->connect_errno > 0){
			die('Unable to connect to database [' . $db->connect_error . ']');
			}*/
		
		$query_userinfo = 'SELECT Password, Tipo, Actividade FROM assistente WHERE Username = "'.$_POST["user"].'" 
				UNION
				SELECT Password, Tipo, Actividade FROM investigador WHERE Username = "'.$_POST["user"].'"
				UNION
				SELECT Password, Tipo, Actividade FROM utente WHERE Username = "'.$_POST["user"].'"
				UNION
				SELECT Password, Tipo, Actividade FROM nutricionista WHERE Username = "'.$_POST["user"].'";';	//codigo SQL para seleccionar todas as informações na linha com o utilizador "user"	
		
		$get_userinfo = mysqli_query($connect, $query_userinfo) or die(mysqli_error($connect)); //executa o código anterior
		$userinfo = mysqli_fetch_array($get_userinfo);											//guarda os resultados do anterior num vector user[]
		$number = mysqli_num_rows($get_userinfo);											//número de utilizadores encontrados com "user". Em principio deverá ser 1 ou 0
		$pass = $userinfo['Password'];														//guarda o valor verdadeiro da pass do Utilizador constante na base de dados
		$type = $userinfo['Tipo'];
		$activity = $userinfo['Actividade'];
		if($number > 0)																	// verifica se o utilizador existe. só avança caso exista
		{
			if ($_SESSION["userpass"] == $pass)											//verifica se a pass introduzida pelo Utilizador coincide com a pass guardada na base de dados para esse Utilizador
			{	
				switch ($type)
						{
						case 'utente' :
							if($activity == 1)
							{
								$_SESSION["authuser"]=1;
							}
							else
							{
								$_SESSION["authuser"]=-1;
							}
							break;
							
						case 'nutricionista' :
							if($activity == 1)
							{
								$_SESSION["authuser"]=2;
							}
							else
							{
								$_SESSION["authuser"]=-1;
							}
							break;
						case 'investigador' :
							if($activity == 1)
							{
								$_SESSION["authuser"]=3;
							}
							else
							{
								$_SESSION["authuser"]=-1;
							}
							break;
						case 'assistente' :
							if($activity == 1)
							{
								$_SESSION["authuser"]=4;
							}
							else
							{
								$_SESSION["authuser"]=-1;
							}
							break;
						}//auturiza o login caso a condição anterior se verifique
			}
			// else {
			// 	$_SESSION["authuser"]=0;
			// 	exit();
			// }
		}
	}
	
}
if(isset($_GET["operacao"])) {				//Código que procede ao logout quando o utilizador segue a hiperligação "Logout"
	if($_GET["operacao"] == 'logout') {
		session_unset();
	}
}
?>
<!--DOCTYPE html-->
<html>
<head>
  <title>LifestyleFCT</title> <!-- título da página -->
  <link href="calendar.css" type="text/css" rel="stylesheet">
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel='stylesheet' type='text/css' href='style.css'>
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px; background-image: 'home.png'no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>


<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>LifeStyleFCT</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="http://localhost/SIM/index.php?operacao=home" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="http://localhost/SIM/index.php?operacao=showLogin" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Login</a> 
    <a href="http://localhost/SIM/index.php?operacao=showRegistry" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Registar</a> 
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">â˜°</a>
  <span>LifeStyleFCT</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

	<body background="vegetais.jpg">  <!-- estilo do corpo da página -->

		 <!-- hiperligação que acciona a operação "Login" ou "Logout" consoante o valor da variável "authuser"-->
		 <?php
					if (isset($_GET['operacao']))
					{
					switch ($_GET['operacao'])
						{
						case 'home' :
							include ('home.php');
							break;
							
						case 'showLogin' :
							include ('showLogin.php');
							break;
						case 'verifyLogin' :
							include("verifyLogin.php");
							break;
						case 'logout' :
							include('home.php');
							break;
						 case 'listUsers' :
						 	include 'listUsers.php';
						 	break;
						 case 'showRegistry' :
						 	include 'showRegistry.php';
						 	break;
							
						case 'registry' :
						 	include 'registry.php';
						 	break;
						
						case 'showRegistry1' :
						 	include 'showRegistry1.php';
						 	break;
							
						case 'registry1' :
						 	include 'registry1.php';
						 	break;
						
						case 'showDelete' :
						 	include 'showDelete.php';
						 	break;
							
						case 'delete' :
						 	include 'delete.php';
						 	break;
						case 'dailyInfo' :
							include 'dailyInfo.php';
							break;
							
						case 'registDay' :
							include 'registDay.php';
							break;
						
						case 'showProfile' :
							include 'showProfile.php';
							break;
						
						case 'editProfile' :
							include 'editProfile.php';
							break;
						case 'updateActivity' :
							include'updateActivity.php';
							break;
						
						case 'foodInfo' :
							include 'foodInfo.php';
							break;
						
						case 'showCalendar':
							include 'showCalendar.php';
							break;
						
						case 'showNutri':
							include 'showNutri.php';
							break;
						
						case 'editNutri':
							include 'editNutri.php';
							break;
						
						case 'showFirstSub':
							include 'showFirstSub.php';
							break;
						
						case 'firstSub':
							include 'firstSub.php';
							break;
						default:
							include ('home.php');
							break;	
						}
					}
					else include ('home.php');
					?>				
	</body>
</html>