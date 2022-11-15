



<?php

echo "</br>"."</br>"."Read From DB---------------"."</br>";
echo "Current Date: ".date("Y-m-d H:i:s")."</br>"."</br>";
$totalpreis=761;
$totalremains= 761; //insert one time in create form take from Totalprise
$monthly=31.71; //from Database already avalable
$paid=221.97; //from Database

//insert one time in create form
$startdate = '2020-01-20';
$months= ($totalpreis)/$monthly;
//$lastmonth= $totalremains%$monthly;
$totalmonths = ceil($months)."<br>";
//--convert String to Int
$totalmonths=(int)$totalmonths; //insert onetime to db
$enddate = date('Y-m-d', strtotime($startdate. " + $totalmonths months"));

echo "Total Remained Preis: ".$totalremains."<br>";
echo "Monthly Preis: ".$monthly."<br>";
echo "Paid: ".$paid."<br>";
echo  "Total months: ".$totalmonths. "<br>";   //one time in DB
echo "Start Contract: ".$startdate."</br>";
echo "End Contract: ".$enddate."</br>";
echo "-----------------------------------"."</br>";

echo "</br>"."</br>"."</br>";
echo "Insert into DB---------------"."</br>";
if ($monthly < $totalremains) {
  $paid=$paid+$monthly; // result should be added to DB for next time
  $totalremains= $totalremains-$paid; // result should be added to DB for next time
    // here  insert in to table (Paid and remains)
} else {
  $paid=$paid+$totalremains; // result should be added to DB for next time
  $totalremains= $totalpreis - $paid;
  // here  insert in to table (Paid and remains)
}

//$remainingmonths= $totalmonths-1;
echo "Paid: ".$paid. "<br>"."Remains: ".$totalremains. "<br>"."Last Payment: ".$enddate. "<br>";



echo "</br>";
echo "-----------------------------------"."</br>";

?>
