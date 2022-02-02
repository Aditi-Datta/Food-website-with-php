<?php
    include 'config.php';
    
    $review = $_POST['review'];
    $rate = $_POST['rate'];
   
    
    $insertQuery = "INSERT INTO `customers-review`(`review`, `rate`) VALUES ('$review','$rate')";
    if(mysqli_query($conn,$insertQuery)){
        // echo "<script>alert('Inserted!!!')</script>";
        echo"<script>location.href='home.php'</script>";
    }