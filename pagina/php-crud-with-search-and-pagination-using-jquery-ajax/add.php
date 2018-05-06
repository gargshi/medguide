<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$result = mysql_query("INSERT INTO toy(name, code, category, price, stock_count) VALUES('".$_POST["name"]."','".$_POST["code"]."','".$_POST["category"]."','".$_POST["price"]."','".$_POST["stock_count"]."')");
?>