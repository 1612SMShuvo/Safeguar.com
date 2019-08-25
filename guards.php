<?php 
require_once 'connection.php';
 
include ('ClientShow.php');
?>
<title>Admin Show</title>

<link rel="stylesheet" href="Style.css">

  
<body class="bodyss">

               
	<center>
				<table border="4" style="background-color: white">
        <thead>
            <tr>
                <th>Guard's name</th>
                <th>Guard's Age</th>
                <th>Guard's NID no.</th>
                <th>Guard's Religion</th>	
                <th>Guard's Experience</th>
                <th>Guard's Salary</th>
                <th>Guard's Gender</th>
                <th>Working Place</th>
                <th>Expiring date</th>
                <th>Available</th>
                <th>Option</th>
            </tr>
</thead>
<tbody>
            <?php
            $sql = "SELECT * FROM guard ";
            $result = $connect->query($sql);
 
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row['name']." </td>
                        <td>".$row['age']."</td>
						<td>".$row['nid']."</td>
                        <td>".$row['religion']."</td>
                        <td>".$row['yr']."</td>
						<td>".$row['salary']."</td>
						<td>".$row['gender']." </td>
                        <td>".$row['place']."</td>
						<td>".$row['edate']."</td>
                        <td>".$row['available']."</td>
                        <td>
                            <a href='Addrrequest.php?id=".$row['id']."'><button type='button'>Add Request</button></a>
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