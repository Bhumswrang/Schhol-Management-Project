<?php
session_start();
if(isset($_SESSION['uid']))
{

}
else
{
header("location: ../login.php");
}

?>
<?php
include('header.php');
include('../dbcon.php');
$sid=$_GET['sid'];
$sql="SELECT * FROM `student` WHERE `id`='$sid'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
?>
<div class="column">
<form action="updatedata.php" method="post">

<label for="rollno" class="label"><b>Roll No</b></label>
<input type="text"  name="rollno" value="<?php echo $data['rollno'];?>" class="input" reuired><br>

<label for="name" class="label"><b>Full Name</b></label>
<input type="text"  name="name" value="<?php echo $data['name'];?>" class="input" reuired><br>

<label for="adress" class="label"><b>Adress</b></label>
<input type="text"  name="adress" value="<?php echo $data['adress'];?>" class="input" reuired><br>

<label for="pcon" class="label"><b>Parent's Contact No.</b></label>
<input type="text"  name="pcon" value="<?php echo $data['pcont'];?>" class="input" reuired><br>

<label for="std" class="label"><b>Standard</b></label>
<input type="number"  name="std" value="<?php echo $data['standard'];?>" class="input" reuired><br>

<label for="cgpa" class="label"><b>CGPA</b></label>
<input type="number" step="any" name="cgpa" value="<?php echo $data['cgpa'];?>" class="input" reuired><br>
<input type="hidden" name="sid" value="<?php echo $data['id']; ?>" ><br>                                 
<input id="submit" type="submit" name="submit" value="SUBMIT">        
</form>
</div>
<div class="footer" style="background-color:#333;color:white;padding:10px;">
<p align="center"> 
All contents Copyright@ Shankardev Shishu Niketan,<br> Kaziranga,(Kohora) <br> nogaon, Assam-784001 <br>All Copyrights reserved<br> Tel. No. 0375-XXXXXX </p>
</div>
</div>
</html>