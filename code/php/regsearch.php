<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style><?php include '../css/details.css' ?></style>
<style><?php include '../css/res.css' ?></style>

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
			</ul>
			<label for="nav-toggle" class="icon-burger">
				<div class="line"></div>
				<div class="line"></div>
				<div class="line"></div>
			</label>
		</nav>



    <?php
        $u="";
        $u=$_POST['u'];
        $v="";
        $v=$_POST['v'];
        $servername = "localhost:3308";
	    $username = "root";
	    $password = "";
	    $dbname = "corona";
        $conn = new mysqli($servername, $username, $password, $dbname);


       if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
       }
       $sql="SELECT * FROM registration WHERE Phone_No='$u' AND Pin_Code='$v'";
       $result=$conn->query($sql);
       if ($result->num_rows > 0) 
       {
         ?>
         <div class="container2">
          <div class="watermark">
         
          
           <div class="title">
          <?php
        echo "<u>Your Booking Details:-<br><br></u>";
        ?>
        </div>
    
        
        <?php
        while($row = $result->fetch_assoc()) {

          echo "<b>First Name: </b>".$row["First_name"]."<br>"."<b>Last Name:</b>".$row["Last_name"]."<br>"."<b>Preffered Date of Vaccination:-</b>"
         
          .$row["Preferred_Date"]."<br>"."<b>Date Of Birth:-</b>".$row["Date_of_Birth"]."<br>"."<b>Time Slot:-</b>".$row["Time_Slot"]."<br>"."<b>Phone Number:-</b>".$row["Phone_No"]."<br>"."<b>State:-</b>".$row["Indian_State"]."<br>"
          
          ."<b>Travelled To a COVID Affected Area:-</b>".$row["Covid_Affected"]."<br>"."<b>E-mail:-</b>".$row["Email"]."<br>"."<b>Gender:-</b>".$row["Gender"]."<br>";
        }
        ?>
        </div>
      </div>
        
        <?php
      }	
      
      else {
        ?>
        <script>
          alert("Incorrect Phone Number or Pin Code");
          location="../html/regsearch.html";
        </script>
  
<?php
        }

?>

</body>

</html>