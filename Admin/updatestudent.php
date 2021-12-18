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
?>
<div class="column">
<form action="updatestudent.php" method="post">
<label for="standard" class="label"><b>Standard</b></label>
<input type="number" name="standard" class="input"  placeholder="Enter Standard" reuired="required">
<br><label for="same" id="stuname" class="label"><b>Name</b></label>
<input type="text"  name="sname" class="input" placeholder="Enter name" reuired="required">
<input type="submit" name="search" id="submitinupdate" value="SEARCH"> 
</form>
<?php
if(isset($_POST['search']))
{
?>
<table align="center" width="70%" border="1" id="tables" style="margin-top:60px;">
<tr>
<th> No.</th>
<th class="tablename"> Name</th>
<th> Roll No</th>
<th> Edit</th>
</tr>
<?php
include('../dbcon.php');
$standard=$_POST['standard'];
$name= $_POST['sname'];
$sql="SELECT * FROM `student` WHERE `standard`='$standard' AND `name` LIKE '%$name%'";
$run=mysqli_query($con,$sql);
if(mysqli_num_rows($run)<1)
{
echo "<tr><td colspan='4'>No Records Found</td></tr>";
}
else
{
$count=0;
while($data=mysqli_fetch_assoc($run))
{
$count++;
?>
<tr>
<td> <?php echo $count; ?> </td>
<td class="tablename"> <?php echo $data['name']; ?> </td>
<td> <?php echo $data['rollno']; ?> </td>
<td> <a href="updateform.php?sid=<?php echo $data['id']; ?>">Edit</td>
</tr>

<?php
}
}
}
?>
</table>
</div>
<div class="footer" style="background-color:#333;color:white;padding:10px;">
<p align="center"> 
All contents Copyright@ Shankardev Shishu Niketan,<br> Kaziranga,(Kohora) <br> nogaon, Assam-784001 <br>All Copyrights reserved<br> Tel. No. 0375-XXXXXX </p>
</div>
</div>
</body>
<style>
table{
background-color:cornflowerblue;
margin-top:60px;
}
th{
font-size: 1.2em;
font-weight: bold;
text-align:center;
padding:10px 20px;
}
td{
padding-left: 5px;
padding:10px 60px;
font-weight:bold;
font-size: 1.1em;
text-align:center;
}
.tablename{
text-align:left;
padding-left: 182px;
}
</style>
</html>