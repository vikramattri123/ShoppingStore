<?php
include 'common1.php';
$name=  mysqli_real_escape_string($con,$_POST['name']);
$email1=  mysqli_real_escape_string($con,$_POST['email']);
$password_1=$_POST['password'];
$pass1=  md5($password_1);
$contact=  mysqli_real_escape_string($con,$_POST['contact']);
$city=mysqli_real_escape_string($con,$_POST['city']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$fetch="select id from users where email='$email1'";
$total= mysqli_query($con,$fetch) or die(mysqli_error($con));
$result_1 = mysqli_num_rows($total);
if($result_1> 0)
{
    echo "This email is already exist.Add another one";
}
 else 
 {  
   $insert="insert into users(name,email,password,contact,city,address)values('$name','$email1','$pass1','$contact','$city','$address')";
    $restore= mysqli_query($con,$insert)or die(mysqli_error($con)); 
    $id=  mysqli_insert_id($con);
    echo $id;
    $_SESSION['email']=$email1;
    $_SESSION['pid']=$id;
    header("location:product.php");
 }
?>
