
<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="styles.css" type="text/css"/>
     
    
</head>
<body>
    
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"  name="registration" >
<div class="container">
<br/>
<h1> &nbsp; Registration Form </h1>
    
<hr>
     
 
<input  type="text" placeholder="Seller name *" name="sellername" minlength="3" required ><br/>   
<input  type="text" placeholder="Address *" name="address" required><br/>
<input  type="text" placeholder="City *" name="city" required><br/>
<input  type="number" placeholder="(123)456 7890 " name="phone" minlength="10" pattern="\d{3}[\-]\d{3}[\-]\d{4}" required> <br/>
<input  type="email" placeholder="Enter Email *" name="email" required><br/>
<input  type="text" placeholder="Vehicle Make" name="make" required><br/>
<input  type="text" placeholder="Vehicle Model" name="model" required><br/>
<input  type="number" placeholder="Vehicle Year" name="year" maxlength="4" required><br/>

      
<hr>
 <input type="submit" name="signup" id="signup" class="registerbtn" value="Register" />
<input type="reset" name="reset" id="reset" class="resetbtn"/>
  
<hr>
</div>
   
</form>
     <?php
include("connect.php");

if(isset($_POST['signup']))
 {   
   
   $sn=$_POST['sellername'];
   $a=$_POST['address']; 
   $ci=$_POST['city'];
   $p=$_POST['phone'];
   $e=$_POST['email']; 
   $m=$_POST['make'];
   $mo=$_POST['model'];
   $y=$_POST['year'];
    
    
$q="insert into user(sellername,address,city,phone,email,make,model,year) values('$sn','$a','$ci','$p','$e','$m','$mo','$y')";
$res=mysqli_query($c,$q);
if(!empty($res))
{echo "succesfully";
    header('location:website.php');}
 else
 {echo "failed";}
 
}
     
?>
</body>



</html>

