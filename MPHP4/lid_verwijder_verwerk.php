<?php
	require_once("config.php");
		
	$id = $_GET['id'];
	
	
			
			if (is_numeric($id))
			{
				$query = "DELETE FROM mphp4_leden 
				WHERE id = $id";
				$result = mysqli_query($mysqli, $query);
				
				if($result)
				{
					header("location:home.php");
					echo"lalal";
				}
				
				else
				{
					echo"er is iets mis gegaan";
					echo$query;
				}
				
			}
			
			else 
			{	
				echo $id;
			}
?>