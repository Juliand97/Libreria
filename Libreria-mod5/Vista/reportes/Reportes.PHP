<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	
	<table border="1s">
		<?php 
			foreach ($tabla as $key )
			{	echo "<th>".$key[0]."</th>";}
		?>
		<tr>
		<?php
			foreach ($cont as $key) 
			{
				for($i=0; $i <=count($tabla);$i++)
				{ 		
					if ($i==count($tabla)) 
					{
						$a=count($tabla)-1;
						echo "<tr></tr>";	
					}
					else
					{
						echo "<td>".$key[$i]."</td>";
					}	
				}		
			}
		?>
	</tr>
	</table>
	<form action="" method="post">
		<input type="submit" name="reporte" value="Descargar Archivo">
	</form>
</body>
</html>