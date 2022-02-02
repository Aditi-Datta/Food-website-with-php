<?php
    include 'config.php';

    $r_username = $_POST['username'];
    $r_email =  $_POST['email'];
    $r_mobile =  $_POST['mobile'];
    $r_pass = $_POST['pass'];
    $r_conpass = $_POST['cpass'];
    $r_address = $_POST['address'];

    
    //Validation 
    $_mobile_pattern = "/(\+88)?-?01[3-9]\d{8}/";
    $_username_pattern = "/^[a-zA-Z. ]+$/";
    $_password_pattern = "/(?=.*\d).{1,10}/";
    
    if(!preg_match($_username_pattern,$r_username)){
        echo "<script>alert('Invalid Username !!')</script>";
        echo "<script>location.href='reg.html'</script>";
    }
    else if(!preg_match($_mobile_pattern,$r_mobile)){
        echo "<script>alert('Invalid Mobile Number !!')</script>";
        echo "<script>location.href='reg.html'</script>";
    }
    else if(!preg_match($_password_pattern,$r_pass)){
        echo "<script>alert('Invalid! Password should be - 1 digit, length(10-12)>!!')</script>";
        echo "<script>location.href='reg.html'</script>";
    }
    
    if( $r_pass != $r_conpass){
        echo "<script>alert('Password and Confirm Password is not matching!!! ')</script>";
        echo "<script>location.href='reg.html'</script>";
    }

    $duplicate_username = mysqli_query($conn,"SELECT * FROM `register` WHERE username = '$r_username'"); 
    if(mysqli_num_rows($duplicate_username)>0){
        echo "<script>alert('Username already exist !!')</script>";
        echo "<script>location.href='reg.html'</script>";
    }

    $insert_query = "INSERT INTO `register`(`username`, `email`, `mobile`, `pass`, `address`)VALUE('$r_username', '$r_email', '$r_mobile', '$r_pass', '$r_address')";

    if(!mysqli_query($conn,$insert_query)){
        die("Not inserted");
    }

    else{
        echo "<script>alert('Registered!!')</script>";
        echo "<script>location.href='login.html'</script>";
    }


