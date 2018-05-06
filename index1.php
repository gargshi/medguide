<?php
include_once 'dbconfig.php';
session_start();
$userna=$_SESSION['us'];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<link href="uploadpicstyle.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div id="headertable1">
        <table> 
            <tr>
                <td><image src="mediguide.png" height="130" width="200" style="border-radius: 15px; padding-left: 5px; padding-top: 5px"/></td>
                <td id="bannername">Welcome to Medicine Guide</td>
                
                
            </tr>
        </table>
    </div>
<div id="header">
<label></label>
</div>
<div id="body">
    <br>
    <center><h3>Upload your Shop Photo here</h3></center>
	<form action="upload.php" method="post" enctype="multipart/form-data">
            <table id='formtable' cellspacing='20px'><tr><td>Enter your Username</td><td><input type="text" name="username" value="<?php echo $userna; ?>" id='usnenter' readonly='readonly'/></td></tr>
                <tr><td>Enter your Shop's Image</td><td><input type="file" name="file" /></td></tr>
                <tr><td></td><td><button type="submit" name="btn-upload" id='uploadbutton'>Upload Image </button></td></tr></table>
	</form>
    <br /><br />
    <?php
	if(isset($_GET['success']))
	{
		?>
        <label>File Uploaded Successfully...  <a href="view.php">click here to view file.</a></label>
        <?php
	}
	else if(isset($_GET['fail']))
	{
		?>
        <label>Problem While File Uploading !</label>
        <?php
	}
	else
	{
		?>
        <label></label>
        <?php
	}
	?>
</div>
    <?php




?>

</body>
</html>