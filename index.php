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
      <h4 align="center" style="padding:20px 0px;">Enternal Links</h4>
        <div class="row">
            <div class="col">
                  <p><a class="btn btn-lg btn-success btn-block" href="http://10.10.10.254" target="_blank"><i class="fas fa-random"></i> Fritz.box</a></p>
            </div>
            <div class="col">
                  <p><a class="btn btn-lg btn-success btn-block" href="https://pve.rahimi.lan:8006" target="_blank"><i class="fas fa-random"></i> Proxmox</a></p>
            </div>
            <div class="col">
                  <p><a class="btn btn-lg btn-success btn-block" href="https://opnsense.rahimi.lan" target="_blank"><i class="fas fa-random"></i> Opnsense</a></p>
            </div>
            <div class="col">
                  <p><a class="btn btn-lg btn-success btn-block" href="https://printer.rahimi.lan" ><i class="fas fa-random"></i> Printer</a></p>
            </div>
        </div>
            <div class="row">
              <div class="col">
                  <p><a class="btn btn-lg btn-success btn-block" href="https://cloud.seccomm.net" target="_blank"><i class="fas fa-cloud"></i> Cloud</a></p>
              </div>
              <div class="col">
                  <p><a class="btn btn-lg btn-success btn-block" href="https://seccomm.net/phpmyadmin" target="_blank"><i class="fas fa-database"></i> Database</a></p>
              </div>
            </div>
        <div class="row">
          <div class="col">
	       <p><a class="btn btn-lg btn-success btn-block" href="https://home.seccomm.net/memory.php" target="_blank"> Server-Memory</a></p>
          </div>
          <div class="col">
                <p><a class="btn btn-lg btn-success btn-block" href="https://dashboard.webkeyapp.com/" target="_blank"> Webkey-Publice</a></p>
          </div>
          <div class="col">
                <p><a class="btn btn-lg btn-success btn-block" href="https://shabo.rahimi.lan:8080/" target="_blank"> Webkey-Local</a></p>
          </div>
	</div>
         <div class="row">
          <div class="col">
	       <p><a class="btn btn-lg btn-success btn-block" href="http://bacula-server.rahimi.lan:9095" target="_blank"> Bacula-server</a></p>
	  </div>
	  <div class="col">
               <p><a class="btn btn-lg btn-success btn-block" href="http://plex-server.rahimi.lan:32400" target="_blank"> Plex-server</a></p>
          </div>
        </div>
        <div class="row">
         <div class="col">
        <p><a class="btn btn-lg btn-success btn-block" href="http://mail.seccomm.net" target="_blank"> Roundcube</a></p>
   </div>
   <div class="col">
              <p><a class="btn btn-lg btn-success btn-block" href="http://mail.seccomm.net/iredadmin" target="_blank"> Mail-Admin</a></p>
         </div>
       </div>

        <!-- <hr class="my-4"> -->
        <h4 align="center" style="padding:20px 0px;">External Links</h4>
        <div class="row">
        <div class="col">
              <p><a class="btn btn-lg btn-success btn-block" href="https://keep.google.com/" target="_blank"><i class="fab fa-google"></i> Google Keep</a></p>
        </div>
        <div class="col">
            <p><a class="btn btn-lg btn-success btn-block" href="https://app.creately.com/diagram/5Kzd3PcpM0r/edit" target="_blank"><i class="fas fa-network-wired"></i> Network-plan</a></p>
       </div>
      </div>
    </div>
    <!-- Links Closed -->
  <?php include "tail-script.php"; ?>
</body>
</html>
