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
         <h2>Products Management</h2>
  <form action="cproducts.php" method="post">

           <div class="form-group">
            <label for="id" >Product Id:</label>
            <input type="number" class="form-control" required="required" id="id" placeholder="Enter product id" name="product_id">
           </div>

          

          <div class="form-group">
            <label for="id" >Product Cutomer Id:</label>
            <input type="number" class="form-control" required="required" id="id" placeholder="Enter product customer id" name="product_customer_id">
          </div>

           <div class="form-group">
             <label for="item" >Product Items:</label>
             <input type="text" class="form-control" required="required" id="items" placeholder="Enter product items"name="product_items">
           </div>

           <div class="form-group">
            <label for="productnum" >Product Number:</label>
            <input type="number" class="form-control" required="required" id="productnum" placeholder="Enter product number " name="product_number">
           </div>

           <div class="form-group">
              <label for="producttype" >Product Type:</label>
              <input type="text" class="form-control" required="required" id="producttype" placeholder="Enter product type" name="product_type">
          </div>

         

          

        <div class="form-group">
          <label for="pdiscription" >Product Description:</label>
          <input type="text" class="form-control" required="required" id="pdiscription" placeholder="Enter product discription" name="product_description">
      </div>

    <button type="submit" class="#">New</button>
    <button type="submit" class="btn btn-default">Save</button>
     <button type="submit" class="#">Update</button>
    <button type="submit" class="#">Delete</button>
    <button type="submit" class="#">Search</button>
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