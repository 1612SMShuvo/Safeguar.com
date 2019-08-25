<!DOCTYPE html>
<html>
<head>  
<title>Online</title> 
<link type="text/css" rel="stylesheet" href="ass.css">
<h2></h2>
     </head>
	 <body div class="wrapper">
	 <form>
	 <table border="1" align="center" width="100%" style="background-color:black;">
	 <tr>
	 <td width="20%" height="150px" div id="logo">
	 	 <img src="aa.png"  width="100%" height="100%">

	 </td>
	 <td><div class="slideshow-container">

  
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="add.JPG" style="width:100%; height:150px;">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="6.JPG" style="width:100%;height:150px;">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="4.JPG" style="width:100%; height:150px;">

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
	 <table cellpadding="20px" border="1" width="100%" height="100%" style="background-color:black;">
	 <tr>
	 <td div id="home" > <a href="online.php"> <input type="submit" name="btn" value="Home"></a></td>
	 <td div id="about"><a href="Admin.php"> <input type="button" name="btn" value="Admin Login"></a></td>
	 <td div id="contuct"><a href="Client.php"> <input type="button" name="btn" value="Client Log in"></a></td>
	 </tr>
	 </table>
	 </td>
	 </tr>
	 
	 <tr>
	 <td div id="add">
	 <img src="5.JPG"  width="100%" height="190%">
	 </td>
	 <td height="500px" div id="content" style="background-color:black;">
	 <img src="3.jpg"  width="100%" height="100%" valign="top"><br>
	 <img src="2.jpg"  width="100%" height="100%" valign="top">
	 </td>
	 </tr>
	 
	 <tr>
	 <td height="80px" colspan="2" div id="article">
	 <P> <h2>This is the one of most relaible security Guard service in Bangaldesh</h2> <align="center"</p>
	 
	 </td
	 </tr>
	 <tr>
	 <td height="60px" colspan="2" div id="footer">
	 <img src="1.jpg"  width="30%" height="100%">
	  <p><a href="https:Facebook.com">Visit our Facebook Page</a></p>
	 </td>
	 </tr>
	 </table>
	 </form>
	 
	 
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

