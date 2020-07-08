<?php
     $ucustomer_id = $_POST['ucustomer_id'];
     $ucustomer_name = $_POST['ucustomer_name'];
     $ucustomer_gender = $_POST['ucustomer_gender'];
     $ucustomer_username = $_POST['ucustomer_username'];
     $ucustomer_address = $_POST['ucustomer_address'];
     $ucustomer_phone = $_POST['ucustomer_phone'];
     $ucustomer_email = $_POST['ucustomer_email'];
     $ucustomer_date = $_POST['ucustomer_date'];
     $ucustomer_description = $_POST['ucustomer_description'];
     
     



//Database connection

$conn = new mysqli('localhost', 'root','','loginsystem');
if ($conn->connect_error) {
	die('Connection Failed : ' .$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into ucustomer_management(ucustomer_id, ucustomer_name, ucustomer_gender, ucustomer_username, ucustomer_address, ucustomer_phone, ucustomer_email, ucustomer_date, ucustomer_description)
		values(?, ?, ?, ?, ?, ?, ?, ?, ?)");

	$stmt->bind_param('issssisss', $ucustomer_id, $ucustomer_name, $ucustomer_gender, $ucustomer_username,  $ucustomer_address, $ucustomer_phone,  $ucustomer_email, $ucustomer_date, $ucustomer_description);
	
	$stmt->execute();
	echo "successfully";
	$stmt->close();
	$conn->close();
}

?>