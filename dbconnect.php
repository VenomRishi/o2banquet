<?php

	$dsn = 'mysql:host=localhost;dbname=dbo2banquet';
	$username = 'root';
	$password = '';

	try
	{
		$db = new PDO($dsn,$username,$password);
	}
	catch(PDOException $e)
    {
		$error_message = $e->getMessage();
		print "$error_message";
		exit(1);
	}
?>
