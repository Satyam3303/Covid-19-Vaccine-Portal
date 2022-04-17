<html>

<body>
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
        echo "Your Booking Details:-<br>";
        ?>
    
       
            <th>First Name</th>
            <th>Last Name</th>
            <th>Preferred Date</th>
            <th>Date of Birth</th>
            <th>Phone no.</th>
            <th>State</th>
            <th>Travelled in Covid Affectid Zones</th>
            <th>Email</th>
            <th>Gender</th>
        
        <?php
        while($row = $result->fetch_assoc()) {
          echo "First Name".$row["First_name"]."<br>"."Last Name".$row["Last_name"]."<br>"."Preffered Date of Vaccination".$row["Preferred_Date"]."</td><td>".$row["Date_of_Birth"]."</td><td>".$row["Phone_No"]."</td><td>".$row["Indian_State"]."</td><td>".$row["Covid_Affected"]."</td><td>".$row["Email"]."</td></tr>"."</td><td>".$row["Gender"]."<br>";
        }
        
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