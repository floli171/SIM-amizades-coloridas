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
	<title>LifestyleFCT</title>	<!-- título da página -->
	<link href="calendar.css" type="text/css" rel="stylesheet" />
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>

	<body style="font-family:'Verdana'">  <!-- estilo do corpo da página -->

		<table width="1000px" height="700px" border="1" align="center" > <!-- Tabela de conteudo -->
			<tr>
				<th height="80" colspan="2">  <!-- Cabeçalho da página com hiperligação ao site FCT no logo do mesmo e nome do hospital -->
					<a href="https://www.fct.unl.pt/" target="_blank""><img src="logo.png" height="50" width="120" align="left"></a>
					<h1 align="center"><strong> LifestyleFCT </strong></h1> 
				</th>
			</tr>

			<tr> <!-- Linha para opções e consequente conteudo -->
				<td width="140" valign="top"> 
					<table width="140" border="0">
						<tr>
							<td bgcolor="#99FF33">
								<p><strong>Op&ccedil;&otilde;es</strong></p> <!-- opções-->
							</td>
						</tr>
						<tr>
							<td>
								<p><a href="http://localhost/SIM/index.php?operacao=home"> Apresenta&ccedil;&atilde;o</a></p> <!-- hiperligação de Apresentação que liga a home.php-->
							</td>
						</tr>
						<tr>
							<td> <!-- hiperligação que acciona a operação "Login" ou "Logout" consoante o valor da variável "authuser"-->
								<?php
									include'options.php';
								?>
							</td>
						</tr>
						</table>
				</td>

				<td width="860" align="center">
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

						default:
							include ('home.php');
							break;	
						}
					}
					else include ('home.php');
					?>				
				</td>
			</tr>

			<tr>
				<td height="30" bgcolor="909090" colspan="2" align="center"> 
					&#169;Alunos 2017/18
				</td>
			</tr>


		</table>


	</body>

</html>