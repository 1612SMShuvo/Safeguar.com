<?php 

include ('ClientShow.php');
require_once 'connection.php';
 
if($_GET) {
    $id = $_GET['id'];
 
    $sql = "SELECT * FROM guard WHERE id = {$id}";
    $result = $connect->query($sql);
 
    $data = $result->fetch_assoc();
 
    $connect->close();
 
?>
<!DOCTYPE html>
<html>
<head>  <style>
#header {
	width: 960px;
	height: 45px;
	margin: 0 auto;
	background-image: url("benar.PNG");
}
#menu {
	float: right;
	width: 650px;
	height: 50px;
	background: url(images/img02.jpg) no-repeat left top;
}
.bodyss{
	background-image: url("benar.PNG");
}
.login-page {
  background-color: #cccccc;
  width: 1200px;
  padding: 10% 0 0;
  margin: auto;
}
.formmm {


  background: #FFFFFF;
  max-width: 200px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: Right;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.5), 0 5px 5px 0 rgba(0, 0, 0, 0.5);
}
.form {


  background: #FFFFFF;
  max-width: 800px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.5), 0 5px 5px 0 rgba(0, 0, 0, 0.5);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #66ffff;
  width: 35%;
  border: 0;
  padding: 15px;
  color: #b3b3b3;
  font-size: 10px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #66ffff;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #ff5050;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  
  /*background: #CD5C5C; /* fallback for old browsers */
     
}
.form.massage h1{
 margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 20px;
}

</style> 
<link rel="stylesheet" href="Style.css">
</head>

<body class="bodyss">
<div class="form">
<h1>You Want to delete this record......???</h1>
	 <form class="login-form" action="deletenow.php" method="POST">
			<input type="text" name="name" value="<?php echo $data['name']?>" />
      <input type="text" name="phone" value="<?php echo $data['phone']?>" />
      <input type="number" name="age" value="<?php echo $data['age']?>" />
      <input type="text" name="address" value="<?php echo $data['address']?>" >
      <input type="text" name="religion" value="<?php echo $data['religion']?>" >
      <input type="number" name="yr"" value="<?php echo $data['yr']?>" />
      <input type="text" name="salary"" value="<?php echo $data['salary']?>" />
      <input type="text" name="gender" value="<?php echo $data['gender']?>" >
      <input type="number" name="place"" value="<?php echo $data['place']?>" />
      <input type="text" name="hdate"" value="<?php echo $data['hdate']?>" />
      <input type="text" name="edate" value="<?php echo $data['edate']?>" >
			
			<button type="submit">Delete</button><br>
	 </form>
	 </div>
 
  </body>
  </html>
<?php
}
?>