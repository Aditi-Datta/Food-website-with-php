<?php
    include 'config.php';
    $id = $_GET['id'];
    // echo $id;

    $dataFatchQuery = "SELECT * FROM `crud` WHERE Id = '$id'";
    $record = mysqli_query($conn,$dataFatchQuery);
    $data = mysqli_fetch_array($record);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>crud operation</title>
    <style>
        form {
            background-color: rgb(234, 240, 240);
            padding: 15px;
            box-shadow: 0px 0px 10px 0px;
            border-radius: 10;

        }
    </style>
</head>

<body>
<div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <form action="updateAction.php" method="post" >
                    <h1>Update Product</h1>
                    <div class="mb-3">
                        Product name:
                        <input type="text" class="form-control" name="name" value="<?php echo $data['name']?>" required>

                    </div>
                    <!-- <div class="mb-3">
                        Product Price:
                        <input type="text" class="form-control" name="price" value="<?php echo $data['price']?>" required>
                    </div> -->
                    

                    <input type="hidden" name="id" value="<?php echo $data['Id']?>">
                    <input class="btn btn-warning col-12" type="submit" name='update' value='update'id=''>
                </form>
            </div>
        </div>
        
</div>
</body>


