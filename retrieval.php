<?php
session_start();
$username=($_GET['a']);
$password=($_GET['b']);
$db = mysqli_connect('localhost','root','','mainproject') or die('Error connecting to MySQL server.');
$firstquery="SELECT * FROM user WHERE username='$username'";
$result=mysqli_query($db,$firstquery);
if(mysqli_num_rows($result)==0)
{
	echo "No such username found in Database";
}
else
{
	$secondquery="SELECT * FROM user WHERE username='$username'";
	$result2=mysqli_query($db,$secondquery);
	$row=mysqli_fetch_assoc($result2);
	if($row['password']== $password)
	{
		$_SESSION['username']=$username;
		$_SESSION['id']=$row['userID'];
		echo "loggedin";
	}
	else
	{
		echo "bad password";
	}
}
?>