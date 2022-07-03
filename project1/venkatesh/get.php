<?php  
$i=$_GET["var9"];
$j=$_GET["var10"];
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'venkatesh';   
$conn = mysqli_connect($host, $user, $pass,$dbname,3306);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
$sql = "select * from users where uname like '$i' and pwd like '$j';";  
$result = mysqli_query($conn, $sql); 
if (mysqli_num_rows($result)>0)
{
	echo "login success";	
}
else 
{
	echo "login not success";
}     
?>