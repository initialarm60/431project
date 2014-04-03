<?php
	$con=mysqli_connect("localhost","root","","programmers");
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$sql="INSERT INTO Admins (admin_username, admin_password, admin_email)
	VALUES
	('$_POST[username]', '$_POST[password]', '$_POST[email]')";

	if (!mysqli_query($con,$sql))
	{
		die('Error: ' . mysqli_error($con));
	}
	
	echo "1 record added";

	Echo "<html>";
	Echo "<title>HTML with PHP</title>";
	Echo "<b>My Example</b>";

	mysqli_close($con);
?>
