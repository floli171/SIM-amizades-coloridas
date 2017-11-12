
<!-- Apresenta o Formulário de Registo quando o utilizador segue a hiperligação "Registar" -->
<!-- Recebe do utilizador Nome completo, Utilizador e Password e guarda nas respectivas variáveis para inserir na base de dados -->

<style type="text/css">
form {
	text-align: left;
	font-size: 1.25em; /*not working*/
}
</style>

<table border="1">
	<th>Ficha de Registo</th>
	<tr>
		<td>
			<?php 
				if (isset($_GET['registry']))
				{
				switch ($_GET['registry'])
					{
					case 'showRegistry1':
						include ("showRegistry1.php");
						break;

					case 'showRegistry2':
						include ("showRegistry2.php");
						break;

					default:
						include ("showRegistry1.php");
						break;
					}
				}
			?>
		</td>
	</tr>
</table>


<?php
if($_GET['registry'] == 'showRegistry1')
	echo "<a href='http://localhost/SIM/index.php?operacao=showRegistry?registry=showRegistry2'>Próximo</a>";

if($_GET['registry'] == 'showRegistry2')
	 echo "<a href='http://localhost/SIM/index.php?operacao=showRegistry?registry=showRegistry1'>Anterior</a>";

?>


<!-- uma fotografia-->