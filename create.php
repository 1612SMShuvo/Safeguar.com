<?php 
 
require_once 'connection.php';


session_start();

if($_POST) {
    $uname = $_POST['uname'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

 
    $sql = "INSERT INTO client(uname, phone, password) VALUES ('$uname', '$phone', '$password')";
    if($connect->query($sql) === TRUE) {
        echo "<p>New Record Successfully Created</p>";
		
		header("Location:Client.php");
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }
 
    $connect->close();
}
 
?>