<?php
 	

SESSION_START();
	
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database_name="dailywallet";

/* connect to sever and select database*/
$conn=mysqli_connect($servername, $username, $password,$database_name);


$email=$_POST['email'];
$password=$_POST['pswd'];

$q="SELECT * FROM register WHERE email ='$email' AND password ='$password'";


$result=mysqli_query($conn,$q);


if($num=mysqli_fetch_array($result))
{
	header('location:main.php');
	
}



?>	