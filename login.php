<?php
session_start();
include "db-connections/config.php";
if(isset($_GET['login'])) {
    $email = $_POST['email'];
    $passwort = $_POST['passwort'];

    $statement = $pdo->prepare("SELECT * FROM users WHERE email = :email or vorname = :email");  // Edited for user and email
    $result = $statement->execute(array('email' => $email));
    $user = $statement->fetch();

    //Überprüfung des Passworts
    if ($user !== false && password_verify($passwort, $user['passwort'])) {
        $_SESSION['userid'] = $user['email'];
       // die('Login erfolgreich. Weiter zu <a href="index.php">internen Bereich</a>');
	    header('location:index.php');
    } else {
        $errorMessage = "You have entered an invalid username or password<br>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <div class="container">
          <div class="row">
              <div class="col-lg-3 col-md-2"></div>
              <div class="col-lg-6 col-md-8 login-box">
                  <div class="col-lg-12 login-key">
                      <center><img src="logos/logo-white.PNG" class="center" style="max-width: 80%;" /></center>
                  </div>
                  <!-- <div class="col-lg-12 login-title">
                                     ADMIN PANEL
                  </div> -->
                  <div class="col-lg-12 login-form">
                      <div class="col-lg-12 login-form">
                          <form action="?login=1" method="post">
                              <div class="form-group">
                                  <label class="form-control-label">USERNAME</label>
                                  <input type="text" name="email" class="form-control">
                              </div>
                              <div class="form-group">
                                  <label class="form-control-label">PASSWORD</label>
                                  <input type="password" name="passwort" class="form-control" i>
                              </div>

                              <div class="col-lg-12 loginbttm">
                                  <div class="col-lg-6 login-btm login-text">
                                      <!-- Error Message -->
                                   <?php echo $errorMessage;?>
                                  </div>
                                  <div class="col-lg-6 login-btm login-button">
                                      <button type="submit" class="btn btn-outline-primary">LOGIN</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-2"></div>
              </div>
          </div>
</body>
</html>
