

<style type="text/css">

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

      body{
            /*background-color: #27ae60;*/
            background-color: beige!important;
            max-width: 100%!important;


      }

      hr{
      border: 2.5px solid rgb(24,24,24);
      border-radius: 100%;
      /*width: 10px;
      height: 10px;*/
      margin: 35px;
      align-items: center!important;
            align-content: center!important;
            text-align: center!important;

      }

      .hhhp_crud{
            float: right;position: fixed;bottom: 0;right: 0;margin-bottom: 30px;

      }



      .form_autoresize{
            max-width: 100%!important;
            padding: 10px!important;
            align-items: center!important;
            align-content: center!important;
            text-align: center!important;
      }

    .hhhp_textinput{
            display: flex!important;
            /*flex-wrap: wrap;
            flex-grow: 3;*/
            justify-content: space-around!important;
            width: 100%!important;
            margin:auto!important;
            padding: 5px!important;
            /*align-items: center;
            align-content: center;*/
            /*text-align: center!important;*/
            /*background-color: #2ecc71;*/
  background-color: white!important;
      color: black!important;border-radius: 10px!important;   font-size: 20px!important;
      font-weight: bold!important;
      transition: .25s!important;
      }

        .hhhp_textinput:hover{
      padding: 2px!important;
      /*font-size: 18px!important;*/
      font-weight: bold!important;
      text-align: center!important;
      background-color: gray!important;
      color: beige!important;
      border-radius: 100px!important;
      }



/*      .form_subcontents_one, .hhhp_textinput{
            display: block!important;
            width: 100%!important;
            padding: 15px;
            /*background-color: #77dd77;

      }
      */


      label{
        margin-top: 15px;
      }



      .hhhp_button{
        padding: 10px;
        font-size: 15px;
        font-weight: bold;
        /*background-color: #fff0db;*/
        border-color: gray;
        color: rgb(24,24,24);
        border-radius: 100%;
        /*position: absolute; right: 10;*/
        margin-top: 10px;
        margin-left: 20px;
      }

      .hhhp_button:hover{
        padding: 15px;
        font-size: 20px;
        font-weight: bold;
        background-color: #dfe9ec;
        border-color: black;
        color: #283b43;
        border-radius: 100%;
        /*position: absolute; right: 10;*/
        margin-top: 15px;
        transition: .2s;
        transition-timing-function: ease-out;
        /*cursor: -webkit-grabbing; cursor: grabbing;*/
        cursor: url(images/logo_sample.png);
      }

      /*.hhhp_button{
        padding: 10px;
        font-size: 15px;
        font-weight: bold;
        /*background-color: #fff0db;*//*
        border-color: gray;
        color: rgb(24,24,24);
        border-radius: 100%;
        position: absolute; right: 10;
        margin-top: 10px;
      }*/

   /*   .hhhp_Add{
        display: none;
      }*/

</style>
<br><br>



<form method="POST" action="?" name="form_HouseHoldHeadProfile2" class="form_HouseHoldHeadProfile" id="form_HouseHoldHeadProfile" data-ajax="false" enctype="multipart/form-data">


    <div class="form_autoresize" >


