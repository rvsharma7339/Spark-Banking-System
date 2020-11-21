<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
//mysqli_select_db($con,'id8930489_spark');

$q="select * from mini_statement";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Mini Statement</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="button2.css">
	<style>
		.nav-ul {
			list-style-type: none;
			margin: 0;
			padding: 5px;
			verflow: hidden;
			
			}

		.nav-li {
		  float:left;
		}

		.nav-li a {
			
		  display: block;
		  color:#010114;
		  text-align: center;
		  padding: 8px 10px;
		  text-decoration: none;
		  text-transform:uppercase;
		}
		body{
			background-image:url("bank.jpg");
			background-repeat: no-repeat;
			background-size:cover;
			
		}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border-collapse:collapse;
			}
		th{
			color:BLACK;
			font-size:26px;
			padding:16px;
		}
		
		td{
			font-size:25px;
			color: WHITE;
			padding: 10px 20px 10px 22px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
			border-collapse:collapse;
		}
		h2{
			padding:20px;
			font-size:40px;
			color:BLUE;
			text-shadow: 1px 1px black;
			text-align:center;
		}
		.buttons{
			
			right:42%;
			text-align:center;
		}
		.btn{
			cursor:pointer;
						background-color:#8f5203;
			font-size:35px;
			color:white;
		}
	</style>
	</head>
	<body>
		<br>
		<h2><?php echo "TRANSACTION DETAILS"?></h2>
		<table class="flat-table-1">
			<tr>
				<th>SENDER</th>
				<th>TRANSFEREE</th>
				<th>FUND TRANSFER</th>
			</tr>
			<tr>
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr>
				<td><?php echo $row["sender"]; ?></td>
				<td><?php echo $row["receiver"]; ?></td>
				<td><?php echo $row["amount"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		<br>
		<br>
		<form action="index.php" method="post">
			<div class="buttons" >
				<button class="btn" type="submit" name="name">Home</button>
			</div>
		</form>
		
	</body>
</html>