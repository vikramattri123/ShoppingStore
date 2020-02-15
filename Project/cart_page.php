<?php
include 'common1.php';
require 'header.php';
require 'foot1.php';
?>
<html>
    <head>
        <title>Cart page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
<div class="container">
<div class="table-reponsive">
<div class="row">
<div class="col-xs-offset-3 col-xs-6">
<table class="table table-hover table-header">
    <tbody class="center"><br><br><br><br>
<tr>
<th>Item Number</th>
<th>Item Name</th>
<th>Price</th>
<th></th>
</tr
 <?php
{
include 'common1.php';
$sum=0;
$u_id=$_SESSION['pid'];
$save="select items.price AS Price,items.name AS Name,items.id from user_items join items on user_items.item_id=items.id where user_items.user_id=$u_id and status='Added to cart'";
$get=  mysqli_query($con,$save) or die(mysqli_error($con));
$show=  mysqli_num_rows($get);
}
?>
<tbody>
<?php
{
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
      echo "<tr>
          <td>".$put['id']."</td>
              <td>".$put['Name']."</td>
                  <td>".$put['Price']."</td>
                     <td><a href='Cart-Remove.php?id1={$put['id']}' class='btn btn-danger' class='remove_item_link'>Remove</a></td>
                      <tr>";
   }
   echo "<tr>
       <td>Total Price</td>
       <td>Rs: ".$sum;"</td>
        <tr>";
       echo "<tr>     
       <td><a href='Success.php?itemid=$id''  class='btn btn-block btn-success'>Buy Item</a></td>
       <tr>";
}
}
   ?>
</tbody>      
</tr><br><br>
</tbody>
</table>
</div>
</div>
</div>
</div>
<br>
<br>
<br><br>
<br><br>
<br><br>
<br><br>
<br>
<br><br>
</body>
</html>