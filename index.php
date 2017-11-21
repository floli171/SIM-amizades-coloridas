<?php
session_start();
if(isset($_GET["operacao"])) {
	if($_GET["operacao"] == 'verifyLogin') {
		
		//variáveis do utilizador inseridas no formulário de login
		$_SESSION["authuser"]=0;
		$_SESSION["username"]=$_POST["user"];
		$_SESSION["userpass"]=$_POST["pass"];
		
		$connect = mysqli_connect('localhost', 'root', '', 'mysql') or die(mysqli_error($connect)); //liga a base de dados
		
		/*if($link->connect_errno > 0){
			die('Unable to connect to database [' . $db->connect_error . ']');
			}*/
		
		$query_user = 'SELECT * FROM Users WHERE (Username = "'.$_POST["user"].'")';	//codigo SQL para seleccionar todas as informações na linha com o utilizador "user"	
		$get_user = mysqli_query($connect, $query_user) or die(mysqli_error($connect)); //executa o código anterior
		$user = mysqli_fetch_array($get_user);											//guarda os resultados do anterior num vector user[]
		$number = mysqli_num_rows($get_user);											//número de utilizadores encontrados com "user". Em principio deverá ser 1 ou 0
		$pass = $user['Password'];														//guarda o valor verdadeiro da pass do Utilizador constante na base de dados
		//$pass = mysqli_fetch_array($get_pass);
		if($number > 0)																	// verifica se o utilizador existe. só avança caso exista
		{
			if ($_SESSION["userpass"] == $pass)											//verifica se a pass introduzida pelo Utilizador coincide com a pass guardada na base de dados para esse Utilizador
			{
				$_SESSION["authuser"]=1;												//auturiza o login caso a condição anterior se verifique
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

<!DOCTYPE html>

	<head>
		<title>LifestyleFCT</title>	<!-- título da página -->
	</head>

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
							if(isset($_SESSION["authuser"])) { //verifica se já existe esta variável

								if($_SESSION["authuser"]==0) { //se o utilizador ainda nao estiver autenticado apresenta Login com hiperligação para o formulário de login em showLogin.php
									echo "<a href='http://localhost/SIM/index.php?operacao=showLogin'>Login</a>";
								}
								if($_SESSION["authuser"]==1) { //se o utilizador já estiver autenticado apresenta Logout com respectiva hiperligação
									echo "<a href='http://localhost/SIM/index.php?operacao=logout'>Logout</a>";
								}
							}
							else {
								echo "<a href='http://localhost/SIM/index.php?operacao=showLogin'>Login</a>"; //se ainda não houver variável "authuser" apresenta Login com hiperligação para o formulário de login em showLogin.php
							}
							?>
							</td>
						</tr>
						<tr>
							<td> <!-- hiperligação que acciona a operação "Listar" ou "Registar" consoante o valor da variável "authuser"-->
								<?php
								if(isset($_SESSION["authuser"])) { //verifica se esta variável não tem valor null

									if($_SESSION["authuser"]==1) { //se o utilizador já estiver autenticado apresenta Listar com hiperligação para listUsers.php com número de pagina inicial (1) e número de entradas por página (10)
										echo "<a href='http://localhost/SIM/index.php?operacao=listUsers&pageNumber=1&pageSize=10'>Listar</a>";
									}
									else if($_SESSION["authuser"]==0) { //se o utilizador ainda nao estiver autenticado apresenta Registar com hiperligação para o formulário de registo em showRegistry.php
										echo "<a href='http://localhost/SIM/index.php?operacao=showRegistry&registry=showRegistry1'>Registar</a>";
									}
								}
									
								else {
									echo "<a href='http://localhost/SIM/index.php?operacao=showRegistry&registry=showRegistry1'>Registar</a>"; //se ainda não houver variável "authuser" apresenta Registar com hiperligação para o formulário de registo em showRegistry.php
								}
								?>
							</td>
						</tr>
						<tr>
							<td>
								<?php
								if(isset($_SESSION["authuser"])) {

									if($_SESSION["authuser"]==1) {
										echo "<a href='http://localhost/SIM/index.php?operacao=dailyInfo'>Ficha Di&aacuteria</a>";
									}
								}

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

						case 'dailyInfo' :
							include 'dailyInfo.php';
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