<?php 
include ("1_db_connect.php");

$query = $conn1->prepare("
	UPDATE `users` SET `full_name`='Bill Gates Anjum' WHERE `id` = :ID
");

$valToBind = array(
		':ID' => 5
);

$query->execute($valToBind);

$rowNumber = $query->rowCount();

echo "Total Number of Updated Rows are: " . $rowNumber;

?>