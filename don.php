<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Don</title>

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
              <li> <a href="reg.php">Registration</a>
                <ul>
                  <li><a href="reg.php">Click here for Registration Page</a></li>
                </ul>
              </li>
              <li> <a class="active"  href="don.php">Donation</a>
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
<div class="container">
  <h2>DONATION ONLINE SYSTEM</h2>
  
<!-- end header -->
<!-- inner page banner -->
<!-- section -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="full">
        <div class="main_heading text_align_center">
          <h2>DONATION PAGE</h2>
          <p class="large">For new users please Click "<a href="reg.php">Registration</a>"</p>
        </div>
      </div>
    </div>
  </div>

      <a class="btn btn-primary" href="reg.php" role="button"> Register New Doner</a>
  
    
                      <table class="table table-hover" stayle="margin-top:20px">
            <tr class="text-success">
                <th>D_id</th>
                <th>D_Name</th>
                <th>D_Phone</th>
                <th>D_Email</th>
                <th>D_Location</th>
            </tr>
        <?php 
        
            $sql="select * from donor";
            $stmt=$conn->query($sql);

            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                $D_id=$row['D_Id'];
                $D_Name=$row['D_Name'];
                $D_Phone=$row['D_Phone']; 
                $D_Email=$row['D_Email'];
                $D_Location=$row['D_Location'];
            
        
        ?>
            <tr>
            <td> <?php echo $row['D_Id'];?> </td>
            <td> <?php echo $row['D_Name'];?></td>
            <td> <?php echo $row['D_Phone'];?></td>
            <td> <?php echo $row['D_Email'];?></td>
            <td> <?php echo $row['D_Location'];?></td>
          

            </tr>

          <?php 
          
            }
          ?>

        </table><br>

</body>
</html>