<?php
$email = filter_input(INPUT_POST, 'email');
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

if(!empty($username)){
    if(!empty($password)){
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "ecommerce";

        //connection
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
        if(mysqli_connect_error()){
            die('connection error('.
            mysqli_connect_errno().')'.
            mysqli_connect_error());
            
        }
        else{
            $sql = "INSERT INTO register (username,password,email) values ('$username','$password','$email')";
            if($conn->query($sql)){
                echo"new record is inserted successfully!";
                echo "<a href= index.html>Click here to continue shopping</a>";

            }
            else{
                echo"error:".$sql . "<br>" . $conn->error;
            }
            $conn->close();
        }
    }
    else{
        echo"password  empty";
        die();
    }
}
else{
    echo"username empty";
    die();
}

?>

