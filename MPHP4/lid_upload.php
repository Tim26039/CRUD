<?php
	$id = $_GET['id'];
?>

<!DOCTYPE html>
<html>
	<head>
		<title> home </title>
	</head>
<body>
	
	<form action="upload_verwerk.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $id;?>">
		<p>
			<label for="foto"> Foto: </label>
			<input type="file" name="foto" id="foto" requird="requird">
		</p>
		
		<p>
			<input type="submit" name="submit" id="submit" value="uploaden">
			<button name="iets" onClick="history.back();return false;"> Annuleren </button>
		</p>
	</form>
	
	<?php
		if(file_exists(__DIR__.'/uploads/'.$id.'.jpg'))
		{
			echo"<p><img src='uploads/".$id.".jpg' alt='foto' /> </p>";
		}
	?>
</body>
</html>
	