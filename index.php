<?php
session_start();
if(isset($_GET["operacao"])) {
	if($_GET["operacao"] == 'verifyLogin') {

		$_SESSION["authuser"]=0;
		$_SESSION["username"]=$_POST["user"];
		$_SESSION["userpass"]=$_POST["pass"];

		if (($_SESSION["username"]== "Joe") AND ($_SESSION["userpass"]== "12345")) {
			$_SESSION["authuser"]=1;
		}
		else {
			$_SESSION["authuser"]=0;
			exit();
		}
	}
}
if(isset($_GET["operacao"])) {
	if($_GET["operacao"] == 'logout') {
		session_unset();
	}
}

?>

<html>

	<head>
		<title>Cl&iacute;nica SIM - FCT</title>
		<meta charset="UTF-8">
	</head>

	<body>
		<table width="1000px" height="700px" border="1" align="center" >
			<col width="150">
 			<col width="600">
			<tr>
				<th colspan="2"> 
					<a href="https://www.fct.unl.pt/" target="_blank""><img src="logo.png" height="50" width="120" align="left"></a>
					<h1 align="center"><strong> HOSPITAL SIM - FCT </strong></h1> 
				</th>
			</tr>

			<tr>
				<td width:"150" valign="top">
					<table width="150" border="0">
						<tr>
							<td bgcolor="99FF33">
								<p><strong>Op&ccedil;&otilde;es</strong></p>
							</td>
						</tr>
						<tr>
							<td>
								<p><a href="http://localhost/SIM/index.php?operacao=home"> Apresenta&ccedil;&atilde;o</a></p>
							</td>
						</tr>
						<tr>
							<td>
							<?php
							if(isset($_SESSION["authuser"])) {

								if($_SESSION["authuser"]==0) {
									echo "<a href='http://localhost/SIM/index.php?operacao=showLogin'>Login</a>";
								}
								if($_SESSION["authuser"]==1) {
									echo "<a href='http://localhost/SIM/index.php?operacao=logout'>Logout</a>";
								}
							}
							else {
								echo "<a href='http://localhost/SIM/index.php?operacao=showLogin'>Login</a>";
							}
							?>
							</td>
						</tr>
						<tr>
							<td>
								<?php
								if(isset($_SESSION["authuser"])) {

									if($_SESSION["authuser"]==1) {
										echo "<a href='http://localhost/SIM/index.php?operacao=listUsers&pageNumber=1&pageSize=10'>Listar</a>";
									}
								}
								else {
									echo "<a href='http://localhost/SIM/index.php?operacao=home'></a>";
								}
								?>
							</td>
						</tr>
						</table>
				</td>

				<td align="center">
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
				<td bgcolor="909090" colspan="2" align="center"> 
					&#169;Alunos 2017/18
				</td>
			</tr>


		</table>


	</body>

</html>