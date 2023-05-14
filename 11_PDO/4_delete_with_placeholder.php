<?php 

include ("1_db_connect.php");


$delQuery = $conn1->prepare("DELETE FROM users WHERE id=:DELETE_ID");

$delQuery->bindValue(':DELETE_ID', 6, PDO::PARAM_INT);

$delQuery->execute(); 

$deletedRow = $delQuery->rowCount();

echo "Deleted Number of Row: " . $deletedRow;

if($deletedRow > 0)
	echo "<br /><br />Successfully Deleted";
else
	echo "<br /><br />Nothing is Deleted";

?>