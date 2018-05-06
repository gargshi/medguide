<!DOCTYPE html>
<html>
<head>
<style>
    #resutab{
        padding:5px;
         width: 100%;
    }
    #resutab td, th {
    border: 1px solid black;
    padding: 5px;
}
</style>
</head>
<body>

<?php
$q = $_GET['q'];
$pin= $_GET['pin'];
$con = mysqli_connect('localhost:3306','root','','medicine');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"medicine");
if($pin==""){
$sql="SELECT * FROM location WHERE user_name in (select user_name from stock where medicines like '%".$q."%')";}
else{
    if($q==""){$sql="SELECT * FROM location WHERE pincode like '%".$pin."%'";}
    else{
    $sql="SELECT * FROM location WHERE user_name in (select user_name from stock where medicines like '%".$q."%') and pincode like '%".$pin."%'";
}}
$result = mysqli_query($con,$sql);

echo "<table style='color: white' id='resutab'>
<tr>
<th>Owner Name</th><th>Shop Name</th><th>Contact No. 1</th><th>Contact No. 2</th><th>Address</th><th>City</th><th>District</th><th>State</th><th>Pincode</th><th>Shop Photo</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    $sql1="select owner_name, shopname, phone_no, mobileno from description where user_name ='".$row['user_name']."'";
    $result1 = mysqli_query($con,$sql1);
    if($row1 = mysqli_fetch_array($result1)){
        echo "<td>" . $row1['owner_name'] . "</td>";
        echo "<td>" . $row1['shopname'] . "</td>";
        echo "<td>" . $row1['phone_no'] . "</td>";
        echo "<td>" . $row1['mobileno'] . "</td>";
    }
    else{
    echo "<td>No Result</td>";
    echo "<td>No Result</td>";
    echo "<td>No Result</td>";
    echo "<td>No Result</td>";
    }
    
    echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['city'] . "</td>";
    echo "<td>" . $row['district'] . "</td>";
    echo "<td>" . $row['state'] . "</td>";
    echo "<td>" . $row['pincode'] . "</td>";
    $sql2="select * from shop_pic where user_name ='".$row['user_name']."'";
    $result2 = mysqli_query($con,$sql2);
    if($row2 = mysqli_fetch_array($result2)){
        
    echo "<td> <img height='100px' width='200px' src='uploads/".$row2['file']."'></td>";}
    else{
    echo "<td>No Result</td>";    
    }
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>
