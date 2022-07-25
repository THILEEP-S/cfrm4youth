<center>
<html>
<title>Admin Pannel</title>
<center>
<img src="images/pic1.png" alt="cfrm-logo" align="left" width=100" height="100">
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
<h3> New User Registration</h3>

<form action="joinus.php" method="post">
<table border="2">
<body>
<tr>
<td>
Name  <td><input type="text" name="name"></td>
</td>
</tr>
<tr>
<td>
Mobile  <td><input type="text" name="mobile"></td>
</td>
</tr>
<tr>
<td>
Email: <td><input type="text" name="email"></td>
</td>
</tr>
<tr>
<td>
Father Name <td><input type="text" name="fname"></td>
</td>
</tr>
<tr>
<td>
Mother Name <td><input type="text" name="mother"></td>
</td>
</tr>
<tr>
<td>
Qualification  <td><input type="text" name="qualification"></td>
</td>
</tr>
<tr>
<td>
Gender <td><input type="text" name="gender"></td>
</td>
</tr>
<tr>
<td>
Age  <td><input type="text" name="age"></td>
</td>
</tr>
<tr>
<td>
parish/diocese  <td><input type="text" name="pardio"></td>
</td>
</tr>
<tr>
<td>
Address  <td><input type="text" name="add"></td>
</td>
</tr>
<tr>
<td>
<center>Click<td><input type="Submit" value="Add member"></td></center>
</td>
</tr>
</form>

</body>
</table>
<?php
$connection = mysql_connect("localhost","root","");
$database = mysql_select_db("cfrm4youth",$connection);
$query = "select * from joinus";
$result = mysql_query($query);
?>
<h2>MEMBERSHIP</h2>
<table border="5">
<tr>
<td>S.No</td>
<td>Name</td>
<td>Mobile</td>
<td>Email</td>
<td>Father Name</td>
<td>Mother Name</td>
<td>Qualification</td>
<td>gender</td>
<td>Age</td>
<td>Parish-Diocese</td>
<td>Address</td>
<td>Edit</td>
<td>Delete</td>
</tr>
<?php
while($row = mysql_fetch_array($result))
{
?>
<tr>
<td><?php echo $row["sno"];?></td>
<td><?php echo $row["name"];?></td>
<td><?php echo $row["mobile"];?></td>
<td><?php echo $row["email"];?></td>
<td><?php echo $row["fathername"];?></td>
<td><?php echo $row["mothername"];?></td>
<td><?php echo $row["qualification"];?></td>
<td><?php echo $row["gender"];?></td>
<td><?php echo $row["age"];?></td>
<td><?php echo $row["pardio"];?></td>
<td><?php echo $row["address"];?></td>

<td><a href = "joinedit.php? sno=<?php echo $row['sno'];?>">Edit</a></td>
<td><a href = "delete.php? sno=<?php echo $row['sno'];?>">Delete</a></td>
</tr>
<?php
}
?>
</table></br></br>
</br><a href ="retreat-form.html.">Click here for new registration</a>
</center>

</html>