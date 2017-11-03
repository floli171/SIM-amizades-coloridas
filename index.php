<?php
session_start();
if(isset($_GET["operacao"])) {
	if($_GET["operacao"] == 'verifyLogin') {

		$_SESSION["authuser"]=0;
		$_SESSION["username"]=$_POST["user"];
		$_SESSION["userpass"]=$_POST["pass"];
		
		$link = mysqli_connect('localhost', 'root', '', 'SIM') or die(mysqli_error($link));
		
		/*if($link->connect_errno > 0){
			die('Unable to connect to database [' . $db->connect_error . ']');
			}*/
		
		$query_user = 'SELECT * FROM Users WHERE (Username = "'.$_POST["user"].'")';		
		$get_user = mysqli_query($link, $query_user) or die(mysqli_error($link));
		$user = mysqli_fetch_array($get_user);
		$number = mysqli_num_rows($get_user);
		
		//$pass = mysqli_fetch_array($get_pass);
		if($number > 0)
		{
			if ($_SESSION["userpass"] == $user['Password'])
			{
				$_SESSION["authuser"]=1;
			}
			else {
				$_SESSION["authuser"]=0;
				exit();
			}
		}
	}
	
	/*if($number >= 0)
		{
			
			$_SESSION["authuser"]=1;
		}
		else {
			$_SESSION["authuser"]=0;
			exit();
		}*/
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

	<body style="font-family:'Verdana'">

		<table width="1000px" height="700px" border="1" align="center" >
			<col width="150">
 			<col width="600">
			<tr>
				<th height="80" colspan="2"> 
					<a href="https://www.fct.unl.pt/" target="_blank""><img src="logo.png" height="50" width="120" align="left"></a>
					<h1 align="center"><strong> HOSPITAL SIM - FCT </strong></h1> 
				</th>
			</tr>

			<tr>
				<td width="140" valign="top">
					<table width="140" border="0">
						<tr>
							<td bgcolor="#99FF33">
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