<?php
$sno=0;
$names =@$_POST["name"];
$emails =@$_POST["email"];
$mobiles =@$_POST["mobile"];
$genders =@$_POST["gender"];
$ages =@$_POST["age"];
$parishs =@$_POST["parish"];
$addresss =@$_POST["address"];
$dioceses =@$_POST["Diocese"];
$students =@$_POST["student"];
$members =@$_POST["member"];
include 'database.php';
$query = "insert into retreat values(".$sno.",'".$names."','".$emails."',".$mobiles.",'".$genders."',".$ages.",'".$parishs."','".$addresss."','".$dioceses."','".$students."','".$members."')";
$result = mysql_query($query);
if ($result==1)
{
echo "<script>alert('Registered Successfully')</script>";
}
?>