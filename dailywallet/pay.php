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
  		opacity:0.5px;
  	}
  	.pay
  	{
  		text-align: center;
  		margin-top: 50px;
  		color:white;
  		background-color:#203040;
  	}
  	.corr
  	{
  		margin-right:220px;
  	}
  	.but
  	{
  		margin-right:25px;
  		width:40%
  	}
  	.image
  	{
  		height:300px;
  		width:300px;
  	}
  	#bt
  	{
  		width:20%;
  	}
  	#bt:hover
  	{
  		background-color:white;
  		color: #4281D4;
  	}
  </style>
</head>
<body>
	<div class="container pay">
		<br>
			<img src="qr.png" class="image" >
				<br>
				<br>
				 <script>
            		var digit="2000000";
          		</script>
				<h3>Digital Payment Number:<script>document.write(digit)</script></h3>
				<h3>Account Number:*****************</h3>
				<h3 class="corr">IFC Code:********</h3>

				<button type ="upload" class="corr but"> Upload Your Screenshot</button>
				<br>
				<br>
				<input type="text" placeholder="Enter Your 6 Digit Code" required class="but">
				<br>
				<br>
				<input type="text" placeholder="Enter Your Message" required class="but">
				<br> 
				<br>
				<button onclick="myfunction()" class="btn btn-primary mt-3 btt1" id="bt">Submit</button>
			<br>
	</div>


<script>
	function myfunction()
	{
		confirm("Are You ");
	}
</script>

</body>
</html>