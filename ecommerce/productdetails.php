<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Product Detail - velli</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <!--fontawesome-->
        <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,200&display=swap" rel="stylesheet">
    </head>
    <body>

        
            <div class="container">
                <div class="navbar">
                    <div class="logo">
                        <img src="C:\Users\trish\Desktop\images/logo-velli.jpg" width="125px">
                    </div>
                    <nav>
                        <ul id="menuitems">
                            <li><a href="index.html">Home</a> </li>
                            <li><a href="products.html">About</a> </li>
                            <li><a href="">Contact</a> </li>
                            <li><a href="account.html">Account</a> </li>
                            <li><a href="register.html">Register</a> </li>
                        
                        </ul>
                    </nav>
                    <?php 
                        $count=0;
                        if(isset($_SESSION['carts']))
                        {
                            $count=count($_SESSION['carts']);
                        }
                    ?>
                    <a href="cart1.php"class="btn btn-success">My Cart(<?php echo $count ?>)</a>
                    <img src="C:\xampp\htdocs\images/menu.png" class="menu-icon" onclick="menutoggle()">           
                </div>
                
            </div>
 <!--single product detail--> 

        <div class="small-containers single-product">
            <div class="row">
                <div class="col2">
                
                    <img src="C:\xampp\htdocs\images/product-4.jpg" width="100%" id="producting" alt="dfg">

                    <div class="small-img-row">
                        
                        <div class="small-img-col">
                            <img src="C:\xampp\htdocs\images/gallery-3.jpg" width="100%"class="small-img">
                        </div>
                        
                    </div>
               
                </div>
                <div class="col2">
                <form action="manage_cart.php" method="POST">
                    <p>home / necklace</p>
                    <h2>Haranya haaram</h2>
                    <h4>45</h4>
                    <!--size-->
                    <button type="submit"class="btn btn-danger" name="Add_To_Cart">Add to cart <i class="fas fa-shopping-cart"></i></button>
                      <input type="hidden" name="Item_Name" value="Haryana">
                      <input type="hidden" name="Price" value="45">
                    <h3>product details</h3>
                    <p>
                        Stunning statement silver, gold plated haaram with a touch of traditional and contemporary.  Made with a traditional inspired pendant, this haar is sure to turn heads.  Finished with dark pink, white and dominant green kempu stones. The white floral accents in the pendant go with the multilayer green and red beads chain.... Stunner is an understatement.
                        </p>
                </form>
                </div>
            </div>
        </div>
        <!--title-->
        <div class="small-container">
            <div class="row row2">
                <h2>Related products</h2>
                
            </div>
        </div>
        

        
        <div class="small-container">
        
            <div class="row">
                <div class="col4">
                    <img src="C:\xampp\htdocs\images/product-7.jpg">
                    <h4>Guttaspusalu <br> kemp necklace</h4>
                      <p>$16.00</p>
                </div>
                <div class="col4">
                    <img src="C:\xampp\htdocs\images/product-8.jpg">
                    <h4>Lakshmi <br> short haram</h4>
                    <p>$19.00</p>
                </div>
                <div class="col4">
                    <img src="C:\xampp\htdocs\images/product-3.jpg">
                    <h4>Uncut kemp <br> rope chain</h4>
                    <p>$16.00</p>
                </div>
                <div class="col4">
                    <img src="C:\xampp\htdocs\images/product-13.jpg">
                    <h4>Nagasi lakshmi<br> openable bangles</h4>
                    <p>$20.00</p>
                </div>
            </div>
            <!--page btn-->
        </div>   

<!---footer--->
     <div class="footer">
         <div class="container">
             <div class="row">
                 <div class="footer-col1">
                    <img src="C:\xampp\htdocs\images/logo-velli.jpg"width="200px"height="150px">
                     
                    <h4>Our main purpose is protecting the environment and reducing wastes and attaining sustainability </h4>
                 </div>
                 <div class="footer-col2">
                    <h3>useful links</h3>
                    <ul>
                        <li><a href=""><u>Coupons</u></a> </li>
                        <li><a href=""><u>Return policy</u></a> </li>
                        <li><a href=""><u>Join affiliate</u></a> </li>
                        <li><a href=""><u>Blog post</u></a> </li>
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

<!--js for prod gallery-->
<script>
    var productimg= document.getElementById("productimg");
    var smallimg= document.getElementsByClassName("small-img");
    smallimg[0].onclick = function(){   
        productimg.src = smallimg[0].src; 
    }
    smallimg[1].onclick = function(){   
        productimg.src = smallimg[1].src; 
    }
    smallimg[2].onclick = function(){   
        productimg.src = smallimg[2].src; 
    }
    smallimg[3].onclick = function(){   
        productimg.src = smallimg[3].src; 
    }
</script>
</body>
</html>