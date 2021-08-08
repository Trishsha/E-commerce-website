<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>All products - velli</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,200&display=swap" rel="stylesheet">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!--fontawesome-->
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

    </head>
    <body>

       
            <div class="container">
                <div class="navbar">
                    <div class="logo">
                        <a href="products.php"><img src="C:\xampp\htdocs\images/logo-velli.jpg" width="125px" alt="logo"></a>
                    </div>
                    <nav>
                        <ul id="menuitems">
                            <li  class="btn"><a href="index.html">Home</a> </li>
                            <li class="btn" ><a href="products.php">Products</a> </li>
                            <li class="btn" ><a href="account.html">Account</a> </li>
                            <li class="btn" ><a href="register.html">Register</a> </li>
                        
                        </ul>
                    </nav>
                    <?php 
                        $count=0;
                        if(isset($_SESSION['carts']))
                        {
                            $count=count($_SESSION['carts']);
                        }
                    ?>
                    <br><a href="cart1.php"class="btn btn-success">My Cart(<?php echo $count ?>)</a>
                    <img src="C:\xampp\htdocs\images/menu.png" class="menu-icon" onclick="menutoggle()">           
                </div>
                
            </div>
       
        
        <div class="small-container">
            <div class="row2" >
                <h2>All products</h2>
                <select>
                    <option>Default sorting</option>
                    <option>Sort by Price</option>
                    <option>Sort by popularity</option>
                    <option>Sort by rating</option>
                    <option>Sort by sale</option>
                </select>
            </div>
        
            <div class="row">
                <div class="col4">
                    <form action="manage_cart.php" method="POST">
                    <img src="C:\xampp\htdocs\images/product-2.jpg">
                    
                    <h4>Navarathana choker</h4>
                      <h5>
                          <small><s class="text-secondary">$58.00</s></small>
                          <span class="price">$45</span>
                      </h5>
                      <button type="submit"class="btn btn-danger" name="Add_To_Cart">Add to cart <i class="fas fa-shopping-cart"></i></button>
                      <input type="hidden" name="Item_Name" value="Navarathana choker">
                      <input type="hidden" name="Price" value="45">
                      
                    </form>
                </div>
              
            <div class="col4">
            <form action="manage_cart.php" method="POST">
                <img src="C:\xampp\htdocs\images/product-4.jpg">
                <h4>Long Beaded Chain</h4>
                <h5>
                    <small><s class="text-secondary">$78</s></small>
                    <span class="price">$65</span>
                </h5>
                <button type="submit"class="btn btn-danger" name="Add_To_Cart">Add to cart <i class="fas fa-shopping-cart"></i></button>
                <input type="hidden" name="Item_Name" value="Long Beaded Chain">
                <input type="hidden" name="Price" value="45">
            </form>
            </div>
            <div class="col4">
            <form action="manage_cart.php" method="POST">
                <img src="C:\xampp\htdocs\images/product-3.jpg">
                <h4>Emarald stone chain</h4>
                <h5>
                    <small><s class="text-secondary">$98.50</s></small>
                    <span class="price">$85.34</span>
                </h5>
                <button type="submit"class="btn btn-danger" name="Add_To_Cart">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                <input type="hidden" name="Item_Name" value="Emarald stone chain">
                <input type="hidden" name="Price" value="85">
            </form>
            </div>
            <div class="col4">
            <form action="manage_cart.php" method="POST">
                <img src="C:\xampp\htdocs\images/product-6.jpg">
                <h4>Peal Beaded Haram</h4>
                <h5>
                    <small><s class="text-secondary">$67.90</s></small>
                    <span class="price">$65.20</span>
                </h5>
                <button type="submit"class="btn btn-danger " name="Add_To_Cart">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                <input type="hidden" name="Item_Name" value="Emarald stone chain">
                <input type="hidden" name="Price" value="$65.20">
            </form>
            </div>
            </div>
            <div class="row">
                    <div class="col4">
                    <form action="manage_cart.php" method="POST">
                        <img src="C:\xampp\htdocs\images/product-5.jpg">
                        <h4>Step Chain</h4>
                        <h5>
                            <small><s class="text-secondary">$78</s></small>
                            <span class="price">$45</span>
                        </h5>
                        <button type="submit"class="btn btn-danger " name="Add_To_Cart">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                        <input type="hidden" name="Item_Name" value="Step Chain">
                        <input type="hidden" name="Price" value="45">
                    </form>
                    </div>
                    <div class="col4">
                    <form action="manage_cart.php" method="POST">
                        <img src="C:\xampp\htdocs\images/product-6.jpg">
                        <h4>Long kemp necklace</h4>
                        <h5>
                            <small><s class="text-secondary">$78</s></small>
                            <span class="price">$45</span>
                        </h5>
                        <button type="submit"class="btn btn-danger " name="Add_To_Cart">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                        <input type="hidden" name="Item_Name" value="Long kemp necklace">
                        <input type="hidden" name="Price" value="45">
                    </form>
                    </div>
                    <div class="col4">
                    <form action="manage_cart.php" method="POST">
                        <img src="C:\xampp\htdocs\images/product-7.jpg">
                        <h4>Uncut kemp short haram</h4>
                        <h5>
                            <small><s class="text-secondary">$78</s></small>
                            <span class="price">$45</span>
                        </h5>
                        <button type="submit"class="btn btn-danger " name="Add_To_Cart">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                        <input type="hidden" name="Item_Name" value="Uncut kemp short haram<">
                        <input type="hidden" name="Price" value="45">
                    </form>
                    </div>
                    <div class="col4">
                    <form action="manage_cart.php" method="POST">
                        <img src="C:\xampp\htdocs\images/product-8.jpg">
                        <h4>Light weight necklace</h4>
                        <h5>
                            <small><s class="text-secondary">$78</s></small>
                            <span class="price">$45</span>
                        </h5>
                        <button type="submit"class="btn btn-danger " name="Add_To_Cart">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                        <input type="hidden" name="Item_Name" value="Light weight necklace">
                        <input type="hidden" name="Price" value="45">
                    </form>
                    </div>
                
            </div>
            <div class="row">
            <div class="col4">
            <form action="manage_cart.php" method="POST">
                <img src="C:\xampp\htdocs\images/product-9.jpg">
                <h4>Kemp pendant</h4>
                <p>$25.00</p>
                <button type="submit"class="btn btn-danger " name="Add_To_Cart">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                <input type="hidden" name="Item_Name" value="Kemp pendant">
                <input type="hidden" name="Price" value="45">
            </form>
            </div>
            <div class="col4">
            <form action="manage_cart.php" method="POST">
                <img src="C:\xampp\htdocs\images/product-10.jpg">
                <h4>Uncut kemp pendant</h4>
                <p>$24.00</p>
                <button type="submit"class="btn btn-danger btn btn-danger-success btn btn-danger-lg my-3" name="Add_To_Cart">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                <input type="hidden" name="Item_Name" value="Uncut kemp pendant">
                <input type="hidden" name="Price" value="45">
            </form>
            </div>
            <div class="col4">
            <form action="manage_cart.php" method="POST">
                <img src="C:\xampp\htdocs\images/product-11.jpg">
                <h4>Pipe bangles</h4>
                <p>$29.00</p>
                <button type="submit"class="btn btn-danger " name="Add_To_Cart">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                <input type="hidden" name="Item_Name" value="Pipe bangles">
                <input type="hidden" name="Price" value="45">    
            </form>
            </div>
            <div class="col4">
            <form action="manage_cart.php" method="POST">
                <img src="C:\xampp\htdocs\images/product-12.jpg">
                <h4>Coin screw Bangle</h4>
                <p>$26.00</p>
                <button type="submit"class="btn btn-danger " name="Add_To_Cart">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                <input type="hidden" name="Item_Name" value="Coin screw Bangle">
                <input type="hidden" name="Price" value="45">
            </form>
            </div>
           
                        
            <!--page btn btn-danger-->
        </div>   

