<?php
$sno=0;
$name =@$_POST["name"];
$email =@$_POST["email"];
$subject =@$_POST["subject"];
$message =@$_POST["message"];


include 'database.php';
$query = "insert into contactus values('".$sno."','".$name."','".$email."','".$subject."','".$message."')";
$result = mysql_query($query);
if ($result==1)
{
echo "<script>('Registered Successfully')</script>";
}
?>