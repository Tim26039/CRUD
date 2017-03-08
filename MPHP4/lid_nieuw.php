<?php
require_once 'config.php';
session_start();
	
	if(!isset($_SESSION['Gebruikersnaam']) || strlen($_SESSION['Gebruikersnaam']) == 0)
	{
		header("Location:index.php");
		exit;
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title> index.php </title>
	</head>
<body>
	<h1> Login </h1>
	
	<form name="Leden_Toevoegen" method="post" action="lid_nieuw_verwerken.php">
		<label>
			<input type="radio" value="M" name="gender" checked="checked">
		man
		</label> <br>
		
			<label>
			<input type="radio" value="F" name="gender">
		Vrouw
		</label> <br>
		
			<label> Voornaam: </label>
			<input type="text" name="first_name" required="required"> <br>
			
			<label> Achternaam: </label>
			<input type="text" name="last_name" required="required"> <br>
			
			<label> Geboortedatum: </label>
			<input type="date" name="birth_date" required="required"> <br>
			
			<label> Lid sinds: </label>
			<input type="date" name="member_since" required="required"> <br>
			
			<input type="submit" value="Inschrijven" name="verwerken">
			
	</form>
	
</body>
</html>