<?php
	require_once("config.php");
	
	$gender = $_POST['gender'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$birth_date = $_POST['birth_date'];
	$member_since = $_POST['member_since'];
	$id = $_POST['id'];
	
	if ( strlen($gender) > 0 &&
		 strlen($first_name) > 0 &&
		 strlen($last_name) > 0 &&
		 strlen($birth_date) > 0 &&
		 strlen($member_since) > 0
		)
		{
			$check1 = strtotime($birth_date);
			$check2 = strtotime($member_since);
			
			if (date( 'Y-m-d', $check1)  == $birth_date &&  date( 'Y-m-d', $check2)  == $member_since)
			{
				$query = "UPDATE mphp4_leden 
				SET 
				gender = '$gender',
				first_name ='$first_name',
				last_name = '$last_name',
				birth_date = '$birth_date',
				member_since = '$member_since'
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
			
			else {
				echo"sdffds";
			}
			
		}
?>