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

	
	
    
 
    $sql = "UPDATE request SET gname='$gname', gphone='$gphone', gage='$gage', gnid='$gnid',gsalary='$gsalary', gender='$gender', rsalary='$rsalary', contuct='$contuct' WHERE id='$id'" ;
    if($connect->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
		header('location:Allrequest.php');
    } else {
        echo "Erorr while updating record : ". $connect->error;
    }
 
    $connect->close();
 
}

 
?>