<?php

function uploadImage($files)
{
	if(
		$files['photo']['error'] == 0 && 
		$files['photo']['size'] < 9999999 &&
		(
			$files['photo']['type'] == "image/jpg" ||
			$files['photo']['type'] == "image/jpeg" ||
			$files['photo']['type'] == "image/png" ||
			$files['photo']['type'] == "image/gif"
		)		
	)
	{
		$temporaryLocation = $files['photo']['tmp_name'];
		$newFileName = date("YmdHis") . "_" . rand(100000, 999999) . "_" . $files['photo']['name'];
		$permanentLocation = "my_uploads/" . $newFileName;
		
		move_uploaded_file($temporaryLocation, $permanentLocation);
		
		return true;
	}
	else
		return false;
}

if(isset($_POST['my_button']))
{
	if(uploadImage($_FILES) == true)
		echo "Your file is uploaded successfully, now get lost";
	else
		echo "Retry uploading the correct file. Don't sleep";
}

?>



<form action="" method="post" enctype="multipart/form-data">

	<label>Your Name:</label>	
		<input type="text" name="name" />
		
	<label>Upload your File:</label>	
		<input type="file" name="photo" />
		
	<input type="submit" name="my_button" value="Submit">

</form>
