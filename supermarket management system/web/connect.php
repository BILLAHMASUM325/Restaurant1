<?php
     $firstName = $_POST['firstName'];
	 $lastName = $_POST['lastName'];
	 $email = $_POST['email'];
	 $password = $_POST['password'];
	 
	 
	 if(!empty($firstName)|| !empty($lastName ) || !empty($email) || $empty(password)) {
		 
		 $host ="localhost";
		 $dbUsername="root";
		 $dbPassword="";
		 $dbname="test";
		 
		 $conn = new mysqli($host, $dbUsername, $dbPassword, $dbPassword);
		 
	 if(mysqli_connect_error()){
		 die('Connect Error('.mysqli_connect().')'.mysqli_connect_error());
	 }else{
		 $SELECT = "SELECT email From register Where email = ? Limit 1";
		 $INSERT = "INSERT Into register(firstName, lastName, email, password) values(?, ?, ?, ?)";
		 
		 $stmt = $conn->prepare($SELECT);
		 $stmt->bind_param("s",$email);
		 $stmt->execute();
		 $stmt->bind_result($email);
		 $stmt->store_result();
		 $rnum = $stmt->num_rows;
		 
		 if($rnum==0){
			 $start->close();
			 
			 $stmt = $conn->prepare($INSERT);
			 $stmt->bind_param("ssss",$firstName,$ $lastName, $email, $password);
			 $stmt->execute();
			 echo"New record inserted succesfully";
		 }else{
			 echo"someone already register using this email";
		 }
		 $stmt->close();
		 $conn->close();
	 }
		 
	 }else{
		 echo"all filed are required";
		 die();
	 }
	 
	 
	 
?>