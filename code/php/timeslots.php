<!DOCTYPE html>
<html lang="en">

<head>

<style><?php include '../css/Register.css' ?></style>
</head>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost:3308", "root", "", "corona");
 ?>
<div class="container">
<?php
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$times ="";
$times=$_POST['ts'];
$dates="";
$dates=$_POST['pre'];

// Attempt select query execution
$sql = "SELECT * FROM registration WHERE Time_Slot='$times' AND Preferred_Date='$dates'";


if($result = mysqli_query($link, $sql)){


    if(mysqli_num_rows($result) > 0){
       
while($row = mysqli_fetch_array($result)){
            
                echo "<b>First Name : </b>" . $row['First_name'] . "<br>";
                echo "<b>Last Name : </b>" . $row['Last_name'] . "<br>";
                echo "<b>Date Of Vaccination : </b>" . $row['Preferred_Date'] . "<br>";
                echo "<b>Date Of Birth : </b>" . $row['Date_of_Birth'] . "<br>";
                echo "<b>Time Slot : </b>" . $row['Time_Slot'] . "<br>";
                echo "<b>Phone Number : </b>" . $row['Phone_No'] . "<br>";
                echo "<b>State : </b>" . $row['Indian_State'] . "<br>";
                echo "<b>Travelled Through COVID States : </b>" . $row['Covid_Affected'] . "<br>";
                echo "<b>E-mail : </b>" . $row['Email'] . "<br>";
                echo "<b>Gender : </b>" . $row['Gender'] . "<br>";

                echo"<hr>";
            
        }
       
        // Free result set
        mysqli_free_result($result);

        
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
</div>
    
</body>
</html>