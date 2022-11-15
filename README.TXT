1. navi bar <?php include "navi.php";?>
	copy navi.php in root folder
2. <div class="mx-auto" style="padding:10px;"><h2>Centered element</h2></div>
3. remove this
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
    <span class="navbar-toggler-icon"></span>
    </button>



	   <?php include "navi.php"; ?>

  <div class="container" style="padding-top:20px">
	<div class="row">
		<div class="col"><a href="index.php"><h3>Documents</h3></a></div>
	    <div class="col" align="right"><a class="btn btn-primary" href="create.php"><i class="fa fa-user-plus"></i> Create</a></div>
	</div>
  </div>




  Navi-script.php----------------------
  add navi-script before the html body close tag.
  --put here
  <?php include "navi-script.php"; ?>
  --before below line
  </body>



4. add 5 files in a new page
include('/var/www/html/management-application/db-connections/db.php');  (one connection for all application)
include('/var/www/html/management-application/auth.php');      (on the tope of page)
<?php include "/var/www/html/management-application/script-link.php"; ?> (add it in the head of html (not header) )
<?php include "/var/www/html/management-application/navi.php"; ?>  (after body start)
<?php include "/var/www/html/management-application/navi-script.php"; ?> (before body closed)



example

include('/var/www/html/management-application/auth.php');
include('/var/www/html/management-application/db-connections/db.php');
<!DOCTYPE html>
<head>
  <title>Restricted area </title>
	<?php include "/var/www/html/management-application/script-link.php"; ?>
</head>
<body>
		<?php include "/var/www/html/management-application/navi.php"; ?>
    <center><h2>your website</h2><center>
		<?php include "/var/www/html/management-application/navi-script.php"; ?>
</body>
</html>


-sreach view docoment
<td><a href="<?php echo 'documents/uploads/'.$row['image'] ?>" target="_blank"><?php echo $row['image'] ?></a></td>


-----installation
1. Create database (any name)
2. Restore sql file to the database you created
3. Put the same database connection information in db-connections/config.php and db.php
4. Defauld user: admin@mail.com Pass: admin
5. Done enjoy!
