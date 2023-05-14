<html>

<body>

    <?php

	if (isset($_POST['my_button'])) {
		echo "<pre>";
		print_r($_FILES);

		if (
			($_FILES['photo']['error'] == 0) &&
			($_FILES['photo']['type'] == "image/jpg" ||
				$_FILES['photo']['type'] == "image/jpeg" ||
				$_FILES['photo']['type'] == "image/png" ||
				$_FILES['photo']['type'] == "image/gif") &&
			($_FILES['photo']['size'] < 999999)
		) {
			$temporaryFile = $_FILES['photo']['tmp_name'];
			# C:\xampp\tmp\phpB365.tmp

			$uploadDirectory = "uploads/";

			$newFileName = "IMAGE_" . date("YmdHis") . rand(100000, 999999) . "_" . $_FILES['photo']['name'];
			# IMAGE_46691_20200215142559_nirjhor.jpg

			$finalDestination = $uploadDirectory . $newFileName;
			# uploads/IMAGE_46691_20200215142559_nirjhor.jpg

			move_uploaded_file($temporaryFile, $finalDestination);
			# move_uploaded_file("C:\xampp\tmp\phpB365.tmp", "uploads/IMAGE_46691_20200215142559_nirjhor.jpg")

			echo "You have successfully Uploaded the File";
		} else {
			echo "Sorry! Wrong file. Please try correct File.";
		}
	}
	?>


    <form action="" method="post" enctype="multipart/form-data">

        <label for="file">Upload your File:</label> <input type="file" name="photo" id="file" />
        <br>
        <input type="submit" name="my_button" value="Submit">

    </form>

</body>

</html>