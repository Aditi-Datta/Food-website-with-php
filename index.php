<?php include ('navbar.php')   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home-page.css">
    <title>crud operation</title>
    
</head>
<body>
    
<div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-12">
               
            </div>
        </div>
        <div class="container">
                <table class="table table-dark table-striped table-hover mt-5 mb-5">
                    <thead>
                        <tr>
                            <th scope='col'>ID</th>
                            <th scope='col'>Food</th>
                            <th scope='col'>Price</th>
                            
                            <th scope='col'>Update</th>
                            <th scope='col'>Delete</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            include 'config.php';
                            $allData = mysqli_query($conn, "SELECT * FROM `crud`");
                            // echo "<script>alert('Index fetch successfully!!!')</script>";
                            while($row=mysqli_fetch_array($allData)){
                               echo " <tr>
                                    <td>$row[Id]</td>
                                    <td>$row[name]</td>
                                    <td>$row[price]</td>
                                    
                                    <td><a class='btn btn-warning' href='update.php?id=$row[Id]'>Update</a></td>
                                    <td><a class='btn btn-danger' href='delete.php?id=$row[Id]'>Delete</a></td>
                                </tr> ";
                            }

                        ?>
                    </tbody>
                </table>
                </div>
    </div>
</div>

<?php include('footer.php')?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>