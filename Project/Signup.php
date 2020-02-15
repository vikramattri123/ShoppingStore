<?php
include'header.php';
?>
<html>
 <head>
  <title>LifeStyle Store</title>
	<link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="index.css">          
 </head><br>
<div class="container">
          <div class="col-xs-offset-4 col-xs-4">
               <div class="panel panel-primary">
                   <div class="panel-heading">
                       <h4>Signup</h4>
                       <h6>Signup to make a purchase</h6>
                   </div> 
                   <div class="panel-body">
                       <form method="POST" action="Signup_script.php">
                           <div class="form-group">
                               <input type="text" name="name" placeholder="Enter your name" class="form-control">
                           </div>
                           <div class="form-group">
                               <input type="email" name="email" placeholder="Enter your email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                           </div>
                           <div class="form-group">
                               <input type="password" name="password" placeholder="Enter your password" class="form-control" pattern=".{6,}" required>
                           </div>
                           <div class="form-group">
                               <input type="number" name="contact" placeholder="contact" class="form-control" pattern=".{10,}" required>
                           </div>
                           <div class="form-group">
                               <input type="text" name="city" class="form-control" placeholder="enter your city">
                           </div>
                           <div class="form-group">
                               <input type="text" name="address" class="form-control" placeholder="Enter your address">
                           </div>
                           <div class="form-group">
                                            <button type="submit" value="registration_submit" class="btn-primary">Submit</button>
                           </div>
                            </form>
			</div>      
                   </div>
                   </div>
          </div>
<?php
include 'foot1.php';
?>
</html>