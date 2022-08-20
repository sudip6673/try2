<!DOCTYPE html>
<html>
<head>
	<title>
		View
	</title>
	<style>
		body{
			padding: 0px;
			margin :0px;
		}
		.c1{
			position: absolute;
			height:200px;
			width: 350px;
			background-color:#FC0000;
			margin-top:10px;
			margin-left: 510px;
			box-sizing: border-box;
			border-radius: 30px; 
		}
		.c2{
			position: absolute;
			height:180px;
			width: 330px;
			background-color:#FCED00;
			margin-top:10px;
			margin-left: 11px;
			box-sizing: border-box;
			border-radius: 30px; 
		}
		.c3{
			position: absolute;
			height:160px;
			width: 310px;
			background-color:#58D68D;
			margin-top:10px;
			margin-left: 9px;
			box-sizing: border-box;
			border-radius: 30px; 
		}
		.id{
			position: absolute;
        	margin-top: 10px;
        	margin-left: -30px;
        	font-size: 22px;
        	color: #2C3E50;
		}
        .use{
        	position: absolute;
        	margin-top: -30px;
        	margin-left: -30px;
        	font-size: 22px;
        	color: #2C3E50;
        }
        .pass{
        	position: absolute;
        	margin-top: -70px;
        	margin-left: -30px;
        	font-size: 22px;
        	color: #2C3E50;
        }
        /*.de{
        	position: absolute;
        	margin-top: -100px;

        }
        .ed{
        	position: absolute;
        	margin-top: -100px;
        	margin-left: 100px;
        }*/
        a{
        	text-decoration: none;
        }
        .del{
        	 margin-left: -5px;
            margin-top:-112px;
            position: absolute;
            font-size: 20px;
            color: #FFF8DC;  
            width: 90px;
            height: 35px;
            background-color: #00008B; 
            box-sizing: border-box;
            border-radius: 10px;
        }
                .del:hover{
            
             background-color: #FFB6C1; 
        }
        .de{
            margin-left: 12px;
            margin-top: 4px;
            position: absolute;
            font-size: 25px;
            color: #FFF8DC;  
        }
        .de:hover{
            color: #2F4F4F;
        }
        .edit{
            margin-left: 15px;
            margin-top:-112px;
            position: absolute;
            font-size: 20px;
            color: #2C3E50;  
            width: 90px;
            height: 35px;
            background-color: #00008B; 
            box-sizing: border-box;
            border-radius: 10px;
        }
        .edit:hover{
            color: #2F4F4F;
             background-color: #FFB6C1; 
        }
        .ed{
            margin-left: 23px;
            margin-top: 4px;
            position: absolute;
            font-size: 25px;
            color: #FFF8DC;  
        }
        .ed:hover{
            color: #2F4F4F;
        }
	</style>
</head>
<body bgcolor="#FFE4C4">
<?php foreach($all_user as $key=>$row)
{
	?>
	<form action="<?php echo base_url();?>Welcome/po" method="post">
		<center>
		<table height="300px" width="200px" border="0px">
			<div class="c1">
				<div class="c2">
					<div class="c3">
						<tr>
							<td>
								<label><b class="id">ID :- <?php echo $row['ID']?></label>
							</td>
						</tr>
			<tr>
				<td>
					<label><b class="use">User Id :- <?php echo $row['Userid']?></b></label>
				</td>
				
			</tr>
			<tr>
				<td>
					<label><b class="pass">Password :- <?php echo $row['Password']?></b></label>
				</td>
			</tr>
			<tr>
				<td>
					<label><a href="javascript:void()"onclick="if(confirm('Do you want to Delete')){window.location='delete/?id=<?php echo $row['ID'];?>';}" class="del" role="button"><b class="de">Delete</b></a> </label>
				</td>
				<td>
					<label><a href="javascript:void()"onclick="if(confirm('Do you want to Update')){window.location='edit/?id=<?php echo $row['ID'];?>';}" class="edit" role="button"><b class="ed"> Edit</b></a></label>
				</td>
			</tr>
		</div>
	</div>
</div>
		</table>
	</center>
	</form>
	<?php
}
?>
</body>
</html>