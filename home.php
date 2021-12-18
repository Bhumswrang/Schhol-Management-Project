<html>
<head>
<link href='css/home.css' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
</head>

<body>

<div class="container">
<div class="header">
<img src="head.jpg" style="width:100%; height:175px">
</div>

<div class="navbar">
<center>
<a href="home.php">HOME</a>
<a href="aboutus.php">ABOUT US</a>
<a href="academic.php">ACADEMY</a>
<a href="gallery.php">GALLERY</a>
<a href="index.php">LOGIN</a>

</center>
</div>

<div class="container1">
<div class="main_body">
<div id="new">
<center><h4>PRINCIPAL'S MESSAGE</h4></center>
<center><img src="principal.jpg" id="image" style="width:75%;height:170px;"></center>
<p id="para">
I gladly welcome all of you to our enriching website, which I am sure will serve as an 
essential in teractive tool for all of you to acquaint yourselves with the large and 
extended shankardev sishu niketan family.
</p>
</div>
<div id="new1">
<center><h4>NOTIFICATIONS</h4></center><BR>

<marquee onmouseover="this.stop()" onmouseout="this.start()" direction="up">

<p ID="PARA">2nd Unit Test starts from 20/08/2020.</p><BR>

<p ID="PARA"p>3rd Unit Test starts from 11/12/2020</p></marquee>
</div>


</div>

<div class="container2">

<div class="slideshow-container" >

<div class="mySlides fade">
<img src="photos/1.44.jpeg" style="width:100%; height:545px">
</div>

<div class="mySlides fade">

<img src="photos/1.22.jpeg" style="width:100%; height:545px">
</div>

<div class="mySlides fade">
<img src="photos/1.33.jpeg" style="width:100%; height:545px">
</div>

<div class="mySlides fade">
<img src="photos/1.11.jpeg" style="width:100%; height:545px">
</div>

</div>

<div style="text-align:center">
<span class="dot"></span> 
<span class="dot"></span> 
<span class="dot"></span> 
</div>

</div>
</div>

<div>

<div id="contents">
<p align="center"> 
All contents Copyright@ Shankardev Shishu Niketan,<br> Kaziranga,(Kohora) <br> nogaon, Assam-784001 <br>All Copyrights reserved<br> Tel. No. 0375-XXXXXX </p>
</div>

</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
var i;
var slides = document.getElementsByClassName("mySlides");
var dots = document.getElementsByClassName("dot");
for (i = 0; i < slides.length; i++) {
slides[i].style.display = "none";  
}
slideIndex++;
if (slideIndex > slides.length) {slideIndex = 1}    
for (i = 0; i < dots.length; i++) {
dots[i].className = dots[i].className.replace(" active", "");
}
slides[slideIndex-1].style.display = "block";  
dots[slideIndex-1].className += " active";
setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script> 


</body>
</html>