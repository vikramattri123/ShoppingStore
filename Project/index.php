<?php
include 'common1.php';
include 'header.php'; 
/*if(isset($_session['email']))
{
    header('location:product.php');
}*/
?>
<html>
    <head>
        <title>Home page</title>
        	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylsesheet" type="text/css" href="index.css">
        <style>
.banner_image
{
padding-top:175px;
padding-bottom:90px;
text-align:center;
color:#f8f8f8;
background:url(home.jpg)no-repeat center center;
background-size:cover;
}
.banner_content
{
padding:relative;
padding-top:6%;
padding-bottom:6%;
margin-top:2%;
margin-bottom:8%;
background-color:rgba(0,0,0,0.7);
max-width:660px;
margin-left:20%;
}
</style>
    </head>
<div class="banner_image">
<div class="container">
<div class="banner_content" >
    <h2>Flat 40% OFF</h2>
    <a href="product.php" class="btn btn-info btn-lg-active" value="ShopNow" target="_blank">Shop Now</a>
</div>
</div>
</div>
</html>
<?php
require 'foot1.php';
?>
   
