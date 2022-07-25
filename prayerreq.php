<?php
$sno=0;
$pr =@$_POST["prayerreq"];
include 'database.php';
$query = "insert into prayer values(".$sno.",'".$pr."')";
$result = mysql_query($query);
if ($result==1)
{
echo "<script>alert('Registered Successfully')</script>";
}
?>