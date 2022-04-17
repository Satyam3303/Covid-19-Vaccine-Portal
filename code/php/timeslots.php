<!DOCTYPE html>
<html lang="en">
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost:3308", "root", "", "corona");
 
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
            
                echo "First Name" . $row['First_name'] . "<br>";
                echo "Last Name" . $row['Last_name'] . "<br>";
                echo "Date Of Vaccination" . $row['Preferred_Date'] . "<br>";
                echo "Date Of Birth" . $row['Date_of_Birth'] . "<br>";
                echo "Time Slot" . $row['Time_Slot'] . "<br>";
                echo "Phone Number" . $row['Phone_No'] . "<br>";
                echo "State" . $row['Indian_State'] . "<br>";
                echo "Travelled Through COVID States" . $row['Covid_Affected'] . "<br>";
                echo "E-mail" . $row['Email'] . "<br>";
                echo "Gender" . $row['Gender'] . "<br>";

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
    
</body>
</html>