<!---footer--->
     <div class="footer">
         <div class="container">
             <div class="row">
                 <div class="footer-col1">
                    <img src="C:\xampp\htdocs\images/logo-velli.jpg"width="200px"height="150px">
                     
                    <h3 class="sen"><b>Write to us on : vellijewlery@gmail.com <br> We Love Feedbacks :)</b></h3>
                 </div>
                 <div class="footer-col2">
                    <h3>useful links</h3>
                    <ul>
                        <li><a href=""><u>Coupons</u></a> </li>
                        <li><a href=""><u>Return policy</u></a> </li>
                        <li><a href=""><u>Join affiliate</u></a> </li>
                        <li><a href=""><u>Blog POST</u></a> </li>
                    </ul>
                    
                 </div>
                 <div class="footer-col3">
                    <h3>follow us</h3>
                    <ul>
                        <li><a href=""><u>Facebook</u></a> </li>
                        <li><a href=""><u>Twitter</u></a> </li>
                        <li><a href=""><u>Instagram</u></a> </li>
                        <li><a href=""><u>Youtube</u></a> </li>
                    </ul>
                    
                </div>
             </div>
             <hr>
             <p class="copyright">Copyright 2020</p>
         </div>
     </div>   

<!--js for toggle menu-->
<script>
    var menuitems = document.getElementById("menuitems");
    menuitems.style.maxHeight="0px";
    function menutoggle()
    {
        if(menuitems.style.maxHeight=="0px")
        {
            menuitems.style.maxHeight="1500px"
        }
        else
        {
        menuitems.style.maxHeight="0px"
        }

    
    }
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>