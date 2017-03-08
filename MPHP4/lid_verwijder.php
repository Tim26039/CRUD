<?php
require_once 'config.php';
session_start();
	
	if(!isset($_SESSION['Gebruikersnaam']) || strlen($_SESSION['Gebruikersnaam']) == 0)
	{
		header("Location:index.php");
		exit;
	}

$id = $_GET['id'];

 if (is_numeric($id))
 {
		$result = mysqli_query($mysqli,"SELECT * FROM mphp4_leden WHERE id= $id");
	
		if(mysqli_num_rows($result) == 1)
		{
			$row = mysqli_fetch_array($result);
		}
		
		else
		{
			echo "Geen Lid gevonden";
			exit;
		}
 }
 
 else
 {
	 echo"Onjuist id";
 }
 
 ?>
 <!DOCTYPE html>
<html>
	<head>
		<title> Verwijder</title>
	</head>
<body>
 	<h1> Verwijder </h1>
			<p> Weet u zeker dat u <strong><?php echo $row['first_name'];?> </strong> wilt verwijderen </p> 
			<a href="lid_verwijder_verwerk.php?id=<?php echo $id; ?>"> Ja ik weet zeker dat ik het wil verwijderen </a> <br>
			<a href="home.php"> Nee ga terug </a>