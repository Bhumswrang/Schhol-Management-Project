<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Alegreya Sans' rel='stylesheet'>
<style>
body {
    font-family: 'Alegreya Sans';font-size: 18px;
}

.container{
		width:100%;
		height:175px;
		background-color:lightblue;
		border:1px solid black;
	}
	
	.navbar{
	width:100%;
	height:50px;
	background-color:black;
	border:1px solid black;
	}
	
	.navbar a {
display: block;
color: white;
text-align: center;
padding: 10px 20px;
text-decoration: none;
float:left;
margin:5px;
}

.navbar a:hover {
background-color: green;
color: black;
}


	
	
	
	
	body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.contr {
  border-radius: 25px;
  background-color: #f2f2f2;
  padding: 20px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

@media screen and (max-width: 800px) {
		.navbar{
		width:100%;
		height:150px;
		}
		}

</style>
</head>
<body>

<body>

<div class="container">
	<div class="header"> <img src="head.jpg" style="width:100%; height:175px">
</div>

<div class="navbar">
<center>
<a href="home.php">HOME</a>
		<a href="aboutus.php">ABOUT US</a>
		<a href="academic.php">ACADEMY</a>
		<a href="gallery.php">GALLERY</a>
		<a href="contact.php">CONTACT US</a>
    <a href="index.php">INDEX</a>

</center>
</div>


<center><h3>Contact Form</h3></center>

<div class="contr">
  <div class="row">
    <div class="column">
      <!--<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="490px" id="gmap_canvas" src="https://maps.google.com/maps?q=creamy%20cravings&t=&z=13&ie=UTF8&iwloc=&output=embed" 
	  frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net"></a></div></div>-->
	  
	  
	  
	  
	  <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="490px" id="gmap_canvas" src="https://maps.google.com/maps?q=shankardev%20shisu%20niketan%20kohora%20kaziranga&t=&z=13&ie=UTF8&iwloc=&output=embed" 
	  frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
	 </div></div>
	  
    </div>
    <div class="column">
      <form action="/action_page.php" >
        <label for="fname">Name</label>
        <input type="text" id="name" name="name" placeholder="Your name..">
        <label for="lname">Address</label>
        <input type="text" id="address" name="address" placeholder="Your Address..">
        <label for="lname">Mobile</label>
        <input type="text" id="mobile" name="lastname" placeholder="Your Mobile Number..">
        <label for="subject">Message</label>
        <textarea id="subject" name="message" placeholder="Write your Message.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
	
 
  








</dv>
	<div class="footer" style="background-color:#333;color:white;padding:10px;">
<p align="center"> 
All contents Copyright@ Shankardev Shishu Niketan,<br> Kaziranga,(Kohora) <br> nogaon, Assam-784001 <br>All Copyrights reserved<br> Tel. No. 0375-XXXXXX </p>
</div>

	
	</body>
</html>