<?php
     $uproduct_id = $_POST['uproduct_id'];
     $uproduct_name= $_POST['uproduct_name'];
     $uproduct_items = $_POST['uproduct_items'];
     $uproduct_number = $_POST['uproduct_number'];
     $uproduct_type = $_POST['uproduct_type'];
     $uproduct_quantity = $_POST['uproduct_quantity'];
     $uproduct_price= $_POST['uproduct_price'];
     $u_date = $_POST['u_date'];
     $uproduct_description = $_POST['uproduct_description'];
     
     



//Database connection

$conn = new mysqli('localhost', 'root','','loginsystem');
if ($conn->connect_error) {
	die('Connection Failed : ' .$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into uproduct_management(uproduct_id, uproduct_name, uproduct_items, uproduct_number, uproduct_type, uproduct_quantity, uproduct_price, u_date, uproduct_description)
		values(?, ?, ?, ?, ?, ?, ?, ?, ?)");

	$stmt->bind_param('issssssss', $uproduct_id,  $uproduct_name, $uproduct_items,  $uproduct_number, $uproduct_type, $uproduct_quantity, $uproduct_price,  $u_date,  $uproduct_description);
	
	$stmt->execute();
	echo "successfully";
	$stmt->close();
	$conn->close();
}

?>