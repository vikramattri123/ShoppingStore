<?php
include 'Connect.php';
$Type1=$_POST['education'];
$s=implode($Type1);
echo $s;
echo
$num=$_SESSION['type'];
$sol=$_SESSION['email'];
$read=$_SESSION['name'];
$gain=$_SESSION['id'];
$sum=0;
$r="select amount from storage where Type='$num' and  Shoot_type='$Type1'";
$get=  mysqli_query($con,$r) or die(mysqli_error($con));
$show=  mysqli_num_rows($get);
if($show==0)
{
    echo"You have added nothing in the cart";
}
else
{
   while($put=  mysqli_fetch_array($get))
   {
       $sum=$sum+$put['Price'];
       $id="";
       $id=$put["id"];
   }
}
 echo $sum;
   ?>

