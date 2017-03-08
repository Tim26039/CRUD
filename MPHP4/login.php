<?php
	require_once("config.php");
	
	$Gebruikersnaam = $_POST['Gebruikersnaam'];
	$Wachtwoord = $_POST['Wachtwoord'];
	
	if(strlen($Gebruikersnaam) > 0 && strlen($Wachtwoord) > 0)
	{
		$Wachtwoord = md5($Wachtwoord);
		
		$query = "SELECT * FROM Intro_Admin WHERE Gebruikersnaam ='$Gebruikersnaam' AND Wachtwoord ='$Wachtwoord'";
		
		$result = mysqli_query($mysqli, $query);
		
		if(mysqli_num_rows($result) == 1)
		{
			session_start();
			$_SESSION['Gebruikersnaam'] = $Gebruikersnaam;
			
			header("Location:home.php");
		}
		
			else
			{
				header("Location:index.php");
			}
	}
	
	else
	{
		header("Location:index.php");
	}
?>