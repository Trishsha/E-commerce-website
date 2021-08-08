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
    <style>
        body{
            background-color: #cab2b2;
        }   
    

    </style>

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
                    <a href="cart1.php"class="btn btn-success">My Cart(<?php echo $count ?>)</a>
                    <img src="C:\xampp\htdocs\images/menu.png" class="menu-icon" onclick="menutoggle()">           
                </div>
                
            </div>
<!-- cart module -->
        <div class="container"> <div class="row">

            <div class="col-lg-12 text-center border rounded bg-light my-5">
            <h1>MY CART</h1>
            </div>
            <div class="col-lg-8 vh-100">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Serial No.</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Item Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        if(isset($_SESSION['carts']))
                        {
                            foreach($_SESSION['carts']as $key => $value)
                            {
                                $sr=$key+1;
                                echo"
                                    <tr>
                                        <td>$sr</td>
                                        <td>$value[Item_Name]</td>
                                        <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                                        <td><input class='text-center iquantity' onchange='subtotal()' type='number' value='$value[Quantity]' min='1' max='10'></td>
                                        <td class='itotal'></td>
                                        <td>
                                            <form action='manage_cart.php' method='POST'>
                                                <button name='Remove_Item' class='btn btn-sm btn-danger'>REMOVE</button>
                                                <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                            </form>
                                        </td>
                                    </tr>
                                    ";
                                

                            }

                        }
                        

                    ?>
                   
                
        
                    </tbody>
                </table>
            </div>
            <div class="col-lg-3 vh-100 ">
                <div class="border bg-light rounded p-4"> 
                <h3>Grand Total: (in dollars)</h3>
                <h5 class="text-right" id="gtotal"></h5>
                <h3>Make Payment Using:</h3>
                <div class="btn-pay">
                <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-info ">Cash on Delivery</button>
                <a href="https://rzp.io/l/iuIbC2P"><button class="btn btn-info ">Razorpay</button></a>
                <button class="btn btn-info ">NetBanking</button>
                
                    
                </div>
                </div>
                </div>
            </div>
                
                                    
            </div>
            </div>
        </div>
    

    <script>
        var gt=0;
        var iprice=document.getElementsByClassName('iprice');
        var iquantity=document.getElementsByClassName('iquantity');
        var itotal=document.getElementsByClassName('itotal');
        var gtotal=document.getElementById('gtotal');
        function subtotal()
        {
            gt=0;
            for(i=0;i<iprice.length;i++)
            {
                itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
                gt=gt+(iprice[i].value)*(iquantity[i].value);
            }
            gtotal.innerText=gt;
                
        }

        subtotal();

    </script>    

 <!-- footer -->
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>
       

    