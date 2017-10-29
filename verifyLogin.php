<?php

if($_SESSION["authuser"]==1) {
			echo "Login bem sucedido!";
		}
		else {
			echo "<a href='http://localhost/SIM/index.php?operacao=showLogin'>Login</a>";
			echo "Login incorrecto";
		}

?>