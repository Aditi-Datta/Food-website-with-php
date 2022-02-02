<?php include('navbar.php') ?>
<?php include('config.php')?>

<head>
   <link rel="stylesheet" href="css/home-page.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<section class="categories-area section--padding">
    <h1 class="text-center fw-bold" style="color: black;">Foods Category</h1>
    
    <div class="container food__container ">
    
        <div class="food rounded-3 ">
            
            <img src="images/pizza-2.jpg" alt="Pizza">
           
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
        <div class="food rounded-3 ">
            <img src="images/sandwich.webp" alt="Cheese sandwich">
            
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
        <div class="food rounded-3 ">
            <img src="images/veg-noodles.jpg" alt="Veg Hakka Noodles">
            
            <div class="text-center">
            <form action="insert.php" method="post" >
           <h3>Veg Hakka Noodles</h3>
            <select name="name" id="">
                <option value="1, Veg Hakka Noodles">1</option>
                <option value="2, Veg Hakka Noodles" >2</option>
                <option value="3, Veg Hakka Noodles">3</option>
                <option value="4, Veg Hakka Noodles">4</option>
                <option value="5, Veg Hakka Noodles">5</option>
             </select>
            <h4>$180</h4>
            <input type="submit" name="price" id="productPrice" value="Add to cart"  class="bg-warning border border-success rounded-pill" style="padding: 8px 20px;" ></input>
            </form>
             </div>
        </div>
        <div class="food rounded-3">
            <img src="images/donuts.jpg" alt="Baked Chocolate Donuts">
            
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
                <h4 name ="price">$190</h4>
                
                <input type="submit"  id="productPrice" value="Add to cart"  class="bg-warning border border-success rounded-pill" style="padding: 8px 20px;" ></input>
                </form>
            </div>
        </div>
        <div class="food rounded-3">
            <img src="images/Greek-Salad.jpg" alt="Greek Salad">
            
            <div class="text-center">
            <form action="insert.php" method="post" >
            <h3>Greek Salad</h3>
            <select name="name" id="">
                <option value="1, Greek Salad">1</option>
                <option value="2, Greek Salad" >2</option>
                <option value="3, Greek Saladr">3</option>
                <option value="4, Greek Salad">4</option>
                <option value="5, Greek Salad">5</option>
             </select>
            <h4>$280</h4>
            <input type="submit" name="price" id="productPrice" value="Add to cart"  class="bg-warning border border-success rounded-pill" style="padding: 8px 20px;" ></input>
                    </form>
                </div>

        </div>
        <div class="food rounded-3">
            <img src="images/bargar.jpg" alt="Garlic Burger">
            
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
            <img src="images/maki-sushi.webp" alt="Maki Sushi">
            
            <div class="text-center">
            <form action="insert.php" method="post" >
             <h3>Maki Sushi</h3>
             <select name="name" id="">
                <option value="1, Maki Sushi">1</option>
                <option value="2, Maki Sushi" >2</option>
                <option value="3, Maki Sushi">3</option>
                <option value="4, Maki Sushi">4</option>
                <option value="5, Maki Sushi">5</option>
             </select>
           <h4>$350</h4>   
           <input type="submit" name="price" id="productPrice" value="Add to cart"  class="bg-warning border border-success rounded-pill" style="padding: 8px 20px;" ></input>
                    </form>
                </div>

        </div>
        <div class="food rounded-3">
            <img src="images/cappuccino.webp" alt="Dry Cappuccino">      
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
            <img src="images/itetalian pizza.jpg" alt="Italian Pizza">
            
            <div class="text-center">
            <form action="insert.php" method="post" >
            <h3>Italian Pizza</h3>
            <select name="name" id="">
                <option value="1, Italian Pizza">1</option>
                <option value="2, Italian Pizza" >2</option>
                <option value="3, Italian Pizza">3</option>
                <option value="4, Italian Pizza">4</option>
                <option value="5, Italian Pizza">5</option>
             </select>
             <h4>$580</h4> 
             <input type="submit" name="price" id="productPrice" value="Add to cart"  class="bg-warning border border-success rounded-pill" style="padding: 8px 20px;" ></input>
                    </form>
                </div>

        </div>
        <div class="food rounded-3">
            <img src="images/icecream.jpg" alt="Peil Crepes Icecream">
            
            <div class="text-center">
            <form action="insert.php" method="post" >
            <h3>Peil Crepes Icecream</h3>
            <select name="name" id="">
                <option value="1, Peil Crepes Icecream">1</option>
                <option value="2, Peil Crepes Icecream" >2</option>
                <option value="3, Peil Crepes Icecream">3</option>
                <option value="4, Peil Crepes Icecream">4</option>
                <option value="5, Peil Crepes Icecream">5</option>
             </select>
             <h4>$240</h4> 
             <input type="submit" name="price" id="productPrice" value="Add to cart"  class="bg-warning border border-success rounded-pill" style="padding: 8px 20px;" ></input>      
             </form>
         </div>
        </div>
        <div class="food rounded-3">
            <img src="images/desert.jpg" alt="Chocolate Pastry">   
            <div class="text-center" >
            <form action="insert.php" method="post" >
            <input type="hidden" name="productName" id="" > <h3>Chocolate Pastry</h3></input>
            <select name="name" id="">
                <option value="1, Chocolate Pastry">1</option>
                <option value="2, Chocolate Pastry" >2</option>
                <option value="3, Chocolate Pastry">3</option>
                <option value="4, Chocolate Pastry">4</option>
                <option value="5, Chocolate Pastry">5</option>
    
            </select>
            <h4>$280</h4> 
            <input type="submit" name="price" id="productPrice" value="Add to cart"  class="bg-warning border border-success rounded-pill" style="padding: 8px 20px;" ></input> 
            </form>
            </div>
        </div>
        <div class="food rounded-3">
            <img src="images/cold-coffee.webp" alt="cold-coffee">      
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

<?php include('footer.php') ?>