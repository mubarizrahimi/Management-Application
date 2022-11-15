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
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card card-signin my-5" style="border-radius: 1rem;">
        <div class="card-body">
    <!-- <h2 class='login_title text-center' style="padding:20px;">Login</h2> -->
    <center><img src="logos/logo-black.PNG" class="center" style="width:200px;height:100px;"/></center>
      <form class="form-signin" action="?login=1" method="post">
	       <div class="mb-3">
      		<label for="exampleDropdownFormEmail2" class="form-label">Email or Username</label>
		      <input type="text" class="form-control" id="exampleDropdownFormEmail2" name="email" placeholder="alex@example.com / alex">
	       </div>
	        <div class="mb-3">
		          <label for="exampleDropdownFormPassword2" class="form-label">Password</label>
		            <input type="password" class="form-control" id="exampleDropdownFormPassword2"  name="passwort" placeholder="Password">
	             </div>
	              <div class="mb-3">
		                <div class="form-check">
			                 <input type="checkbox" class="form-check-input" id="dropdownCheck2">
			                 <label class="form-check-label" for="dropdownCheck2">Remember me</label>
		                  </div>
	                   </div>
	                  <button type="submit" class="btn btn-primary">Sign in</button>
                    <!-- <hr class="my-4"> -->
                    <?php echo $errorMessage; ?>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
