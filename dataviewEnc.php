<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<link href="CustomStyles.css?version=22" rel="stylesheet" type="text/css"/>
		<title>Encrypted Data</title>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark sticky-top">
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<div class="navbar-nav">
					<a href="#" class="nav-item nav-link active">Encrypted Data</a>
				</div>
				<div class="navbar-nav ml-auto">
					<a href="dataview.php" class="nav-item nav-link">Decrypted Data</a>
					<a href="User Logs.php" class="nav-item nav-link">User Logs Data</a>
					<a href="LogoutDB.php" class="nav-item nav-link">Log out </a>
				</div>
			</div>
		</nav>
	
		<div class="table-responsive">
			<table class="table" >
				<thead class="thead-dark">
					<tr >
						<th class="align-middle" scope="col">ID</th>
						<th class="align-middle" scope="col">Encrypted username</th>
						<th class="align-middle" scope="col">Encrypted firstname</th>
						<th class="align-middle" scope="col">Encrypted lastname</th>
						<th class="align-middle" scope="col">Encrypted password</th>
					</tr>
				</thead>
				<tbody>
				
				
				<?php include("connectDB.php"); 
								$q = "select * from users;";
								$result=sqlsrv_query($conn,$q) or exit("<pre>".print_r(sqlsrv_errors(), true));
								if( $result === false) {
									die( print_r( sqlsrv_errors(), true) );
								}
								while($r = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ){
							?>
							<tr>
								<th class="align-middle" scope="row"><?php print ($r['users_id']); ?></th>
								<td class="align-middle" ><?php print ($r['usernameEnc']); ?></td>
								<td class="align-middle" ><?php print ($r['firstnameEnc']); ?></td>
								<td class="align-middle" ><?php print ($r['lastnameEnc']); ?></td>
								<td class="align-middle" ><?php print ($r['passwordEnc']); ?></td>
							</tr>
				<?php 
						} sqlsrv_free_stmt( $result);
						?>
				</tbody>
			</table>
		</div>
	</body>
</html>