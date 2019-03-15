<?php 
	include('backend.php');
	//if user is not logged in,they cannot access this page
	if(empty($_SESSION['username']))
	{
		header('location:signIn.php');
	}
?>
<html>
	<body>
		<form method="POST">	
			Name: <input type="text" name="name"><br><br>
			Address: <Textarea name="address" rows="5" cols="40" ></Textarea><br><br>
			Age: <input type="number" name="age" min=0 max=110><br><br>
			Gender:<select name="gender" >
			       <option value = "male">Male</option>
				   <option value = "female">Female</option>
				   <option value = "other">other</option> 
				   </select> <br><br>
			E-mail ID: <input type="email" name="email" ><br><br>
			<input type="Submit" name="confirm" value="Confirm">
		</form>
		<?php 
			if(isset($_POST['confirm']))
			{
				$name = $_POST['name'];
				$address = $_POST['address'];
				$age = $_POST['age'];
				$gender = $_POST['gender'];
				$email = $_POST['email'];
				$db = mysqli_connect('localhost','root','','epol');
				$sql = "SELECT * FROM userdata WHERE name ='$name' OR address = '$address' OR age = '$age' OR gender = '$gender' OR email = '$email'";
				$result = mysqli_query($db,$sql);
				$num_rows = mysqli_num_rows($result);
				$data = mysqli_fetch_assoc($result);
							
				//$query = "SELECT * FROM userdata WHERE email = '$email' AND pass='$password'"; 
		//$result = mysqli_query($db,$query);
		//$num_rows = mysqli_num_rows($result);
		//$data = mysqli_fetch_assoc($result);
				
				echo '<table border="0" cellspacing="2" cellpadding="2"> 
				  <tr> 
					  <td> <font face="Arial">Name</font> </td> 
					  <td> <font face="Arial">address</font> </td> 
					  <td> <font face="Arial">age</font> </td> 
					  <td> <font face="Arial">gender</font> </td> 
					  <td> <font face="Arial">email</font> </td>
					  <td> <font face="Arial">phoneNumber</font> </td>
				  </tr>';
				foreach($data as $var)
			    {
					echo "$var </br></br>";
			    }
			}

			
			//if ($result = $mysqli->query($query)) {
			//	while ($row = $result->fetch_assoc()) {
			//		$field1name = $row["name"];
			//		$field2name = $row["address"];
			//		$field3name = $row["age"];
			//		$field4name = $row["gender"];
			//		$field5name = $row["email"];
			//		$field6name = $row["phone"];
			 
					
			//	}
			//	$result->free();
            //}
		?>
	</body>
</html>