<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
	<a class="navbar-brand" href="index.php">Seccomm.net</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-layer-group"></i> Applications</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="documents/">Documents</a>
					<div class="dropdown-divider"></div>
          <a class="dropdown-item" href="contracts">Contracts</a>
					<div class="dropdown-divider"></div>
          <a class="dropdown-item" href="devices/">Devices</a>
        </div>
      </li>
		 </ul><!-- Login button in right side -->
		<ul class="nav navbar-nav navbar-right"> <!-- Login button in right side -->
	  <li class="nav-item active">
        <a class="nav-link" href="logout.php"><i class="fas fa-user-tie"></i><?php if ($_SESSION['userid'] == "") { echo " Login"; } else { echo " Logout:";} ?><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" tabindex="-1" aria-disabled="true"><?php echo $_SESSION['userid']?></a>
      </li>
    </ul>
    <!-- <form action="search.php" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
<!-- <div class="container">
	<div class="row" style="height:30px">
	</div>
</div> -->
