<?php session_start();?>
<html>
    <head>
        <link rel='stylesheet' type='text/css' href='signuppagestyle.css'/>
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script>
$(document).ready(function(){
    $("#username1").keyup(function(){
        var thiss = $(this);
        var value = thiss.val(); 
        $.get("check.php",{value:value},function(data){
            thiss.parent('li').siblings('li').html(data);
        });
    });
});
</script>
<script src='https://www.google.com/recaptcha/api.js'></script>
   <!--script type='text/javascript'>
function refreshCaptcha(){
    var img = document.images['captchaimg'];
    img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script-->
<link href="./css/style.css" rel="stylesheet">
        <script src="jquery.min.js"></script>
 



    </head>
    <body>
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
              /*if(isset($submit)){
                if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){  
        $msg="<span style='color:red'>The Validation code does not match!</span>";// Captcha verification is incorrect.     
    }else{*/
                $conn=  mysqli_connect('localhost:3306','root','','medicine');
                echo "<script>alert('Useqqqrname already taken.');</script>";
                if(!$conn)
                {
                    echo 'Connection unsucessfull';
                }
                
                    //echo "<script>alert('Useqqqrname already taken.');</script>";
                    //header("location: index1.php");
                  else{   
                            date_default_timezone_set('Asia/Kolkata');
                            $date = date("Y/m/d");
                            $time = date("h:i:sa");
                
                            if($passwo == $passwo1)
                            {
                                $_SESSION['us']=$username1;
                                $query = "insert into description values('$username1','$name2','$shopname2','$email','$phone','$mob');";
                                $query3= "insert into login values('$username1','$passwo','$date','$time');";
                                $query4= "insert into location values('$username1','$address2','$state2','$city1','$district2','$pincode3');";

                                $exec=  mysqli_query($conn,$query);
                                $exec1=  mysqli_query($conn,$query3);
                                $exec2=  mysqli_query($conn,$query4);
                                
                                header("location: index1.php");
                                
                            }               
                
                            else
                            {
                            
                                echo "<script>alert('Passwords Do not match.');</script>";
                            }
                        mysqli_close($conn);  
                        }
                }
   }
}

?>

<br>

<center>
<div id="login">SIGN UP</div>

<center><p style='font-family: Arial; font-size: 15px; color: white;'>Please fill out the fields carefully.</p></center>

    <form method="POST">    
<div id="Details">
    
<table border="0">

<tr>
    <td rowspan=8 style="padding-right: 100px"><img src="mediguide.png"/></td>
    <td><ul style="padding: 0px;"><li><input type="text" id="username1" name="username1" placeholder="Enter your username" value="<?php if(isset($_POST['username1'])){echo $_POST['username1'];}?>" required/></li><li></li></ul></td>
</tr>
<tr>

<td><input type="text" name="name2" placeholder="Enter your Full name" value="<?php if(isset($_POST['name2'])){echo $_POST['name2'];}?>" required/></td>

</tr>
<tr>
    <td><input type="text" name="shopname2" placeholder="Enter your Shop's name" value="<?php if(isset($_POST['shopname2'])){echo $_POST['shopname2'];}?>" required/></td>

</tr>    
<tr>

<td><input type="text" size="10" name="address2" placeholder="Enter your Address" value="<?php if(isset($_POST['address2'])){echo $_POST['address2'];}?>" required/></td>

</tr>
<tr>
    <td><input type="number" size="6" name="pincode3" placeholder="Enter your Pin Code." value="<?php if(isset($_POST['pincode3'])){echo $_POST['pincode3'];}?>" required/></td>

</tr>
<tr>
    <td><input type="text" name="district2" placeholder="Enter your District" value="<?php if(isset($_POST['district2'])){echo $_POST['district2'];}?>" required/></td>

</tr>
<tr>
    <td><input type="text" name="city1" placeholder="Enter your City" value="<?php if(isset($_POST['city1'])){echo $_POST['city1'];}?>" required/></td>

</tr>
<tr>
    <td><select name="state2" placeholder="Enter your State " value="<?php if(isset($_POST['state2'])){echo $_POST['state2'];}?>" required>
            <option>Choose your State</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="Madhya Pradesh">Madhya Pradesh</option>
            <option value="Assam">Assam</option>
            <option value="Bihar">Bihar</option>
            <option value="Jharkhand">Jharkhand</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Telangana">Telangana</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Meghalaya">Meghalaya</option>
            <option value="Nagaland">Nagaland</option>
            <option value="Tripura">Tripura</option>
            <option value="Himachal Pradesh">Himachal Pradesh</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Punjab">Punjab</option>
            <option value="Haryana">Haryana</option>
            <option value="Delhi">Delhi</option>
            <option value="West Bengal">West Bengal</option>
            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
            <option value="Uttarakhand">Uttarakhand</option>
            <option value="Chattisgarh">Chattisgarh</option>
            <option value="Kerala">Kerala</option>
            <option value="Odisha">Odisha</option>
            <option value="Sikkim">Sikkim</option>
            
            
        
        </select></td>

</tr>    
<tr>
    <td rowspan="7"></td><td><input type="number" size="10" name="mob" placeholder="Enter your Mobile no." value="<?php if(isset($_POST['mob'])){echo $_POST['mob'];}?>" required/></td>
</tr>
<tr>

    <td><input type="number" size="10" name="phone" placeholder="Enter your phone no." value="<?php if(isset($_POST['phone'])){echo $_POST['phone'];}?>" required/></td>

</tr>
    
<tr>

<td><input type="text" name="email" placeholder="Enter your email-id" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>" required/></td>

</tr>
    
<tr>

<td><input type="password" size="10" name="passwo" placeholder="Enter your password"  id='pi'  required/></td>
</tr>
<tr>

<td><input type="password" size="10" name="passwo1" placeholder="Re-enter your password" id='rpi'  required/></td>
</tr>

<!--tr>
<td><img src = "captcha.php" id="captcha"></td>
</tr>
<tr>
<td><input type="text" name="code"></td></tr>
<tr--> 

<tr>
    <td><center><input type="submit" name="submit"  value="Sign up" id="submit_button"/></center></td>
</tr>


</table>


</div>
<div class="g-recaptcha" data-sitekey="6Lf7xkEUAAAAAE3ZYJB1kJwqrskVpbb6FwOoM3Mh"></div>
</form>
</center>
<div id='codefalconlink'><p> Developed by Aditya, Shivam and Shubham.<a href='codefalconinfo.php' target="_blank">      Know about us here </a></p></div>
    </body>
</html>