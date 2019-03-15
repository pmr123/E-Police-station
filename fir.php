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
  <title>FIR</title>
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

  .formfield *
        {
            vertical-align: middle;
        }
  </style>
<p class=" container-fluid">
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
                <h2 class="text-info" align="middle" ><u><strong>LODGE FIR</strong> </u></h2>
                <h3 class ="text-info">   
            
            PLACE:<strong>*</strong>
            <input type="text" name="place" required><br><br>
			
            CRIMINAL(if known):
            <input type="text" name="criminal"><br><br>






            <!-- <input type="text" name="name" required> -->
            <p class="formfield">
                <label for="Textarea">COMPLAINT:
                    <strong>*</strong>
                    </label>
                    <textarea id="textarea" name="complain" rows="2" required></textarea>
            </p>
            

           
            <!-- <input type="text" name="name" required> -->
            <!-- <br>
            <p class="formfield">
                <label for="Textarea">COMPLAINT:
                    <strong>*</strong>
                    </label>
            <textarea id="textarea" rows="2"></textarea>
            </p> -->


            <input type="Submit" value="SUBMIT" name="submit">
            </h3>
            </form>
            <?php
      if(isset($_POST['submit']))
      {
        $place = $_POST['place'];
        $criminal = $_POST['criminal'];
        $complain = $_POST['complain'];
        $db = mysqli_connect('localhost','root','','epol');
        $sql = "INSERT INTO firdata (email,place,criminal,complain) VALUES('".$_SESSION['username']."','$place','$criminal','$complain')";
          mysqli_query($db,$sql);
        header('location:demoHome.php');
      }
    ?>        
</body>
</html>

