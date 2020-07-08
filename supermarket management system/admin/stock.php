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
         <h2>Stock Details</h2>
         <form action="cstock.php" method="post">
        
        <div class="form-group">
           <label for="id" >Store Id</label>
         <input type="number" class="form-control" required="required" id="id" placeholder="Store Id" name="store_id">
        </div>
        <div class="form-group">
         <label for="stockuid" >Stock User Id:</label>
        <input type="number" class="form-control" required="required" id="stockuid" placeholder="Enter user id" name="stock_user_id">
        </div>
     <div class="form-group">
      <label for="storename" >Store Name:</label>
      <input type="text" class="form-control" required="required" id="storename" placeholder="Store name" name="store_name">
    </div>
    <div class="form-group">
      <label for="storetype" >Storetype:</label>
      <input type="text" class="form-control" required="required" id="storetype" placeholder="Store Type" name="store_type">
    </div>
  <div class="form-group">
      <label for="description" >Store Description:</label>
      <input type="text" class="form-control" required="required" id="description" placeholder="Description" name="store_description">
    </div>
    <div class="form-group">
      <label for="location" >Stock Location:</label>
      <input type="Text" class="form-control" required="required" id="location" placeholder="Enter Location" name="stock_location">
    </div>

    <div class="form-group">
      <label for="size" >Stock Size:</label>
      <input type="Text" class="form-control" required="required" id="size" placeholder="Enter Stock Size" name="stock_size">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>


 
      
  </section>
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