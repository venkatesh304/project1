<?php  
$a=$_GET["var1"];
$b=$_GET["var2"];
$c=$_GET["var3"];
$d=$_GET["var4"];
$e=$_GET["var5"];
$f=$_GET["var6"];
$g=$_GET["var7"];
$h=$_GET["var8"];
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'venkatesh';   
$conn = mysqli_connect($host, $user, $pass,$dbname,3306);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
$sql = "INSERT INTO users(fname,lname,email,mobile,gender,address,uname,pwd) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h')";  
if(mysqli_query($conn, $sql)){  
 echo "Registered successfully";  
}else{  
echo "Could not insert record: ". mysqli_error($sql);  
}   
?>