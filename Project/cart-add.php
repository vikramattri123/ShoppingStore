<?php
require 'common1.php';
$user_id=$_SESSION['pid'];
$item_id1=$_GET['id'];
$get="INSERT into user_items(user_id,item_id,status)values('$user_id','$item_id1','Added to cart')";
$store=  mysqli_query($con,$get)or die(mysqli_error($con));
//$_SESSION['id5']=$item_id1;
header("location:product.php");
?>

