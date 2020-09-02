<?php
session_start();
error_reporting(0);

$_SESSION['page'] = $_SESSION['TotalNumberOfHouseHoldHead'];

require '../../database_connection.php';

if($_SERVER['REQUEST_METHOD']=='POST'){


			switch ($_POST['btnSubmit1']) {
				case 'Previous':
					// echo "PREV";
					if ($_SESSION['page'] == 0) {

					}else{
						if ($_SESSION['page'] == 1) {

						}else{
							$page=$_SESSION['page']-1;
							$_SESSION['page'] = $page;
							echo "<script>window.location.replace('index.html');</script>";
						}
					}

					break;
				case 'Next':
					// echo "NEXT";

						$page = $_SESSION['page'];
						$page1 = ($page * 5) - 5;

						$sql = "SELECT HouseHoldNumber,HouseHoldHeadIDNumber,HouseHoldHeadPurok,HouseHoldHeadOccupation,HouseHoldHeadCivilStatus,HouseHoldHeadBirthdate,HouseHoldHeadAge,HouseHoldHeadMonthsOld,HouseHoldHeadFullname,HouseHoldHeadMonthlyIncome,HouseHoldHeadYearsInTheBaranggay,HouseHoldHeadStatusOfResidency,HouseHoldHeadHighestEducationalAttainment,HouseHoldHeadCitizenship,Baranggay FROM tbl_householdheadprofile ORDER BY HouseHoldNumber ASC LIMIT $page1,5";
						$result = $con -> query($sql);

						if ($result -> num_rows > 0) {
							$page=$_SESSION['page']+1;
							$_SESSION['page'] = $page;
							echo "<script>window.location.replace('index.html');</script>";
						}elseif ($result -> num_rows < 0){
							$page = $page;
							$_SESSION['page'] = $page;
							echo "</table><center>-- there is no more data --</center>";
						}else{
							$page = $page;
							$_SESSION['page'] = $page;
							// echo "</table><center>-- there is no more data --</center>";
						}


					break;

					case 'PageSearch':
						// echo "Page Search Number: ".$_POST['txtPageSearch'];

						$page = $_POST['txtPageSearch'];
						$page1 = ($page * 5) - 5;

						if ((intval($page1)) == -5) {
							echo "Full name";


			$txtPageSearch = $_POST['txtPageSearch'];

			$sql = "SELECT HouseHoldNumber,HouseHoldHeadIDNumber,HouseHoldHeadPurok,HouseHoldHeadOccupation,HouseHoldHeadCivilStatus,HouseHoldHeadBirthdate,HouseHoldHeadAge,HouseHoldHeadMonthsOld,HouseHoldHeadFullname,HouseHoldHeadMonthlyIncome,HouseHoldHeadYearsInTheBaranggay,HouseHoldHeadStatusOfResidency,HouseHoldHeadHighestEducationalAttainment,HouseHoldHeadCitizenship,Baranggay FROM tbl_householdheadprofile WHERE HouseHoldHeadIDNumber = $txtPageSearch ORDER BY HouseHoldNumber ASC LIMIT $page1,5";
			$result = $con -> query($sql);
						}else{
							echo "ID Number";
							$_SESSION['page'] = $_POST['txtPageSearch'];

							$page = $_SESSION['page'];
			$page1 = ($page * 5) - 5;


			$sql = "SELECT HouseHoldNumber,HouseHoldHeadIDNumber,HouseHoldHeadPurok,HouseHoldHeadOccupation,HouseHoldHeadCivilStatus,HouseHoldHeadBirthdate,HouseHoldHeadAge,HouseHoldHeadMonthsOld,HouseHoldHeadFullname,HouseHoldHeadMonthlyIncome,HouseHoldHeadYearsInTheBaranggay,HouseHoldHeadStatusOfResidency,HouseHoldHeadHighestEducationalAttainment,HouseHoldHeadCitizenship,Baranggay FROM tbl_householdheadprofile ORDER BY HouseHoldNumber ASC LIMIT $page1,5";
			$result = $con -> query($sql);
						}




						break;

				default:
					$page = 1;
					$_SESSION['page'] = $page;
					// echo "<script>window.location.replace('index.php');</script>";
					break;

		}

	}


?>

<style type="text/css">

	.btnPrev,.btnNext{
		border-radius: 20px;
		background: transparent;
		border-color: black;
		font-size: 20px;
	}
	.btnPrev:hover,.btnNext:hover{
		border-radius: 20px;
		background: black;
		border-color: yellow;
		color: white;
		cursor: hand;
	}

</style>

<form action="?" method="POST">


