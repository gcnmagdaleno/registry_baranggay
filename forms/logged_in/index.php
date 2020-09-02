<?php
    // try {
      error_reporting(0);
  session_start();
$sessionButtonClicked = $_SESSION['ButtonClicked'];
  echo "$sessionButtonClicked";
    extract($_POST);

    date_default_timezone_set("Asia/Manila");
require '../../database_connection.php';

// phpinfo();
ini_set ("display_errors", "1");
// error_reporting(E_ALL);

if ($_SESSION['txtLoggedIn'] == "FALSE" || $_SESSION['txtLoggedIn'] == "" || $_SESSION['txtLoggedIn'] == null) {
                 header("Location:../../index.php");
                 exit();

            }else{

           if($_SERVER['REQUEST_METHOD']=='POST'){


    $TotalNumberOfHouseHoldHead = 0;
    // $_POST['TotalNumberOfHouseHoldHead'] = 0;

    $sql="SELECT * FROM tbl_householdheadprofile ORDER BY HouseHoldNumber";

    if ($result=mysqli_query($con,$sql))
      {
      // Return the number of rows in result set
      $rowcount=mysqli_num_rows($result);
      printf("Result set has %d rows.\n",$rowcount);
      $TotalNumberOfHouseHoldHead = $rowcount;
      $_SESSION['TotalNumberOfHouseHoldHead'] = $TotalNumberOfHouseHoldHead;

      // Free result set
      mysqli_free_result($result);
      }
      // mysqli_close($con);

          switch ($_POST['hhhp_submitButton']) {

            // case 'Submit':

            //    echo "<br>clicked the submit button<br>";

            // break;
            case 'Add Record':

                // alert('Clicked Add Record');
                echo "<script>window.location.replace('index.php');</script>";
                  $_SESSION['ButtonClicked'] = "ADD";

              break;




            case 'Save Add Record':

          if(getimagesize($_FILES['hhhp_HouseHoldHead_UploadProfilePicture']['tmp_name'])==FALSE)
     {
        echo " if ";

     }
     else
     {

        echo "else";


          $file=$_FILES['hhhp_HouseHoldHead_UploadProfilePicture'];
          $upload_directory='images/uploads/';
          $folder = "images/uploads/";
          //$upload_directory=sys_get_temp_dir().'/uploads/';
          //$folder = sys_get_temp_dir()."/uploads";
          if(!is_dir($folder)) mkdir($folder);
          $ext_str = "gif,jpg,jpeg,tiff,bmp,png";
          $allowed_extensions=explode(',',$ext_str);
          $max_file_size = 10485760;
          $ext = substr($file['name'], strrpos($file['name'], '.') + 1);
          if (!in_array($ext, $allowed_extensions) ) {
          echo "only".$ext_str." files are allowed to upload";

          }

          if($file['size']>=$max_file_size){

          echo "only the file less than ".$max_file_size."mb  allowed to upload";

          }

              // $path=md5(microtime()).'.'.$ext;
              $path=$file['name'];

              //$path = $filefield;
              if(move_uploaded_file($file['tmp_name'],$upload_directory.$path)){
              $filefield = $_FILES["hhhp_HouseHoldHead_UploadProfilePicture"];
              $path = "images/uploads/".$path;

              echo "saved to $path<br>".$file['name'];

             //$path = $upload_directory.$filefield;
             //$path = "%temp%/uploads/".$filefield;
              echo "<br>$upload_directory".$file['name'];
          }else{
            echo "not moved to path";
          }





              $hhhp_HouseHoldHeadIDNumber = $_POST['hhhp_HouseHoldHeadIDNumber'];
              $hhhp_HouseHoldHeadPurok = $_POST['hhhp_HouseHoldHeadPurok'];
              $hhhp_HouseHoldHeadOccupation = $_POST['hhhp_HouseHoldHeadOccupation'];
              $hhhp_HouseHoldHeadCivilStatus = $_POST['hhhp_HouseHoldHeadCivilStatus'];
              $timestamp = strtotime($_POST['hhhp_HouseHoldHeadBirthdate']);
            $date=date('d',$timestamp);
            $month=date('m',$timestamp);
            $year=date('Y',$timestamp);
            $hhhp_HouseHoldHeadBirthdate = $year.$month.$date;
            $currentYear = date('Y');
           $hhhp_HouseHoldHeadAge = $currentYear - $year;
           $hhhp_HouseHoldHeadMonthsOld = $hhhp_HouseHoldHeadAge * 12;
              $hhhp_HouseHoldHeadFullName = $_POST['hhhp_HouseHoldHeadFullName'];
              $hhhp_HouseHoldHeadMonthlyIncome = $_POST['hhhp_HouseHoldHeadMonthlyIncome'];
              $hhhp_HouseHoldHeadYearsInTheBaranggay = $_POST['hhhp_HouseHoldHeadYearsInTheBaranggay'];
              $hhhp_HouseHoldHeadStatusOfResidency = $_POST['hhhp_HouseHoldHeadStatusOfResidency'];
              // $hhhp_HouseHoldHeadEducation = $_POST['hhhp_HouseHoldHeadEducation'];
              $hhhp_HouseHoldHeadCitizenship = $_POST['hhhp_HouseHoldHeadCitizenship'];
              $hhhp_HouseHoldHeadsSpouseIDNumber = $_POST['hhhp_HouseHoldHeadsSpouseIDNumber'];
              $hhhp_HouseHoldHeadsSpouseNumberOfChildren = $_POST['hhhp_HouseHoldHeadsSpouseNumberOfChildren'];
              $hhhp_HouseHoldHeadsSpouseNumberOfBorders = $_POST['hhhp_HouseHoldHeadsSpouseNumberOfBorders'];
              $hhhp_HouseHoldHeadsSpouseFullName = $_POST['hhhp_HouseHoldHeadsSpouseFullName'];
              $hhhp_HouseHoldHeadsSpouseOccupation = $_POST['hhhp_HouseHoldHeadsSpouseOccupation'];
              $hhhp_HouseHoldHeadsSpouseAge = $_POST['hhhp_HouseHoldHeadsSpouseAge'];
              $hhhp_HouseHoldHeadHighestEducationalAttainment = $_POST['hhhp_HouseHoldHeadHighestEducationalAttainment'];
              // $img_HouseHoldHead_ProfilePicture = $_POST[''];
              $img_HouseHoldHead_ProfilePicture = $upload_directory.$file['name'];
              $img_HouseHoldHeadsSpouse_ProfilePicture = $_FILES['img_HouseHoldHeadsSpouse_ProfilePicture'];

               $txtUN = $_SESSION['txtUN'];
               $txtBaranggay = $_SESSION['txtBaranggay'];
               $txtDateAdded = $_SESSION['txtDateAdded'];

              echo "<br>clicked the add button<br>";
              $houseHoldNumber = intval($_SESSION['TotalNumberOfHouseHoldHead'])+1;



        $sql = "INSERT INTO tbl_householdheadprofile (HouseHoldNumber,HouseHoldHeadIDNumber,HouseHoldHeadPurok,HouseHoldHeadOccupation,HouseHoldHeadCivilStatus,HouseHoldHeadBirthdate,HouseHoldHeadAge,HouseHoldHeadMonthsOld,HouseHoldHeadFullName,HouseHoldHeadMonthlyIncome,HouseHoldHeadYearsInTheBaranggay,HouseHoldHeadStatusOfResidency,HouseHoldHeadHighestEducationalAttainment,HouseHoldHeadCitizenship,HouseHoldHeadsSpouseIDNumber,HouseHoldHeadsSpouseNumberOfChildren,HouseHoldHeadsSpouseNumberOfBorders,HouseHoldHeadsSpouseFullName,HouseHoldHeadsSpouseOccupation,HouseHoldHeadsSpouseAge,HouseHoldHeadsSpouseEducation,HouseHoldHeadProfilePicture,HouseHoldHeadsSpouseProfilePicture,Baranggay) VALUES ($houseHoldNumber,$hhhp_HouseHoldHeadIDNumber,'$hhhp_HouseHoldHeadPurok','$hhhp_HouseHoldHeadOccupation','$hhhp_HouseHoldHeadCivilStatus',$hhhp_HouseHoldHeadBirthdate,$hhhp_HouseHoldHeadAge,$hhhp_HouseHoldHeadMonthsOld,'$hhhp_HouseHoldHeadFullName','$hhhp_HouseHoldHeadMonthlyIncome',$hhhp_HouseHoldHeadYearsInTheBaranggay,'$hhhp_HouseHoldHeadStatusOfResidency','$hhhp_HouseHoldHeadHighestEducationalAttainment','$hhhp_HouseHoldHeadCitizenship',$hhhp_HouseHoldHeadsSpouseIDNumber,$hhhp_HouseHoldHeadsSpouseNumberOfChildren,$hhhp_HouseHoldHeadsSpouseNumberOfBorders,'$hhhp_HouseHoldHeadsSpouseFullName','$hhhp_HouseHoldHeadsSpouseOccupation',$hhhp_HouseHoldHeadsSpouseAge,'$hhhp_HouseHoldHeadsSpouseEducation','$img_HouseHoldHead_ProfilePicture','$img_HouseHoldHeadsSpouse_ProfilePicture','$txtBaranggay')";

        // require 'form_try2_PhotoUpload2.php';



        if (mysqli_query($con, $sql)) {
            echo "New record created successfully";
                // echo "<script>window.location.replace('index.php');</script>";
                 exit();
        } else {
            // echo "Error: " . $sql . "<br>" . mysqli_error($con);
          echo "<script>alert('there was an error saving.');</script>";
        }
    }

                        $_SESSION['ButtonClicked'] = "SAVEADD";


        // mysqli_close($con);

        // mysqli_query($con,"SELECT * FROM tbl_householdheadprofile");

        // mysqli_query($con,"INSERT INTO Persons (FirstName,LastName,Age)
        // VALUES ('Glenn','Quagmire',33)");

        // mysqli_close($con);




            break;

            case 'Delete Record':

             // alert('Clicked Delete Record');
                echo "<script>window.location.replace('index.php');</script>";
                  $_SESSION['ButtonClicked'] = "DELETE";


            break;

            case 'Edit Record':



             // alert('Clicked Edit Record');
                echo "<script>window.location.replace('index.php');</script>";

                $_SESSION['ButtonClicked'] = "EDIT";

              // echo "The file " . basename($fileName) . " has been uploaded";
            break;


            case 'View_All_Record':
              // echo "<script>alert('View all');</script>";
              echo "<script>window.location.replace('index.php');</script>";
              $_SESSION['ButtonClicked'] = "VIEWALL";
              break;


            // case 'HouseHoldHeadPhoto':

            //   echo "<br>clicked the HouseHoldHeadPhoto  button<br>";






            // break;

            // case 'hhhp_HouseHoldHeadsSpouse_UploadProfilePicture':

            //   echo "<br>clicked the hhhp_HouseHoldHeadsSpouse_UploadProfilePicture  button<br>";



            // break;

            case 'LOGOUT BUTTON':
              echo "<script>alert('Succesfully Logged Out');</script>";

              echo "<script>window.location.replace('index.php');</script>";

              session_unset();
              session_destroy();


                $_SESSION['ButtonClicked'] = "LOGGEDOUT";

              break;
            case 'SETTINGS BUTTON':

              echo "<script>alert('CLICKED SETTINGS');</script>";
              echo "hi";
              break;


            default:

            break;
        }



}

}


   // }catch (exception $e) {
   //          echo "$e";
   //        }

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Registry of Baranggay Inhabitants</title>
    <script src="../../others/pace.min.js"></script>
    <link href="../../others/pace.css" rel="stylesheet" />
        <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../../forms/style_logged_in.css">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css"  >
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="../../css/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script> -->

