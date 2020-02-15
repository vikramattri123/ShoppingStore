<?php
include 'common1.php';
include 'header.php';
include 'foot1.php';
?>
<html>
    <head>
        <title> Settings</title>
        <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="index.css"> 
    </head><br>
    <br>
    <br>
        <div class="container">
            <div class="row">
                <div class="col-xs-offset-4 col-xs-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h1>Change Password</h1>
                        </div>
                            <form method="POST" action="Settings_script.php">
                              <div class="panel-body">
                                  <div class="form-group">
                                      <input type="text" name="oldPassword" class="form-control" placeholder="Enter Old password" pattern=".{6,}" required>
                                  </div>
                                  <div class="form-group">
                                      <input type="text" name="NewPassword" class="form-control" placeholder="Enter New Password" pattern=".{6,}" required>
                                  </div>
                                  <div class="form-group">
                                      <input type="text" name="Re_Password" class="form-control" placeholder="Re-Enter your Password" pattern=".{6,}" required>
                                  </div>
                                  <button class="btn btn-primary btn-default">Submit</button>
                        </div>
                                </form>
                     </div>
                </div>
            </div>
        </div>
</html>


