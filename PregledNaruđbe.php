<!DOCTYPE html>
<html>
<head>
	<title>Spremi naruđbu</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>

	<?php include("nav.php"); ?>

	<h1>Pregled adresa</h1>
	<table border="1" id="tablica">
		<tr>
			<th>Meni</th>
			<th>Ime</th>
			<th>Adresa</th>
		</tr>
		<?php
			$datoteka = fopen("restoran.txt", "r");

			if($datoteka)
			{
				// čitanje iz datoteke
				fgets($datoteka);
				while (!feof($datoteka))
				{
					$meni = fgets($datoteka);
					$ime = fgets($datoteka);
					$adresa = fgets($datoteka);
				
					echo "<tr>";
					echo "<td>$meni</td>";	
					echo "<td>$ime</td>";
					echo "<td>$adresa</td>";
					echo "</tr>";
				}
				fclose($datoteka);
			}

		?>
	</table>
	
	<br>
	


</body>
</html>