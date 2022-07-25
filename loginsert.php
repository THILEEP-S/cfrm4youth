<?php
$uname=@$_POST["a"];
$pass =@$_POST["b"];
include 'database.php';
$query = "insert into login values('".$uname."','".$pass."')";
$result = mysql_query($query);
if ($result==1)
{
echo "<script>alert('Registered Successfully')</script>";
}
?>