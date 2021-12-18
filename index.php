<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Alegreya Sans' rel='stylesheet'>
<link href='css/index.css' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="container">

<div class="header"> <img src="head.jpg" style="width:100%; height:175px"></div>
<div class="navbar">
<center>
<a href="home.php">HOME</a>
<a href="aboutus.php">ABOUT US</a>
<a href="academic.php">ACADEMY</a>
<a href="gallery.php">GALLERY</a>
<a href="index.php">LOGIN</a>
</center>
</div>
<div ><form action="login.php"><button id="admin_dash" type="submit" style="background-color: blue; margin-top:3.9em;"> Admin Login</button></form></div>

<div id="form">

<div class="column">
<center> <h2>Student Information</h2>
<form action="index.php" method="post">
<label for="fname"><b>Roll Num</b></label>
<input type="text" id="id" name="rollno" placeholder="1"><br>
<label for="lname"><b>Standard</b></label>
<input type="number" id="password" name="standard" placeholder="1">
<br> <input id="submit" type="submit" name="submit1" value="SHOW INFO">
</form></center>
<?php
if(isset($_POST['submit1']))
{
$standard=$_POST['standard'];
$rollno=$_POST['rollno'];
include('dbcon.php');
include('function.php');
showdetails($standard,$rollno);
}

?>
</div>
</div>

</div>


<div class="footer" style="background-color:#333;color:white;padding:10px;">
<p align="center"> 
All contents Copyright@ Shankardev Shishu Niketan,<br> Kaziranga,(Kohora) <br> nogaon, Assam-784001 <br>All Copyrights reserved<br> Tel. No. 0375-XXXXXX </p>
</div>	
</body>
</html>
