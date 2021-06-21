<?php include("connectDB.php");
	session_start();
	$uName=$_POST["uName"];
	$psswrd=$_POST["password"];
	$q="select * from users;";
	$result=sqlsrv_query($conn,$q) or exit("<pre>".print_r(sqlsrv_errors(), true));
	
	while($r = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC)){
		if($uName == $r["username"] && $psswrd == $r["password"]){
			$userID = $r["users_id"];
			
			$_SESSION['userID'] = $userID;
			
			$q1="insert into dbo.logs(users_id, logins) values('$userID', GETDATE());";
			sqlsrv_query($conn,$q1) or exit("<pre>".print_r(sqlsrv_errors(), true));
			
			$q="select MAX(logs_id) as 'ID' from dbo.logs;";
			$result=sqlsrv_query($conn,$q) or exit("<pre>".print_r(sqlsrv_errors(), true));
			if( $result === false) {
				die( print_r( sqlsrv_errors(), true) );
			}
			while($r = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC)){
				$_SESSION['logID'] = $r["ID"];
			}
			sqlsrv_close($conn);
			
			header("location:Logged in.php");
		} else {
			header("location:Login.php");
		}
	}
	
?>