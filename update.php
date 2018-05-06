<?php
include 'db.php';
 $user = $_SESSION['user'];
 $Id = $user;
extract($_POST);

if(isset($update) && $_POST['medicine1']!='')
{
 $sql = "INSERT INTO `medicine`.`stock` (`user_name`, `medicines`) VALUES ('$Id', '$medicine1');";
 $query = mysqli_query($con, $sql);
 
 if($query)
 {
   	//header("location: list1.php");
        header("location: http://localhost/a/Medicine/Medicine/list1.php#stocks");
 }

 else
 {
    echo"<script>alert('Sorry, the record was not updated. Please enter the valid medicine name.');</script>";
 }
}
else
 {
    echo"<script>alert(' Please enter the valid medicine name that you want to be inserted.');</script>";
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script-->
  <link type="text/css" rel="stylesheet" href="list1css.css">

</head>

<body>

<div id="menu">
       
	   <ul>
               <li id="logoimage" style="padding-right: 40px"><img src="mediguide.png" alt="logo here"/></li>
                 <li style="color:white;">Welcome <?php echo "$Id";?></li>
                 <li><a href="list1.php">Home</a></li>
		 
		 <li><a href="logout.php">Logout</a></li>
	   </ul>
</div>
<div class="container-fluid" style="color: black; font-family: Arial;background-color:rgba(255,255,255,0.6); ">
<br>
<br>
<br>
<br>
<br><br><br>
<form action="update.php" method="POST">
<table class="table table-hover" style="margin-left: 100px;font-size:20px;" cellspacing="50px">

<thead>
<tr>
<th>Sno</th>
<th>Name of Medicine</th>

</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td><input type="text" name="medicine1" style="height:25px;width: 400px; font-size: 15px"></td>

</tr>

<tr>
    <td><input type="submit" value="Update" style="height:40px;font-size: 15px; border-color:#6666ff; border-radius: 10px;  background-color: #6666ff; color: white; width:300px" name="update"></td>
</tr>
</tbody>
</table>
    </form>
</div>
<br><br>
</body>
</html>