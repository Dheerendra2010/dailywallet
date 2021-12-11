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
  	body
  	{
  		background-color:#203047;
  	}
  	a 
  	{
  		text-decoration: none;
  		
  	}
  	.logo{
  		height:50px;
  		width:50px;
  		border:solid black;
  		border-radius:20px;
  	}
  	.form
  	{
  		width:35%;
  		margin-left:370px;
  	}
  	h3
  	{
  		color:white;
  		font-size:16px;
  		margin-right:190px;
  		text-decoration:none;
  	}

  	h3:hover
  	{
  		color:red;
  		text-decoration:none;
  	}
  	h4
  	{
  		color:white;
  		font-size:16px;
  		margin-left:100px;
  	}
  	.login
  	{
  		text-align:center;
  		margin-top:170px;
  	}
  	.btt1
  	{
  		
  		width:170px;
  		margin-left: 40px;
  		background-color:#f32d00;
  		color:#ffffff;
  		border-radius:20px;

  	}
  	.btt1:hover
  	{
  		background-color:#ffffff;
  		color:#f32d00;
  		border-color:#f32d00;
  		border-radius:20px;
  	}
 	.btt2
  	{
  		width:170px;
  		background-color:#0caa60;
  		color:#ffffff;
  		border-radius:20px;
  	}
  	.btt2:hover
  	{
  		background-color:#ffffff;
  		color:#0caa60;
  		border-color:#0caa60;
  		border-radius:20px;
  	}
  </style>
</head>
<body>
	<div class="container login">
		<div>
			<h1 class="text-white">Welcome</h1>
			<img src="logo.png" class="logo">
			<form action="login.php" method="POST">
			    <div class="col">
			    	<br>
			      <div class="col form">
			        <input type="text" class="form-control" id="email" placeholder="Enter Username" name="email" required>
			      </div>
			      <br>
			      <div class="col form">
			        <input type="password" class="form-control" placeholder="Enter password" name="pswd" required>
			      </div>
			    </div>
 				   <button type="submit" class="btn btn-primary mt-3 btt1">Login</button>
 				   <a href="register.php"><button type="button" class="btn btn-secondary mt-3 btt2">Register</button></a>
 				   <br><br><br><br><br><br>
 				   <a href="forget.php"><h3>Forget the Password</h3></a>
 				   	<br>
 				   	<h4>If You Are Lost Lost Your 6 Digit Code Contact Your Senior......</h4>
 			 </form>
		</div>
	</div>
</body>
</html>

