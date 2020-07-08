<?php
     $usales_id = $_POST['usales_id'];
     $uproduct_id = $_POST['uproduct_id'];
     $uproduct_type = $_POST['uproduct_type'];
     $usales_quantity = $_POST['usales_quantity'];
     $usales_customer_id = $_POST['usales_customer_id'];
     $usales_price = $_POST['usales_price'];
     $usales_discount= $_POST['usales_discount'];
     $usales_type = $_POST['usales_type'];
     $uamount_paid = $_POST['uamount_paid'];
     $usales_description = $_POST['usales_description'];
     
     



//Database connection

$conn = new mysqli('localhost', 'root','','loginsystem');
if ($conn->connect_error) {
	die('Connection Failed : ' .$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into usales_management(usales_id, uproduct_id, uproduct_type, usales_quantity, usales_customer_id, usales_price, usales_discount, usales_type, uamount_paid, usales_description)
		values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

	$stmt->bind_param('iississsss', $usales_id, $uproduct_id, $uproduct_type, $usales_quantity, $usales_customer_id, $usales_price, $usales_discount, $usales_type, $uamount_paid, $usales_description);
	
	$stmt->execute();
	echo "successfully";
	$stmt->close();
	$conn->close();
}

?>