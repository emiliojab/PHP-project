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
									<h1 >Register</h1>
								</div>
							</div>
							<form method="post" action="SignupDB.php" name="registration">
								<div class="form-group">
								   <label for="fName">First Name</label>
								   <input type="text"  name="fName" class="form-control" id="firstname" placeholder="Enter Firstname">
								</div>
								<div class="form-group">
								   <label for="lName">Last Name</label>
								   <input type="text"  name="lName" class="form-control" id="lastname" placeholder="Enter Lastname">
								</div>
								<div class="form-group">
								   <label for="uName">Username</label>
								   <input type="text" name="uName"  class="form-control" id="email" placeholder="Enter Username">
								</div>
								<div class="form-group">
								   <label for="password">Password</label>
								   <input type="password" name="password" id="password"  class="form-control" placeholder="Enter Password">
								</div>
								<div class="col-md-12 text-center mb-3">
								   <button type="submit" class=" btn btn-block mybtn btn-dark " name="signup">Register</button>
								</div>
								
							</form>
							
						</div>
					</div>
				</div>
			</div>
        </div>
	</body>

</html>