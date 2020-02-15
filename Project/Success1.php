<?php
include 'Connect.php';
$rep=$_SESSION['name'];
$put=$_SESSION['id'];
?>
<html>
    <head>
        <title>
            Success
        </title>
	<link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
        <?php 
        $got="select name from order_placed where =$rep";
        $gain=  mysqli_query($con,$got);
       // $am=  mysqli_fetch_array($gain);
                ?>
        <div class="container">
            <div class="jumbotron">
                <h1>Thankyou for Shopping with us <?php echo $gain;?></h1>
                <a href="index.php" class="btn btn-warning">click here to Purchase Any Other item</a>
            </div>
        </div>
    </body>
</html>
<?php