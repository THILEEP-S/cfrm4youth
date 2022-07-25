<?php
echo '<script>alert("After connection")</script>';

$name = @$_POST["name"];
$mobile = @$_POST["mobile"];
$email = @$_POST["email"];
$fname = @$_POST["father"];
$mother = @$_POST["mother"];
$qualification = @$_POST["quali"];
$gender = @$_POST["gender"];
$age= @$_POST["age"];
$pardio = @$_POST["pardio"];
$add= @$_POST["address"];
$sno = @$_POST["sno"];
include 'database.php';
echo '<script>alert("After connection")</script>';

$query="update joinus set name='".$name."', mobile='".$mobile."', email='".$email."', fathername='".$fname."', mothername='".$mother."', qualification='".$qualification."', gender='".$gender."', age='".$age."', pardio='".$pardio."', address='".$add."' where sno =".$sno." ";

echo '<script>alert("After Query")</script>';

$result=mysql_query($query);
if($result==1)
{
echo '<script>alert("Updated Successfully")</script>';
header("location:joinusadmin.php");

}
?>