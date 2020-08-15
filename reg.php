   <?php
include("connection.php");

if(isset($_POST['send'])
&& isset($_POST['DName'])
&& isset($_POST['Number'])
&& isset($_POST['Email'])
&& isset($_POST['locate'])){

    $sql="INSERT INTO donor(D_Name,D_Phone,D_Email,D_Location) VALUES (:DName,:Number,:Email,:locate)";
    $stmt=$conn->prepare($sql);
    $stmt->execute(array(
    ':DName'=>$_POST['DName'],
    ':Number'=>$_POST['Number'],
	':Email'=>$_POST['Email'],
	':locate'=>$_POST['locate']));
	header("location:don.php");
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
          <div class="logo"> <a href="index.php"><img src="images/s4.png" alt="logo" /></a> </div>
          <!-- logo end -->
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
          <!-- menu start -->
          <div class="menu_side">
            <div id="navbar_menu">
              <ul class="first-ul">
                <li> <a href="index.php">Home</a>
                  <ul>
                    <li><a href="index.php">Return to Home Page</a></li>
                  </ul>
                </li>
				<li><a href="abt.php">About Us</a>
					<ul>
                    <li><a href="abt.php">Click here for About Us Page</a></li>
                  	</ul>
                <li> <a class="active" href="reg.php">Registration</a>
                  <ul>
                    <li><a href="reg.php">Click here for Registration Page</a></li>
                  </ul>
                </li>
                <li> <a href="don.php">Donation</a>
                  <ul>
                    <li><a href="don.php"> Click here for Donation page</a></li>
                  </ul>
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

<div class="row">
  <div class="col-md-12">
    <div class="full">
      <div class="main_heading text_align_center">
        <h1>REGISTRATION FORM FOR DONERS</h1>
        <p class="large">Donate for saving the life of millions people!</p>
      </div>
    </div>
  </div>
</div>

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
		                                  <label for="fname" class="mb-2 mr-sm-2">D_Name:</label>
	                                    <input type="text" class="form-control mb-2 mr-sm-2" name="DName" placeholder="Enter your Name" required>
		                                </div>
	                                </div>
	                                <div class="col-lg-12">
	                                  <div class="form-group">
	                                    <label for="addess" class="mb-2 mr-sm-2">D_Location:</label>
                                      <input type="text" class="form-control mb-2 mr-sm-2" name="locate" placeholder="Enter Location" required>
	                                  </div>
	                                </div>
	                                <div class="col-lg-12">
	                                  <div class="form-group">
	                                    <label for="phone" class="mb-2 mr-sm-2">D_Phone:</label>
                                      <input type="text" class="form-control mb-2 mr-sm-2" name= "Number" placeholder="Enter Phone Number" required>
	                                  </div>
	                                </div>
	                                <div class="col-lg-12">
	                                  <div class="form-group">
	                                    <label for="email" class="mb-2 mr-sm-2">D_Email:</label>
<input type="text" >
	                                  </div>
	                                </div>
	                                <div>
	                                  <div class="col-lg-12">
                                      <button name="send" class="btn btn-success mb-2">REGISTER</button>
                                      <a class="btn btn-info" href="don.php" role="button"> Cancel</a>
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