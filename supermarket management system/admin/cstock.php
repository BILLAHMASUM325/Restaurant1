<?php
     $store_id = $_POST['store_id'];
     $stock_user_id = $_POST['stock_user_id'];
     $store_name = $_POST['store_name'];
     $store_type = $_POST['store_type'];
     $store_description = $_POST['store_description'];
     $stock_location = $_POST['stock_location'];
     $stock_size = $_POST['stock_size'];



//Database connection

$conn = new mysqli('localhost', 'root','','loginsystem');
if ($conn->connect_error) {
	die('Connection Failed : ' .$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into stock(store_id, stock_user_id, store_name, store_type, store_description, stock_location, stock_size)
		values(?, ?, ?, ?, ?, ?, ?)");

	$stmt->bind_param('issssss', $store_id, $stock_user_id, $store_name, $store_type, $store_description, $stock_location, $stock_size);
	
	$stmt->execute();
	echo "successfully";
	$stmt->close();
	$conn->close();
}

?>