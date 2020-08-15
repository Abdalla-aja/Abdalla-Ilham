<?php
    include("connection.php");
    $sql="DELETE FROM donor WHERE D_Id=:id";
$stmt=$conn->prepare($sql);
$stmt->execute(array(':id'=>$_GET['id']));
header("Location:admindon.php");

?>

