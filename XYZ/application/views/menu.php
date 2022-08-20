<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<style >
		body{
			padding: 0px;
			margin:0px;
		}
		.c1{
			position: absolute;
			height:300px;
			width: 300px;
			background-color:#A52A2A;
			margin-top:160px;
			margin-left: 530px;
			box-sizing: border-box;
			border-radius: 30px; 
		}
		.c2{
			position: absolute;
			height:280px;
			width: 280px;
			background-color:#A3E4D7;
			margin-top:10px;
			margin-left: 10px;
			box-sizing: border-box;
			border-radius: 30px; 
		}
		.c3{
			position: absolute;
			height:260px;
			width: 260px;
			background-color:#2F4F4F;
			margin-top:10px;
			margin-left: 9px;
			box-sizing: border-box;
			border-radius: 30px; 
		}
		a{
			text-decoration: none;
		}
		.in{
			position: absolute;
			height:55px;
			width: 100px;
			background-color:#FFE4C4;
			margin-top:50px;
			margin-left: 78px;
			box-sizing: border-box;
			border-radius: 10px; 
			font-size: 35px;
			color:#008000;
		}
		.in:hover{
			position: absolute;
			background-color:#5B2C6F;
			color: #82E0AA;
		}
		.i{
			position: absolute;
			margin-top: 8px;
			margin-left: 5px;
		}
		.vie{
			position: absolute;
			height:55px;
			width: 100px;
			background-color:#FFE4C4;
			margin-top:135px;
			margin-left: 78px;
			box-sizing: border-box;
			border-radius: 10px; 
			font-size: 35px;
			color:#008000;
		}
		.vie:hover{
			position: absolute;
			background-color:#5B2C6F;
			color: #82E0AA;
		}
		.v{
			position: absolute;
			margin-top: 9px;
			margin-left: 12px;
		}
	</style>
</head>
<body bgcolor="#FFE4C4">
<div class="c1">
		<div class="c2">
			<div class="c3">
<form action="<?php echo base_url();?>Welcome/in" method="post">
	<table>
		<tr>
			<td><label><a href="<?php echo base_url();?>Welcome/insert" class="in"><div class="i"> <b>Insert</b></div></a></label></td>
		</tr>
		<tr>
			<td>
				<label><a href="<?php echo base_url();?>Welcome/view" class="vie"><div class="v"> <b>View</b></div></a></label>
			</td>
		</tr>
	</table>
</form>
</div>
</div>
</div>
</body>
</html>