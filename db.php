<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
$con = mysqli_connect("localhost:3306","root","","medicine");

if(mysqli_connect_errno())
{
  echo mysqli_connect_errno();
  exit();
}

else
{
   session_start();
}

?>