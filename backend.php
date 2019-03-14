<?php
	//$db = mysqli_connect('localhost','root','','userdata');//connect to database
	
	if(isset($_POST['signup']))//if sign up button is clicked
	{
	    $name = $_POST['name'];
		$address = $_POST['address'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$p1 = $_POST['password'];
		
		echo $name." " ;
		echo $address." ";
		echo $age." ";
		echo $gender." ";
		echo $email." ";
		echo $phone." ";
		echo $p1." ";
		
	}	
?>