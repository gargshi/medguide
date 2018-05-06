<?php
include 'db.php';
$status_check = "YES";

$sql = "select * from liscence";
$query = mysqli_query($con, $sql);

if(mysqli_num_rows($query))
{
 while($status = mysqli_fetch_assoc($query))
 {
  $liscence_status = $status['liscence_status'];
	if($liscence_status == $status_check)
	{
      $s = 'Y';
	$date_modified = $status['date'];
	}
	
	else
	{
	   $s = 'N';
	}
 }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link type="text/css" rel="stylesheet" href="list1css.css">
</head>
<body>
<div class="container-fluid">
<div id="menu">
       
	   <ul>
	     <li><a href="list1.php">Home</a></li>
		 <li><a href="stock.php">Stock</a></li>
		 <li><a href="liscence.php">Liscence</a></li>
		 <li><a href="logout.php">Logout</a></li>
	   </ul>
</div>
<br>
<br>
<div class="jumbotron">   
<?php
if($s=='Y')
{ 
echo "<h4>Liscence Status: $liscence_status </h4>"; 
echo "<h4>Last Renewed : $date_modified </h4>";
}

else
{
   	   echo "Liscence Expired";
       echo "<form action='renew.php' method='POST'><input type='submit' value='Renew' name='renew'></form>";
}
?>



</div>
</body>
</html>