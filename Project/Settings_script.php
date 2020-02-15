<?php
include 'common1.php';
if(!isset($_SESSION['email']))
{
    header("location:index.page");
}
else
{      
        $p_id=$_SESSION['pid'];
        $pass1=$_POST['oldPassword'];
         $pass1= md5($pass1);
        $pass2=$_POST['NewPassword'];
        $pass2=md5($pass2);
        $pass3=$_POST['Re_Password'];
        $pass3=md5($pass3);
        $l1=strlen($pass2);
        $l2=strlen($pass3);
           $start="select password from users where id=$p_id";
           $take=mysqli_query($con,$start)or die(mysqli_error($con));
           $s1=  mysqli_fetch_array($take);
           $w1=$s1['password'];
           if($pass1 == $w1)
           {
           $swipe="update users set password='$pass2' where id=$p_id";
           $execute=  mysqli_query($con,$swipe) or die(mysqli_error($con));
           echo "<div class='jumbotron'><h1>Successfully Change your password</h1></div>";
           echo "<tr>
               <a href='product.php' class='btn btn-block btn-submit'>Click To Continue Shopping</a>
               </tr>";
           }
        else
        {
            header("location:Settings.php");
        }
        
      }
?>
