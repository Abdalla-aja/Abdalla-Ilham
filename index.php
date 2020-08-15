<?php
  session_start();
  if (isset ($_SESSION["Role"])){
   
  }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>


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

        
        <div class="logo"> <a href="index.php"><img src="images/s4.png" alt="logo" /></a> </div>

         
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
      
          <div class="menu_side">
            <div id="navbar_menu">
              <ul class="first-ul">
                <li> <a class="active" href="index.php">Home</a>
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


<div class="container">
  <h2>DONATION ONLINE SYSTEM</h2>
  <?php echo $_SESSION['Role']; ?>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="images/s3.png" style="width:50%;">
      </div>

      <div class="item">
        <img src="images/3.jpg"  style="width:50%;">    
      </div>
    
      <div class="item">
        <img src="images/s3.png" style="width:50%;">
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<!-- section -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>For new users please Click "<a href="reg.php">Registration</a>"</h2>
            <p class="large">Donate for saving the life of millions people!</p>
          </div>
        </div>
      </div>
    </div>

    
    <div class="row about_blog">
      <div class="col-lg-6 col-md-6 col-sm-12 about_cont_blog">
        <div class="full text_align_left">
          <h3>What we do</h3>
          <p>This is a personal site that deals with various social issues. The main purpose of our site is to collect various donations from community members who are willing to donate various raw materials such as money, blood, food, medicines, various materials for the benefit of students and various other contributions. You are welcome to visit our website and sign up as a contributing member so we can reach out to those who are eligible. I hope you will appreciate our system and agree with us. Your participation through your donation will enhance your efforts to work. We need to help people and give them help against a number of disasters, such as the sick, the poor, the students, the disabled and the disabled. Please join us. One is strength and separation is weakness. Working together we can help all of them.Donate your fund for saving the life of millions people  various raw materials such as money, blood, food, medicines, various materials for the benefit of students and various other contributions.
          </p>
          <ol>
            <li> # To collect assets to be donated by doners</li>
            <li> # To collect assets to be donated by doners</li>
            <li> # To collect assets to be donated by doners</li>
          </ol>
        </div>
      </div>

      <div class="row" style="margin-top: 35px">
        <div class="col-md-8">
          <div class="full margin_bottom_30">
            <div class="accordion border_circle">
              <div class="bs-example">
                <div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><i class="fa fa-bar-chart" aria-hidden="true"></i> Registration Details<i class="fa fa-angle-down"></i></a> </p>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                      <div class="panel-body">
                        <p>For new users please Click "<a href="reg.php">Registration</a>" and and fill the registration form</p>
                      </div>
                    </div>
                  </div>
  
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><i class="fa fa-plane"></i> Login Details<i class="fa fa-angle-down"></i></a> </p>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p> For those who register get details about our donation page.</p>
                      </div>
                    </div>
                  </div>
  
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><i class="fa fa-star"></i> Donation Details<i class="fa fa-angle-down"></i></a> </p>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>For Donation purporse please Click "<a href="don.php">Donation</a>" and follow the instructions.</p>
                      </div>
                    </div>
                  </div>
                </div>
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
<footer>
<div class="cprt">
	<p> © Copyrights 2020 Design by Abdalla&Kidoty from Suza</p>
  </div></footer>
<!-- end footer -->
</body>
</html>