<?php 
 
require_once 'connection.php';

 

if($_GET) {
	$id = $_GET['id'];

    $sql = "DELETE FROM request  WHERE id='$id'" ;
    if($connect->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
		header('location:Allrequest.php');
    } else {
        echo "Erorr while updating record : ". $connect->error;
    }
 
    $connect->close();
 
}

 
?>