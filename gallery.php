<!DOCTYPE html>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Alegreya Sans' rel='stylesheet'>
<link href='css/gallery.css' rel='stylesheet' type='text/css'>
	</head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<body>
<div class="header"> <img src="head.jpg" style="width:100%; height:200px">
</div>
<div class="navbar"><center>
<a href="home.php">HOME</a>
		<a href="aboutus.php">ABOUT US</a>
		<a href="academic.php">ACADEMY</a>
		<a href="gallery2.php">GALLERY</a>
    <a href="index.php">LOGIN</a>

</center>
</div>
<br>
<h2 style="text-align:center; font-family: 'ABeeZee'">Image Gallery</h2><br>

<div class="row">
  <div class="column">
    <img src="photos/1.11.jpeg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="photos/1.22.jpeg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="photos/1.33.jpeg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="photos/1.44.jpeg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="photos/1.1.jpeg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="photos/1.2.jpeg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="photos/1.3.jpeg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="photos/1.4.jpeg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
  
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 12</div>
      <img src="photos/1.11.jpeg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 12</div>
      <img src="photos/1.22.jpeg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 12</div>
      <img src="photos/1.33.jpeg" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 12</div>
      <img src="photos/1.44.jpeg" style="width:100%">
    </div>
	 <div class="mySlides">
      <div class="numbertext">5 / 12</div>
      <img src="photos/1.1.jpeg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">6 / 12</div>
      <img src="photos/1.2.jpeg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">7 / 12</div>
      <img src="photos/1.3.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">8 / 12</div>
      <img src="photos/1.4.jpeg" style="width:100%">
    </div>
	 <div class="mySlides">
      <div class="numbertext">9 / 12</div>
      <img src="photos/1.11.jpeg" style="width:100%">
    </div>
	 <div class="mySlides">
      <div class="numbertext">10 / 12</div>
      <img src="photos/1.22.jpeg" style="width:100%">
    </div>
	 <div class="mySlides">
      <div class="numbertext">11 / 12</div>
      <img src="photos/1.33.jpg" style="width:100%">
    </div>
	 <div class="mySlides">
      <div class="numbertext">12 / 12</div>
      <img src="photos/1.44.jpg" style="width:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>
	
  </div>
  
</div>
<div class="footer" style="background-color:#333;color:white;padding:10px;">
<p align="center"> 
All contents Copyright@ Shankardev Shishu Niketan,<br> Kaziranga,(Kohora) <br> nogaon, Assam-784001 <br>All Copyrights reserved<br> Tel. No. 0375-XXXXXX </p>
</div>

<script>		
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

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
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
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
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    
</body>
</html>
