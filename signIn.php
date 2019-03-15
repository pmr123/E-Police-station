<!DOCTYPE html>
<?php include('backend.php'); ?>
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
        <li><a href="signIn.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>


        <form method="post">
		<?php include('error.php'); ?>
                <h2 class="text-info" align="middle" ><u><strong>SIGN IN</strong> </u></h2>
                <h3 class ="text-info">   
                E-MAIL ID: <strong>*</strong> <input type="email" name="email" required><br><br>
      PASSWORD:<strong>*</strong> <input type="password" name="password" required><br><br>
      
      <!--<a href="demo.php" class ="btn btn-info" role="submit">SIGN IN</a>-->
            <input type="Submit" value="SIGN IN" name ="signin">
            </h3>
            </form>
<p>
            <a href="signUp.php"><h4>New User? Register </h4>  </a>
</p>     
</body>
</html>