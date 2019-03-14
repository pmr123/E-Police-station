<?php include('backend.php'); ?>
<html>
	<body>
		<form method="post">
			<h1><U>
				Sign Up:
			</U></h1><br>
			
			Name: <input type="text" name="name" required><br><br>
			Address: <Textarea name="address" rows="5" cols="40" required></Textarea><br><br>
			Age: <input type="number" name="age" required min=0 max=110><br><br>
			Gender:<select name="gender" required>
			       <option value = "male">Male</option>
				   <option value = "female">Female</option>
				   <option value = "other">other</option> 
				   </select> <br><br>
			E-mail ID: <input type="email" name="email" required><br><br>
			Phone No.: <input type="tel" name="phone" pattern="[0-9]{10}" required><br><br>
			Password: <input type="password" name="password" id="password" onchange='check_pass();'><br><br>
			Confirm Password : <input type="password" name="con_password" id="con_password" onchange='check_pass();'><br><br>
			Upload ID: <br><br>
			<input type="file" value="Upload"><br><br>
			<span id='message'></span>
			<input type="Submit" value="SignUp" name="signup" id="submit" disabled >
		
		</form>
		<script>
			function check_pass() 
			{
				if(document.getElementById('password').value == document.getElementById('con_password').value)
				{
					document.getElementById('submit').disabled = false;
					document.getElementById('message').style.color = 'green'
					document.getElementById('message').innerHTML = 'Passwords match';
				}
				else
				{
					document.getElementById('submit').disabled = true;
					document.getElementById('message').style.color = 'red'
					document.getElementById('message').innerHTML = 'Passwords don\'t match';
				}
			}
		</script>
	</body>
</html>