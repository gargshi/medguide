<?php
/*
 * @author Shahrukh Khan
 * @website http://www.thesoftwareguy.in
 * @facebbok https://www.facebook.com/Thesoftwareguy7
 * @twitter https://twitter.com/thesoftwareguy7
 * @googleplus https://plus.google.com/+thesoftwareguyIn
 */

require_once("configure.php");

// Very important to set the page number first.
if (!(isset($_GET['pagenum']))) { 
	 $pagenum = 1; 
} else {
	$pagenum = intval($_GET['pagenum']); 		
}
//$q = $_GET['q'];
//$pin= $_GET['pin'];
$q='paracetamol';
//$pin='201005';
//Number of results displayed per page 	by default its 10.
$page_limit =  ($_GET["show"] <> "" && is_numeric($_GET["show"]) ) ? intval($_GET["show"]) : 10;

// Get the total number of rows in the table
//$sql = "SELECT count(*) as count FROM login  WHERE 1" ;
if($pin==""){
$sql="SELECT count(*) as count FROM location WHERE user_name in (select user_name from stock where medicines like '%".$q."%')";}
else{
    if($q==""){$sql="SELECT count(*) as count FROM location WHERE pincode like '%".$pin."%'";}
    else{
    $sql="SELECT count(*) as count FROM location WHERE user_name in (select user_name from stock where medicines like '%".$q."%') and pincode like '%".$pin."%'";
}}
try {
    $stmt = $DB->prepare($sql);
    $stmt->execute();
    $tresults = $stmt->fetchAll();
} catch (Exception $ex) {
    echo($ex->getMessage());
}

$cnt = $tresults[0]["count"];

//Calculate the last page based on total number of rows and rows per page. 
$last = ceil($cnt/$page_limit); 

//this makes sure the page number isn't below one, or more than our maximum pages 
if ($pagenum < 1) { 
	$pagenum = 1; 
} elseif ($pagenum > $last)  { 
	$pagenum = $last; 
}
$lower_limit = ($pagenum - 1) * $page_limit;

if($pin==""){
$sql2="SELECT * FROM location WHERE user_name in (select user_name from stock where medicines like '%".$q."%')";}
else{
    if($q==""){$sql2="SELECT * FROM location WHERE pincode like '%".$pin."%'";}
    else{
    $sql2="SELECT * FROM location WHERE user_name in (select user_name from stock where medicines like '%".$q."%') and pincode like '%".$pin."%'";
}}
try {
    $stmt = $DB->prepare($sql2);
    $stmt->execute();
    $results = $stmt->fetchAll();
} catch (Exception $ex) {
    echo($ex->getMessage());
}
?>
<table class="bordered">
    <tr>
	<th>Owner Name</th>
	<th>Shop Name</th>
	<th>Contact No. 1</th>
	<th>Contact No. 2</th>
	<th>Address</th>
	<th>City</th>
	<th>District</th>
	<th>State</th>
	<th>Pincode</th>
	<th>Shop Photo</th>
    </tr>
    <?php foreach ($results as $res) { ?>
    <tr>
      <td align="center"><?php echo $res['owner_name'] ?></td>
      <td align="center"><?php echo $res['shopname'] ?></td>
      <!--td align="center"><?php echo $res[''] ?></td-->
    </tr>
    <?php
    }
    ?>
</table>
<div class="height30"></div>
<table width="50%" border="0" cellspacing="0" cellpadding="2"  align="center">
<tr>
  <td valign="top" align="left">
	
<label> Rows Limit: 
<select name="show" onChange="changeDisplayRowCount(this.value);">
  <option value="10" <?php if ($_GET["show"] == 10 || $_GET["show"] == "" ) { echo ' selected="selected"'; }  ?> >10</option>
  <option value="20" <?php if ($_GET["show"] == 20) { echo ' selected="selected"'; }  ?> >20</option>
  <option value="30" <?php if ($_GET["show"] == 30) { echo ' selected="selected"'; }  ?> >30</option>
</select>
</label>

	</td>
  <td valign="top" align="center" >
 
	<?php
	if ( ($pagenum-1) > 0) {
	?>	
	 <a href="javascript:void(0);" class="links" onclick="displayRecords('<?php echo $page_limit;  ?>', '<?php echo 1; ?>');">First</a>
	<a href="javascript:void(0);" class="links"  onclick="displayRecords('<?php echo $page_limit;  ?>', '<?php echo $pagenum-1; ?>');">Previous</a>
	<?php
	}
	//Show page links
	for($i=1; $i<=$last; $i++) {
		if ($i == $pagenum ) {
?>
		<a href="javascript:void(0);" class="selected" ><?php echo $i ?></a>
<?php
	} else {  
?>
	<a href="javascript:void(0);" class="links"  onclick="displayRecords('<?php echo $page_limit;  ?>', '<?php echo $i; ?>');" ><?php echo $i ?></a>
<?php 
	}
} 
if ( ($pagenum+1) <= $last) {
?>
	<a href="javascript:void(0);" onclick="displayRecords('<?php echo $page_limit;  ?>', '<?php echo $pagenum+1; ?>');" class="links">Next</a>
<?php } if ( ($pagenum) != $last) { ?>	
	<a href="javascript:void(0);" onclick="displayRecords('<?php echo $page_limit;  ?>', '<?php echo $last; ?>');" class="links" >Last</a> 
<?php
	} 
?>
</td>
	<td align="right" valign="top">
	Page <?php echo $pagenum; ?> of <?php echo $last; ?>
	</td>
</tr>
</table>