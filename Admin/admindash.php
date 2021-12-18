<?php
session_start();
if(isset($_SESSION['uid'])){ }
else
{
header("location: ../login.php");
}
?>
<?php
include('header.php');
?>
<div class="column">
<center>
<h1 style=" color: brown; font-size:4.1em;"><b>WELCOME TO ADMIN DASHBOARD</b></h1>
<div id="dashboard">
<form action="addstudent.php" class="buttons"><button type="submit"class="buttons1"><b>Insert Student Detail</b></button></form>
<form action="updatestudent.php" class="buttons"><button type="submit" class="buttons1"><b>Update Student Detail</b></button></form>
<form action="deletestudent.php" class="buttons"><button type="submit" class="buttons1"><b>Delete Student Detail</b></button></form>
</div>


<div class="logout1"><form action="logout.php"><button type="submit" id ="logout"><b>Log Out</b></button></form></div>
</center>
</div>
<div class="footer" style="background-color:#333;color:white;padding:10px;">
<p align="center"> 
All contents Copyright@ Shankardev Shishu Niketan,<br> Kaziranga,(Kohora) <br> nogaon, Assam-784001 <br>All Copyrights reserved<br> Tel. No. 0375-XXXXXX </p>
</div>
</div>
</body>
</html>