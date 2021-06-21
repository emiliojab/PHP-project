<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<link href="Sign.css" rel="stylesheet" type="text/css"/>
		<title>Sign Up</title>
	</head>
	<body>
	
		<div class="container">
			<div class="row">
				<div class="col-md-5 mx-auto">
					<div id="second">
						<div class="myform form ">
							<div class="logo mb-3">
								<div class="col-md-12 text-center">
									<h1 >Welcome!</h1>
								</div>
							</div>
							<form method="post" action="dataview.php" name="registration">
								<div class="col-md-12 text-center mb-3">
								   <button type="submit" class=" btn btn-block mybtn btn-dark " name="signup">Fetch user data</button>
								</div>
								
							</form>
							<form action="dataviewEnc.php" method="post">
								<div class="col-md-12 text-center mb-3">
								   <button class=" btn btn-block mybtn btn-dark " >Fetch user data (encrypted)</button>
								</div>
							</form>
							<form action="User Logs.php" method="post">
								<div class="col-md-12 text-center mb-3">
								   <button class=" btn btn-block mybtn btn-dark " >User Logs</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
        </div>
	</body>

</html>