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
    h6
    {
      color:white;
      font-size:13px;
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
  		margin-top:170px;
  	}
  	.btt1
  	{
  		
  		width:170px;
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
  	
  </style>
</head>
<body>
	<div class="container login">
		<div>
			<h2 class="text-white">Forget Your Password</h2>
			<img src="b1.png" class="logo">
			<form action="index.php" method="POST">
			    <div class="col">
			    	<br>
			      <div class="col form">
			        <input type="text" class="form-control" id="email" placeholder="Enter Username" name="email" required>
			      </div>
			      <br>
            <div class="col form">
              <input type="text" class="form-control" id="email" placeholder="Enter Your 6 digit Code" name="email" required>
            </div>
            <br>
			      <div class="col form">
			        <input type="password" class="form-control" placeholder="Enter Your New password" name="pswd" required>
			      </div>
			    </div>
 				   <button type="submit" class="btn btn-primary mt-3 btt1">Submit</button>
 				   <br><br><br><br><br><br>
           <h6>If You Are Lost Lost Your 6 Digit Code Contact Your Senior......</h6>
 			 </form>

		</div>
	</div>
</body>
</html>