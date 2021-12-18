<?php

function showdetails($standard,$rollno)
{
include('dbcon.php');
$sql="SELECT * FROM `student` WHERE `rollno`='$rollno' AND `standard`='$standard'";
$run=mysqli_query($con,$sql);
if(mysqli_num_rows($run)>0)
{
$data=mysqli_fetch_assoc($run);
?>
<table width=90% align="center" border="1" id="tables">

<tr><th colspan="2" id="tableinfo"><h2>Student Details<h2></th></tr>
<tr>
<th>Roll No</th>
<td><?php echo $data['rollno']?></td>
</tr>
<tr>
<th>Name</th>
<td><?php echo $data['name']?></td>
</tr>
<tr>
<th>Adress</th>
<td><?php echo $data['adress']?></td>
</tr>
<tr>
<th>Parent's Contact No.</th>
<td><?php echo $data['pcont']?></td>
</tr>
<tr>
<th>Standard</th>
<td><?php echo $data['standard']?></td>
</tr>
<tr>
<th>CGPA</th>
<td><?php echo $data['cgpa']?></td>
</tr>
</table>
<?php
}
else
{
echo "<script>alert('No Records Found');</script>";
}
}
?>
<style>
#tables{
background-color:cornflowerblue;
margin-top:60px;
}
th{
font-size: 1.2em;
font-weight: bold;
text-align:left;
padding:10px 20px;
}
td{
padding-left: 5px;
padding:10px 60px;
font-weight:bold;
font-size: 1.1em;
}
#tableinfo{
text-align:center;
padding:4px;
font-weight:bold;
}
</style>