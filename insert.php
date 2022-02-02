<?php
    include 'config.php';
    
    $name = $_POST['name'];
    $price = $_POST['price'];
   



    $insertQuery = " INSERT INTO `crud`( `name` , `price`) VALUES ('$name','$price')";
    if(mysqli_query($conn,$insertQuery)){
        // echo "<script>alert('Inserted!!!')</script>";
        echo"<script>location.href='index.php'</script>";
    }