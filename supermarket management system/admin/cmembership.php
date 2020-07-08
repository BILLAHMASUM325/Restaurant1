<?php
     $member_id = $_POST['member_id'];
     $member_name = $_POST['member_name'];
     $member_password = $_POST['member_password'];
     $member_email = $_POST['member_email'];
     $member_phone = $_POST['member_phone'];
     $member_address= $_POST['member_address'];



//Database connection

$conn = new mysqli('localhost', 'root','','loginsystem');
if ($conn->connect_error) {
	die('Connection Failed : ' .$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into membership_management(member_id, member_name, member_password, member_email, member_phone, member_address)
		values(?, ?, ?, ?, ?, ?)");

	$stmt->bind_param('isssis',$member_id, $member_name, $member_password, $member_email, $member_phone, $member_address);
	
	$stmt->execute();
	echo "successfully";
	$stmt->close();
	$conn->close();
}

?>