<div class="hhhp_crud" id="hhhp_crud">
  <button name="hhhp_submitButton" class="hhhp_Add" id="hhhp_Add" value="Add Record">Add A Record</button>
  <button name="hhhp_submitButton" class="hhhp_Delete" id="hhhp_Delete" value="Delete Record">Delete A Record</button>
  <button  name="hhhp_submitButton" class="hhhp_Edit" id="hhhp_Edit" value="Edit Record">Edit A Record</button>
  <button name="hhhp_submitButton" class="hhhp_SaveAdd" id="hhhp_SaveAdd" value="Save Add Record">Save Record</button>
  <button name="hhhp_submitButton" class="hhhp_SaveEdit" id="hhhp_SaveAdd" value="Save Edit Record">Edit Record</button>
  <button name="hhhp_submitButton" class="hhhp_SaveDelete" id="hhhp_SaveAdd" value="Save Delete Record">Delete Record</button>
  <button name="hhhp_submitButton" class="hhhp_ViewAll" id="hhhp_ViewAll" value="View_All_Record">View All Records</button></div></div>



  <!-- <button disabled name="hhhp_ProfilePicture" value="Upload"><img name="hhhp_ProfilePicture_img" src="images/bg_login.png"  >Name
  </button> -->



  <div id="divHideAdd">


      <input disabled type="text" name="hhhp_TotalNumberOfHouseHoldHead" class="hhhp_TotalNumberOfHouseHoldHead " style="border:0;background-color: transparent;font-size: 20px;width: 100%;align-items: center!important;align-content: center!important;text-align: center!important;" value="<?php error_reporting(0); $sql='SELECT * FROM tbl_householdheadprofile ORDER BY HouseHoldNumber'; if ($result=mysqli_query($con,$sql)){ $rowcount=mysqli_num_rows($result); $TotalNumberOfHouseHoldHead = $rowcount;$_SESSION['TotalNumberOfHouseHoldHead'] = $TotalNumberOfHouseHoldHead;echo 'Total Number Of House-Hold Head: '.$_SESSION['TotalNumberOfHouseHoldHead'];mysqli_close($con);
        }?>">


      <hr class="hhhp_hr"/>

      <center>
      <label name="hhhp_submitButton1" class="hhhp_button" value="" style="border:0;background-color: transparent;padding: 10px;"><figure>
                    <img class="img_HouseHoldHeadsSpouse_ProfilePicture"  src="../../images/logo_sample.png" style="width: 170px;"><input  type="file" name="hhhp_HouseHoldHead_UploadProfilePicture" id="hhhp_HouseHoldHead_UploadProfilePicture" class="hhhp_HouseHoldHead_UploadProfilePicture" style="display: none;"><br>
                    <figcaption>
                    Click here to upload a photo<br> of the House-Hold Head
                    </figcaption>
        </figure></label></center> <br>


      <label class="hhhp_label">House-Hold Number: </label>
      <input  type="number" name="hhhp_HouseHoldNumber" class="hhhp_HouseHoldNumber hhhp_textinput">

            <label class="hhhp_label">House-Hold Head ID Number: </label>
            <input  type="number" name="hhhp_HouseHoldHeadIDNumber" class=" hhhp_HouseHoldHeadIDNumber hhhp_textinput">

            <label class="hhhp_label">Purok: </label>
            <input  type="text" name="hhhp_HouseHoldHeadPurok" class="hhhp_HouseHoldHeadPurok hhhp_textinput">

            <label class="hhhp_label">Occupation: </label>
            <select  name="hhhp_HouseHoldHeadOccupation" class="hhhp_textinput" >
                  <option value="Accounting/Finance">Accounting/Finance</option>
                  <option value="Admin/Human Resources">Admin/Human Resources</option>
                  <option value="Arts/Media/Communications">Arts/Media/Communications</option>
                  <option value="Building/Construction">Building/Construction</option>
                  <option value="Computer/Information Technology">Computer/Information Technology</option>
                  <option value="Education/Training">Education/Training</option>
                  <option value="Engineering">Engineering</option>
                  <option value="Healthcare/Hospital/Medicine">Healthcare/Hospital/Medicine</option>
                  <option value="Hotel/Restaurant">Hotel/Restaurant</option>
                  <option value="Manufacturing">Manufacturing</option>
                  <option value="Sales/Marketing">Sales/Marketing</option>
                  <option value="Sciences">Sciences</option>
                  <option value="Services">Services</option>
                  <option value="[Others] Journalists/Editors">[Others] Journalists/Editors</option>
                  <option value="[Others] Writers/Publishers">[Others] Writers/Publishers</option>
                  <option value="[Others] General Works/All Others">[Others] General Works/All Others</option>
            </select>

            <label class="hhhp_label">Civil Status: </label>
            <select  name="hhhp_HouseHoldHeadCivilStatus" class="hhhp_HouseHoldHeadCivilStatus hhhp_textinput">
                  <option value="Single">Single</option>
                  <option value="Married">Married</option>
                  <option value="Widowed">Widowed</option>
                  <option value="Divorced">Divorced</option>
            </select>

            <label class="hhhp_label">Birthdate: (MM/DD/YYYY) </label>
            <input  onmouseleave="computeBirthdate();" type="date" name="hhhp_HouseHoldHeadBirthdate" class="hhhp_HouseHoldHeadBirthdate hhhp_textinput">

            <label  class="hhhp_label">Age: </label>
            <input type="number" name="hhhp_HouseHoldHeadAge" class="hhhp_HouseHoldHeadAge hhhp_textinput">

            <label class="hhhp_label">Months-Old: </label>
            <input  type="number" name="hhhp_HouseHoldHeadMonthsOld" class="hhhp_HouseHoldHeadMonthsOld hhhp_textinput">

            <label class="hhhp_label">House-Hold Head Fullname: </label>
            <input  type="text" name="hhhp_HouseHoldHeadFullName" class="hhhp_HouseHoldHeadFullName hhhp_textinput">

            <label class="hhhp_label">Monthly Income: </label>
            <select  name="hhhp_HouseHoldHeadMonthlyIncome" class="hhhp_HouseHoldHeadMonthlyIncome hhhp_textinput">
                  <option value="Below 5,000">Below 5,000</option>
                  <option value="5,001 - 10,000">5,001 - 10,000</option>
                  <option value="10,001 - 15,000">10,001 - 15,000</option>
                  <option value="15,001 and above">15,001 and above</option>
            </select>

            <label class="hhhp_label">Years In The Baranggay: </label>
            <input  type="number" name="hhhp_HouseHoldHeadYearsInTheBaranggay" class="hhhp_HouseHoldHeadYearsInTheBaranggay hhhp_textinput">

            <label class="hhhp_label">Status Of Residency: </label>
            <select  name="hhhp_HouseHoldHeadStatusOfResidency" class="hhhp_HouseHoldHeadStatusOfResidency hhhp_textinput" >
                  <option value="House Owner">House Owner</option>
                  <option value="House Rental">House Rental</option>
                  <option value="Bedspacer">Bedspacer</option>
            </select>

            <label class="hhhp_label">Highest Educational Attainment:  </label>
                <select  name="hhhp_HouseHoldHeadHighestEducationalAttainment" class="hhhp_HouseHoldHeadHighestEducationalAttainment hhhp_textinput" >
                  <option value="House Owner">Primary Education [Kinder to Elementary]</option>
                  <option value="House Rental">Secondary Education [High School]</option>
                  <option value="Bedspacer">Tertiary Education [College]</option>
                  <option value="Bedspacer">Undergraduate</option>
                  <option value="Bedspacer">Others [Master's Degree]</option>
            </select>

            <label class="hhhp_label">Citizenship: </label>
            <select  name="hhhp_HouseHoldHeadCitizenship" class="hhhp_HouseHoldHeadCitizenship hhhp_textinput" >
                  <option value="Filipino Citizen">Filipino Citizen</option>
                  <option value="Non-Filipino Citizen">Non-Filipino Citizen</option>
            </select>


        <hr class="hhhp_hr"/>
        <center>
        <label name="hhhp_submitButton1" class="hhhp_button" value="" style="border:0;background-color: transparent;padding: 10px;"><figure>
                    <img class="img_HouseHoldHeadsSpouse_ProfilePicture"  src="../../images/logo_sample.png" style="width: 170px;"><input  type="file" name="hhhp_HouseHoldHeadsSpouse_UploadProfilePicture" id="hhhp_HouseHoldHeadsSpouse_UploadProfilePicture" class="hhhp_HouseHoldHeadsSpouse_UploadProfilePicture" style="display: none;"><br>
                    <figcaption>
                    Click here to upload a photo<br> of the House-Hold Head's Spouse
                    </figcaption>
        </figure></label></center> <br>

        <label class="hhhp_label">House-Hold Head's Spouse ID Number: </label>
        <input  type="number" name="hhhp_HouseHoldHeadsSpouseIDNumber" class="hhhp_HouseHoldHeadsSpouseIDNumber hhhp_textinput">

        <label class="hhhp_label">Number Of Children: </label>
            <input  type="number" name="hhhp_HouseHoldHeadsSpouseNumberOfChildren" class="hhhp_HouseHoldHeadsSpouseNumberOfChildren hhhp_textinput">

            <label class="hhhp_label">Number Of Borders: </label>
            <input  type="number" name="hhhp_HouseHoldHeadsSpouseNumberOfBorders" class="hhhp_HouseHoldHeadsSpouseNumberOfBorders hhhp_textinput">

            <label class="hhhp_label">House-Hold Head's Spouse Fullname: </label>
            <input  type="text" name="hhhp_HouseHoldHeadsSpouseFullName" class="hhhp_HouseHoldHeadsSpouseFullName hhhp_textinput">

            <label class="hhhp_label">House-Hold Head's Spouse Occupation: </label>
            <select  name="hhhp_HouseHoldHeadsSpouseOccupation" class="hhhp_textinput" >
                  <option value="Accounting/Finance">Accounting/Finance</option>
                  <option value="Admin/Human Resources">Admin/Human Resources</option>
                  <option value="Arts/Media/Communications">Arts/Media/Communications</option>
                  <option value="Building/Construction">Building/Construction</option>
                  <option value="Computer/Information Technology">Computer/Information Technology</option>
                  <option value="Education/Training">Education/Training</option>
                  <option value="Engineering">Engineering</option>
                  <option value="Healthcare/Hospital/Medicine">Healthcare/Hospital/Medicine</option>
                  <option value="Hotel/Restaurant">Hotel/Restaurant</option>
                  <option value="Manufacturing">Manufacturing</option>
                  <option value="Sales/Marketing">Sales/Marketing</option>
                  <option value="Sciences">Sciences</option>
                  <option value="Services">Services</option>
                  <option value="[Others] Journalists/Editors">[Others] Journalists/Editors</option>
                  <option value="[Others] Writers/Publishers">[Others] Writers/Publishers</option>
                  <option value="[Others] General Works/All Others">[Others] General Works/All Others</option>
            </select>

            <label class="hhhp_label">House-Hold Head's Spouse Age: </label>
            <input  type="number" name="hhhp_HouseHoldHeadsSpouseAge" class="hhhp_HouseHoldHeadsSpouseAge hhhp_textinput">

            <label class="hhhp_label">House-Hold Head's Spouse Highest Educational Attainment: </label>
            <select  name="hhhp_HouseHoldHeadsSpouseEducation" class="hhhp_textinput" >
                  <option value="House Owner">Primary Education [Kinder to Elementary]</option>
                  <option value="House Rental">Secondary Education [High School]</option>
                  <option value="Bedspacer">Tertiary Education [College]</option>
                  <option value="Bedspacer">Undergraduate</option>
                  <option value="Bedspacer">Others [Master's Degree]</option>
            </select>
            <br><br>

            </div>

            <div id="divHideViewAll">


                  <?php

                  include 'form_divViewAllRecords.php';

                  ?>


            </div>

<!-- <input disabled id="tryJavascript1" type="text" name="tryJavascript1" class="tryJavascript1 hhhp_textinput" style="border:0;background-color: transparent;text-align: center;font-size: 20px;"
        > -->
</form>
