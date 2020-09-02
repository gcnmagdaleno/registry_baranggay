<?php
  session_start();
  extract($_POST);
  error_reporting(0);
require 'database_connection.php';



  if ($_SESSION['txtLoggedIn'] == "TRUE") {
                 header("Location:forms/logged_in/index.php");
                 exit();

            }else{

           if($_SERVER['REQUEST_METHOD']=='POST'){

        try {

                 if (isset($_POST['txtUN']) and isset($_POST['txtPW'])){

                // Assigning POST values to variables.
                  $_SESSION['txtUN'] =$_POST['txtUN'] ;
                  $_SESSION['txtPW'] = $_POST['txtPW'];
                $txtUN = $_SESSION['txtUN'];
                $txtPW = $_SESSION['txtPW'];

                // CHECK FOR THE RECORD FROM TABLE
                $query = "SELECT * FROM tbl_login WHERE username='$txtUN' and Password='$txtPW'";

                $result = mysqli_query($con, $query) or die(mysqli_error($con));
                $count = mysqli_num_rows($result);


                if ($count == 1){

                //echo "Login Credentials verified";
                echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";


                $query1 = "SELECT * FROM tbl_login WHERE username='$txtUN' and Password='$txtPW'";
                // $result1 = mysql_query($query1);


                    if ($result1=mysqli_query($con,$query1))
                      {
                      // Fetch one and one row
                      while ($row=mysqli_fetch_row($result1))
                        {
                        // printf ("%s (%s)\n",$row[0],$row[1]);


                         $_SESSION['txtUN'] = $row[0];
                         $_SESSION['txtBaranggay'] = $row[2];
                         $_SESSION['txtDateAdded'] = $row[3];
                         // $_SESSION['txtLoggedIn'] = "TRUE";



                        }
                      // Free result set
                      mysqli_free_result($result);
                    }

                    mysqli_close($con);



                    $_SESSION['txtLoggedIn'] = "TRUE";
                    header("Location:forms/logged_in/index.php");
                    exit();

                }else{
                echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
                $_SESSION['txtLoggedIn'] = "FALSE";
                //echo "Invalid Login Credentials";
                }
                }


    }
catch(PDOException $e)
    {
      $txtErr = "Connection Failed: ". $e->getMessage();

    echo "<script type='text/javascript'>alert(\"$txtErr\");</script>";
        $_SESSION['txtLoggedIn'] = "FALSE";
    }
}
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
    <script src="others/pace.min.js"></script>
    <link href="others/pace.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- <script src="pace.min.js"></script> -->
  <link href="css/index.css" rel="stylesheet" />

	<meta charset="UTF-8">
<!--===============================================================================================-->

<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
/* width */
::-webkit-scrollbar {
    width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
    background: #f1f1f1;
}

/* Handle */
::-webkit-scrollbar-thumb {
    background: #888;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #555;
}
</style>

</head>
<body >
	<center>
	<form action="?" method="POST" class="login100-form validate-form" data-ajax="false" enctype="multipart/form-data">
	<div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login100">
					<br><br><br>

					<!-- <span class="login100-form-title p-b-34 p-t-27">
						Login
					</span> -->

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="txtUN" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="txtPW" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>



					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<!-- <div class="text-center p-t-90">
						<a class="txt1" href="#">
							Don't have an account? <a href="registration.php" style="color: white;">Register Here!</a>
						</a>
					</div> -->
					<br>

			</div>
		</div>
	</div>



</form>
</center>
</body>
</html>
