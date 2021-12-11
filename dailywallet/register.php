
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
  	.login
  	{
  		text-align:center;
  		margin-top:140px;
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
    .gen
    {
      color:#ffffff;
      margin-right:75px;

    }
  </style>
</head>
<body>
	<div class="container login">
		<div>
			<h1 class="text-white">Welcome</h1>
			<img src="logo.png" class="logo">
			<form action="conn.php" method="POST">
			    <div class="col">
			    	<br>

			      <div class="col form">
			       <input type="text" class="form-control"  placeholder="Enter Your First Name" name="fname" required>
			      </div>
			      <br>

            <div class="col form">
             <input type="text" class="form-control"  placeholder="Enter Your Last Name" name="lname" required>
            </div>
            <br>

            <div class="col form">
             <input type="email" class="form-control"  placeholder="Enter Your Email" name="email" required>
            </div>
            <br>

            <div class="col form">
           <input type="varchar" class="form-control"  placeholder="Enter Your Date Of Birth (dd/mm/yy)" name="dob" required>
            </div>
            <br>
            <div class="gen" required>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            
            </div>

			      <div class="col form">
			        <input type="password" class="form-control" placeholder="Enter password" name="pswd" required>
			      </div>
			    </div>
                <input type="submit" class="btn btn-primary mt-3 btt1" value="Register" name="submit">
            <a href="index.php"><button type="button" class="btn btn-secondary mt-3 btt2">Login</button></a>
 			 </form>
		</div>
	</div>



</body>
</html>

