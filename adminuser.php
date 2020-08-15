<?php
include("connection.php");

if(isset($_POST['send'])){

    $sql="INSERT INTO donor(User_Name,User_Password,Role) VALUES (:UName,:pass,:role)";
    $stmt=$conn->prepare($sql);
    $stmt->execute(array(
    ':UName'=>$_POST['UName'],
    ':pass'=>$_POST['pass'],
	':role'=>$_POST['role']));
	header("location:adminuser.php");
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="bootstrap-4.5.0-dist/css/bootstrap.min.css">
    <link rel="staylesheet" href="fontawesome-free-5.13.1-web/css/all.min.css">
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" href="bootstrap-4.5.0-dist/css/bootstrap.min.css">
</head>
<body>
    

<div class="header_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
          <!-- logo start -->
          <div class="logo"> <a href="admin.php"><img src="images/s4.png" alt="logo" /></a> </div>
          <!-- logo end -->
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
            <!-- menu start -->
        <div class="menu_side">
          <div id="navbar_menu">
            <ul class="first-ul">
              <li> <a href="admin.php">Home Admin</a>
              </li>
      <li><a href="admuser.php">Edit Users</a><li>
              <li> <a href="adminuser.php">Register New user</a>
              </li>
              <li> <a class="active"  href="admindon.php">Edit Donor</a>
              
              </li>
          </div>
        </div>
        <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
  <!-- header bottom end -->
</header>

<!-- end header -->

<div class="container">
    <div class="row about_blog">
      

      <div class="row" style="margin-top: 35px">
        <div class="col-md-8">
          <div class="full margin_bottom_30">
            <div class="accordion border_circle">
              <div class="bs-example">
                     <form action="#" method="POST">
	                              <div class="row" style="margin-bottom:100px;">
	                                <div class="col-lg-12">
		                                <div class="form-group">
		                                  <label for="fname" class="mb-2 mr-sm-2">User_Name:</label>
	                                    <input type="text" class="form-control mb-2 mr-sm-2" name="UName" placeholder="Enter User_Name" required>
		                                </div>
	                                </div>
	                                <div class="col-lg-12">
	                                  <div class="form-group">
	                                    <label for="pass" class="mb-2 mr-sm-2">User_Password:</label>
                                      <input type="text" class="form-control mb-2 mr-sm-2" name="pass" placeholder="Enter User_Password" required>
	                                  </div>
	                                </div>
                                  <div class="col-lg-12">
	                                  <div class="form-group">
	                                    <label for="role" class="mb-2 mr-sm-2">Role:</label>
                                      <select name="role" id="">
                                      <option class="form-control mb-2 mr-sm-2" value="role">Select Role</option>
                                      <option class="form-control mb-2 mr-sm-2" value="Admin">Admin</option>
                                      <option class="form-control mb-2 mr-sm-2" value="Donor">Donor</option>
                                      </select>
	                                  </div>
	                                </div>
	                                <div>
	                                  <div class="col-lg-12">
                                      <button name="send" class="btn btn-success mb-2">REGISTER</button>
                                      <a class="btn btn-info" href="admin.php" role="button"> Cancel</a>
                                    </div>
                                  </div> 
                                </div>
                              </form>                     
            
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- menu js -->
<!-- footer -->

<!-- end footer -->
</body>
</html>