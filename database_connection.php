<?php
session_start();
error_reporting(0);
extract($_POST);
date_default_timezone_set("Asia/Manila");

// $txtLocalHost = "localhost";
// $txtDBUsername = "root";
// $txtDBPassword = "";
// $txtDatabase = "db_baranggay";

define('txtLocalHost', 'localhost');
define('txtDBUsername', 'root');
define('txtDBPassword', '');
define('txtDatabase', 'db_baranggay');



// $txtBaranggay = $_SESSION['txtBaranggay'];
// $txtUN = $_SESSION['txtUN'];
// $txtLoggedIn = $_SESSION['txtLoggedIn'];


             	// echo $_SESSION['txtBaranggay']."<br>".$_SESSION['txtUN'];

	$con = mysqli_connect(constant('txtLocalHost'),constant('txtDBUsername'),constant('txtDBPassword'),constant('txtDatabase'));

	// $con = mysqli_connect($txtLocalHost,$txtDBUsername,$txtDBPassword,$txtDatabase);

	// Check connection
	if (mysqli_connect_errno()){
	  echo "<br>Failed to connect to MySQL: " . mysqli_connect_error()."<br>";

	}else{
		// echo "<br>Successful Connection of the Database!<br>DB:".constant('txtDatabase')." <br>";
	}
?>
