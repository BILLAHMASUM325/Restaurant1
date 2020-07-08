<?php
session_start();
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
	
?><!DOCTYPE html>
<html lang="en">

<head>
      <title>Billah Supermarket</title>
   <!-- for-mobile-apps -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
   Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>


<!-- //for-mobile-apps -->
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
 <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>





    <title>Welcome to Billah Supermarket </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                echo "<a class="navbar-brand" href="web/index.html">Welcome !</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#"><?php echo $_SESSION['name'];?></a>
                    </li>
                       <li>
                        <a href="welcome.php">Home</a>
                    </li>
                     <li>
                        <a href="stocku.php">Stock Management</a>
                    </li>
                     <li>
                        <a href="salesu.php">Sales Management</a>
                    </li>
                    <li>
                        <a href="productu.php">Product Management</a>
                    </li>
                     <li>
                        <a href="customeru.php">Customer Management</a>
                    </li>

                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                  
                </ul>
            </div>
        </div>
    </nav>
    
      <section id="main-content">
          <div class="container" >
         <h2>Customer Management</h2>
    <form action="uccustomer.php" method="post">
           <div class="form-group">
           <label for="id" >Customer Id:</label>
           <input type="number" class="form-control" required="required" id="id" placeholder="customer id" name="ucustomer_id">
          </div>

          <div class="form-group">
         <label for="cname" > Cutomer Name:</label>
          <input type="text" class="form-control" required="required" id="cname" placeholder="customer name" name="ucustomer_name">
          </div>

           <div class="form-group">
         <label for="gender" > Gender:</label>
          <input type="text" class="form-control" required="required" id="gender" placeholder="Gender" name="ucustomer_gender">
          </div>

          <div class="form-group">
          <label for="cusername" >Customer Username:</label>
         <input type="text" class="form-control" required="required" id="cusername" placeholder="Enter customer username"name="ucustomer_username">
        </div>

        

        <div class="form-group">
        <label for="caddress" >Customer Address:</label>
        <input type="text" class="form-control" required="required" id="caddress" placeholder="Enter customer address" name="ucustomer_address">
        </div>

         <div class="form-group">
         <label for="cphone" >Customer Phone Number:</label>
        <input type="number" class="form-control" required="required" id="cpassword" placeholder="Enter the phone number" name="ucustomer_phone">
        </div>

        <div class="form-group">
         <label for="email" > Email:</label>
          <input type="email" class="form-control" required="required" id="email" placeholder="Enter email" name="ucustomer_email">
          </div>

          <div class="form-group">
         <label for="date" >Date:</label>
          <input type="date" class="form-control" required="required" id="date" placeholder="Enter date" name="ucustomer_date">
          </div>

           <div class="form-group">
         <label for="description" >Date:</label>
          <input type="text" class="form-control" required="required" id="description" placeholder="description" name="ucustomer_description">
          </div>

       <button type="submit" class="btn btn-default">New</button>
    <button type="submit" class="btn btn-default">Save</button>
     <button type="submit" class="btn btn-default">Update</button>
    <button type="submit" class="btn btn-default">Delete</button>
    <button type="submit" class="btn btn-default">Search</button>
  </form>
</div>
      </section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    
</body>

</html>
<?php } ?>