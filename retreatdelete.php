<?php
$sno=$_GET['sno'];
include 'database.php';
$query="delete from retreat where sno='$sno' ";
$result=mysql_query($query);
if($result==1)
{
echo '<script>alert("Deleted Successfully")</script>';
header("location:retreatadmin.php");
}
?>