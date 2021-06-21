<?php include("connectDB.php");
	session_start();
	$logsID = $_SESSION["logID"];
	
	$q="update dbo.logs set logouts = GETDATE() where logs_id = '$logsID';";
	sqlsrv_query($conn,$q) or exit("<pre>".print_r(sqlsrv_errors(), true));
	session_destroy();
	sqlsrv_close($conn);
	header("location:Login.php");
		
	
	
?>