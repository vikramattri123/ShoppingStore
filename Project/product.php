<?php
include 'common1.php';
include 'header.php';
include 'check_if_added.php';
?>
<html>
    <head>
        <title>Product</title>
        <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylsesheet" type="text/css" href="index.css">
        <style>
            </style>
    </head>
 <div class="container">
<div class="jumbotron">
<h1>Welcome to our Lifestyle Store!</h1>
<p>We have the best cameras,watches and shirts for you.No need to hunt around, we have all in one place."</p>
</div>
<div class="container">
<div class="row">
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
    <img src="1.jpg" alt="camera">
<div class="caption">
    <h3>Cannon</h3>
    <h6>price Rs 36000.00</h6>
         <?php if (!isset($_SESSION['email']))
               { ?>
            <p><a href="login1.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
            
              <?php
               } else {
 
              if (check_if_added_to_cart(1)) { 
               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
              } 
              else{
              ?>
              <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
             <?php
              }
              }
 ?>
<br>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="2.jpg" alt="camera">
<div class="caption">
<h3>Nikon DSLR</h3>
<h6>price Rs 40000.00</h6>
         <?php if (!isset($_SESSION['email']))
               { ?>
            <p><a href="login1.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              <?php
               } else {
              if (check_if_added_to_cart(2)) { 
               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
              } else {
              ?>
              <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
             <?php
              }
              }
 ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="3.jpg" alt="camera">
<div class="caption">
<h3>SONY DSLR</h3>
<h6>price Rs 50000.00</h6>
         <?php if (!isset($_SESSION['email']))
               { ?>
            <p><a href="login1.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              <?php
               } else {

              if (check_if_added_to_cart(3)) { 
               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
              } else {
              ?>
              <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
             <?php
              }
              }
 ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
    <img src="4.jpg" alt="camera">
<div class="caption">
<h3>OLYMPUS DSLR</h3>
<h6>price Rs 80000.00</h6>
         <?php if (!isset($_SESSION['email']))
               { ?>
            <p><a href="login1.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              <?php
               } else {

              if (check_if_added_to_cart(4)) { 
               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
              } else {
              ?>
              <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
             <?php
              }
              }
 ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="9.jpg" alt="Watches">
<div class="caption">
<h3>Titan Model #301</h3>
<h6>price Rs 13000.00</h6>
         <?php if (!isset($_SESSION['email']))
               { ?>
            <p><a href="login1.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              <?php
               } else {

              if (check_if_added_to_cart(5)) { 
               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
              } else {
              ?>
              <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
             <?php
              }
              }
 ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="10.jpg" alt="Watches">
<div class="caption">
<h3>Titan Model #201</h3>
<h6>price Rs 3000.00</h6>
         <?php if (!isset($_SESSION['email']))
               { ?>
            <p><a href="login1.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              <?php
               } else {

              if (check_if_added_to_cart(6)) { 
               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
              } else {
              ?>
              <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
             <?php
              }
              }
 ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="image 2.jpg" alt="Watches">
<div class="caption">
<h3>HMT Milan</h3>
<h6>price Rs 8000.00</h6>
         <?php if (!isset($_SESSION['email']))
               { ?>
            <p><a href="login1.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              <?php
               } else {

              if (check_if_added_to_cart(7)) { 
               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
              } else {
              ?>
              <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
             <?php
              }
              }
 ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="12.jpg" alt="Watches">
<div class="caption">
<h3>Faber Luba #111</h3>
<h6>price Rs 18000.00</h6>
         <?php if (!isset($_SESSION['email']))
               { ?>
            <p><a href="login1.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              <?php
               } else {

              if (check_if_added_to_cart(8)) { 
               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
              } else {
              ?>
              <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
             <?php
              }
              }
 ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="8.jpg" alt="Shirts"><br>
<div class="caption">
<h3>H&W</h3>
<h6>price Rs 800.00</h6>
         <?php if (!isset($_SESSION['email']))
               { ?>
            <p><a href="login1.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              <?php
               } else {

              if (check_if_added_to_cart(9)) { 
               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
              } else {
              ?>
              <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
             <?php
              }
              }
 ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="6.jpg" alt="Shirts">
<div class="caption">
<h3>Luis Phil</h3>
<h6>price Rs 1000.00</h6>
         <?php if (!isset($_SESSION['email']))
               { ?>
            <p><a href="login1.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              <?php
               } else {
              if (check_if_added_to_cart(10)) { 
               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
              } else {
              ?>
              <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
             <?php
              }
              }
 ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="13.jpg" alt="Shirts">
<div class="caption">
<h3>John Zok</h3>
<h6>price Rs 1500.00</h6>
         <?php if (!isset($_SESSION['email']))
               { ?>
            <p><a href="login1.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              <?php
               } else {
              if (check_if_added_to_cart(11)) {
               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
              } else {
              ?>
              <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
             <?php
              }
              }
 ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="14.jpg" alt="Shirts">
<div class="caption">
<h3>Jhalsani</h3>
<h6>price Rs 1300.00</h6>
         <?php if (!isset($_SESSION['email']))
               { ?>
            <p><a href="login1.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              <?php
               } else {
              if (check_if_added_to_cart(12)) { 
               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
              } else {
              ?>
              <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
             <?php
              }
              }
 ?>
</div>
</div>
</div>
</div>
</div>
</div>
</html>