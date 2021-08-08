<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['Add_To_Cart']))
    {
        if(isset($_SESSION['carts']))
        {
            $myitems=array_column($_SESSION[ 'carts' ], 'Item_Name'); 
            if(in_array($_POST['Item_Name'], $myitems))
            {
                echo"<script>

                    alert('Item Already Added');
                    window.location.href='products.php';
                    </script>";

            }

            else{
                $count=count($_SESSION['carts']);

                $_SESSION['carts'][$count] =array('Item_Name'=>$_POST['Item_Name'], 'Price'=>$_POST['Price' ], 'Quantity' =>1);
                echo"<script>
                    alert('Item Added');
                    window.location.href='products.php';
                    </script>";
            }
        }

        else
        {
            $_SESSION['carts'][0]=array('Item_Name'=>$_POST['Item_Name'], 'Price'=>$_POST['Price'], 'Quantity'=>1); 
            echo"<script>
                alert('Item Added');
                window.location.href='products.php';
                </script>";
        }
          
    }
    if(isset($_POST['Remove_Item']))
    {
        foreach($_SESSION['carts'] as $key => $value)
        {
            if($value['Item_Name']==$_POST['Item_Name'])
            {
                unset($_SESSION['carts'][$key]);
                $_SESSION['carts']=array_values($_SESSION['carts']);
                echo"<script>
                    alert('Item Removed');
                    window.location.href='cart1.php';
                    </script> ";
            }
            
        }
    }

}
?> 