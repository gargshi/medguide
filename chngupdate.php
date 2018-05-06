<?php
include 'db.php';

 
  $i=1;
 $user = $_SESSION['user'];
 $Id = $user;

 $sql = "SELECT * FROM description WHERE user_name = '$Id'";
 $sql2= "SELECT * FROM location WHERE user_name = '$Id'";
 $sqlcp="select * from login where user_name= '$Id'";
 $query = mysqli_query($con,$sql);

    


While($status = mysqli_fetch_assoc($query))
{
   $ownername=$status['owner_name'];
   $welcomeusername=$status['user_name'];
   $shopname=$status['shopname'];
   
}
$query = mysqli_query($con,$sql2);
While($status = mysqli_fetch_assoc($query))
{
   $pincode=$status['pincode'];
   $district=$status['district'];
   $city=$status['city'];
   $state=$status['state'];
   $address=$status['address'];
   
}
//$query =  mysqli_query($con,$sqlcp);
//while($status= mysql_fetch_assoc($query))
//{
//    $oldpas=$status['password'];
//}


?>
<!DOCTYPE html>
<html lang="hi">
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
  <script src="jquery.min.js"></script>
  <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script-->
  <link type="text/css" rel="stylesheet" href="list1css.css">
  

</head>

<body>

<div id="menu">
    <ul>
        <li id="logoimage" style="padding-right: 40px"><img src="mediguide.png" alt="logo here"/></li>
                 <li style="color:white;">Welcome <?php echo "$welcomeusername";?></li>
                 <li><a href="http://localhost/a/Medicine/Medicine/list1.php#wholecontent" title="Your main details">Home</a></li>
                 <li><a href="http://localhost/a/Medicine/Medicine/list1.php#stocks" title="Your stock details">Stock</a></li>
                 <li><a href="http://localhost/a/Medicine/Medicine/list1.php#liscencedetail" title="Your liscense details">License</a></li>
                 <li><a>Options</a>
                     <ul>
                         <li><a href="indexcpic.php">Change Your Shop's Picture</a></li>
                         <li><a href="chngpass.php">Change Your Acc. Password</a></li>
                         <li><a href="logout.php">Logout</a></li>
                     </ul>
                 </li>     
		 
	   </ul>
</div>
<br>    
<br>
<br> 
<div  id="wholecontent">

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php $sql1="SELECT * FROM shop_pic where user_name='$welcomeusername';";
	$result_set=mysqli_query($con,$sql1);
	if($row1=mysqli_fetch_array($result_set))?>
    <form method='POST' action='' >
    <table id="detail-table" cellspacing="30px">
        <tr><td colspan="2">Your details are as follows:-</td><td rowspan="7"> <img height='100px' width='200px' src="uploads/<?php echo $row1['file']; ?>"></td></tr>
        <tr><td><b>Owner Name:</b></td><td><?php echo "$ownername"; ?></td>
        </tr>
        <tr><td><b>Your Shop name:</b></td><td><input type="text" style="height:30px; width:200px; font-size: 17px" value='<?php echo "$shopname"; ?>'/></td>
        </tr>
        <tr><td><b>Pincode:</b></td><td><input type="text" style="height:30px; width:200px; font-size: 17px" name='pincode1' value='<?php echo "$pincode"; ?>'/></td>
        </tr>
        <tr><td><b>District:</b></td><td><input type="text" style="height:30px; width:200px; font-size: 17px" name='district1' value='<?php echo "$district"; ?>'/></td>
        </tr>
        <tr><td><b>City:</b></td><td><input type="text" style="height:30px; width:200px; font-size: 17px" name='city1' value='<?php echo "$city"; ?>'/></td>
        </tr>
        <tr><td><b>State:</b></td><td><input type="text" style="height:30px; width:200px; font-size: 17px" name='state1' value='<?php echo "$state"; ?>'/></td>
        </tr>
        <tr><td><b>Address:</b></td><td><input type="text" style="height:30px; width:200px; font-size: 17px" name='address1' value='<?php echo "$address"; ?>'/></td>
        </tr>
        
        <tr>
        <td><input type="submit" value="Update" style="height:40px;font-size: 15px; border-color:#6666ff; border-radius: 10px;  background-color: #6666ff; color: white; width:300px" name="update1"></td>
        </tr>
    </table>
    </form>    
    <?php
    extract($_POST);
    

  /*  $pinc=$_POST['pincode1'];
$distt=$_POST['district1'];
$cit=$_POST['city1'];
$sta=$_POST['state1'];
$add=$_POST['address1'];*/

if(isset($_POST['update1'])){
$sql3="UPDATE location SET pincode='$pincode1', district='$district1', city='$city1', state='$state1', address='$address1' WHERE user_name='$welcomeusername';";
$result= mysqli_query($con,$sql3);

header("location: http://localhost/a/Medicine/Medicine/list1.php#wholecontent");
}
//$sql3="UPDATE location SET  WHERE user_name='$welcomeusername'";
//$result= mysqli_query($con,$sql3);}
 ?>


</div>
</body>
</html>