<?php
include_once 'dbconfig.php';


if(isset($_POST['btn-upload']))
{    
        $usr=$_POST['username'];
        $sqldel="SELECT * FROM shop_pic where user_name='$usr';";
	$result_set=mysqli_query($conn,$sqldel);
        if($row1=mysqli_fetch_array($result_set)){$filename1="uploads/".$row1['file'];
                    unlink($filename1);}
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="uploads/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		
                $sql="update shop_pic set file='$final_file',type='$file_type',size='$new_size' where user_name='$usr'";
		mysqli_query($conn,$sql);
		?>
		<script>
		alert('successfully uploaded');
                    
        </script>
		<?php
                header("location: list1.php");
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
               
        </script>
		<?php
                header("location: list1.php");       
	}
}
?>