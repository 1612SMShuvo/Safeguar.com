<?php 
 
require_once 'connection.php';

 
if ($_POST) {
    # code...

    $id=$_POST['id'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $age=$_POST['age'];
    $nid=$_POST['nid'];
    $address=$_POST['address'];
    $religion=$_POST['religion'];
    $yr=$_POST['yr'];
    $salary=$_POST['salary'];
    $gender=$_POST['gender'];
    $place=$_POST['place'];
    $hdate=$_POST['hdate'];
    $edate=$_POST['edate'];
    $available=$_POST['available'];
    
	
    
 
    $sql = "UPDATE guard SET name='$name', phone='$phone', age='$age', nid='$nid', address='$address', religion='$religion', yr='$yr', salary='$salary', gender='$gender', place='$place', hdate='$hdate', edate='$edate', available='$available' WHERE id={$id}" ;
    if($connect->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
		header('location:Viewguards.php');
    } else {
        echo "Erorr while updating record : ". $connect->error;
    }
 
    $connect->close();
 

}
 
?>