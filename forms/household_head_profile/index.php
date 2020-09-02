<?php
               session_start();
               error_reporting(0);




                require '../../database_connection.php';

                // require 'index1_form.php';

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>HouseHold Head Profile</title>
    <script src="../../others/pace.min.js"></script>
    <link href="../../others/pace.css" rel="stylesheet" />
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css"  >
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../../forms/style_logged_in.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="../../css/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script> -->

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <?php  error_reporting(0); require '../../form_sideBar.php'; ?>

        <!-- Page Content  -->
        <div id="content">

            <?php error_reporting(0); require '../../form_navBar.php'; ?>

            <?php error_reporting(0); require 'form_household_head_profile_content.php'; ?>

        </div>
    </div>


    <!-- Actual Contents -->





    <!-- End of Actual Contents -->

    <div>
    <?php error_reporting(0); require '../../form_footer.php'; ?>
</div>

</body>

</html>

<!-- Scripts -->

    <?php error_reporting(0); require '../../form_scripts.php'; ?>
