<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <link href="./css/style.css" rel="stylesheet"/>
 <script src='https://www.google.com/recaptcha/api.js'></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link type="text/css" rel="stylesheet" href="loginpagestye.css"/>


<?php
if(isset($_POST['submit']) && !empty($_POST['submit'])){
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
        //your site secret key
        $secret = '6Lf7xkEUAAAAAJlTT76tKIqMZyYtrnWDZ9-DCOgN';
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse,TRUE);
        if($responseData['success'])
        {
        extract($_POST);
    $query = "select * from login where user_name = '".mysqli_real_escape_string($con,$user)."' and password = '".mysqli_real_escape_string($con,$pass)."'";
	$ex_query = mysqli_query($con, $query);

    if(mysqli_num_rows($ex_query)>0)
    {
      $_SESSION['user'] = $user;
      header("location: list1.php");
    }
    else
    {
      $found="N";
    }
  }}}

?>
</head>
<body>

<br>
<form method="POST" action="" style="background-color: rgba(0,0,0,0.5); margin-left:300px ;width: 800px">
<center>
  <table id='login'><tr><td>
  <div style="font-size: 20px"><p>Go to Home page <a href='Home.html' target="_blank">here </a></p></div></td><td>
<div>LOGIN</div></td></tr></table>



<br/>
    <br/>
        
<div id="Details">
    <br>
        <br>
            <br>
<table border="0">

<tr>
<td style="padding:50px" rowspan="2"><img src="mediguide.png" height="120px" width="185px"/></td>    
<td><input type="text" size="10" name="user" id='textusernam' placeholder="      Enter your username" required/></td>

</tr>
    
<tr>

<td><input type="password" size="10" name="pass" id='textpass' placeholder="      Enter your password" required/></td></tr>
   

<?php
   if(isset($found))
   {
      echo "<div id ='error'><p style='font-family:Arial; color: white'>Invalid user name or password</p></div>";
   }
?>

</table>
                   
    

</div>
</div>
<div class="g-recaptcha" data-sitekey="6Lf7xkEUAAAAAE3ZYJB1kJwqrskVpbb6FwOoM3Mh"></div>
<center>
            <input type="submit" name="submit" value="Log in" id="submit_button"/></center>
<div id='sign_up_sugg'><p>Don't have an account? <a href='signingup.php' target="_blank">Sign up </a> here.</p></div>
</form>    
    
</center>
<div id='codefalconlink'><p> Developed by Aditya, Shivam and Shubham.<a href='codefalconinfo.php' target="_blank">      Know about us here </a></p></div>
</body>
</html>