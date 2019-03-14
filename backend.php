<?php
    session_start();
	$errors = array();
	$db = mysqli_connect('localhost','root','','epol');//connect to database
	
	if(isset($_POST['signup']))//if sign up button is clicked
	{
		$name = $_POST['name'];
		$address = $_POST['address'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$p1 = $_POST['password'];
		
		$query = "SELECT * FROM userdata WHERE email = '$email'"; 
		$result = mysqli_query($db,$query);
		$num_rows = mysqli_num_rows($result);
		if($num_rows!=0)
		{
			array_push($errors,"The Email has an account assosiated with it");
		}
		else
		{
			$password = md5($p1);//Encrypt password
			$sql = "INSERT INTO userdata (name,address,age,gender,email,phone,pass,userType) VALUES('$name','$address','$age','$gender','$email','$phone','$password','c')";
			mysqli_query($db,$sql);
			$_SESSION['username'] = $email;
			$_SESSION['success'] = "You are now logged in";
			$_SESSION['type'] = 'c';
			header('location: demoHome.php');// redirecting to homepage
		}
		
	}	
	
	if(isset($_POST['signin']))//if sign in button is clicked 
	{
		$email = $_POST['email'];
		$p1 = $_POST['password'];
		$password = md5($p1);//encypt before comparing
		$query = "SELECT * FROM userdata WHERE email = '$email' AND pass='$password'"; 
		$result = mysqli_query($db,$query);
		$num_rows = mysqli_num_rows($result);
		$data = mysqli_fetch_assoc($result);
		if($num_rows!=0)
		{	
			$_SESSION['username'] = $email; 
			$_SESSION['success'] = "You are now logged in";
			$_SESSION['type'] = $data['userType'];
			echo "logged in";
			header('Location: demoHome.php');// redirecting to homepage
		}
		else
		{
			array_push($errors,"Wrong username/password combination");
		}
	}
	//logout
	if(isset($_GET['logout']))
	{
		session_destroy();
		unset($_SESSION['username']);
		header('location:signIn.php');	
			
	}
?>