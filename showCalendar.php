<table width="500px" height="350px" border="1" align="center" >
			<tr>
				<?php
					echo "<td>";
					include 'calendar.php';
					$calendar=new Calendar();
					echo $calendar->show();
					echo "</td>";
				?>
			</tr>
</table>