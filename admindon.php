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
      <li><a href="admuser.php">Edit Users</a>
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
<table class="table table-hover" stayle="margin-top:20px">
            <tr>
            <th>
            <h1>USERS</h1>
            </th>
            </tr>
                      <table class="table table-hover" stayle="margin-top:20px">
            <tr class="text-success">
                <th>D_id</th>
                <th>D_Name</th>
                <th>D_Phone</th>
                <th>D_Email</th>
                <th>D_Location</th>
                <th>Edit</th>
                <th>Delete</th>
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
          

            <td><a href="Editdonor.php">Edit</a></td>
            <td><a href="Deletedonor.php?id=<?php echo $row['D_Id'] ?>">Delete</a></td>
            </tr>

          <?php 
          
            }
          ?>

        </table><br>

</body>
</html>