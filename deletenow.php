<?php 
 
require_once 'connection.php';

 

if($_POST) {
	$id = $_POST['id'];

    $sql = "DELETE FROM guard  WHERE id='$id'" ;
    if($connect->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
		header('location:Viewguards.php');
    } else {
        echo "Erorr while updating record : ". $connect->error;
    }
 
    $connect->close();
 
}

 
?>