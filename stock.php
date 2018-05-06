<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script-->
  <link type="text/css" rel="stylesheet" href="stockcss.css">
  
  <?php
include 'db.php';

 $user = $_SESSION['user'];
 $Id = $user;
 $medicine_name=array();
 $quantity=array();
 $i=1;


    $sql = "SELECT * FROM stock WHERE user_name = '$Id'";

    $query = mysqli_query($con, $sql);
    
  While($status = mysqli_fetch_assoc($query))
{
      $welcomeusername=$status['user_name'];
   $medicine_name[$i]=$status['medicines'];
   $quantity[$i]=$status['quantity'];
   $i=$i+1;
}

     $num = mysqli_num_rows($query);

  ?>
</head>
<body>
<div id="wholecontent">
<div id="menu">
       
	   <ul>
                 <li style="color:white;">Welcome <?php echo "$welcomeusername";?></li>
                 <li><a href="list1.php">Home</a></li>
		 <li><a href="stock.php">Stock</a></li>
		 <li><a href="liscence.php">Liscence</a></li>
		 <li><a href="logout.php">Logout</a></li>
	   </ul>
</div>
<br>
<br>
<br>
<br>
<br><br><br>
<div id="stocks">
<table class="table table-hover">

<thead>
<tr>
<th>Sno</th>
<th>Name of Medicine</th>
<th>Quantity</th>
</tr>
</thead>


<?php 

for($i=1;$i<=$num;$i++)
{
   echo "<tbody>";
   echo "<tr>";
   echo "<td>".$i."</td>";
   echo "<td>".$medicine_name[$i]."</td>";
   echo "<td>".$quantity[$i]."</td>";
   echo "</tr>";
   echo "</tbody>";
}
?>

</table>
</div>
</div>
<br><br>
<align="right"><form method="POST" action="update.php"><input type="submit" value="Update"></form></align>
</body>
</html>