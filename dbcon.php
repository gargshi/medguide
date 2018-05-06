<?php
function connect()
{
$server = 'localhost:3306';
$uname = 'root';
$password = '';
$dbname = 'medicine';

mysql_connect($server, $uname, $password) 
or die();

mysql_select_db($dbname);
}
?>
