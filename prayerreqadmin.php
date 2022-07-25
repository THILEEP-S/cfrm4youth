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
<br>
<br>
<h4>New Prayer Request</h4>
<form action="prayerreq.php" method="post">
<table border="0">
<body>
<tr>
<td>
Prayer Request <td><input type="text" name="prayerreq"></td>
</td>
</tr>
</table>
<br>
<br>
<input type="submit" value="Submit">
</form>

<?php
$connection = mysql_connect("localhost","root","");
$database = mysql_select_db("cfrm4youth",$connection);
$query = "select * from prayer";
$result = mysql_query($query);
?>
<h2>Prayer Request</h2>
<table border="5">
<tr>
<td>S.No</td>
<td>Prayer Request</td>
<td>	Delete	</td>
</tr>
<?php
while($row = mysql_fetch_array($result))
{
?>
<tr>
<td><?php echo $row["sno"];?></td>
<td><?php echo $row["prayer"];?></td>
<td><a href = "prayerdelete.php? sno=<?php echo $row['sno'];?>">Delete</a></td>
</tr>
<?php
}
?>
</table></br></br>
</br><a href ="index.html">index</a>
</center>
</html>