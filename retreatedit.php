<center>
<?php
$id =$_GET["sno"];
include 'database.php';
$query = "select * from retreat where sno='$id'";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
?>
<body bgcolor="white">
<form action ="retreatupdate.php" method="post">
<h2>MEMBERSHIP</h2>
</br>
<table border="1">
<tr>
<td>S.No</td>
<td><input type="text" name="sno" value="<?php echo $row['sno']?>" readonly/></td></tr>

<tr>
<td>Name</td>
<td><input type="text" name="name" value="<?php echo $row['name']?>" required/></td></tr><tr></tr>
<tr>
<td>Email</td>
<td><input type="text" name="email" value="<?php echo $row['email']?>" required/></td></tr><tr></tr>
<tr>

<tr>
<td>Mobile</td>
<td><input type="text" name="mobile" value="<?php echo $row['mobile']?>" required/></td></tr><tr></tr>

<tr>
<td>Gender</td>
<td><input type="text" name="gender" value="<?php echo $row['gender']?>" required/></td></tr><tr></tr>
<tr>
<td>Age</td>
<td><input type="text" name="age" value="<?php echo $row['age']?>" required/></td></tr><tr></tr>
<tr>
<td>Age</td>
<td><input type="text" name="age" value="<?php echo $row['age']?>" required/></td></tr><tr></tr>
<tr>
<td>Parish</td>
<td><input type="text" name="par" value="<?php echo $row['parish']?>" required/></td></tr><tr></tr>
<tr>
<td>Address</td>
<td><input type="text" name="address" value="<?php echo $row['address']?>" required/></td></tr><tr></tr>
<tr>
<td>Diocese</td>
<td><input type="text" name="dio" value="<?php echo $row['parish']?>" required/></td></tr><tr></tr>
<tr>
<td>Student</td>
<td><input type="text" name="stu" value="<?php echo $row['student']?>" required/></td></tr><tr></tr>
<tr>
<td>Member</td>
<td><input type="text" name="mem" value="<?php echo $row['member']?>" required/></td></tr><tr></tr>
<td width ="100" align="center">
<input type="submit" value="update">
</td>
<td><a href="retreatadmin.php">View Details</a>
</td>
</tr>
</body>
</table>
</form>
</html>