<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$name1=$_SESSION['name'];
$q="select sender,amount from mini_statement where receiver='$name1'";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Mini Statement</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="button2.css">
	<style>
	html,body
	{
		hight:100%;
	}
		.buttons{
			text-align:center;
			background-color:#8f5203
			font-size:30px;
			
		}
		
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
			hight:100%;
		}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border-collapse:collapse;
			}
		th{
			color:black;
			font-size:50px;
			padding:16px;
		}
		
		td{
			font-size:40px;
			color: white;
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
			color:#FFF;
			text-shadow: 1px 1px black;
			text-align:center;
		}
		.btn1 {
			background-color:#8f5203;
			border: none;
			color: white;
			border-radius:23px;
			padding: 12px 16px;
			font-size: 23px;
			cursor: pointer;
		}

		.btn1:hover {
			background-color:#8f5203;
		}
		.buttons{
			position: absolute;
			bottom:   8%;
			right:42%;
			text-align:center;
		}
		.btn{
			cursor:pointer;
			background-color:#8f5203;
			font-size:30px;
			color:white;
		}
	</style>
	</head>
	<body>
		<ul class="nav-ul"">
	<a href="index.php">
		<li class="nav-li"><button class="btn1">BACK TO HOME PAGE</button></li>
	</a>
	</ul><br>
		<h2><?php echo "MINI STATEMENT OF ".$name1?></h2>
		<table class="flat-table-1">
			<tr>
				<th>Sender</th>
				<th>Amount</th>
			</tr>
			<tr>
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr>
				<td><?php echo $row["sender"]; ?></td>
				<td><?php echo $row["amount"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		<br>
		<br>
		<form action="user.php" method="post">
			<div class="buttons">
				<button class="btn" type="submit" name="name" value="<?php echo $name1 ?>">BACK</button>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			</div>
		</form>
		
	</body>
</html>