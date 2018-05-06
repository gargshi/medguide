<?php

if(isset ($_GET['value']) && $_GET['value']!='')
{
    
// Connect to MySQL
// Change the username, password and hostname in the function mysql_connect as per your configuration
include_once 'dbcon.php';

connect();

    
    $value=$_GET['value'];
    
        $query2="SELECT user_name FROM login WHERE user_name = '$value'";

        $results2 = mysql_query($query2)
        or die(mysql_error());
    
        if(mysql_num_rows($results2)>0)
        {
            echo '<label style="color: white">Username exists</label>';
        }
        else
        {
            echo '<label>Username available</label>';
        }
}
?>
