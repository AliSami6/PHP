<?php 

include ("1_db_connect.php");

$query = $conn1->prepare("
	SELECT * FROM `users` WHERE `email_id`=:EMID AND `password`=:PWD
");

$valToBind = array(
	':PWD' => 'MMK@786',
	':EMID' => 'anjum@nirjhor.net'
);

$query->execute($valToBind);

$usersList = $query->fetchAll(PDO::FETCH_ASSOC);

$totalRows = $query->rowCount();

echo "<br /><br />Total Selected Row is: " . $totalRows . "<br /><br />";

foreach($usersList AS $eachRow)
{
	echo $eachRow['full_name'] . " | " . $eachRow['phone_no'] . "<br />";
}

?>