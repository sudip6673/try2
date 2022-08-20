<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<style>
		body{
			padding: 0px;
			margin:0px;
		}
		a{
			text-decoration: none;
		}
	</style>
</head>
<body>
	<form><center><b>
		<h1>-: Product Details :- </h1>
		<a href="<?php echo base_url();?>Welcome/activ"><h1>Total<br>product<br><?php echo $this->db->where('status',1)->count_all('product');?></h1></a><br><br>
		<!--<?php echo $this->db->count_all('log');?>-->
		<a href="<?php echo base_url();?>Welcome/acproduct"><h1>Active Product :- <?php echo $active?></h1></a>
<br>
<br>
<a href="<?php echo base_url();?>Welcome/inproduct"><h1>Inactive Product :- <?php echo $Inactive?></h1></a><br><br>

<h1>-: Customer Details :- </h1>
		<a href="<?php echo base_url();?>Welcome/cust"><h1>Total<br>Customer<br><?php echo $this->db->count_all('customer');?></h1></a>
		<br>
		<br>
		<a href="<?php echo base_url();?>Welcome/acustomer"><h1>Active Customer :-  <?php echo $ac?></h1></a>
		<br>
		<br>
		<a href="<?php echo base_url();?>Welcome/incustomer"><h1>Inactive Customer :-  <?php echo $inn?></h1></a>
<!--<?php  foreach($all_user as $key=>$row)
{
?>
Active :- <?php echo $row['actid']?>-->

<!--<br>
Inactive :- <?php echo $row['actid']?>-->
<!--<table height="300px" width="300px" border="4px">
	<tr>
		<td>ID :- <?php echo $row['ID']?></td>
	</tr>
	<tr>
		<td>Pname :- <?php echo $row['pname']?></td>
	</tr>
	<tr>
		<td>Price :- <?php echo $row['price']?></td>
	</tr>
	<tr>
		<td>Mfgdate :- <?php echo $row['mfgdate']?></td>
	</tr>
	<tr>
		<td>Expdate :- <?php echo $row['expdate']?></td>
	</tr>
	<tr>
		<td>Regdate :- <?php echo $row['regdate']?></td>
	</tr>
</table>-->
<br>

<!--<?php
}
?>-->

</b>
</center>
</form>
</body>
</html>