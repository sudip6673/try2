<!DOCTYPE html>
<html>
<head>
	<title>Total_Product</title>
</head>
<body>
<?php  foreach($all_user as $key=>$row)
{
?>
<!--Active :- <?php echo $row['actid']?>-->

<!--<br>
Inactive :- <?php echo $row['actid']?>-->
<table height="300px" width="300px" border="4px">
	<tr>
		<td>ID  <?php echo $row['ID']?></td>
		<td>Pname  <?php echo $row['pname']?></td>
		<td>Price  <?php echo $row['price']?></td>
		<td>Mfgdate  <?php echo $row['mfgdate']?></td>
		<td>Expdate  <?php echo $row['expdate']?></td>
		<td>Regdate  <?php echo $row['regdate']?></td>
		<td><a href="javascript:void()"onclick="if(confirm('Do you want to Delete')){window.location='delc/?id=<?php echo $row['ID'];?>';}" class="btn btn-success" role="button">Delete</a></td>
		<td><a href="javascript:void()"onclick="if(confirm('Do you want to Edit')){window.location='edc/?id=<?php echo $row['ID'];?>';}" class="btn btn-success" role="button">Edit</a></td>
		<td><a href="javascript:void()"onclick="if(confirm('Do you want to Active')){window.location='actc/?id=<?php echo $row['ID'];?>';}" class="btn btn-success" role="button">Active</a></td>
		<td><a href="javascript:void()"onclick="if(confirm('Do you want to Delete')){window.location='function_name/?id=<?php echo $row['ID'];?>';}" class="btn btn-success" role="button">InActive</a></td>

	</tr>
	
</table>
<br>

<?php
}
?>
</body>
</html>