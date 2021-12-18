<?php
session_start();
if(isset($_SESSION['uid']))
{
header('location: admin/admindash.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Alegreya Sans' rel='stylesheet'>
<link href='css/login.css' rel='stylesheet' type='text/css'>
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


<div id="form">

<div class="column">
<center>
<h2>Admin Login</h2>
<form action="login.php" method="post">
<label for="uname"><b>Username</b></label>
<input type="text" id="id" name="uname" placeholder="username" reuired><br>
<label for="password"><b>Password</b></label>
<input type="password" id="password" name="pass" placeholder="password" required>
<br> <input id="submit" type="submit" name="login" value="LOGIN">
</center>
</form>

</div>
</div>
</div>


<div class="footer" style="background-color:#333;color:white;padding:10px;">
<p align="center"> 
All contents Copyright@ Shankardev Shishu Niketan,<br> Kaziranga,(Kohora) <br> nogaon, Assam-784001 <br>All Copyrights reserved<br> Tel. No. 0375-XXXXXX </p>
</div>


</body>
</html>
<?php
include('dbcon.php');
if(isset($_POST['login']))
{
$username=$_POST['uname'];
$password=$_POST['pass'];
$query="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
$run=mysqli_query($con,$query);
$row=mysqli_num_rows($run);

if($row<1)
{
?>
<script>
alert('Username or Password is not correct !');
window.open('login.php','_self');
</script>
<?php
}
else
{
$data=mysqli_fetch_assoc($run);
$id=$data['id'];

$_SESSION['uid']=$id;
header("location: admin/admindash.php");  
}

}
?>