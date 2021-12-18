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
<div class="logoutadd"><form action="logout.php"><button type="submit" id ="logout"><b>Log Out</b></button></form></div>
<h2 style="margin-left:200px; font-size:45px;">
Add Student Details</h2>

<div class="student_info">

<form action="addstudent.php" method="post">

<label for="rollno" class="label"><b>Roll No</b></label>
<input type="text"  name="rollno" placeholder="Enter Roll No" class="input" reuired><br>

<label for="name" class="label"><b>Full Name</b></label>
<input type="text"  name="name" placeholder="Enter Full Name" class="input" reuired><br>
        
<label for="adress" class="label"><b>Adress</b></label>
<input type="text"  name="adress" placeholder="Enter Your Adress" class="input" reuired><br>

<label for="pcon" class="label"><b>Parent's Contact No.</b></label>
<input type="text"  name="pcon" placeholder="Enter Parent's phone No" class="input" reuired><br>

<label for="std" class="label"><b>Standard</b></label>
<input type="number"  name="std" placeholder="Enter the Standard" class="input" reuired><br>

<label for="cgpa" class="label"><b>CGPA</b></label>
<input type="number" step="any" name="cgpa" placeholder="Enter CGPA" class="input" reuired><br>
                        
<input id="submit" type="submit" name="submit" value="SUBMIT">        
</form>

</div>

</div>
<div class="footer" style="background-color:#333;color:white;padding:10px;">
<p align="center"> 
All contents Copyright@ Shankardev Shishu Niketan,<br> Kaziranga,(Kohora) <br> nogaon, Assam-784001 <br>All Copyrights reserved<br> Tel. No. 0375-XXXXXX </p>
</div>
</div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
include('../dbcon.php');
$rolno=$_POST['rollno'];
$name=$_POST['name'];
$adress=$_POST['adress'];
$pcon=$_POST['pcon'];
$std=$_POST['std'];
$cgpa=$_POST['cgpa'];

$sql="SELECT * FROM `student` WHERE `rollno`='$rolno' AND `standard`='$std'";
$run=mysqli_query($con,$sql);
//$data = mysqli_fetch_array($run, MYSQLI_NUM);
// if(mysqli_num_rows($run)>0)
if($run->num_rows)
{
    ?>
    <script>
    alert('Data cannot be inserted.');
    </script>
    <?php
}

else{
    $qry="INSERT INTO `student`( `rollno`, `name`, `adress`, `pcont`, `standard`, `cgpa`) VALUES ('$rolno','$name','$adress','$pcon','$std','$cgpa')";
    $run=mysqli_query($con,$qry);
    if($run==true)
    {
    ?>
    <script>
    alert('Data Inserted Successfully.');
    </script>
    <?php
}
}

}
?>