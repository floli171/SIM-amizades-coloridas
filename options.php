<?php
							if(isset($_SESSION["authuser"])) { //verifica se já existe esta variável

								if($_SESSION["authuser"]==0) { //se o utilizador ainda nao estiver autenticado apresenta Login com hiperligação para o formulário de login em showLogin.php
									echo "<a href='http://localhost/SIM/index.php?operacao=showLogin'>Login</a>";
								}
								if($_SESSION["authuser"]>0) { //se o utilizador já estiver autenticado apresenta Logout com respectiva hiperligação
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

									if($_SESSION["authuser"]==4) { //se o utilizador já estiver autenticado apresenta Listar com hiperligação para listUsers.php com número de pagina inicial (1) e número de entradas por página (10)
										echo "<a href='http://localhost/SIM/index.php?operacao=listUsers&pageNumber=1&pageSize=10'>Listar</a>";
									}
									else if($_SESSION["authuser"]==0) { //se o utilizador ainda nao estiver autenticado apresenta Registar com hiperligação para o formulário de registo em showRegistry.php
										echo "<a href='http://localhost/SIM/index.php?operacao=showRegistry&registry=showRegistry1'>Registar</a>";
									}
								}
									
								else {
									echo "<a href='http://localhost/SIM/index.php?operacao=showRegistry'>Registar</a>"; //se ainda não houver variável "authuser" apresenta Registar com hiperligação para o formulário de registo em showRegistry.php
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
						<tr>
							<td>
								<?php
								if(isset($_SESSION["authuser"])) {

									if($_SESSION["authuser"]==4) {
										echo "<a href='http://localhost/SIM/index.php?operacao=showRegistry1'>Registar Funcionário</a>";
									}
								}

								?>
							</td>
						</tr>
						<tr>
							<td>
								<?php
								if(isset($_SESSION["authuser"])) {

									if($_SESSION["authuser"]==4) {
										echo "<a href='http://localhost/SIM/index.php?operacao=showRegistry'>Registar Utente</a>";
									}
								}

								?>
							</td>
						</tr>
						
						<tr>
							<td>
								<?php
								if(isset($_SESSION["authuser"])) {

									if($_SESSION["authuser"]==4) {
										echo "<a href='http://localhost/SIM/index.php?operacao=showDelete'>Remover Utilizador</a>";
									}
								}

								?>