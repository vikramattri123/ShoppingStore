<?php
require 'common.php';
if (!isset($_SESSION['Email_id'])) {
    header('location: index.php');
}

$old_pass = $_POST['Old_Password'];
$old_pass = mysqli_real_escape_string($con, $old_pass);
$old_pass = MD5($old_pass);

$new_pass = $_POST['New_Password'];
$new_pass = mysqli_real_escape_string($con, $new_pass);
$new_pass = MD5($new_pass);

$new_pass1 = $_POST['RNew_Password'];
$new_pass1 = mysqli_real_escape_string($con, $new_pass1);
$new_pass1 = MD5($new_pass1);

$query = "SELECT Email_id,Password FROM users WHERE Email_id ='" . $_SESSION['Email_id'] . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$orig_pass = $row['Password'];

if ($new_pass != $new_pass1) {
    header('location: settings.php?error=The two passwords don\'t match');
} else {
    if ($old_pass == $orig_pass) {
        $query = "UPDATE  users SET Password = '" . $new_pass . "' WHERE Email_id = '" . $_SESSION['Email_id'] . "'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        header('location:login.php');
    } else
        header('location: settings.php?error=Wrong Old Password');
}
?>

