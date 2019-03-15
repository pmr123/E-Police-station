<!DOCTYPE html>
<?php 
	include('backend.php');
	//if user is not logged in,they cannot access this page
	if(empty($_SESSION['username']))
	{
		header('location:signIn.php');
	}
?>
<html lang="en">
<head>
  <title>SIGN IN</title>
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
        <li><a href="demoHome.php?logout='1'"><span class="glyphicon glyphicon-log-in"></span> Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

			
		<?php if(isset($_SESSION['username'])): ?>
			<?php
				$db = mysqli_connect('localhost','root','','epol');
				$query = "SELECT * FROM userdata WHERE email = '".$_SESSION['username']."'";
				$result = mysqli_query($db,$query);
				$data = mysqli_fetch_assoc($result);

				
			?>
			
			<form method="post" action="">
			<?php include('error.php'); ?>
			<h2 class="text-info" align="middle" ><u><strong>PROFILE:</strong> </u></h2>
			<h3 class ="text-info">  
			
			NAME:
			<strong>*</strong>
			<input type="text" name="name" value="<?php echo htmlspecialchars($data['name']); ?>" readonly="readonly" required>
			<br><br>
			
			<p class="formfield">
                <label for="Textarea">ADDRESS:
                    <strong>*</strong>
                   </label>
				<textarea name="address" id="textarea" rows="3" readonly="readonly" required>
					<?php echo htmlspecialchars($data['address']); ?>
				</textarea>
            </p>
            
			AGE: <strong>*</strong>
            <input type="number" name="age" value="<?php echo htmlspecialchars($data['age']); ?>" readonly="readonly" required min=0 max=110><br><br>
			
			GENDER:<strong>*</strong>
            <input type="text" name="gender" value=
			"<?php 
			if ($data['gender']=='male')
			{
				echo 'Male';
			}
			else if ($data['gender']=='female')
			{
				echo 'Female';
			}
			else
			{
				echo 'Other';
			}
			 ?>" readonly="readonly" align="right" required><br><br>
            
            E-MAIL ID: <strong>*</strong> 
			<input type="email" name="email" value="<?php echo htmlspecialchars($data['email']); ?>" readonly="readonly" required><br><br>
          	
			
			PHONE NO.:<strong>*</strong> 
			<input type="tel" name="phone" pattern="[0-9]{10}" value="<?php echo htmlspecialchars($data['phone']); ?>" readonly="readonly" required><br><br>
				<!--<a href="fir.php" class ="btn btn-info" role="submit">SIGN IN</a>-->
				<!-- <input type="Submit" value="SIGN IN" name ="signin"> -->
			</h3>
        </form>
			
		<!--	<p><a href="demoHome.php?logout='1'">Logout</a></p>-->
		<?php endif ?>
	<p>
		<?php
			if($_SESSION['type'] == 'c') // if user in a citizen
				{
					echo "<a href='fir.php' class ='btn btn-info' role='submit'>Lodge FIR</a></br></br>";
				}
			if($_SESSION['type'] != 'c') // if user is an police official or a police admin
				{
					//todo view/add criminal authenticate fir view citizen
					//echo "<a href ='viewData.php'>View citizen data</a></br></br>";
				}
			if($_SESSION['type'] == 'poa')//if user is an admin
			{
					//todo add new po/poa
			}	
			
		?>
	</p>     
</body>
</html>