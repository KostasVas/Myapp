<?php
$username=($_GET['a']);
$password=($_GET['b']);
$firstname=($_GET['c']);
$lastname=($_GET['d']);
$cellphone=($_GET['e']);
$db = mysqli_connect('localhost','root','','mainproject') or die('Error connecting to MySQL server.');
$secondquery="SELECT * FROM user WHERE username='$username'";
$result=mysqli_query($db,$secondquery);
if(mysqli_num_rows($result)>=1)
{
	echo "Duplicate username";
}
else if($username==NULL OR $password==NULL OR $firstname==NULL OR $lastname==NULL OR $cellphone==NULL)
{
	echo "Fields empty";
}
else
{
	$query="INSERT INTO user (userID,username,password,FirstNAme,LastName,Cellphone,userlvl) VALUES ('DEFAULT','$username','$password','$firstname','$lastname','$cellphone','0')";
	mysqli_query($db,$query);
	echo "cool";
}

?>