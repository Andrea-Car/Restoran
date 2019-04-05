<!DOCTYPE html>
<html>
<head>
	<title>Spremi Adresu</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>

	<?php include("nav.php"); ?>

	<h1>Spremljena naruđba</h1>
	<br>
	<h2>Vaša naruđba je spremljena!</h2>

	<?php

        $meni = $_POST['meni'];
		$ime = $_POST['ime'];
		$adresa = $_POST['adresa'];

        echo "Meni: $meni <br>";
		echo "Ime: $ime <br>";
		echo "Adresa: $adresa <br>";
		


		$datoteka = fopen("restoran.txt", "a");

		fwrite($datoteka, "\n$meni\n$ime\n$adresa");

		fclose($datoteka);

	?>


</body>
</html>