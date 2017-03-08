<?php
	require_once("config.php");
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
		<title> home </title>
	</head>
<body>
	<?php
		
		$Result = mysqli_query ($mysqli, "SELECT * FROM mphp4_leden ORDER BY last_name ASC");
		
		echo"<table>";
		
		echo"<tr>";
		
		echo"<th> ID </th>";
		echo"<th> Geslacht </th>";
		echo"<th> Voornaam </th>";
		echo"<th> Achternaam </th>";
		echo"<th> Geboortedatum </th>";
		echo"<th> Lid Sinds</th>";
		echo"<th> Bewerken </th>";
		echo"<th> Verwijder </th>";
		echo"<th> Upload </th>";
		
		echo"</tr>";
		
		while($rij = mysqli_fetch_array($Result))
		{
			echo"<tr>";
				echo"<td>" . $rij['id'] . "</td>";
				echo"<td>" . $rij['gender'] . "</td>";
				echo"<td>" . $rij['first_name'] . "</td>";
				echo"<td>" . $rij['last_name'] . "</td>";
				echo"<td>" . $rij['birth_date'] . "</td>";
				echo"<td>" . $rij['member_since'] . "</td>";
				echo"<td> <a href='lid_bewerk.php?id=".$rij['id']."'> Bewerk </a> </td>";
				echo"<td> <a href='lid_verwijder.php?id=".$rij['id']."'> Verwijder </a> </td>";
				echo"<td> <a href='lid_upload.php?id=".$rij['id']."'> Upload </a> </td>";
			echo"</tr>";
		}
		
		echo"</table>";
	?>	
	<br>
		<a href="lid_nieuw.php"> Klik hier om leden toe tevoegen </a>
		
	<br>
		<a href="uitloggen.php"> Klik hier om uitloggen </a>

</body>
</html>