<?php 
require_once 'connection.php';
 
include ('AdminShow.php');
?>
<title>Admin Show</title>

<link rel="stylesheet" href="Style.css">

  
<body class="bodyss">

               
	<center>
				<table border="4" style="background-color: white">
        <thead>
            <tr>
                <th>Guard's name</th>
                <th>Guard's phone no.</th>
                <th>Guard's Age</th>
                <th>Guard's NID no.</th>
                <th>Guard's Expected Salary</th>
                <th>Guard's Gender</th>
                <th>Offerred Salary</th>
                <th>Contuct No.</th>
                <th>Option</th>
            </tr>
</thead>
<tbody>
            <?php
            $sql = "SELECT * FROM request ";
            $result = $connect->query($sql);
 
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row['gname']." </td>
                        <td>".$row['gphone']."</td>
                        <td>".$row['gage']."</td>
						<td>".$row['gnid']."</td>
						<td>".$row['gsalary']."</td>
						<td>".$row['gender']." </td>
                        <td>".$row['rsalary']."</td>
                        <td>".$row['contuct']."</td>
                        <td>
                            <a href='RequestEdit.php?id=".$row['id']."'><button type='button'>Edit</button></a>
                            <a href='requestdelete.php?id=".$row['id']."'><button type='button'>Delete</button></a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='12'><center>No Data Avaliable</center></td></tr>";
            }
            ?>
        </tbody>

</table>
<br><br><br><br>
		<button onclick="myFunction()">Print this page</button>

<script>
function myFunction() {
    window.print();
}
</script>
</div>
	</center>
</body>