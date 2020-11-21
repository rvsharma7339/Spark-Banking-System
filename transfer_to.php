<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$name1=$_SESSION['name'];
$q="select name from users where not name='$name1'";
$result=mysqli_query($con,$q);
?>


<html>
<head>
   <title>Transfer</title>
   <link rel="stylesheet" href="button2.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	.btn{
			cursor:pointer;
			padding : 20px; 50px;
			font-size: 20px;
			border-radius:12px;
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
		  padding: 5px 5px;
		  text-decoration: none;
		  text-transform:uppercase;
		}
		body{
			background-color: rgb(47,137,158);
			background-image:url("bank.jpg");
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}
		.form{
			text-align:center;
			
		}
		.button{
			text-align:center;
			
		}
		.c{
			border-radius:20px;
		}
		.c:hover{
		}
		table{
			
			padding:50px;
			
		}
		.btn1 {
			background-color:#8f5203;
			border: none;
			border-radius:24px;
			color: white;
			padding: 12px 16px;
			font-size: 23px;
			cursor: pointer;
		}

		.btn1:hover {
			background-color:#8f5203;
		}
	</style>
</head>
<body>
	<ul class="nav-ul">
	<a href="index.php">
		<li class="nav-li"><button class="btn1">BACK TO HOME PAGE</button></li>
	</a>
	</ul>
	<center>
		<div class="view">
			<br><br><h2 style=" font-size:45px;color:#000;text-shadow: 2px 2px black;">FUND TRANSFER</h2>
			<form action="checkcredit.php" method="post" >
				<div class="border">
				<table>
					<tr>
						<td style="font-size:20pt;color:#FFF;">
							<label for="sender" align="left">Receiver Name:</label>
							&nbsp; <select name="receiver" style="font-size: 12pt; height: 28px; width:290px;">
           <?php while($row = $result->fetch_assoc()) { ?>
			<option value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option>
			<?php } ?>
			</td>
		</tr><br>
		<tr>
			<td style="font-size:20pt;color:#FFF;">
			<br><label for="transfer">Amount:</label> 
			&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="number" name="transfer" style="font-size: 12pt; height: 28px; width:290px;" min="0" required></td>
		</tr>
		
       <tr>
			<td>
				<div class="button">
				<br><button type="submit" class="c" onMouseOver="this.style.color='brown'"onMouseOut="this.style.color='black'" value="Credit" style="color:black;font-size:18px;height:40px; width:100px;">Transfer</button>
				</div>
		   </td>
        </tr>
       </table>
	   </div>
      </form>
    </div><br>
	<form action="user.php" method="post">
			<div class="buttons">
				<button class="btn" type="submit" name="name" value="<?php echo $name1 ?>">BACK</button>
			</div>
	</form>
</center>
</body>
</html>