<?php 
$con=mysqli_connect("localhost","root","","products")
or die(mysqli_error($con));
$id=$_GET['id'];
$name= mysqli_real_escape_string($con,$_GET['name']);
$Score=$_GET['Score'];
$user_query="insert into custom(id,name,score)values('$id','$name','$Score')";
$result= mysqli_query($con,$user_query) or die(mysqli_error($con));
echo "Sucessfully Submitted";
$_SESSION['name']=$name;
$_SESSION['id']=  mysqli_insert_id($con);
?>


