<html>

<head>

	<style>
		<?php include '../css/Register.css' ?>
		<?php include '../css/res.css' ?>
	</style>
</head>

<body>


<nav>
				<input id="nav-toggle" type="checkbox">
				<div class="logo"><strong>Covid-19</strong></div>
				<ul class="links">
					<li><a href="../html/home.html">Home</a></li>
					<li><a href="../html/vaccine.html">Vaccination</a></li>
					<li><a href="../html/symptoms.html">Symptoms</a></li>
					<li><a href="#contact">Contact</a></li>
					<li><a href="../html/Admin.html">Admin Console</a></li>
				</ul>
				<label for="nav-toggle" class="icon-burger">
					<div class="line"></div>
					<div class="line"></div>
					<div class="line"></div>
				</label>
			</nav>


	<?php
	$servername = "localhost:3306";
	$username = "root";
	$password = "";
	$dbname = "corona";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} ?>

	<div class="form-container2">
		<fieldset>
			<legend>Booking Confirmation</legend>

			<?php
			$fn = $_POST['fname'];
			$ln = $_POST['lname'];
			$pref = $_POST['pre'];
			$dab = $_POST['dob'];
			$ts = $_POST['ts'];
			$num = $_POST['num'];
			$states = $_POST['state'];
			$covid = $_POST['covidaf'];
			$e = $_POST['email'];
			$gend = $_POST['gen'];
			$pins = $_POST['pin'];

			//Insert
			$sql = "INSERT INTO Registration (First_Name, Last_Name, Preferred_Date,Date_of_Birth,Time_Slot,Phone_No ,Indian_State, Covid_Affected ,Email,Gender,Pin_Code)
	   VALUES ('$fn', '$ln', '$pref','$dab','$ts','$num','$states','$covid','$e','$gend','$pins')";

			if ($conn->query($sql) === TRUE) {
				echo "Vaccination Dose Booked successfully ✅<br>";
				echo "One Milestone Achieved for Covid Free India!<br>";
			} else {
				echo "⚠️This Phone Number or email is already Registered!";
			?>
				<a href="../html/Register.html">
					<button class="button2">
						Go Back to Registration Page
					</button>
				</a>

			<?php
			}

			$conn->close();
			?>
	</div>
	</fieldset>

</body>

</html>