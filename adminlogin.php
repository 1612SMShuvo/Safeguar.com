<?php
if($_POST) {
    $uname = $_POST['uname'];
    $password = $_POST['password'];
if($uname == Admin && $password ==root){
		header("Location:AdminShow.php");
}
else{
		header("Location:Admin.php");
}
}
?>