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
<html>
<head>
  <title>Login</title>
  <?php include "head-script.php"; ?>
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <div class="login-box">
    <!-- <h2>Login</h2> -->
    <center><img src="logos/logo-white.PNG" class="center" style="max-width: 80%;" /></center>
    <div style="height:30px;"></div>
    <form action="?login=1" method="post">
      <div class="user-box">
        <input type="text" name="email" required="">
        <label>Username</label>
      </div>
      <div class="user-box">
        <input type="password" name="passwort" required="">
        <label>Password</label>
      </div>
      <button type="submit" class="button">Sign in</button>
    </form>
    <?php if ($errorMessage) { echo '<hr class="my-4">'.'<center>'.$errorMessage.'</center>'; } ?>
  </div>
</body>
</html>
