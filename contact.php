<?php include('navbar.php')?>
<?php include('config.php') ?>

<head>
    <link rel="stylesheet" href="css/home-page.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<section style="height: 400px;   " id="contact-section"
            class="shadow-lg my-5  container d-flex mb-5 justify-content-center align-items-center rounded-3">
            <div>
                <h1> STAY WITH US</h1>
                <p>Customer Feedback is an important thing for our better service in future. <br> So feel free to say something about our services.</p>
                <form action="review-action.php" method="post">
                <input class="form-control" name="review" type="text" placeholder="Your Opinion"> 
                <input class="form-control mt-5" name="rate" type="text" placeholder=" Food rate out of 10">
                <br>
                <button class="btn-submit " type="submit">SUBMIT</button>
                </form>
            </div>
        </section>

<?php 
    $reviewData = mysqli_query($conn, "SELECT * FROM `customers-review` ");
    while($row=mysqli_fetch_array($reviewData)){

    }
?>
<?php include('footer.php')?>