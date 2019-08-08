
<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="styles.css" type="text/css"/>
     
    
</head>
<body>
    
<form method="post" action="website_search.php"  name="registration" >
<div class="container">
<br/>
<h1> &nbsp; SEARCH CARS </h1>
    
<hr>
     
 
<input  type="text" placeholder="Vehicle Make" name="make" required><br/>

      
<hr>
 <input type="submit" name="signup" id="signup" class="registerbtn" value="Search" />
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

