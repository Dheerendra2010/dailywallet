<!DOCTYPE html>
<html>
<head>
	<title>Daily Wallet</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<style>
		.header
		{
			background-color:#203047;
			height:200px;
			margin-top:0.5śpx;
		}
		.text
		{
			color:white;
			text-align:center;
			margin-top:40px;
		}
		.wid
		{
			height:550px;
			margin-left:40px;
			
		}
		.wid1
		{
			text-align:center;
			width: 100%;
			height:600px;
			
		}
		.image
		{
			height:200px;
			width:200px;
			border:solid black;
			border-radius:150px;
			margin-top:-50px;
		}
		.tbl
		{
			padding: 2px;
			border-style:double;
			width:100%;
		}
		.btt3
		{
			margin-top:20px;
		}
		.wimage
		{
			height:150px;
			width: 150px;
		
		}
		.wallet
		{
			margin-left: 270px;
			margin-top:-150px;
		}

	</style>
</head>

<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 header">
				<h1  class="text">Welcome To Your Dailywallet Dashboard</h1>
				<h6 class="text">Earn Money</h6>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row wid0">
			<div class="col-md-4 wid">
				<img src="male.jpg" class="image">
				<div class="wallet">
					<img src="wallet.jpg" class="wimage">
						
					<script>
						var 
						var rank=100;
						var earn=rank;
					</script>
				
					<h6>Your total Earning:<script> document.write(earn) </script></h6>
				</div>
				<br>
				<br>
				<br>
				<h3>Total Members:2000</h3>
				<br>
				<a href="pay.php"><button type="button" class="btn btn-primary btn-lg">Send You payment</button></a><br><br>
				<a href="edit.php"><button type="button" class="btn btn-primary btn-lg">Edit Your Profile Photo</button></a><br>

				<button class="btt3">Log out</button>
			</div>

			<div class="col-md-7 wid1">
				<br><br>
				<h1>Your Detail</h1>
				<table class="tbl">
					<tr>
						<th>Id</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email</th>
						<th>D.O.B</th>
						<th>Gender</th>
						<th>6 Digit code</th>
						<th>Password</th>
					</tr>
					<tr>
						<?php

						 	$servername="localhost";
						 	$username="root";
						 	$pass="";
						 	$db="dailywallet";

						 	$conn=mysqli_connect($servername,$username,$pass,$db);

							$selectquery="select * from register";

							$query=mysqli_query($conn,$selectquery);
							$ress=$res=mysqli_fetch_array($query);
							?>
						<th><?php echo $ress['id']; ?></th>
						<th><?php echo $ress['fname']; ?></th>
						<th><?php echo $ress['lname']; ?></th>
						<th><?php echo $ress['email']; ?></th>
						<th><?php echo $ress['dob']; ?></th>
						<th><?php echo $ress['gen']; ?></th>
						<th><?php echo $ress['dcode']; ?></th>
						<th><?php echo $ress['password']; ?></th>
					</tr>
				</table>
				<br>
					<h1>Your Juniors Deatil</h1>
					<br>
				<table class="tbl">
					<tr>
						<th>Id</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email</th>
						<th>D.O.B</th>
						<th>Gender</th>
						<th> Active</th>
						</tr>

					<tr>
						 
							<?php
							while($res=mysqli_fetch_array($query))
							{
						 ?>
						<th><?php echo $res['id']; ?></th>
						<th><?php echo $res['fname']; ?></th>
						<th><?php echo $res['lname']; ?></th>
						<th><?php echo $res['email']; ?></th>
						<th><?php echo $res['dob']; ?></th>
						<th><?php echo $res['gen']; ?></th>
						<th>
						<input type="radio" id="active" name="aidec" value ="Active">
						<label for="active">On</label>

						<input type="radio" id="disactive" name="aidec" value ="disactive">
						<label for="active">Off</label>
						</th>
						
					</tr>
					<?php

						}

					?>
				</table>
			</div>
		</div>
	</div>
	
</body>
</html>
