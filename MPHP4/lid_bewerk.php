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
		<title> bewerk</title>
	</head>
<body>
	
	<form name="Leden_bewerk_verwerk" method="post" action="lid_bewerk_verwerk.php">
	
			<input type="hidden" name="id"value="<?php echo $id;?>"> <br>
			
		<label>
			<input type="radio" value="M" name="gender" <?php if($row['gender'] == 'M') { echo" checked ='checked'";} ?>>
		man
		</label> <br>
		
			<label>
			<input type="radio" value="F" name="gender" <?php if($row['gender'] == 'F') { echo" checked ='checked'";} ?>>
		Vrouw
		</label> <br>
		
			<label> Voornaam: </label>
			<input type="text" name="first_name" value="<?php echo $row['first_name'];?>"> <br>
			
			<label> Achternaam: </label>
			<input type="text" name="last_name" value="<?php echo $row['last_name'];?>" <br>
			
			<label> Geboortedatum: </label>
			<input type="date" name="birth_date" value="<?php echo $row['birth_date'];?>"> <br>
			
			<label> Lid sinds: </label>
			<input type="date" name="member_since" value="<?php echo $row['member_since'];?>"> <br>
			
			<input type="submit" value="Inschrijven" name="verwerken">
			
	</form>
	
</body>
</html>