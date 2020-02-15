<html>
    <head>
        <title>Navbar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <style>
        marquee
        {
           color:white;
        }
    </style>
</html>
<div class="navbar-inverse">
     <div class="container">
         <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myimage">
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class=""icon-bar></span>
             </button>
             <a class="navbar-brand" href="index.php">Infinity Store</a>
         </div>      
         <div class="collapse navbar-collapse" id="myimage">
             <ul class="nav navbar-nav navbar-right">
                 <?php
                  if (isset($_SESSION['email']))
                      {
                 ?>
                 <li><a href ="cart_page.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
 <li><a href ="settings.php"><span class = "glyphicon glyphicon-user"></span> 
Settings</a></li>
 <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-in"></span>Logout</a></li>
              <?php
              } else {
 ?>
 <li><a href="Signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
 <li><a href="login1.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
 <?php
 }
 ?>
 </ul>
 </div>
 </div>
    <marquee behavior="scroll" direction="left" scrollamount="12">Monsoon End of Season Sale Flat 80% OFF on Cameras, Shirts ,Shoes and many more Products starting Sale from end of August Stay Tuned With us</marquee>
</div>
</html>