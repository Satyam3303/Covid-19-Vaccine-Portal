<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    $code="";
    $code=$_POST['codeno'];
    $ans="";
    $ans=$_POST['passans'];
	$servername = "localhost:3308";
	$username = "root";
	$password = "";
	$dbname = "corona";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Check connection
	if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
  }
  $sql="SELECT * FROM doctor WHERE ID_Code='$code' AND Passcode='$ans'";
  $result=$conn->query($sql);
  if ($result->num_rows > 0) 
  {
      ?>

<form action="../php/timeslots.php" method="post">
        
        <h1>Checking Form</h1>
    </div><br>
    <div class="user-details">

    Preferred Date of Vaccination:	

					<input type="date" name="pre" required="required"><br><br>
					<label for="timeslot">Choose a Time Slot:</label>

        <select name="ts" id="ts" required="required">
	<option value="" selected disabled="disabled">--Choose A Time Slot--</option>
    <option value="9am-12pm">9am - 12pm</option>
    <option value="1pm-3pm">1pm - 3pm</option>
    <option value="4pm-6pm">4pm - 6pm</option>
    
  </select>


        <input type="submit" name="sub1"><br>
</form>


    <?php
  }


  else{

    ?>
    <script>
      alert("Incorrect ID Code or Password");
      location="../html/Admin.html";
    </script>

<?php
  }
    ?>

    
</body>
</html>