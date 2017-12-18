<?php
							if(isset($_SESSION["authuser"])) { //verifica se já existe esta variável

								if($_SESSION["authuser"]<=0) { //se o utilizador ainda nao estiver autenticado apresenta Login com hiperligação para o formulário de login em showLogin.php
									echo "<a href='http://localhost/SIM/index.php?operacao=showLogin' onclick='w3_close()' class='w3-bar-item w3-button w3-hover-white'>Login</a>";
								}
								if($_SESSION["authuser"]>0) { //se o utilizador já estiver autenticado apresenta Logout com respectiva hiperligação
									echo "<a href='http://localhost/SIM/index.php?operacao=logout' onclick='w3_close()' class='w3-bar-item w3-button w3-hover-white'>Logout</a>";
								}
							}
							else {
								echo "<a href='http://localhost/SIM/index.php?operacao=showLogin' onclick='w3_close()' class='w3-bar-item w3-button w3-hover-white'>Login</a>"; //se ainda não houver variável "authuser" apresenta Login com hiperligação para o formulário de login em showLogin.php
							}
							?>
								<?php
								if(isset($_SESSION["authuser"])) { //verifica se esta variável não tem valor null

									if($_SESSION["authuser"]>1) { //se o utilizador já estiver autenticado apresenta Listar com hiperligação para listUsers.php com número de pagina inicial (1) e número de entradas por página (10)
										echo "<a href='http://localhost/SIM/index.php?operacao=listUsers&pageNumber=1&pageSize=10' onclick='w3_close()' class='w3-bar-item w3-button w3-hover-white'>Listar Utilizadores</a>";
									}
									else if($_SESSION["authuser"]==0) { //se o utilizador ainda nao estiver autenticado apresenta Registar com hiperligação para o formulário de registo em showRegistry.php
										echo "<a href='http://localhost/SIM/index.php?operacao=showRegistry&registry=showRegistry1' onclick='w3_close()' class='w3-bar-item w3-button w3-hover-white'>Registar</a>";
									}
								}
									
								else {
									echo "<a href='http://localhost/SIM/index.php?operacao=showRegistry' onclick='w3_close()' class='w3-bar-item w3-button w3-hover-white'>Registar</a>"; //se ainda não houver variável "authuser" apresenta Registar com hiperligação para o formulário de registo em showRegistry.php
								}
								?>
								<?php
								if(isset($_SESSION["authuser"])) {

									if($_SESSION["authuser"]==1) {
										echo "<a href='http://localhost/SIM/index.php?operacao=dailyInfo' onclick='w3_close()' class='w3-bar-item w3-button w3-hover-white'>Ficha Di&aacuteria</a>";
										echo "</td>";
										echo "</tr>";
										echo "<tr>";
										echo "<td>";
										echo "<a href='http://localhost/SIM/index.php?operacao=showProfile' onclick='w3_close()' class='w3-bar-item w3-button w3-hover-white'>Editar Informa&ccedil;&atilde;o</a>";
										echo "</td>";
										echo "</tr>";
									}
								}

								?>
					
								<?php
								if(isset($_SESSION["authuser"])) {

									if($_SESSION["authuser"]==4) {
										echo "<a href='http://localhost/SIM/index.php?operacao=showRegistry1' onclick='w3_close()' class='w3-bar-item w3-button w3-hover-white'>Registar Funcionário</a>";
									}
								}

								?>
							
								<?php
								if(isset($_SESSION["authuser"])) {

									if($_SESSION["authuser"]==4) {
										echo "<a href='http://localhost/SIM/index.php?operacao=showRegistry' onclick='w3_close()' class='w3-bar-item w3-button w3-hover-white'>Registar Utente</a>";
									}
								}

								?>
							
								<?php
								if(isset($_SESSION["authuser"])) {

									if($_SESSION["authuser"]==4) {
										echo "<a href='http://localhost/SIM/index.php?operacao=showDelete' onclick='w3_close()' class='w3-bar-item w3-button w3-hover-white'>Desactivar Utilizador</a>";
									}
								}

								?>