<?php
	include '1_db_connect.php';
?>

<?php

$query = $conn1->prepare("
	INSERT INTO `users` (`full_name`, `age`, `phone_no`, `full_address`, `job`, `salary`, `email_id`, `password`) 
	VALUES (:FL_NM, :AG, :PHN_NO, :FL_ADRS, :JB, :SLRY, :EML_ID, :PWD);
");

$valToBind = array(
						':FL_NM' => 'Nirjhor Anjum', 
						':AG' => '18', 
						':PHN_NO' => '8801613211000',
						':FL_ADRS' => '93 B Eskaton Road, Dhaka, Bangladesh.', 
						':JB' => 'Engineer', 
						':SLRY' => '140000', 
						':EML_ID' => 'nirjhor.anjum@gmail.com',
						':PWD' => 'MMK@786'
					);

$query->execute($valToBind);

# rowCount() Function returns the total number of Row inserted through the Query
$rowNumber = $query->rowCount();

# lastInsertId() Function returns ID of the last inserted Row
$lastInsertId = $conn1->lastInsertId();

echo "Last Insert ID: " . $lastInsertId . "<br /><br />";
echo "Total Row Inserted: " . $rowNumber;

if($rowNumber > 0)
	echo "<br /><br />Successfully Saved";

?>