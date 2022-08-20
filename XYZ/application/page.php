<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>
<!--	<?php foreach($all_user as $key=>$row)
{
?>
	<form>
<table height="300px" width="200px" border="4px">
	<tr>
		<td>ID</td>
		<td>pname</td>
		<td>price</td>
		<td>mfgdate</td>
		<td>expdate</td>
		<td>regdate</td>
		<td>status</td>
	</tr>
	<tr>
		<td><input type="text"  value="<?php echo $row['ID']?>" readonly name="ID"></td>
		<td><input type="text" name="pname" value="<?php echo $row['pname']?>" ></td>
		<td><input type="text" name="price" value="<?php echo $row['price']?>" ></td>
		<td><input type="text" name="mfgdate" value="<?php echo $row['mfgdate']?>" ></td>
		<td><input type="text" name="expdate" value="<?php echo $row['expdate']?>" ></td>
		<td><input type="text" name="regdate" value="<?php echo $row['regdate']?>" ></td>
		<td><input type="text" name="status" value="<?php echo $row['status']?>" ></td>
	</tr>
</table>
</form>
<?php
}
?>-->
<form>
<table height="300px" width="200px" border="4px">
	<tr>
		<td>ID</td>
		<td>pname</td>
		<td>price</td>
		<td>mfgdate</td>
		<td>expdate</td>
		<td>regdate</td>
		<td>status</td>
	</tr>
	<tr>
		<td><input type="text"   readonly name="ID"></td>
		<td><input type="text" name="pname"  ></td>
		<td><input type="text" name="price"  ></td>
		<td><input type="text" name="mfgdate"  ></td>
		<td><input type="text" name="expdate"  ></td>
		<td><input type="text" name="regdate"  ></td>
		<td><input type="text" name="status"  ></td>
	</tr>
</table>
</form>
</body>
</html>