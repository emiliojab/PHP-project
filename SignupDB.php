<?php include("connectDB.php");
	$uName=$_POST["uName"];
	$fName=$_POST["fName"];
	$lName=$_POST["lName"];
	$psswrd=$_POST["password"];
	
	
	// Cipher method (Advanced Encryption Standard)
	$ciphering = "AES-128-CTR";
	
	// OpenSSl Encryption method
	$iv_length = openssl_cipher_iv_length($ciphering);
	$options = 0;
  
	// Non-NULL Initialization Vector for encryption
	$encryption_iv = '1234567891011121';
  
	// Store the encryption key
	$encryption_key = "gearhostproject";
	
	$uNameEnc= openssl_encrypt($uName, $ciphering, $encryption_key, $options, $encryption_iv);
	$fNameEnc= openssl_encrypt($fName, $ciphering, $encryption_key, $options, $encryption_iv);
	$lNameEnc= openssl_encrypt($lName, $ciphering, $encryption_key, $options, $encryption_iv);
	$psswrdEnc= openssl_encrypt($psswrd, $ciphering, $encryption_key, $options, $encryption_iv);
	
	$q="insert into dbo.users(username, firstname, lastname, password, usernameenc, firstnameenc, lastnameenc, passwordenc) values('$uName','$fName','$lName','$psswrd','$uNameEnc','$fNameEnc','$lNameEnc','$psswrdEnc');";
	sqlsrv_query($conn,$q) or exit("<pre>".print_r(sqlsrv_errors(), true));
	sqlsrv_close($conn);
	header("location:Login.php");

?>