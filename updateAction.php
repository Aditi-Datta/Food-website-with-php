<?php
    include 'config.php';
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    // $price = $_POST['price'];
    

   

    $updateQuery = "UPDATE `crud` SET `name`='$name' WHERE id='$id'";
    // $updateQuery = "UPDATE `crud` SET `name`='$name',`price`='$price' WHERE id='$id'";
    if(mysqli_query($conn,  $updateQuery )){
        echo "<script>alert('Updated!!!')</script>";
        echo"<script>location.href='index.php'</script>";
    }