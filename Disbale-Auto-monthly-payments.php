<?php
  include('db-connections/db.php');
  //---Read Data from DB
  foreach($conn->query('SELECT * FROM contracts') as $row) {
    $id = $row['id'];
    $total_price = $row['total_price'];
    $per_month = $row['per_month'];
    $paid = $row['paid'];
    $status = $row['status'];
    $diff = $total_price - $paid;

    //-----Only active Payments will be paid
    if ($status == "Active") {

      if ($total_price == 0) {
        $paid = $paid + $per_month;
      }elseif ($per_month >= $diff) {
        $paid = $paid + $diff;
      }else {
        $paid = $paid + $per_month;
      }
    }

    // Payments will be Update in DB
   if(!isset($errorMsg)){
    $sql = "update contracts set paid = '".$paid."' where id=".$id;
    $result = mysqli_query($conn, $sql);
    if($result){
      $successMsg = 'Auto-monthly-payment runed successfully';
    }else{
      $errorMsg = 'Error '.mysqli_error($conn);
      }
    }
  }
  echo $successMsg;
?>