<div class="divViewAll" id="divViewAll" style="max-width: 9000px;">
	<hr class="hhhp_hr"/>
	<center><h1>Records of all Barangay Inhabitants</h1><h3 style="color: #243546;font-weight: bolder;">(You may want to scroll left or right to view all columns)</h3></center>
	<hr class="hhhp_hr"/>

	<div style="text-align: right; ">
	</div>


	<table style="font-size: 15px;width: 2000px;text-align: center;" >
		<h3><center>House-Hold Head's Records</center> <br> <font size="3px;">Enter Fullname or Page number:<br> <input type="text" name="txtPageSearch" id="txtPageSearch" class="txtPageSearch"  style="width: 200px">
	<button name="btnSubmit" id="btnPageSearch" class="btnPageSearch" value="PageSearch">Go</button>

		<!-- <br> <font size="3px;">Enter page number: <input type="number" name="txtPageSearch" id="txtPageSearch" class="txtPageSearch" value="Enter page number" style="width: 80px">
			<button name="btnSubmit" id="btnPageSearch" class="btnPageSearch" value="PageSearch">Go</button> -->

</font></h3>
		<th>Number</th>
		<th>ID Number</th>
		<th>Purok</th>
		<th>Occupation</th>
		<th>Civil<br>Status</th>
		<th>Birthdate</th>
		<th>Age</th>
		<th>Months<br>Old</th>
		<th>Full<br>Name </th>
		<th>Monthly<br>Income </th>
		<th>Yrs. in<br>the Brgy. </th>
		<th>Status of Residency </th>
		<th>Education </th>
		<th>Citizenship </th>
		<th>Barangay </th>

		<?php
			// $page = 10;
			$page = $_SESSION['page'];
			$page1 = ($page * 5) - 5;


			$sql = "SELECT HouseHoldNumber,HouseHoldHeadIDNumber,HouseHoldHeadPurok,HouseHoldHeadOccupation,HouseHoldHeadCivilStatus,HouseHoldHeadBirthdate,HouseHoldHeadAge,HouseHoldHeadMonthsOld,HouseHoldHeadFullname,HouseHoldHeadMonthlyIncome,HouseHoldHeadYearsInTheBaranggay,HouseHoldHeadStatusOfResidency,HouseHoldHeadHighestEducationalAttainment,HouseHoldHeadCitizenship,Baranggay FROM tbl_householdheadprofile ORDER BY HouseHoldNumber ASC LIMIT $page1,5";
			$result = $con -> query($sql);

			if ($result -> num_rows > 0) {
				while ($row = $result -> fetch_assoc()) {
					echo "<tr>
					<td>".$row["HouseHoldNumber"]."</td>
					<td>".$row["HouseHoldHeadIDNumber"]."</td>
					<td>".$row["HouseHoldHeadPurok"]."</td>
					<td>".$row["HouseHoldHeadOccupation"]."</td>
					<td>".$row["HouseHoldHeadCivilStatus"]."</td>
					<td>".$row["HouseHoldHeadBirthdate"]."</td>
					<td>".$row["HouseHoldHeadAge"]."</td>
					<td>".$row["HouseHoldHeadMonthsOld"]."</td>
					<td>".$row["HouseHoldHeadFullname"]."</td>
					<td>".$row["HouseHoldHeadMonthlyIncome"]."</td>
					<td>".$row["HouseHoldHeadYearsInTheBaranggay"]."</td>
					<td>".$row["HouseHoldHeadStatusOfResidency"]."</td>
					<td>".$row["HouseHoldHeadHighestEducationalAttainment"]."</td>
					<td>".$row["HouseHoldHeadCitizenship"]."</td>
					<td>".$row["Baranggay"]."</td>

					</tr>";
				}
			}else{
				echo "</table><center>-- there is no more data --</center>";
			}

		  ?>

	<table style="font-size: 15px;width: 1000px;text-align: center;">


			<center>
	<div style="padding-bottom: 75px;padding-top: 25px;">
	<button name="btnSubmit" class="btnPrev" id="btnPrev" value="Previous" style="padding-top: 2px;padding-bottom: 2px;padding-left: 6px;padding-right: 6px;">Prev</button>
	<font size="5px;" style="padding: 5px;"><?php  "Page number: ".$_SESSION['page']; ?></font>

	<button name="btnSubmit" class="btnNext" id="btnNext" value="Next" style="padding-top: 2px;padding-bottom: 2px;padding-left: 6px;padding-right: 6px;">Next</button></div></center>

		<h3 style="margin-top: -25px;">House-Hold Spouse's Records</h3>
		<th>ID Number</th>
		<th>No. of Children</th>
		<th>No. of Borders</th>
		<th>Full Name</th>
		<th>Occupation</th>
		<th>Age</th>
		<th>Education</th>
		<th>Barangay </th>
	</table>

</div>
</form>
