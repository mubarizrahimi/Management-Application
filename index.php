<?php
session_start();
if(!isset($_SESSION['userid'])) {
    header('location: login.php');
}
//Abfrage der Nutzer ID vom Login
$userid = $_SESSION['userid'];
//echo "Logedin as: ".$userid;
if($_SESSION['userid'] == "mubariz.rahimi@gmail.com") {
	}
else
	{
	header('location: documents/index.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Management-Application</title>
    <!-- links & Banner css file -->
    <?php include "head-script.php"; ?>
</head>
<body>
  <!-- Navi Start -->
  <?php include "navi.php"; ?>
  <!-- Navi Closed  -->
  <!-- Banner -->
  <?php include "banner.php"; ?>
  <!-- Banner close -->
  <!-- Homepage Start -->
    <div class="container" >
      <div class="row">
        <div class="col">
          <p><a class="btn btn-lg btn-success btn-block" href="documents"><i class="far fa-file-pdf"></i> Documents</a></p>
        </div>
        <div class="col">
          <p><a class="btn btn-lg btn-success btn-block" href="contracts"><i class="far fa-file-alt"></i> Contracts</a></p>
        </div>
        <div class="col">
          <p><a class="btn btn-lg btn-success btn-block" href="devices"><i class="fas fa-desktop"></i> Devices</a></p>
        </div>
      </div>
      <div class="row">
        <div class="col">
         <p><a class="btn btn-lg btn-success btn-block" href="register"><i class="fas fa-user-plus"></i> Register</a></p>
       </div>
      </div>
    </div>
   <!-- Links Closed -->
  <?php include "tail-script.php"; ?>
</body>
</html>
