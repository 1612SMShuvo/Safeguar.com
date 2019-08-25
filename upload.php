<?php 
 
require_once 'connection.php';




if($_POST){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $age=$_POST['age'];
    $nid=$_POST['nid'];
    $address=$_POST['address'];
    $religion=$_POST['religion'];
    $yr=$_POST['yr'];
    $salary=$_POST['salary'];
    $gender=$_POST['gender'];
    $available=$_POST['available'];
	


 // if(move_uploaded_file($filename,$destination)){
    $sql = "INSERT INTO `guard`(`name`, `phone`, `age`, `nid`, `address`, `religion`, `yr`, `salary`, `gender`, `available`) VALUES ('$name','$phone','$age','$nid','$address','$religion','$yr','$salary','$gender','$available')";

    if(mysqli_query($connect,$sql)) {
        echo "<p>New Record Successfully Created</p>";
		
		header("Location:Viewguards.php");
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }
 
    $connect->close();


}
?>