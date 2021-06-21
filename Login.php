<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<link href="Sign.css" rel="stylesheet" type="text/css"/>
		<title>Login</title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-5 mx-auto">
					<div id="first">
						<div class="myform form ">
							<div class="logo mb-3">
								<div class="col-md-12 text-center">
									<h1>Login</h1>
								</div>
							</div>
							<form action="LoginDB.php" method="post" name="login">
							    <div class="form-group">
								   <label for="uName">Username</label>
								   <input type="text" name="uName"  class="form-control" id="email" placeholder="Enter Username">
							    </div>
							    <div class="form-group">
								   <label for="password">Password</label>
								   <input type="password" name="password" id="password"  class="form-control" placeholder="Enter Password">
							    </div>
							   
							    <div class="col-md-12 text-center ">
								   <button type="submit" class=" btn btn-block mybtn btn-dark tx-tfm">Login</button>
							    </div>
							    <br/>
							   
							    <div style="text-align:center;color: #aaa;"> Or </div>   
							</form>
							<form action="Signup.php" method="post">
								<div class="form-group">
									<p class="text-center">Don't have account?<input class="btn btn-link" type="submit" name="submit" value="Sign up here" /></p>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
        </div>

	</body>

</html>