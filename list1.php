<?php
include 'db.php';

 
  $i=1;
 $user = $_SESSION['user'];
 $Id = $user;

 $sql = "SELECT * FROM description WHERE user_name = '$Id'";
 $sql2= "SELECT * FROM location WHERE user_name = '$Id'";
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
  <link type="text/css" rel="stylesheet" href="stockcss.css">
  <link type="text/css" rel="stylesheet" href="liscencepagecss.css">
  <script>
        $(document).ready(function(){
            // Add smooth scrolling to all links
        $("a").on('click', function(event) {
            
            // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
        // Prevent default anchor click behavior
            event.preventDefault();

      // Store hash
              var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
              $('html, body').animate({
              scrollTop: $(hash).offset().top
                }, 1000, function(){
   
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
        });
        } // End if
      });
    });
      </script>

</head>

<body>

<div id="menu">
    <ul>
        <li id="logoimage" style="padding-right: 40px"><img src="mediguide.png" alt="logo here"/></li>
                 <li style="color:white;">Welcome <?php echo "$welcomeusername";?></li>
                 <li><a href="#wholecontent" title="Your main details">Home</a></li>
                 <li><a href="#stocks" title="Your stock details">Stock</a></li>
                 <li><a href="#liscencedetail" title="Your liscense details">License</a></li>
                 <li><a>Options</a>
                     <ul>
                         <li><a href="chngupdate.php">Change Your Details</a></li>
                         <li><a href="indexcpic.php">Change Your Shop's Picture</a></li>
                         <li><a href="chngpass.php">Change Your Account Password</a></li>
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
    <table id="detail-table" cellspacing="30px">
        <tr><td colspan="2">Your details are as follows:-</td><td rowspan="7"> <img height='100px' width='200px' src="uploads/<?php echo $row1['file']; ?>"></td></tr>
        <tr><td><b>Owner Name:</b></td><td><?php echo "$ownername"; ?></td>
        </tr>
        <tr><td><b>Your Shop name:</b></td><td><?php echo "$shopname"; ?></td>
        </tr>
        <tr><td><b>Pincode:</b></td><td><?php echo "$pincode"; ?></td>
        </tr>
        <tr><td><b>District:</b></td><td><?php echo "$district"; ?></td>
        </tr>
        <tr><td><b>City:</b></td><td><?php echo "$city"; ?></td>
        </tr>
        <tr><td><b>State:</b></td><td><?php echo "$state"; ?></td>
        </tr>
        <tr><td><b>Address:</b></td><td><?php echo "$address"; ?></td>
        </tr>
        
    </table>




</div>


<div id="stocks">
    <br>
    <br>
    <br>
    <br>
    <br>
    <center><p style="font-size:20px;">YOUR STOCK DETAILS</p></center>
    <center>
    <?php

 $medicine_name=array();
 
 $i=1;


    $sql = "SELECT * FROM stock WHERE user_name = '$Id'";

    $query = mysqli_query($con, $sql);
    
  While($status = mysqli_fetch_assoc($query))
{
      $welcomeusername=$status['user_name'];
   $medicine_name[$i]=$status['medicines'];
   
   $i=$i+1;
}

     $num = mysqli_num_rows($query);

  ?>
        <div style="background-color: rgba(255,255,255,0.7); width: 350px; color: black; border-radius:10px;">
<table class="table table-hover" id="medlist" cellspacing="30px;">

<thead>
<tr>
<th>Sno</th>
<th>Name of Medicine</th>

</tr>
</thead>


<?php 

for($i=1;$i<=$num;$i++)
{
   echo "<tbody>";
   echo "<tr>";
   echo "<td>".$i."</td>";
   echo "<td>".$medicine_name[$i]."</td>";
   
   echo "</tr>";
   echo "</tbody>";
}
?>

</table>
        </div>
    <form method="POST" action="update.php"><input type="submit" id="subbuton" value="Update"></form>
    </center>
</div>
<div id="liscencedetail">
    <center><p style="font-size:20px;"> SHOP LISCENCE DETAILS</p></center>
    <center>
        <?php
        
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
    ?></center>
</div>
<div id='codefalconlink'><p> Developed by Aditya, Shivam and Shubham.<a href='codefalconinfo.php' target="_blank">      Know about us here </a></p></div>
</body>
</html>