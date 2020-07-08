<?php
     $ustore_id = $_POST['ustore_id'];
     $ustore_user_name = $_POST['ustore_user_name'];
     $ustore_name = $_POST['ustore_name'];
     $ustore_type = $_POST['ustore_type'];
     $ustore_location = $_POST['ustore_location'];
     $ustore_size = $_POST['ustore_size'];
     $ustore_quantity = $_POST['ustore_quantity'];
     $ustore_description = $_POST['ustore_description'];
     
     



//Database connection

$conn = new mysqli('localhost', 'root','','loginsystem');
if ($conn->connect_error) {
	die('Connection Failed : ' .$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into ustock_management(ustore_id, ustore_user_name, ustore_name, ustore_type, 
	ustore_location, ustore_size, ustore_quantity, ustore_description)
		values(?, ?, ?, ?, ?, ?, ?, ?)");

	$stmt->bind_param('isssssss', $ustore_id, $ustore_user_name, $ustore_name, $ustore_type, $ustore_location, $ustore_size, $ustore_quantity, $ustore_description);
	
	$stmt->execute();
	echo "successfully";
	$stmt->close();
	$conn->close();
}

?>