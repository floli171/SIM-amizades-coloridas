<?php

//verifica o estado da variável "authuser" para decidir o que mostrar ao utilizador consoante ele foi autorizado dentro do site ou não

if($_SESSION["authuser"]==1) {
			echo "Login bem sucedido!";
		}
		else {
			echo "<a href='http://localhost/SIM/index.php?operacao=showLogin'>Login</a>";
			echo "Login incorrecto";
		}

?>