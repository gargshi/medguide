<!DOCTYPE html>
<html>
<head>
<style>
    p{
        padding:5px;
        color: white;
    }
</style>
</head>
<body>

<?php
$q = $_GET['username'];



$con = mysqli_connect('localhost:3306','root','','medicine');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"medicine");
$sql="SELECT * FROM location WHERE user_name like '%".$q."%'";
$result = mysqli_query($con,$sql);

if(mysqli_fetch_array($result)) {
    echo "<p> Username is already taken</p>";
}
mysqli_close($con);
?>
</body>
</html>
