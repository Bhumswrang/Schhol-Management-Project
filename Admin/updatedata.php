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
$id=$_POST['sid'];
$qry="UPDATE `student` SET  `rollno` = '$rolno', `name` = '$name', `adress` = '$adress', `pcont` = '$pcon', `standard` = '$std', `cgpa` = '$cgpa' WHERE `id` = $id";
$run=mysqli_query($con,$qry);
if($run==true)
{
?>
<script>
alert('Data Updated Successfully.');
window.open('updateform.php?sid=<?php echo $id;?>','_self');
</script>
<?php
}
}
?>