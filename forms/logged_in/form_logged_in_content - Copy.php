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

      }

      .hhhp_crud{
            float: right;position: fixed;bottom: 0;right: 0;margin-bottom: 50px;

      }



      .form_autoresize{
            max-width: 100%!important;
            padding: 10px!important;
            align-items: center!important;
            align-content: center!important;
            text-align: center!important;
      }

      .form_subcontents_many, .hhhp_textinput{
            display: flex!important;
            /*flex-wrap: wrap;
            flex-grow: 3;*/
            justify-content: space-around!important;
            width: 100%!important;
            margin:auto!important;
            padding: 15px;
            /*align-items: center;
            align-content: center;*/
            text-align: center!important;
            /*background-color: #2ecc71;*/


      }

      .form_subcontents_one, .hhhp_textinput{
            display: block!important;
            width: 100%!important;
            padding: 15px;
            /*background-color: #77dd77;        */

      }

      .hhhp_label{
            margin-left: 50px;
            /*align-items: center;
            align-content: center;*/      
            text-align: center;
      }

      .hhhp_textinput{
      padding: 5px;
      font-size: 15px;
      font-weight: bold;
      text-align: center;
      background-color: white;
      color: black;border-radius: 20px; 

      }

      .hhhp_textinput:hover{
      padding: 5px;
      font-size: 15px;
      font-weight: bold;
      text-align: center;
      background-color: gray;
      color: black;border-radius: 20px;   
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

</style>
<br><br>


        
<form method="POST" action="?" name="form_HouseHoldHeadProfile2" class="form_HouseHoldHeadProfile" id="form_HouseHoldHeadProfile" data-ajax="false" enctype="multipart/form-data">

    
    <div class="form_autoresize" >


<div class="hhhp_crud" id="hhhp_crud">
  <button name="hhhp_Add" class="hhhp_Add">Add Record</button>
  <button name="hhhp_Delete" class="hhhp_Delete">Delete Record</button>
  <button name="hhhp_HouseHoldSpouseEducation" class="hhhp_Edit">Edit Record</button></div>
  <br><br>
  <input disabled type="text" name="hhhp_TotalNumberOfHouseHoldHead" class="hhhp_TotalNumberOfHouseHoldHead" value="Total Number Of House-Hold Head: ">
  <!-- <button disabled name="hhhp_ProfilePicture" value="Upload"><img name="hhhp_ProfilePicture_img" src="images/bg_login.png"  >Name
  </button> -->
  <br><br><br>


      <div class="img_HouseHoldHead_ProfilePicture">
        <img class="img_upload"  src="../../images/logo_sample.png">
      </div>
      
      <br><br>

      <hr class="hhhp_hr"/>
        

      <label class="hhhp_label">House-Hold Number: </label>
  <input type="number" name="hhhp_HouseHoldNumber" class="hhhp_HouseHoldNumber hhhp_textinput">

  <!-- <button value="Upload" style="float: right;width: 100px;height: 100px;padding: 0;border: 0;cursor: pointer;line-height: 1;border: -1px solid transparent;font-weight: bolder;"><img name="hhhp_imgUpload" src="images/logo_sample.png"  style="float: right;margin-left: 15px;">Upload</button> -->
    <button style="float: right;">
    <div class="img_HouseHoldHead">
          <img class="img_upload"  src="images/esme_poisonvine.jpg">
    </div>Upload</button>


  <br> <!-- 1*2 -->
  <br>

      
        
    


  <label class="hhhp_label">House-Hold Head ID Number: </label>
  <input type="number" name="hhhp_HouseHoldIDNumber" class=" hhhp_HouseHoldIDNumber hhhp_textinput">

  <label class="hhhp_label">Purok: </label>
  <input type="text" name="hhhp_Purok" class="hhhp_Purok hhhp_textinput">



  <label class="hhhp_label">Occupation: </label>
  <!-- <input type="text" name="hhhp_Occupation" class="hhhp_Occupation hhhp_textinput"> -->
  <select style="width: 120px;">
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


  


  <br> <!-- 2*3 -->
  <br>


  <label class="hhhp_label">House-Hold Head Fullname: </label>
  <input type="text" name="hhhp_HouseHoldHeadFullName" class="hhhp_HouseHoldHeadFullName hhhp_textinput">



  <label class="hhhp_label">Civil Status: </label>
  
  <select style="width: 120px;">
    <option value="Single">Single</option>
    <option value="Married">Married</option>
    <option value="Widowed">Widowed</option>
    <option value="Divorced">Divorced</option>
  </select>

  <br> <!-- 4*5 -->
  <br>

  <label class="hhhp_label"> House-Hold Address: </label>
  <input type="text" name="hhhp_HouseHoldAddress" class="hhhp_HouseHoldAddress hhhp_textinput">

  <br> <!-- 5*6 -->
  <br><br>

  <label class="hhhp_label">Birthdate: </label>
  <input type="date" name="hhhp_Birthdate" class="hhhp_Birthdate hhhp_textinput">

  <label class="hhhp_label">Age: </label>
  <input disabled type="number" name="hhhp_Age" class="hhhp_Age hhhp_textinput">

  <label class="hhhp_label">Months-Old: </label>
  <input disabled type="number" name="hhhp_MonthsOld" class="hhhp_MonthsOld hhhp_textinput">

  <br> <!-- 6*7 -->
  <br>


  <label class="hhhp_label">Monthly Income: </label>
  <select style="width: 120px;">
    <option value="Below 5,000">Below 5,000</option>
    <option value="5,001 - 10,000">5,001 - 10,000</option>
    <option value="10,001 - 15,000">10,001 - 15,000</option>
    <option value="15,001 and above">15,001 and above</option>
  </select>

  <label class="hhhp_label">Years In The Baranggay: </label>
  <input type="number" name="hhhp_YearsInTheBaranggay" class="hhhp_YearsInTheBaranggay hhhp_textinput">

  <label class="hhhp_label">Status Of Residency: </label>
  <select style="width: 120px;" >
    <option value="House Owner">House Owner</option>
    <option value="House Rental">House Rental</option>
    <option value="Bedspacer">Bedspacer</option>
  </select>

  <br> <!-- 7*8 -->
  <br>

  <label class="hhhp_label">Highest Educational Attainment: </label>
  <select style="width: 120px;" >
    <option value="House Owner">Primary Education [Kinder to Elementary]</option>
    <option value="House Rental">Secondary Education [High School]</option>
    <option value="Bedspacer">Tertiary Education [College]</option>
    <option value="Bedspacer">Undergraduate</option>
    <option value="Bedspacer">Others [Master's Degree]</option>
  </select>

  <label class="hhhp_label">Citizenship: </label>
  <select style="width: 120px;" >
    <option value="Bedspacer">Filipino Citizen</option>
    <option value="Bedspacer">Non-Filipino Citizen</option>
  </select>

  <hr class="hhhp_hr"/>

  <label class="hhhp_label">House-Hold Spouse ID Number: </label>
  <input type="number" name="hhhp_HouseHoldSpouseIDNumber" class="hhhp_HouseHoldSpouseIDNumber hhhp_textinput">

  <!-- <button value="Upload" style="float: right;width: 100px;height: 100px;padding: 0;border: 0;cursor: pointer;line-height: 1;border: -1px solid transparent;font-weight: bolder;"><img name="hhhp_imgUpload" src="images/logo_sample.png" width="100px" height="100px" style="float: right;margin-left: 15px;">Upload</button> -->

  <button style="float: right;">
    <div class="img_HouseHoldHeadSpouse">
          <img class="img_upload"  src="images/esme_poisonvine.jpg">
    </div>Upload</button>

  <label class="hhhp_label">Number Of Children: </label>
  <input type="text" name="hhhp_HouseHoldNumber" class="hhhp_HouseHoldNumber hhhp_textinput">

  <label class="hhhp_label">Number Of Borders: </label>
  <input type="text" name="hhhp_NumberOfBorders" class="hhhp_NumberOfBorders hhhp_textinput">

  <br> <!-- 8*9 -->
  <br>

  <label class="hhhp_label">House-Hold Spouse Fullname: </label>
  <input type="text" name="hhhp_HouseHoldSpouseFullName" class="hhhp_HouseHoldSpouseFullName hhhp_textinput">

  <label class="hhhp_label">House-Hold Spouse Occupation: </label>
  <input type="text" name="hhhp_HouseHoldSpouseOccupation" class="hhhp_HouseHoldSpouseOccupation hhhp_textinput">

  <br> <!-- 9*10 -->  

  <br>

  <label class="hhhp_label">House-Hold Spouse Age: </label>
  <input type="text" name="hhhp_HouseHoldSpouseAge" class="hhhp_HouseHoldSpouseAge hhhp_textinput">

  <label class="hhhp_label">House-Hold Spouse Education: </label>
  <input type="text" name="hhhp_HouseHoldSpouseEducation" class="hhhp_HouseHoldSpouseEducation hhhp_textinput">

  <br>
  <br>

  <button value="Submit" style="float: right;width: 180px; height: 60px; position: relative;font-size: 25px;padding: 5px;font-weight: bolder;">Submit</button>



</div>

        

        <div class="form_subcontents_one">
            
            
        </div>

      

        <div class="form_subcontents_many">
           
        </div>


        <br><br><br><br>

    </div>

<!-- <input disabled id="tryJavascript1" type="text" name="tryJavascript1" class="tryJavascript1 hhhp_textinput" style="border:0;background-color: transparent;text-align: center;font-size: 20px;" 
        > -->
</form>

        <!-- <i ?php require 'form_HouseHoldMemberProfileQuestionnaire.php'; ?> -->

            
</form>