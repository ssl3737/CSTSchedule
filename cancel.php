<?php
$primaryKey = $_REQUEST["q"];
$tableName = "schdule1";

	session_start();
	
	//Include database connection details
	require_once('config.php');

	$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_query($con,"UPDATE $tableName SET special = 'c' WHERE id = '$primaryKey'");
echo "Class cancelled";
mysqli_close($con);

?>