<?php 
 
require_once 'connection.php';




if($_POST){
    $gname=$_POST['gname'];
    $gphone=$_POST['gphone'];
    $gage=$_POST['gage'];
    $gnid=$_POST['gnid'];
    $gsalary=$_POST['gsalary'];
    $gender=$_POST['gender'];
    $rsalary=$_POST['rsalary'];
    $contuct=$_POST['contuct'];
	


 // if(move_uploaded_file($filename,$destination)){
    $sql = "INSERT INTO `request`(`gname`, `gphone`, `gage`, `gnid`,`gsalary`, `gender`,`rsalary`,`contuct`) VALUES ('$gname','$gphone','$gage','$gnid','$gsalary','$gender','$rsalary','$contuct')";

    if(mysqli_query($connect,$sql)) {
        echo "<p>New Record Successfully Created</p>";
		
		header("Location:guards.php");
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }
 
    $connect->close();


}
?>