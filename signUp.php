<!DOCTYPE html>
<?php include('backend.php'); ?>
<html>
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
<p class=" container-fluid"></p></head>
<body  align="middle">
	
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img class="navbar-brand" src="ep_logo.jpg" height="50%"></img>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="Ep_home.html">Home</a></li>
        <li><a class="text-info" href="Initiatives.html">Initiatives</a></li>
        <li><a class="text-info" href="contact.html">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signIn.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

		<form method="post">
			<?php include('error.php'); ?>
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
            <textarea name="address" id="textarea" rows="3" required></textarea>
            </p>
            
			AGE: <strong>*</strong>
            <input type="number" name="age" required min=0 max=110><br><br>
			GENDER:<strong>*</strong>
            <select name="gender" required>
                    <option value = "male">Male</option>
                    <option value = "female">Female</option>
                    <option value = "other">other</option> 
                    </select> <br><br>
            
            E-MAIL ID: <strong>*</strong> <input type="email" name="email" required><br><br>
          	PASSWORD:<strong>*</strong> 
          	<input type="password" name="password" id="password" onchange='check_pass();'><br><br>
			CONFIRM PASSWORD :<strong>*</strong> 
			<input type="password" name="con_password" id="con_password" onchange='check_pass();'><br><br>
			PHONE NO.:<strong>*</strong> <input type="tel" name="phone" pattern="[0-9]{10}" required><br><br>
            <input type="Submit" value="SignUp" name="signup" id="submit" disabled >
			<span id='Passmessage'></span><br><br>
		</h3></p>
		</form>
		<script>
			function check_pass() 
			{
				if(document.getElementById('password').value == document.getElementById('con_password').value)
				{
					document.getElementById('submit').disabled = false;
					document.getElementById('Passmessage').style.color = 'green'
					document.getElementById('Passmessage').innerHTML = 'Passwords match';
				}
				else
				{
					document.getElementById('submit').disabled = true;
					document.getElementById('Passmessage').style.color = 'red'
					document.getElementById('Passmessage').innerHTML = 'Passwords don\'t match';
				}
			}
		</script>
	</body>
</html>