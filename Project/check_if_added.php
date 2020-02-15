<?php
function check_if_added_to_cart($item_id)
{
    require 'common1.php';
    $id1=$_SESSION['pid'];
$sub="select * from user_items where item_id='$item_id' AND user_id='$id1' and status='Added to cart'";
$total1=  mysqli_query($con,$sub) or die(mysqli_error($con));
if(mysqli_num_rows($total1)>=1)
{
    return $item_id;
}
else
{
    return 0;
}
}
?>