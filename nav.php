
	<?php
	if($_SESSION["Status"]=="Inspector"){
	?>
<div class="container col-lg-12" style="margin-top:-30px";>
  <div class="topnav" id="myTopnav">
  <a href="#home" class="active">HOME</a>
  <a href="#news">NEWS</a>
  <a href="#contact">CONTACT</a>
  <a href="#about">Sign out</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>


<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</div>
	<?php 
	}else if($_SESSION["Status"]=="head"){
	?>
	<div class="container col-lg-12" style="margin-top:-30px";>
  <div class="topnav" id="myTopnav">
  <a href="homeHead.php">Home</a>
  <a href="viewprofile.php">Profile</a>
  <a href="viewStaff.php">View staff</a>
 
  <a href="#news">Supply Product</a>
  
  <a href="#news">review result</a>
  <a href="#contact">Contact</a>
  <a href="#about">sign out</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>



<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</div>
	<?php 
	}else if($_SESSION["Status"]=="superVisor"){
	?>
	
	<div class="container col-lg-12" style="margin-top:-30px";>
  <div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="viewprofile">Profile</a>
  <a href="#contact">Contact</a>
  <a href="#about">Sign out</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>



<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</div>
	<?php 
	}else if($_SESSION["Status"]=="sampleReceiver"){
	?>
	
	<div class="container col-lg-12" style="margin-top:-30px";>
  <div class="topnav" id="myTopnav">
  <a href="homesampleReceiver.php">Home</a>
  <a href="viewprofile.php">Profile</a>
  <a href="insertSample.php">Register Product</a>
  <a href="viewSample.php">Review result</a>
  
 
  <a href="galary.php">Galary</a>
  <a href="#contact"></a>
   
  <a href="#about">sign out</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>



<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</div>
	<?php 
	}else if($_SESSION["Status"]=="analyst"){
	?>
<div class="container col-lg-12" style="margin-top:-30px";>
  <div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#contact">Review result</a>
  <a href="#contact">send Result</a>
  
  <a href="galary.php">Galary</a>
  <a href="#contact">Contact</a>
  
  
    
  <a href="#about">Sign out</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>



<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</div>
	<?php 
	}
	?>