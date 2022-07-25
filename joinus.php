<?php

$sno=0;
$name =@$_POST["name"];
$mob =@$_POST["mobile"];
$email =@$_POST["email"];
$father =@$_POST["fname"];
$mother =@$_POST["mother"];
$quali =@$_POST["qualification"];
$gender =@$_POST["gender"];
$age =@$_POST["age"];
$par =@$_POST["pardio"];
$address =@$_POST["add"];
include 'database.php';
$query = "insert into joinus values(".$sno.",'".$name."',".$mob.",'".$email."','".$father."','".$mother."','".$quali."','".$gender."',".$age.",'".$par."','".$address."')";
$result = mysql_query($query);
if ($result==1)
{
echo "<script>alert('Registered Successfully')</script>";
}
?>