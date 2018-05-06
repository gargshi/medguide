<?php
include 'db.php';
$user = $_SESSION['user'];
$Id = $user;
$date = date("Y/m/d");

$sql = "UPDATE `medicine`.`liscence` SET `liscence_status` = 'YES' , `date` = '$date' WHERE `liscence`.`user_name` = '$Id'";
$query = mysqli_query($con, $sql);

if($query)
{
   header("location: liscence.php");
}

else
{
  echo "Failed to Renew Liscence";
}


?>