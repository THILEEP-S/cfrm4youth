<center>
<html>
<title>Admin Pannel</title>
<center>
<img src="images/pic1.png" alt="cfrm-logo" align="left" width="100" height="100">
<img src="images/don.jpg" alt="cfrm-logo" align="right" width="100" height="100">
<h1>CATHOLIC FAITH REVIVAL MOVEMENT</h1>
<h2>The Youth Ministry of Madras - Mylapore Arch Diocese<h2>
<body>
<a href="adminpanel.php">Home</a>
<a href="joinusadmin.php">Membership</a>
<a href="retreatadmin.php">Retreat</a>
<a href="prayerreqadmin.php">Prayer Request</a>
<a href="contactusadmin.php">Contact Us</a>
<?php

$connection = mysql_connect("localhost","root","");
$database = mysql_select_db("cfrm4youth",$connection);
$query = "select * from contactus";
$result = mysql_query($query);
?>
<h2>CONTACT US</h2>
<table border="5">
<tr>
<td>S.no</td>
<td>Name</td>
<td>Email</td>
<td>Subject</td>
<td>Message</td>
<td>Delete</td>
</tr>
<?php
while($row = mysql_fetch_array($result))
{
?>
<tr>
<td><?php echo $row["sno"];?></td>
<td><?php echo $row["name"];?></td>
<td><?php echo $row["email"];?></td>
<td><?php echo $row["subject"];?></td>
<td><?php echo $row["message"];?></td>

<td><a href = "contactusdelete.php? sno=<?php echo $row['sno'];?>">Delete</a></td>
</tr>
<?php
}
?>

</table></br></br>
</br><a href ="form.php"></a>
</center>
</html>