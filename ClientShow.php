<!DOCTYPE html>
<html>
<head>  
<title>Online</title> 
<link type="text/css" rel="stylesheet" href="ass.css">
<h2></h2>
     </head>
	 <body div class="wrapper">
	 <form>
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
	 <td div id="home" > <a href="online.php"> <input type="submit" name="btn" value="Home"></a></td>
	 <td div id="about"><a href="guards.php"> <input type="button" name="btn" value="Guard informtion"></a></td>
	 <td div id="contuct"><a href="Client.php"> <input type="button" name="btn" value="Log out"></a></td>
	 </tr> 
	 </table>
	 </td>
	 </tr>
	 <table>
	 
	 </table>

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

