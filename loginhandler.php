<?php
    include("connection.php");
    session_start();

    if(isset($_POST['submit']))
    {
       
         $sql = "SELECT * FROM users WHERE User_Name = :Username AND User_Password = :password";
         $stmt = $conn->prepare($sql);
         $stmt->execute(array(':Username'=>$_POST['Username'],':password'=>$_POST['password']));
         $fetch = $stmt->fetch(PDO::FETCH_ASSOC);
        
         $rowsnum = $stmt->rowCount();
         if($rowsnum > 0){
             $_SESSION["Role"] = $fetch["Role"];
             if($_SESSION["Role"]=="Donor"){
                header("location:index.php");
             }else if($_SESSION["Role"]=="Admin"){
                 header("location:admin.php");
             }
   
            
         }
         else{
            header("location:login.php?User Name or Password Wrong");
       }

    }
     

?>