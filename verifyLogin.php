<?php

//verifica o estado da variável "authuser" para decidir o que mostrar ao utilizador consoante ele foi autorizado dentro do site ou não

if($_SESSION["authuser"]==1) {
			echo "Login bem sucedido!";
			echo "<br>";
			echo "Caro Utente, é bom vê-lo de volta! Nunca se esqueça corpo são mente sã!";
		}
else if($_SESSION["authuser"]==2) {
			echo "Login bem sucedido!";
			echo "<br>";
			echo "Bem-Vindo Senhora Nutricionista! Já comeu fruta hoje?";
		}		
else if($_SESSION["authuser"]==3) {
			echo "Login bem sucedido!";
			echo "<br";
			echo "Bem-Vindo Senhor Investigador! Não se esqueça de fazer exercício regularmente!";
		}		
else if($_SESSION["authuser"]==4) {
			echo "Login bem sucedido!";
			echo "<br>";
			echo "Bem-Vindo Excelentíssimo Assistente! Seja bem vindo à roda da sorte!";
		}
else if($_SESSION["authuser"]==-1) {
			echo "Login incorrecto";
			echo "<br>";
			echo "Esta conta foi desactivada por um Assistente. Reactive a sua conta <a href='http://localhost/SIM/index.php?operacao=updateActivity'>aqui</a>";
		}
		
else {
	echo "<a href='http://localhost/SIM/index.php?operacao=showLogin'>Login</a> incorrecto";
	echo "<br>";
	echo "Já se registou na nossa página?";
		}

?>