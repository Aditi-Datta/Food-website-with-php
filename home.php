<?php include ('navbar.php')   ?>
<?php include('config.php') ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home-page.css">

    <title>Food Area</title>
</head>

<body>

    <header>
        

        <!-----------------------------
             Main Header Section Start 
        -------------------------------->
        <section class=" top-section">
            <div class=" container mt-5">
            
                <div class="row  d-flex justify-content-between align-items-center">
                    <div class="col-12 col-md-6 col-lg-6 my-5">
                        <h5 class="text-black">"Eat healthy to live helthy.Live healthy to live happy"</h5>
                        <h1 class="text-black fs-1  ">WelCOME to THE <br> FOODIES NETWORK </h1>
                        <h5 class="text-black ">To live a full life, you have to fill your stomach first. When you eat food with your family and friends, it always tastes better!!! So why delay hurry up guys! fast order your preferred item and enjoy the delicious food.</h5>
                        
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 ">
                        <img src="images/Noodles.png" class="d-block w-100 my-5 rounded-3" alt="">
                    </div>
                    
                </div>
            </div>
        </section>
        <!-----------------------------
             Main Header Section End 
        -------------------------------->
    </header>

    <main>
        <section class="categories-area section--padding">
            <h1 class="text-center fw-bold" style="color: black;">Popular Foods</h1>
            <div class="container food__container">
                <div class="food rounded-3">
                    <img src="images/pizza-2.jpg" alt="Lionel Messi">

                    <div class="text-center">
            <form action="insert.php" method="post" >
                <h3>Cheese Pizza</h3>
                <select name="name" id="">
                <option value="1, Cheese Pizza">1</option>
                <option value="2, Cheese Pizza" >2</option>
                <option value="3, Cheese Pizza">3</option>
                <option value="4, Cheese Pizza">4</option>
                <option value="5, Cheese Pizza">5</option>
             </select>
                <h4>$480</h4> 
                <input type="submit" name="price" id="productPrice" value="Add to cart"  class="bg-warning border border-success rounded-pill" style="padding: 8px 20px;" ></input>
                </form>
            </div>
                </div>
                <div class="food rounded-3">
                    <img src="images/sandwich.webp" alt="neymar jr">

                    <div class="text-center">
            <form action="insert.php" method="post" >
            <h3>Cheese sandwich</h3>
            <select name="name" id="">
                <option value="1, Cheese sandwich">1</option>
                <option value="2, Cheese sandwich" >2</option>
                <option value="3, Cheese sandwich">3</option>
                <option value="4, Cheese sandwich">4</option>
                <option value="5, Cheese sandwich">5</option>
             </select>
            <h4>$250</h4>     
            <input type="submit" name="price" id="productPrice" value="Add to cart"  class="bg-warning border border-success rounded-pill" style="padding: 8px 20px;" ></input>
            </form>
            </div>
                </div>
                
                <div class="food rounded-3">
                    <img src="images/donuts.jpg" alt="mesut ozil">

                    <div class="text-center">
            <form action="insert.php" method="post" >
                <h3>Baked Chocolate Donuts</h3>
                <select name="name" id="">
                <option value="1, Baked Chocolate Donuts">1</option>
                <option value="2, Baked Chocolate Donuts" >2</option>
                <option value="3, Baked Chocolate Donuts">3</option>
                <option value="4, Baked Chocolate Donuts">4</option>
                <option value="5, Baked Chocolate Donuts">5</option>
             </select>
                <h4>$190</h4>
                
                <input type="submit" name="price" id="productPrice" value="Add to cart"  class="bg-warning border border-success rounded-pill" style="padding: 8px 20px;" ></input>
                </form>
            </div>
                </div>
                
                <div class="food rounded-3">
                    <img src="images/bargar.jpg" alt="mauro icardi">

                    <div class="text-center">
            <form action="insert.php" method="post" >
               <h3>Garlic Burger</h3>
               <select name="name" id="">
                <option value="1, Garlic Burger">1</option>
                <option value="2, Garlic Burger" >2</option>
                <option value="3, Garlic Burger">3</option>
                <option value="4, Garlic Burger">4</option>
                <option value="5, Garlic Burger">5</option>
             </select>
                 <h4>$380</h4>
               
                 <input type="submit" name="price" id="productPrice" value="Add to cart"  class="bg-warning border border-success rounded-pill" style="padding: 8px 20px;" ></input>
                    </form>
            </div>
                </div>
                
                <div class="food rounded-3">
                    <img src="images/cappuccino.webp" alt="Kylian Mbappe">

                    <div class="text-center">
            <form action="insert.php" method="post" >
            <h3>Dry Cappuccino</h3>
            <select name="name" id="">
                <option value="1, Dry Cappuccino">1</option>
                <option value="2, Dry Cappuccino" >2</option>
                <option value="3, Dry Cappuccino">3</option>
                <option value="4, Dry Cappuccino">4</option>
                <option value="5, Dry Cappuccino">5</option>
             </select>
             <h4>$270</h4>
             <input type="submit" name="price" id="productPrice" value="Add to cart"  class="bg-warning border border-success rounded-pill" style="padding: 8px 20px;" ></input>
                
             </form> 
            </div>
                </div>
                
                
               
                <div class="food rounded-3">
                    <img src="images/cold-coffee.webp" alt="Philippe Coutinho">
                    <div class="text-center">
            <form action="insert.php" method="post" >
             <h3>Cold Coffee </h3>
             <select name="name" id="">
             <option value="1, Cold Coffee">1</option>
    <option value="2, Cold Coffee" >2</option>
    <option value="3, Cold Coffee">3</option>
    <option value="4, Cold Coffee">4</option>
    <option value="5, Cold Coffee">5</option>
    
        </select>
        <h4>$240</h4>           
             
           
            <input type="submit" name="price" id="productPrice" value="Add to cart"  class="bg-warning border border-success rounded-pill" style="padding: 8px 20px;" ></input>
         </form>
     </div>
                </div>
            </div>
        </section>
    </main>

    <?php include('footer.php')?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>