</head>

<body>

    <center><div>
        <?php
               // session_start();




                require '../../database_connection.php';

                // require 'index1_form.php';

        ?>
    </div></center>

    <div class="wrapper">
        <!-- Sidebar  -->
        <?php  require '../../form_sideBar.php'; ?>

        <!-- Page Content  -->
        <div id="content">

            <?php  require 'form_navBar.php'; ?>

            <?php  require 'form_logged_in_content.php'; ?>

        </div>
    </div>


    <!-- Actual Contents -->





    <!-- End of Actual Contents -->

    <div>
    <?php require '../../form_footer.php'; ?>
</div>

</body>

</html>

<!-- Scripts -->

    <?php  require '../../form_scripts.php'; ?>

<script>

var ButtonClicked = "<?php echo $sessionButtonClicked;?>";

if (ButtonClicked == "EDIT") {
  document.getElementById('hhhp_SaveAdd').style.display = "none";
  document.getElementById('hhhp_Add').style.display = "all";
  document.getElementById('divHideAdd').style.display = "none";
  document.getElementById('hhhp_Delete').style.display = "all";
  document.getElementById('hhhp_Edit').style.display = "all";
  document.getElementById('divHideViewAll').style.display = "none";



}else if (ButtonClicked == "ADD") {
  document.getElementById('hhhp_SaveAdd').style.display = "all";
  document.getElementById('hhhp_Add').style.display = "none";
  document.getElementById('hhhp_Edit').style.display = "all";
  document.getElementById('divHideAdd').style.display = "all";
  document.getElementById('hhhp_Delete').style.display = "all";
  document.getElementById('divHideViewAll').style.display = "none";



}else if (ButtonClicked == "SAVEADD") {
  document.getElementById('hhhp_SaveAdd').style.display = "all";
  document.getElementById('hhhp_Add').style.display = "none";
  document.getElementById('hhhp_Edit').style.display = "all";
  document.getElementById('divHideAdd').style.display = "all";
  document.getElementById('hhhp_Delete').style.display = "all";


}else if (ButtonClicked == "DELETE") {
  document.getElementById('hhhp_SaveAdd').style.display = "none";
  document.getElementById('hhhp_Add').style.display = "all";
  document.getElementById('hhhp_Edit').style.display = "all";
  document.getElementById('divHideAdd').style.display = "none";
  document.getElementById('hhhp_Delete').style.display = "all";
  document.getElementById('divHideViewAll').style.display = "none";



}else if (ButtonClicked == "VIEWALL") {
  document.getElementById('hhhp_SaveAdd').style.display = "none";
  document.getElementById('hhhp_Add').style.display = "all";
  document.getElementById('hhhp_Edit').style.display = "all";
  document.getElementById('divHideAdd').style.display = "none";
  document.getElementById('hhhp_Delete').style.display = "all";
  document.getElementById('divHideViewAll').style.display = "all";



}else{
  document.getElementById('hhhp_SaveAdd').style.display = "all";
  document.getElementById('hhhp_Add').style.display = "none";
  document.getElementById('hhhp_Edit').style.display = "all";
  document.getElementById('divHideAdd').style.display = "all";
  document.getElementById('hhhp_Delete').style.display = "all";
  document.getElementById('divHideViewAll').style.display = "none";
}



</script>
