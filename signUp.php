<!DOCTYPE html>
<html lang="en">
<head>
  <title>SIGN UP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
      
        body {
         background-color: black;
         text-
        }


        .formfield *
        {
            vertical-align: middle;
        }
  
  strong{
      color: brown;
  }
</style>
<p class=" container-fluid">
<?php include('backend.php'); ?>
   <body align="middle">
		<form method="post">
			<h1 class="text-danger"><marquee>
               *** WELCOME TO E-POLICE STATION CRIME MANAGEMENT SYSTEM ***
            </marquee>
				
			 </h1><br>
            <h2 class="text-info" align="middle" ><u><strong>SIGN UP</strong> </u></h2>

            <p align="middle">
            <h3 class ="text-info"> 
                    
NAME:
<strong>*</strong>
<!-- address -->

 <input type="text" name="name" required>
  <br><br>
            <p class="formfield">
                <label for="Textarea">ADDRESS:
                    <strong>*</strong>
                    </label>
            <textarea id="textarea" rows="3"></textarea>
            </p>
            
            
                <!-- Address: <Textarea name="address" rows="2" cols="40" required></Textarea><br><br> -->
                
                AGE: <strong>*</strong>
             <input type="number" name="age" required min=0 max=110><br><br>
            
            
            GENDER:<strong>*</strong>
            <select name="gender" required>
                    <option value = "male">Male</option>
                    <option value = "female">Female</option>
                    <option value = "other">other</option> 
                    </select> <br><br>
               
            E-MAIL ID: <strong>*</strong> <input type="email" name="email" required><br><br>
           
            PHONE NO.:<strong>*</strong> <input type="tel" name="phone" pattern="[0-9]{10}" required><br><br>
            

			PASSWORD:<strong>*</strong> <input type="password" name="password" id="password" onchange='check_pass();'><br><br>
            CONFIRM PASSWORD :<strong>*</strong> <input type="password" name="con_password" id="con_password" onchange='check_pass();'><br><br>
            <span id='message'></span>
            
			<input type="Submit" value="SignUp" name="signup" id="submit" disabled >
            </p>
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
        </p>
	</body>

</html>