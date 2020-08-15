<?php
    include("connection.php");
    $sql="DELETE FROM users WHERE User_Id=:id";
$stmt=$conn->prepare($sql);
$stmt->execute(array(':id'=>$_GET['id']));
header("Location:admuser.php");

?>

