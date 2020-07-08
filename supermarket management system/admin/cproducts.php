<?php
     $product_id = $_POST['product_id'];
     $product_customer_id = $_POST['product_customer_id'];
     $product_items = $_POST['product_items'];
     $product_number = $_POST['product_number'];
     $product_type = $_POST['product_type'];
     $product_description = $_POST['product_description'];

     





//Database connection

$conn = new mysqli('localhost', 'root','','loginsystem');
if ($conn->connect_error) {
	die('Connection Failed : ' .$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into products_management(product_id, product_customer_id, product_items, product_number, product_type, product_description)
		values(?, ?, ?, ?, ?, ?)");

	$stmt->bind_param('iisiss',$product_id, $product_customer_id, $product_items, $product_number, $product_type,
	 $product_description);
	
	$stmt->execute();
	echo "successfully";
	$stmt->close();
	$conn->close();
}

?>