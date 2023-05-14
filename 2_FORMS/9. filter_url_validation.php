<?php

if(isset($_POST['url']))
{
	if(filter_var($_POST['url'], FILTER_VALIDATE_URL) == true)
		echo "URL is Valid";
	else 
		echo "URL is Invalid";
}


?>

<form method="post" action="">
	<input type="text" name="url" />
	<input type="submit" value="Click Here" />
</form>