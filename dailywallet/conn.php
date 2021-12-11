<?php

$servername ="localhost";
$username = "root";
$password = "";
$database_name="dailywallet";

// Create connection
$conn = mysqli_connect($servername,$username, $password,$database_name);

// Check connection




if(isset($_POST['submit']))
{


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$gen=$_POST['gender'];
$dcode=rand(10,1000000);
$email=$_POST['email'];
$password=$_POST['pswd'];


	$sql="INSERT INTO register(fname,lname,email,dob,gen,dcode,password) values ('$fname','$lname','$email','$dob','$gen','$dcode','$password')";

	if(mysqli_query($conn,$sql))
	{

	header("Loaction:index.php");
	}
	else
	{
		echo"wrong";
	}
}
?>