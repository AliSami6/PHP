<?php
# We have created cookie variable using setcookie() function
setcookie("user", "Nirjhor Anjum", time() + 172800, "/"); 

?>
<html>
<body>

<?php
# We are check whether the cookie variable is available or not
if( !isset( $_COOKIE["user"] ) ) 
{
    echo "The Cookie is not Set!";
} 
else 
{
	# if the cookie is available
    echo "Cookie Value is: " . @$_COOKIE["user"];
}
?>

</body>
</html>