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
  	.form
  	{
  		text-align:center;
  			margin-top:80px;
  			width:60%;
  			margin-left:200px;
  	}
  	.image
  	{
  		height:250px;
  		width:300px;
  		margin-left:220px;
  		margin-top:50px;
  		border:solid black;
  		border-radius:220px;

  	}
  	.btt2 
  	{
  		width:40%;
  		background-color:#f32d00;
  	}
  	.btt1
  	{
  		width:15%;
  		background-color:#0caa60;
  	}
  	.btt1:hover
  	{
  		background-color:white;
  		color:#0caa60;
  	}
  	.btt2:hover
  	{
  		background-color: white;
  		color:#f32d00;
  	}
  </style>
</head>
<body>
	<div class="container login">
		<img src="male.jpg" class="image">
		<div class="form">
		<form action="#" method="POST">
			<div class="col">
				 <div class="col">
			       <input type="text" class="form-control"  placeholder="Edit Your First Name " name="fname" required>
			      </div>
			      <br>
			       <div class="col">
			       <input type="text" class="form-control"  placeholder="Edit Your Last Name" name="lname" required>
			      </div>
			      <br>
			       <div class="col">
			       <input type="text" class="form-control"  placeholder="Edit Your Emai" name="email" required>
			      </div>
			      <br>
			       <div class="col">
			       <input type="text" class="form-control"  placeholder=" Edit Your Password" name="pswd" required>
			      </div>
			      <br>
			      <input type="submit" name="submit" value="Submit" class="btn btn-primary mt-3 btt1> 
			      <button type="submit" class="btn btn-secondary mt-3 btt2">Upadte Your Profile Photo</button>
			</div>
		</form>
		</div>
	</div>

	<script>
		function myfunction()
	{
		confirm("Are You sure to Edit your Profile ");
	}
	</script>
</body>
</html>