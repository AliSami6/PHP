<?php 
session_start();

if( isset( $_SESSION["EMAIL_ID"] ) )
{
	echo $_SESSION['EMAIL_ID'];
	
	echo "<br>You are viewing Session Value above there...";
}
else
	header("Location: destroy.php");
?>

<br /><br /><a href="destroy.php">GO TO destroy.php TO DESTROY SESSION</a>
