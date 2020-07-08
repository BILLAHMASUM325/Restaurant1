<?php
     $customer_id = $_POST['customer_id'];
     $customer_name = $_POST['customer_name'];
     $customer_username = $_POST['customer_username'];
     $customer_address = $_POST['customer_address'];
     $customer_phone = $_POST['customer_phone'];
     $customer_gender = $_POST['customer_gender'];
     $customer_email = $_POST['customer_email'];
     $customer_reg_date = $_POST['customer_reg_date'];



//Database connection

$conn = new mysqli('localhost', 'root','','loginsystem');
if ($conn->connect_error) {
	die('Connection Failed : ' .$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into customer_management(customer_id,customer_name, customer_username, customer_address, customer_phone, customer_gender, customer_email, customer_reg_date)
		values(?, ?, ?, ?, ?, ?, ?, ?)");

	$stmt->bind_param('isssssss',$customer_id, $customer_name, $customer_username, $customer_address, $customer_phone, $customer_gender, $customer_email, $customer_reg_date);
	
	$stmt->execute();
	echo "successfully";
	$stmt->close();
	$conn->close();
}

?>