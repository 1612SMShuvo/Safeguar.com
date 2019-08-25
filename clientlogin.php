<?php
require_once 'connection.php';
$uname=$_POST['uname'];
$password=$_POST['password'];

$uname = stripcslashes($uname);
$password = stripcslashes($password);

$uname = mysqli_real_escape_string($connect,$uname);
$password = mysqli_real_escape_string($connect,$password);

$result = mysqli_query($connect,"SELECT * FROM client where uname='$uname' and password='$password' ") 
or die (mysqli_error());
$row=mysqli_fetch_array($result);


if(($row['uname'] == $uname) && ($row['password'] == $password))
{
	
header("Location: Clientshow.php");
}
else 
{
echo("You Enterred Wrong Username Or Password <br><br><a href='Client.php'><button type='button'>Try again</button></a>");
}
 ?>