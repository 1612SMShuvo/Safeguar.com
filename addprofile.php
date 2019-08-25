<!DOCTYPE html>
<html>
<head> <style>
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

<title>Online</title> 
<link type="text/css" rel="stylesheet" href="ass.css">
<h2></h2>
     </head>
	 <body div class="wrapper">

	 <table border="1" align="center" width="100%">
	 <tr>
	 <td width="20%" height="150px" div id="logo">
	 	 <img src="aa.PNG"  width="100%" height="100%">

	 </td>
	 <td><div class="slideshow-container">

  
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="4.jpg" style="width:100%; height:150px;">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="5.jpg" style="width:100%;height:150px;">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="6.jpg" style="width:100%; height:150px;">

  </div>

  
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>


<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
	 </td>
	 </tr>
	 
	 <tr>
	 <td colspan="2" height="50px">
	 <table cellpadding="20px" border="1" width="100%" height="100%">
   <tr>
   <td div id="home" > <a href="online.php"> <input type="button" name="btn" value="Home"></a></td>
   <td div id="about"><a href="addprofile.php"> <input type="button" name="btn" value="Add Guard"></a></td>
   <td div id="contuct"><a href="Allrequest.php"> <input type="button" name="btn" value="View Request"></a></td>
   <td div id="contuct"><a href="Admin.php"> <input type="button" name="btn" value="Log out"></a></td>
   </tr> 
   </table>
	 </td>
	 </tr>
	 <table>
<div class="form">
<form class="login-form" action="upload.php" method="POST">
			<h1 style="color:gray;">Add Guard</h1>
      <input type="text" placeholder="Guard's Name" name="name"/>
      <input type="text" placeholder="Guard's phone no." name="phone"/>
      <input type="number" placeholder="Guard's Age" name="age"/>
      <input type="text" placeholder="Guard's NID no." name="nid"/>
      <input type="text" placeholder="Guard's Address" name="address"/>
      <input type="text" placeholder="Guard's Religion" name="religion"/>
      <input type="number" placeholder="Guard's Experience(Year)" name="yr"/>
			<input type="text" placeholder="Guard's Salary" name="salary"/>
			<input type="text" placeholder="Guard's Gender" name="gender"/>
      <input type="text" placeholder="Guard is available ?" name="available"/>
			<button type="submit">Add Now</button><br>
</form>
</div>
	 </table>

	 </table>

	 
	 
	 <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
	 </body>

</html>

