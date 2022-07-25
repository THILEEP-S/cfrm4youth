<?php
$name = @$_POST["name"];
$email = @$_POST["email"];
$mobile = @$_POST["mobile"];
$gender = @$_POST["gender"];
$age = @$_POST["age"];
$parish = @$_POST["par"];
$address = @$_POST["address"];
$diocese= @$_POST["dio"];
$student = @$_POST["stu"];
$member= @$_POST["mem"];
$sno = @$_POST["sno"];
include 'database.php';

$query="update retreat set name='".$name."', email='".$email."', mobile='".$mobile."', gender='".$gender."', age='".$age."', parish='".$parish."', address='".$address."', diocese='".$diocese."', student='".$student."', member='".$member."' where sno =".$sno." ";

$result=mysql_query($query);
if($result==1)
{
echo '<script>alert("Updated Successfully")</script>';
header("location:retreatadmin.php");

}
?>