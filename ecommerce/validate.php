<?php
if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","root","","ecommerce");
	$result = mysqli_query($conn,"SELECT * FROM register WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		echo"Invalid Username or Password!";
	} else {
		echo "Welcome! Let's get back to shopping!";
        echo"<a href = index.html>Click here</a>";
	}
}

?>