<?php
	$server = "SERVERNAME";
	$options = array(  "UID" => "USERID",  "PWD" => "PASSWORD",  "Database" => "DATABASENAME");
	$conn = sqlsrv_connect($server, $options);

	if ($conn === false) 
		die("<pre>".print_r(sqlsrv_errors(), true));
	
	
	if( $conn === false )
     {
     echo "Could not connect.\n";
     die( print_r( sqlsrv_errors(), true));
     }
?>