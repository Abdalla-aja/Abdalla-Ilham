<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
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
    
	<div class="jumbotron text-center">
	 
	  <div class="icon"><img src="images/images.png" alt="icon" /> </div>
 		<h1> Login</h1>
	</div>

	<div class="container col-lg-12">
	  <div class="row">
		<div class="col-lg-12"  >
		<div class="table-responsive">
	   <div  style="width:600px; margin:auto;border:1px solid; height:250;border-radius:25px;padding:25px;">
	   
		<form action="loginhandler.php" method="POST">
	  <div class="row">
		  <div class="col-12">
		  		<div class="form-group " >
					<label for="uname">Username:</label>
					<input type="text"  name="Username"class="form-control" id="uname">
	  			</div>
		  </div>
	  </div>
	   <div class="form-group">
		<label for="pwd">Password:</label>
		<input type="password" name="password" class="form-control" id="pwd">
	  </div>
	  <div class="form-group">
	  <input class="btn btn-primary" type="submit" name="submit">  
	  </div>
	</form>
	</div>
	</div>
		</div>
	</div>
	</div>
	<div class="section copyrights" style="background-color: #515151;position: fixed;bottom: 0px;width: 100%;margin: 0px;height:100;">
		   <div class="col-lg-12">
					<div style="color:black; font-size: 25px;margin-right: 200px;">
						<p class=" font-weight-bold text-center "style="font-size:30px; ">Copyright &copy; aja</p>
		</div>
	</div>
			</div>
				
			
</body>
</html>