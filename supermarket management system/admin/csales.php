<?php
     $sales_id = $_POST['sales_id'];
     $sales_product_id = $_POST['sales_product_id'];
     $sales_customer_id = $_POST['sales_customer_id'];
     $sales_amount = $_POST['sales_amount'];
     $sales_type = $_POST['sales_type'];
     $sales_description = $_POST['sales_description'];
     $sales_product_quantity = $_POST['sales_product_quantity'];
     $sales_product_price = $_POST['sales_product_price'];
     $sales_discount = $_POST['sales_discount'];
     $pay_type = $_POST['pay_type'];
     $amount_paid = $_POST['amount_paid'];
     $sales_date = $_POST['sales_date'];



//Database connection

$conn = new mysqli('localhost', 'root','','loginsystem');
if ($conn->connect_error) {
	die('Connection Failed : ' .$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into sales_management (sales_id, sales_product_id, sales_customer_id, sales_amount, sales_type, sales_description, sales_product_quantity, sales_product_price, sales_discount, pay_type, amount_paid, sales_date)
		values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

	$stmt->bind_param('iiisssssssss', $sales_id, $sales_product_id, $sales_customer_id, $sales_amount, $sales_type, $sales_description, $sales_product_quantity, $sales_product_price, $sales_discount, $pay_type, $amount_paid, $sales_date);
	
	$stmt->execute();
	echo "successfully";
	$stmt->close();
	$conn->close();
}

?>