<!DOCTYPE html>
<html>
<head>
	<title>Restoran</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>

	<?php include("nav.php"); ?>

	<h1>Unesite naruđbu!</h1>

	<form method="post" action="SpremljenaNaruđba.php">

		Meni:<br>
		<select name="meni">
			<option>Pizza sa šunkom </option>
			<option>Pizza sa gljivama</option>
			<option>Mješana pizza</option>
			<option>Pizza sa tunom</option>
			<option>Pizza sa slanim srdelama</option>
			<option>Pohane palačinke</option>
			<option>Hamburger (blagi)</option>
			<option>Hamburger (ljuti)</option>
		</select>
		<br><br>

		Ime:<br>
		<input type="text" name="ime">
		<br><br>

		Adresa:<br>
		<textarea name="adresa"></textarea>
		<br><br>
		<input type="submit" value="Spremi">
		<input type="reset" value="Odustani">

	</form>

	<br>


</body>
</html>