<?php
    $conn = new PDO("mysql:host=localhost;port=3306;dbname=donation",'root','');
    $conn->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    if (isset($conn)){
        echo"";
    }else{
        echo"fail";
    }
?>