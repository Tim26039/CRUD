<?php
	$bestand = $_FILES['foto'];
	
	if(isset($_FILES['foto']) && $_FILES['foto']['error'] == 0)
	{
		if ($bestand['type'] == "image/jpg" ||
			$bestand['type'] == "image/jpeg" ||
			$bestand['type'] == "image/pjpeg")
		   {
			   $map = __DIR__."/uploads/";
			   $bestand = $_POST['id']. '.jpg';
			   $id = $_POST['id'];
			   
			   move_uploaded_file($_FILES['foto']['tmp_name'], $map . $bestand);
			   
			   header("Location:lid_upload.php?id=".$_POST['id']);
		   }
		   
		 else
		 {
			 echo"Bestand is van het verkeerde typen";
		 }
	}
	
	else
	{
		echo"Er ging iets fout bij het oploaden";
	}
?>