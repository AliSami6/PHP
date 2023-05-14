<html>
<body>

<?php
	echo "<pre>";
	print_r($_FILES);

?>

<form action="" method="post">

	<p>Name: <input type="text" name="name" /> </p>
	
	<p>Email: <input type="email" name="email" /> </p>
	
	<p> <button type="submit" name="save" value="something">Enter</button> </p>

</form>


</body>
</html>