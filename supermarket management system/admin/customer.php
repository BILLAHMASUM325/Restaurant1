<?php
session_start();
include'dbconnection.php';
// checking session is valid for not 
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{

// for deleting user
if(isset($_GET['id']))
{
$adminid=$_GET['id'];
$msg=mysqli_query($con,"delete from users where id='$adminid'");
if($msg)
{
echo "<script>alert('Data deleted');</script>";
}
}
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin | Manage Users</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>

  <section id="container" >
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <a href="#" class="logo"><b>Admin Dashboard</b></a>
            <div class="nav notify-row" id="top_menu">
               
                         
                   
                </ul>
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="#"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php echo $_SESSION['login'];?></h5>
              	  
                  <li class="sub-menu">
                      <a href="manage-users.php" >
                          <i class="fa fa-users"></i>
                          <span>User Management</span>
                      </a>
                    
                     <li>
                     	<a href="stock.php">
                     		<span> Stock Management</span>
                     	</a>
                     </li>
                     <li>
                     	<a href="sales.php">
                     		<span> Sales Management</span>
                     	</a>
                     </li>
                     <li>
                     	<a href="products.php">
                     		<span> Product Management</span>
                     	</a>
                     </li>
                     <li>
                      <a href="customer.php">
                        <span> Customer Management</span>
                      </a>
                     </li> 

                     <li>
                      <a href="membership.php">
                        <span> Membership Management</span>
                      </a>
                     </li>
                     
                  </li>

                  <li class="mt">
                      <a href="change-password.php">
                          <i class="fa fa-file"></i>
                          <span>Change Password</span>
                      </a>
                  </li>
                     

                  
              
                 
              </ul>
          </div>
      </aside>
      <section id="main-content">
         
<br>
<br>
<br>
       <div class="container" >
         <h2>Customer Management</h2>
    <form action="cconfig.php" method="post">
           <div class="form-group">
           <label for="id" >Customer Id:</label>
           <input type="number" class="form-control" required="required" id="id" placeholder="Enter customer id" name="customer_id">
          </div>

          <div class="form-group">
         <label for="cname" > Cutomer Name:</label>
          <input type="text" class="form-control" required="required" id="cname" placeholder="Enter customer name" name="customer_name">
          </div>

           <div class="form-group">
         <label for="gender" > Gender:</label>
          <input type="gender" class="form-control" required="required" id="cgender" placeholder="Gender" name="customer_gender">
          </div>

          <div class="form-group">
          <label for="cusername" >Customer Username:</label>
         <input type="text" class="form-control" required="required" id="cusername" placeholder="Enter customer username"name="customer_username">
        </div>

        

        <div class="form-group">
        <label for="caddress" >Customer Address:</label>
        <input type="text" class="form-control" required="required" id="caddress" placeholder="Enter customer address" name="customer_address">
        </div>

         <div class="form-group">
         <label for="cphone" >Customer Phone Number:</label>
        <input type="number" class="form-control" required="required" id="cpassword" placeholder="Enter the phone number" name="customer_phone">
        </div>

        <div class="form-group">
         <label for="email" > Email:</label>
          <input type="email" class="form-control" required="required" id="email" placeholder="Enter email" name="customer_email">
          </div>

          <div class="form-group">
         <label for="date" >Date:</label>
          <input type="date" class="form-control" required="required" id="date" placeholder="Enter date" name="customer_reg_date">
          </div>

       <button type="submit" class="btn btn-default">New</button>
    <button type="submit" class="btn btn-default">Save</button>
     <button type="submit" class="btn btn-default">Update</button>
    <button type="submit" class="btn btn-default">Delete</button>
    <button type="submit" class="btn btn-default">Search</button>
  </form>
</div>



      </section
  ></section>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/common-scripts.js"></script>
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
<?php } ?>