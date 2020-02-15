<?php
include 'common1.php';
$id4=$_SESSION['pid'];
$add=$_GET['id1'];
$max="delete from user_items where user_id='$id4' and item_id='$add'";
$read=mysqli_query($con,$max) or die(mysqli_error($con));
header("location:cart_page.php");
?>
